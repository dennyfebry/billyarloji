<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pagination.css" />

<div class="section secondary-section">
    <!-- Product Title -->
    <div class="row watchTitle">
        <?php 
        if (count($arrBrand) > 1) {
            for ($i=0; $i < count($arrBrand) ; $i++) { 
                if($i == 0) { 
                    echo "<span class='brown-text pr-03'>$arrBrand[$i]</span>";
                } else {
                    echo "<span class='pr-03'>$arrBrand[$i]</span>";
                }
            } 
            if ($category == 'MEN' || $category == 'LADIES') {
                    echo "<span class='pr-03'>WATCHES</span>";
            }
        } else {
            echo "<span class='brown-text pr-03'>$arrBrand[0]</span>";
            if ($category == 'MEN' || $category == 'LADIES') {
                echo "<span class='pr-03'>WATCHES</span>";
            }
        } ?>
    </div>
    <!-- Product List -->
    <div class="row container mb-5">
        <div>
            <ul class="thumbnails row">
                <?php
                if (count($product) > 0) {

                    foreach ($product as $row) { ?>
                <li class="productColumn">
                    <div class="thumbnail">
                        <div class="productImage">
                            <img src="<?php echo base_url(); ?>upload/product/<?php echo $row->images ?>"
                                alt="<?php echo $row->name ?>">
                            <a href="<?php echo base_url(); ?>user/C_productdetail/detail/<?php echo $row->id ?>"
                                class="more show_hide">
                                <i class="icon-plus"
                                    onclick="location.href='<?php echo base_url(); ?>user/C_productdetail/detail/<?php echo $row->id ?>'"></i>
                            </a>
                        </div>
                        <div class="mask"
                            onclick="location.href='<?php echo base_url(); ?>user/C_productdetail/detail/<?php echo $row->id ?>'">
                        </div>
                        <div class="productTitle">
                            <h5 class='productName'><?php echo $row->name ?></h5>
                            <?php if ($row->discount == 0) { ?>
                            <h5 class='price' style="border-radius: 0 0 10px 10px">
                                Rp.<?php echo number_format($row->price, 2, ',', '.') ?></h5>
                            <?php } else {
                                        $total = $row->price - (($row->price * $row->discount) / 100); ?>
                            <h5 class='price'>Rp.<?php echo number_format($total, 2, ',', '.') ?></h5>
                            <h5 class='discount'>Rp.<?php echo number_format($row->price, 2, ',', '.') ?></h5>
                            <?php } ?>
                        </div>
                    </div>
                </li>

                <?php }
                } else { ?>
                <h3 style="color: white;">This product is not available</h3>
                <?php } ?>
            </ul>
        </div>
    </div>
    <!-- Pagination -->
    <div id="pagination-container"></div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.simplePagination.js"></script>

<script>
var items = $(".thumbnails .productColumn");
var numItems = items.length;
var perPage = 20;

items.slice(perPage).hide();

if (numItems > 1) {
    $('#pagination-container').pagination({
        items: numItems,
        itemsOnPage: perPage,
        prevText: "&laquo;",
        nextText: "&raquo;",
        onPageClick: function(pageNumber) {
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).show();
        }
    });
}
</script>