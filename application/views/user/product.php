<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="section secondary-section " id="portfolio">
    <!-- <div class="triangle"></div> -->
    <div class="row watchTitle">
        <span style="color: #bf9d5f; padding-right: 0.3em">ALEXANDER</span>
        <span>WATCHES</span>
    </div>
    <div class="row container">
        <!-- Start details for portfolio project 1 -->
        <div id="single-project">

            <!-- Product Detail -->
            <?php
            include 'product-detail.php';
            ?>

            <!-- Product Cards -->
            <ul id="portfolio-grid" class="thumbnails row">
                <?php for ($i=0; $i < 16; $i++): ?>
                <li class="mix web productColumn">
                    <div class="thumbnail">
                        <div class="productImage">
                            <img src="<?php echo base_url(); ?>assets/images/products/jam.jpg" alt="project 1">
                            <a href="#single-project" class="more show_hide" rel="#slidingDiv<?php echo $i;?>">
                                <i class="icon-plus"></i>
                            </a>
                        </div>
                        <div class="mask"></div>
                        <div class="productTitle">
                            <h5>Alvin <?= $i?> label </h5>
                            <h5>Rp. 2.000.000</h5>
                            <h5>Rp. 3.500.000</h5>
                        </div>
                    </div>
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>
<!-- Portfolio section end -->

<style>
body {
    font-size: 12px;
}

.container {
    width: auto;
}

.secondary-section {
    padding-bottom: 0;
}

.row {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin-left: 0;
}

.productColumn {
    display: flex;
    flex-direction: column;
    flex: 0 50%;
}

ul.thumbnails {
    margin: 0;
}

.thumbnail {
    width: auto;
    background: transparent;
}

.watchTitle {
    border-bottom: 2px solid #8b7347;
    padding: 1.5em 1em 1em;
}

.row.watchTitle {
    margin-left: 0;
}

.watchTitle>span {
    font-size: 20px;
    font-weight: bold;
}

.span4 {
    width: auto;
}

.thumbnails>li {
    float: none;
    margin-bottom: 20px;
    margin-left: 0;
}

.section {
    padding-left: 0;
    padding-right: 0;
}

.section .container {
    padding: 0.5em;
}

.thumbnail>img {
    display: block;
    max-width: auto;
    margin-right: 0;
    margin-left: 0;
}

.thumbnail>p {
    padding-bottom: 0.5em;
}

.thumbnail h3 {
    color: #000;
    margin-top: 0;
    font-size: 17px;
}

.thumbnail h5 {
    padding: 0px 0 5px;
    margin: 0;
}



.thumbnail .mask {
    background: #131313;
}

.productTitle {
    background-color: #e7bd70;
    margin: 0 0.5em;
    border-radius: 10px;
    opacity: 0.9;
}

.productImage {
    margin: 0 0.5em;
}

@media screen and (min-width: 768px) {
    body {
        font-size: 15px;
    }

    .watchTitle>span {
        font-size: 30px;
        font-weight: bold;
    }

    .productColumn {
        flex: 0 25%;
    }

    .productImage {
        margin: 0 1em;
    }

    .productTitle {
        margin: 0 0.75em;
    }

    .thumbnail>p {
        padding-bottom: 1em;
    }

    .thumbnail h3 {
        margin-top: 0;
        font-size: 20px;
    }

    .section .container {
        padding: 1em;
    }
}
</style>