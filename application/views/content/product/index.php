<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-mean-fruit">
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
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                            <a class="btn btn-primary" href="<?php echo site_url('product/add') ?>">Add +</a>
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
                                    <th>Name</th>
                                    <th>Model</th>
                                    <th>Type</th>
                                    <th>Diameter</th>
                                    <th>Movement</th>
                                    <th>Material</th>
                                    <th>Condition</th>
                                    <th>Completeness</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Images</th>
                                    <th>URL/Link</th>
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
                                        <td>Rp <?php echo number_format($row->price, 2, ',', '.') ?></td>
                                        <td><?php echo $row->discount ?>%</td>
                                        <td><img src="<?php echo base_url('upload/product/' . $row->images . ''); ?>" alt="" height="200px"> <br><br>
                                            <img src="<?php echo base_url('upload/product/' . $row->images_front . ''); ?>" alt="" height="46px">
                                            <img src="<?php echo base_url('upload/product/' . $row->images_side . ''); ?>" alt="" height="46px">
                                            <img src="<?php echo base_url('upload/product/' . $row->images_top . ''); ?>" alt="" height="46px">
                                            <img src="<?php echo base_url('upload/product/' . $row->images_detail . ''); ?>" alt="" height="46px"></td>
                                        <td><a href="<?php echo $row->url ?>">Here</a></td>
                                        <td><?php echo $row->updated_date ?></td>
                                        <td><?php echo $row->name ?></td>
                                        <td><?php if ($row->status == '1') {
                                                echo 'Active';
                                            } else {
                                                echo 'Draft';
                                            } ?></td>
                                        <td><a class="mb-2 mr-2 btn btn-warning" href="<?php echo base_url(); ?>index.php/product/edit/<?php echo $row->id; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>
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