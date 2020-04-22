<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-users icon-gradient bg-mean-fruit">
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
                            <a class="btn btn-primary" href="<?php echo site_url('superadmin/add') ?>">Add +</a>
                        </div>
                    </div>
                </div>
                <div class="d-block card-footer">
                    <div class="table-responsive">
                        <table class="mb-0 table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Last Login</th>
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
                                        <td><?php echo $row->name ?></td>
                                        <td><?php echo $row->username ?></td>
                                        <td><?php
                                            if ($row->role == 1) {
                                                echo "Super Admin";
                                            } else {
                                                echo " Admin";
                                            } ?></td>
                                        <td><?php echo $row->last_login ?></td>
                                        <td><a class="mb-2 mr-2 btn btn-warning" href="<?php echo base_url(); ?>index.php/superadmin/edit/<?php echo $row->id; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                            <a class="mb-2 mr-2 btn btn-danger" href="#deleteAdmin<?php echo $row->id; ?>" data-toggle="modal"><i class=" fa fa-trash"></i> Delete</a></td>
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