<article>
    <?php
    $id = "";
    $name = "";
    $username = "";
    $password = "";
    $role = "";
    $last_login = "";
    if ($content == "Edit") {
        foreach ($sql->result() as $row) {
            $id = $row->id;
            $name = $row->name;
            $username = $row->username;
            $password = $row->password;
            $role = $row->role;
            $last_login = $row->last_login;
        }
    }
    ?>
    <h1>Admin</h1>
    <h5 style="color:#777;"><a style="color:#777;" href="<?php echo site_url('content/c_superadmin') ?>">Admin</a> / <?php echo $content; ?></h5>
    <?php echo validation_errors(); ?>
    <?php echo form_open('content/c_superadmin/validation'); ?>
    <input type="hidden" name="content" value="<?php echo $content; ?>">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div>
        <label for="">name</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
    </div>
    <div>
        <label for="">username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <?php
    if ($content == "Edit") { ?>
        <input type="hidden" name="password" value="<?php echo $password; ?>">
    <?php } else { ?>
        <div>
            <label for="">password</label>
            <input type="password" name="password" value="<?php echo $password; ?>">
        </div>
    <?php  } ?>
    <div>
        <label for="">role</label>
        <select name="role">
            <option value="2" <?php if ($role == 2) echo 'selected'; ?>>Admin</option>
            <option value="1" <?php if ($role == 1) echo 'selected'; ?>>Super Admin</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
    </form>
</article>