<?php
$id = "";
$name = "";
$username = "";
$password = "";
$role = "";
$last_login = "";
if ($content == "Edit") {
    $id = $account->id;
    $name = $account->name;
    $username = $account->username;
    $password = $account->password;
    $role = $account->role;
    $last_login = $account->last_login;
}
?>
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
                        <a style="color:#777;" href="<?php echo site_url('superadmin') ?>">Admin</a> / <?php echo $content; ?>
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
                    </div>
                </div>
                <div class="card-body">
                    <?php if ($content == "Edit") { ?>
                        <form class="needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>
                        <?php } else { ?>
                            <form class="needs-validation" action="<?php echo site_url('superadmin/add') ?>" method="post" enctype="multipart/form-data" novalidate>
                            <?php } ?>

                            <div class="form-row">
                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="mb-2 mr-2 badge badge-success">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>

                                <input type="hidden" name="content" value="<?php echo $content; ?>">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="hidden" name="last_login" value="<?php echo $last_login; ?>">

                                <div class="col-md-12 mb-3">
                                    <label for="Name">Nama</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nama" value="<?php echo $name; ?>" required>
                                    <?php echo form_error('name') ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the name.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Username">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
                                    <?php echo form_error('username') ?>
                                    <div class="invalid-feedback">
                                        Please fill in the username.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <?php
                                    if ($content == "Edit") { ?>
                                        <input type="hidden" name="password" value="<?php echo $password; ?>">
                                    <?php } else { ?>
                                        <label for="Password">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $password; ?>" required>
                                        <?php echo form_error('password') ?>
                                        <div class="invalid-feedback">
                                            Please fill in the password.
                                        </div>
                                    <?php  } ?>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Role">Role</label>
                                    <select class="form-control" name="role">\
                                        <option value="" selected disabled>-- Select Role --</option>
                                        <option value="2" <?php if ($role == 2) echo 'selected'; ?>>Admin</option>
                                        <option value="1" <?php if ($role == 1) echo 'selected'; ?>>Super Admin</option>
                                    </select>
                                    <?php echo form_error('role') ?>
                                    <div class="invalid-feedback">
                                        Please choose a role.
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit form">
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>