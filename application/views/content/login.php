<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <?php
    if (isset($error_message)) {
        echo $error_message;
    }
    echo validation_errors();
    ?>
    <?php echo form_open('content/c_login/validation'); ?>
    <div>
        <label for="">username</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="">password</label>
        <input type="password" name="password">
    </div>
    <div>
        <input type="submit" value="Login">
    </div>
    </form>
</body>

</html>