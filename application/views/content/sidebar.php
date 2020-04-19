<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="">Billy Arloji</div>
        <!-- <div class="logo-src"></div> -->
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
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading"></li>
                <li>
                    <a href="<?php echo site_url('admin') ?>" <?php if ($titlepage == "Dashboard") {
                                                                    echo "class='mm-active'";
                                                                } ?>>
                        <i class="metismenu-icon pe-7s-display1"></i>
                        Dashboard
                    </a>
                </li>
                <li <?php if (($titlepage == "Category") || ($titlepage == "Brand")) {
                        echo "class='mm-active'";
                    } ?>>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-network"></i>
                        Category
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo site_url('category') ?>" <?php if ($titlepage == "Category") {
                                                                                echo "class='mm-active'";
                                                                            } ?>>
                                <i class="metismenu-icon"></i>
                                Menu
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('brand') ?>" <?php if ($titlepage == "Brand") {
                                                                            echo "class='mm-active'";
                                                                        } ?>>
                                <i class="metismenu-icon">
                                </i>Brand
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('product') ?>" <?php if ($titlepage == "Product") {
                                                                    echo "class='mm-active'";
                                                                } ?>>
                        <i class="metismenu-icon pe-7s-cart"></i>
                        Product
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('slider') ?>" <?php if ($titlepage == "Slider") {
                                                                    echo "class='mm-active'";
                                                                } ?>>
                        <i class="metismenu-icon pe-7s-photo-gallery"></i>
                        Slider
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('testimoni') ?>" <?php if ($titlepage == "Testimoni") {
                                                                        echo "class='mm-active'";
                                                                    } ?>>
                        <i class="metismenu-icon pe-7s-comment"></i>
                        Testimoni
                    </a>
                </li>

                <li <?php if (($titlepage == "About") || ($titlepage == "Our Store") ||  ($titlepage == "How To Buy") || ($titlepage == "Social Media")) {
                        echo "class='mm-active'";
                    } ?>>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-way"></i>
                        Footer
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo site_url('about') ?>" <?php if ($titlepage == "About") {
                                                                            echo "class='mm-active'";
                                                                        } ?>>
                                <i class="metismenu-icon"></i>
                                About
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('store') ?>" <?php if ($titlepage == "Our Store") {
                                                                            echo "class='mm-active'";
                                                                        } ?>>
                                <i class="metismenu-icon">
                                </i>Our Store
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('buy') ?>" <?php if ($titlepage == "How To Buy") {
                                                                        echo "class='mm-active'";
                                                                    } ?>>
                                <i class="metismenu-icon">
                                </i>How To Buy
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('social') ?>" <?php if ($titlepage == "Social Media") {
                                                                            echo "class='mm-active'";
                                                                        } ?>>
                                <i class="metismenu-icon">
                                </i>Social Media
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('superadmin') ?>" <?php if ($titlepage == "Superadmin") {
                                                                        echo "class='mm-active'";
                                                                    } ?>>
                        <i class="metismenu-icon pe-7s-users"></i>
                        Admin
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- <script>
    $(document).ready(function() {
        $('ul li a').click(function() {
            $('li a').removeClass("mm-active");
            $(this).addClass("mm-active");
        });
    });
</script> -->