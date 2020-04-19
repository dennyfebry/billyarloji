<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="section secondary-section">
    <!-- Product Title -->
    <div class="row watchTitle">
        <span style="color: #bf9d5f; padding-right: 0.3em">ALEXANDER</span>
        <span>WATCHES</span>
    </div>
    <!-- Product List -->
    <div class="row container">
        <div>
            <ul class="thumbnails row">
                <?php for ($i=0; $i < 16; $i++): ?>
                <li class="mix web productColumn">
                    <div class="thumbnail">
                        <div class="productImage">
                            <img src="<?php echo base_url(); ?>assets/images/products/jam.jpg" alt="project 1">
                            <a href="<?php echo site_url('user/c_productdetail') ?>" class="more show_hide">
                                <i class="icon-plus"></i>
                            </a>
                        </div>
                        <div class="mask"></div>
                        <div class="productTitle">
                            <h5 class='productName'>Alvin <?= $i?> label </h5>
                            <h5 class='price'>Rp. 2.000.000</h5>
                            <h5 class='discount'>Rp. 3.500.000</h5>
                        </div>
                    </div>
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
    <!-- Pagination -->
    <div class="row pagination">
        <span style="color: #bf9d5f; padding-right: 0.3em">ALEXANDER</span>
        <span>WATCHES</span>
    </div>
</div>

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

.pagination {
    border-top: 2px solid #8b7347;
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
    margin: 0;
}

.thumbnail .mask {
    background: #131313;
}

.productTitle {
    background-color: #e7bd70;
    margin: 0 0.5em;
    border-radius: 0 0 10px 10px;
    opacity: 0.9;
}

.productImage {
    margin: 0 0.5em;
}

.productName {
    color: #000000;
    font-size: 17px;
    padding: 0.1em;
}

.price {
    background-color: #000000;
    font-size: 17px;
    padding: 0.1em;
}

.discount {
    color: #000000;
    font-size: 14px;
    padding: 0.1em;
    text-decoration: line-through;
}

@media screen and (min-width: 768px) {
    body {
        font-size: 15px;
    }

    .watchTitle>span {
        font-size: 30px;
        font-weight: bold;
    }

    .productImage {
        margin: 0 0.5em;
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

    .productName {
        font-size: 20px;
        padding: 0.25em;
    }

    .price {
        font-size: 20px;
        padding: 0.25em;
    }

    .discount {
        font-size: 17px;
        padding: 0.25em;
    }
}

@media screen and (min-width: 768px) and (max-width: 1023px) {
    .productColumn {
        flex: 0 25%;
    }
}

@media screen and (min-width: 1024px) {
    .productColumn {
        flex: 0 20%;
    }
}
</style>