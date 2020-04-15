<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Admin Billy Arloji">
    <title><?= $titlepage ?></title>

    <link href="<?php echo base_url(); ?>assets/content/css/main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User
                                                Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Alina Mclourd
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <nav>
            <ul>
                <?php
                if ($page == "dashboard") {
                ?><li><a class="active" <?php
                                        } else {
                                            ?> <li><a <?php
                                                } ?> href="<?php echo site_url('content/c_dashboard') ?>">Dashboard</a></li>
                    <?php
                    if ($page == "slider") {
                    ?>
                        <li><a class="active" <?php
                                            } else { ?> <li><a <?php
                                                                } ?> href="<?php echo site_url('content/c_slider') ?>">Slider</a></li>
                        <?php
                        if ($page == "product") {
                        ?>
                            <li><a class="active" <?php
                                                } else { ?> <li><a <?php
                                                                    } ?> href="<?php echo site_url('content/c_product') ?>">Products</a></li>
                            <?php
                            if ($page == "testimoni") {
                            ?>
                                <li><a class="active" <?php
                                                    } else { ?> <li><a <?php
                                                                        } ?> href="<?php echo site_url('content/c_testimoni') ?>">Testimoni</a></li>
                                <?php
                                if ($this->session->userdata("id") == 1) { ?>
                                    <?php
                                    if ($page == "superadmin") {
                                    ?>
                                        <li><a class="active" <?php
                                                            } else { ?> <li><a <?php
                                                                                } ?> href="<?php echo site_url('content/c_superadmin') ?>">Admin</a></li>
                                    <?php
                                }
                                    ?>
            </ul>
        </nav>
        <?php
        include $page . '.php';
        ?>

    </section>
    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="app-footer-left">
                </div>
                <div class="app-footer-right">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <!-- <div class="badge badge-success mr-1 ml-0">
                                    <small>NEW</small>
                                </div> -->
                                2020 &copy; Billy Arloji
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/content/js/main.js"></script>
</body>

</html>