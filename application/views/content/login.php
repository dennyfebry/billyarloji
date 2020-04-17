<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/content/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url() ?>assets/content/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/content/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/content/login/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/content/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/content/login/css/main.css">
</head>

<body>
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="validation" method="POST">
                <span class="login100-form-title p-b-26">
                    Login
                </span>
                <?php
                if (isset($error_message)) {
                    echo "<div class='wrap-input101 '>" . $error_message . "</div>";
                } ?>
                <!-- <span class="login100-form-title p-b-48">
                    <i class="zmdi zmdi-font"></i>
                </span> -->
                <div class="wrap-input100 validate-input" data-validate="Valid Username">
                    <input class="input100" type="text" name="username">
                    <span class="focus-input100" data-placeholder="Username"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="<?php echo base_url() ?>assets/content/login/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/content/login/js/main.js"></script>
</body>

</html>