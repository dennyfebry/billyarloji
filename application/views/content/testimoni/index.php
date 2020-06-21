<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-comment icon-gradient bg-mean-fruit">
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
                            <a class="btn btn-primary" href="<?php echo site_url('testimoni/add') ?>"><i class="fa fa-plus"></i> Add</a>
                        </div>
                    </div>
                </div>
                <div class="d-block card-footer">
                    <div class="table-responsive">
                        <table class="mb-0 table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Deskripsi Testimoni</th>
                                    <th>Foto</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                    <th>Updated By</th>
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
                                        <td><?php echo $row->title ?></td>
                                        <td>
                                            <!-- <div class="content<?= $no ?>"><?php echo $row->description ?></div>
                                            <a href="#" class="show_hide<?= $no ?>" data-content="toggle-text">Read More</a> -->
                                            <div class="content<?= $no; ?>"><?php echo $row->description ?></div>
                                            <a href="#" class="show_hide<?= $no; ?>" data-content="toggle-text">Read More</a>
                                        </td>
                                        <td><img src="<?php echo base_url('upload/testimoni/' . $row->images . ''); ?>" alt="" height="100px" width="100px"></td>
                                        <td><?php echo $row->created_date ?></td>
                                        <td><?php echo $row->updated_date ?></td>
                                        <td><?php echo $row->name ?></td>
                                        <td><a class="mb-2 mr-2 btn btn-warning" href="<?php echo base_url(); ?>testimoni/edit/<?php echo $row->id; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                            <a class="mb-2 mr-2 btn btn-danger" href="#deleteTestimoni<?php echo $row->id; ?>" data-toggle="modal"><i class=" fa fa-trash"></i> Delete</a></td>
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
        <?php
        $no = 1;
        foreach ($atribute as $row) {
        ?>
            var defaultHeight = 50;
            var text<?= $no; ?> = $(".content<?= $no; ?>");
            // var textHeight = text<?= $no; ?>[0].scrollHeight;
            var textHeight = 500;
            var show_hide = $(".show_hide<?= $no; ?>");
            text<?= $no; ?>.css({
                "max-height": defaultHeight,
                "overflow": "hidden"
            });
            $(".show_hide<?= $no; ?>").on("click", function() {
                var newHeight = 0;
                if (text<?= $no; ?>.hasClass("active")) {
                    newHeight = defaultHeight;
                    text<?= $no; ?>.removeClass("active");
                    $(".show_hide<?= $no; ?>").html("Read More");
                } else {
                    newHeight = textHeight;
                    text<?= $no; ?>.addClass("active");
                    $(".show_hide<?= $no; ?>").html("Read Less");
                }
                text<?= $no; ?>.animate({
                    "max-height": newHeight
                }, 500);
                console.log(newHeight);
            });
        <?php
            $no++;
        }
        ?>
    });
</script>