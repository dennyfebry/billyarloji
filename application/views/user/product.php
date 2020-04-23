<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="section secondary-section">
    <!-- Product Title -->
    <div class="row watchTitle">
        <span class="brown-text pr-03">ALEXANDER</span>
        <span>WATCHES</span>
    </div>
    <!-- Product List -->
    <div class="row container mb-5">
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
        <nav class='outer-pagination'>
            <ul class='inner-pagination'>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-disabled="true">❮</a>
                </li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">❯</a>
                </li>
            </ul>
        </nav>
    </div>
</div>