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
                <?php foreach ($product as $row) { ?>
                    <li class="mix web productColumn">
                        <div class="thumbnail">
                            <div class="productImage">
                                <img src="<?php echo base_url(); ?>upload/product/<?php echo $row->images ?>" alt="<?php echo $row->name ?>">
                                <a href="<?php echo base_url(); ?>user/C_productdetail/detail/<?php echo $row->category_id; ?>/<?php echo $row->brand_id; ?>" class="more show_hide">
                                    <i class="icon-plus"></i>
                                </a>
                            </div>
                            <div class="mask"></div>
                            <div class="productTitle">
                                <h5 class='productName'><?php echo $row->name ?></h5>
                                <?php if ($row->discount == 0) { ?>
                                    <h5 class='price'>Rp.<?php echo number_format($row->price, 2, ',', '.') ?></h5>
                                <?php } else {
                                    $total = $row->price - (($row->price * $row->discount) / 100); ?>
                                    <h5 class='price'>Rp.<?php echo number_format($total, 2, ',', '.') ?></h5>
                                    <h5 class='discount'>Rp.<?php echo number_format($row->price, 2, ',', '.') ?></h5>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                <?php } ?>
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