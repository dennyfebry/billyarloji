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
                            <a class="btn btn-primary" href="<?php echo site_url('slider/add') ?>">Add +</a>
                        </div>
                    </div>
                </div>
                <div class="d-block card-footer">
                    <div class="table-responsive">
                        <table class="mb-0 table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Images</th>
                                    <th>Updated Date</th>
                                    <th>Updated By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($slider as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $row->title ?></td>
                                        <td><?php echo $row->description ?></td>
                                        <td><img src="<?php echo base_url('upload/slider/' . $row->images . ''); ?>" alt="" height="200px"></td>
                                        <td><?php echo $row->updated_date ?></td>
                                        <td><?php echo $row->name ?></td>
                                        <td><?php if ($row->status == '1') {
                                                echo 'Active';
                                            } else {
                                                echo 'Draft';
                                            } ?></td>
                                        <td><a href="<?php echo base_url(); ?>index.php/slider/edit/<?php echo $row->id; ?>">Edit</a> |
                                            <a href="<?php echo base_url(); ?>index.php/slider/delete/<?php echo $row->id; ?>">Delete</a></td>
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