<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Admin Billy Arloji">
    <title><?= $titlepage ?></title>
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/content/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url() ?>assets/content/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/content/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/content/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
        .box a {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php
        include 'header.php';
        ?>
        <div class="app-main">
            <?php
            include 'sidebar.php';
            ?>
            <div class="app-main__outer">
                <?php
                include $page . '.php';
                ?>
                <?php
                include 'footer.php';
                ?>
            </div>
        </div>
    </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/content/js/main.js"></script>
</body>

</html>