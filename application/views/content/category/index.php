<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-network icon-gradient bg-mean-fruit">
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
                            <a class="btn btn-primary" href="<?php echo site_url('category/add') ?>"><i class="fa fa-plus"></i> Add</a>
                        </div>
                    </div>
                </div>
                <div class="d-block card-footer">
                    <div class="table-responsive">
                        <table class="mb-0 table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Menu</th>
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
                                        <td><?php echo $row->category ?></td>
                                        <td><?php echo $row->created_date ?></td>
                                        <td><?php echo $row->updated_date ?></td>
                                        <td><?php echo $row->name ?></td>
                                        <td><a class="mb-2 mr-2 btn btn-warning" href="<?php echo base_url(); ?>category/edit/<?php echo $row->id; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                            <a class="mb-2 mr-2 btn btn-danger" href="#deleteCategory<?php echo $row->id; ?>" data-toggle="modal"><i class=" fa fa-trash"></i> Delete</a></td>
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