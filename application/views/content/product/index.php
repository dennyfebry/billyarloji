<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-cart icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div><?= $titlepage ?>
                    <div class="page-title-subheading">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header"><?= $titlepage ?>
                </div>
                <div class="card-header">
                    <div class="btn-actions-pane-left">
                        <div role="group" class="btn-group-sm btn-group">
                            <a class="btn btn-primary" href="<?php echo site_url('list_product/add') ?>"><i class="fa fa-plus"></i> Add</a>
                        </div>
                    </div>
                </div>
                <div class="d-block card-footer">
                    <div class="table-responsive">
                        <table class="mb-0 table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Nama</th>
                                    <th>Model</th>
                                    <th>Type</th>
                                    <th>Diameter</th>
                                    <th>Movement</th>
                                    <th>Material</th>
                                    <th>Kondisi</th>
                                    <th>Kelengkapan</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Harga Diskon</th>
                                    <th>Gambar</th>
                                    <th>Updated Date</th>
                                    <th>Updated By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($atribute as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $row->category ?></td>
                                        <td><?php echo $row->brand ?></td>
                                        <td><?php echo $row->name_product ?></td>
                                        <td><?php echo $row->model ?></td>
                                        <td><?php echo $row->type ?></td>
                                        <td><?php echo $row->diameter ?></td>
                                        <td><?php echo $row->movement ?></td>
                                        <td><?php echo $row->material ?></td>
                                        <td><?php echo $row->condition_product ?></td>
                                        <td><?php echo $row->completeness ?></td>
                                        <td>
                                            <div class="content"><?php echo $row->description ?></div>
                                            <a href="#" class="show_hide" data-content="toggle-text">Read More</a>
                                        </td>
                                        <td>Rp <?php echo number_format($row->price, 2, ',', '.') ?></td>
                                        <td>Rp <?php echo number_format($row->discount, 2, ',', '.') ?></td>
                                        <td><img src="<?php echo base_url('upload/product/' . $row->images . ''); ?>" alt="" height="200px"> <br><br>
                                            <img src="<?php echo base_url('upload/product/' . $row->images_front . ''); ?>" alt="" height="46px">
                                            <img src="<?php echo base_url('upload/product/' . $row->images_side . ''); ?>" alt="" height="46px">
                                            <img src="<?php echo base_url('upload/product/' . $row->images_top . ''); ?>" alt="" height="46px">
                                            <img src="<?php echo base_url('upload/product/' . $row->images_detail . ''); ?>" alt="" height="46px"></td>
                                        <td><?php echo $row->updated_date ?></td>
                                        <td><?php echo $row->name ?></td>
                                        <td><?php if ($row->status == '1') {
                                                echo 'Active';
                                            } else {
                                                echo 'Draft';
                                            } ?></td>
                                        <td><a class="mb-2 mr-2 btn btn-warning" href="<?php echo base_url(); ?>list_product/edit/<?php echo $row->id; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                            <a class="mb-2 mr-2 btn btn-danger" href="#deleteProduct<?php echo $row->id; ?>" data-toggle="modal"><i class=" fa fa-trash"></i> Delete</a></td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var defaultHeight = 220;
        var text = $(".content");
        var textHeight = text[0].scrollHeight;
        var show_hide = $(".show_hide");
        text.css({
            "max-height": defaultHeight,
            "overflow": "hidden"
        });
        $(".show_hide").on("click", function() {
            var newHeight = 0;
            if (text.hasClass("active")) {
                newHeight = defaultHeight;
                text.removeClass("active");
                $(".show_hide").html("Read More");
            } else {
                newHeight = textHeight;
                text.addClass("active");
                $(".show_hide").html("Read Less");
            }
            text.animate({
                "max-height": newHeight
            }, 500);
            console.log(newHeight);
        });
    });
</script>