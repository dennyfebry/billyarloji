<article>
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
    <h1>Admin</h1>
    <h5 style="color:#777;"><a style="color:#777;" href="<?php echo site_url('content/c_superadmin') ?>">Admin</a> / <?php echo $content; ?></h5>

    <?php if ($this->session->flashdata('success')) : ?>
        <div role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php // echo validation_errors(); 
    ?>
    <?php // echo form_open('content/c_superadmin/validation'); 
    ?>
    <?php if ($content == "Edit") {
    ?>
        <form action="" method="post" enctype="multipart/form-data">
        <?php } else { ?>
            <form action="<?php echo site_url('content/c_superadmin/add') ?>" method="post" enctype="multipart/form-data">
            <?php } ?>
            <input type="hidden" name="content" value="<?php echo $content; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="last_login" value="<?php echo $last_login; ?>">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $name; ?>">
                <?php echo form_error('name') ?>
            </div>
            <div>
                <label for="name">Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <?php echo form_error('username') ?>
            </div>
            <?php
            if ($content == "Edit") { ?>
                <input type="hidden" name="password" value="<?php echo $password; ?>">
            <?php } else { ?>
                <div>
                    <label for="name">Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>">
                    <?php echo form_error('password') ?>
                </div>
            <?php  } ?>
            <div>
                <label for="name">Role</label>
                <select name="role">
                    <option value="2" <?php if ($role == 2) echo 'selected'; ?>>Admin</option>
                    <option value="1" <?php if ($role == 1) echo 'selected'; ?>>Super Admin</option>
                </select>
                <?php echo form_error('role') ?>
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
            </form>
</article>