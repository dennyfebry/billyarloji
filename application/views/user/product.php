<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pagination.css" />

<div class="section secondary-section">
    <!-- Product Title -->
    <div class="row watchTitle">
        <?php
        if (isset($brandName) && isset($category)) {
            if (count($brandName) > 1) {
                for ($i = 0; $i < count($brandName); $i++) {
                    if ($i == 0) {
                        echo "<span class='brown-text pr-03'>$brandName[$i]</span>";
                    } else {
                        echo "<span class='pr-03'>$brandName[$i]</span>";
                    }
                }
                if ($category == 'MEN' || $category == 'LADIES') {
                    echo "<span class='pr-03'>WATCHES</span>";
                }
            } else {
                echo "<span class='brown-text pr-03'>$brandName[0]</span>";
                if ($category == 'MEN' || $category == 'LADIES') {
                    echo "<span class='pr-03'>WATCHES</span>";
                }
            }
        } else if (isset($category)) {
            echo "<span class='brown-text pr-03' style='text-align: left'>$category</span>";
        } else {
            echo "<span class='brown-text pr-03' style='text-align: left'>Search Result for :</span>";
            echo "<span style='text-align: left'>$searchValue</span>";
        }
        ?>
    </div>
    <!-- Product List -->
    <div class="row container">
        <ul class="thumbnails row mb-3">
            <?php
            if (count($product) > 0) {
                foreach ($product as $row) { ?>
                    <li class="productColumn">
                        <div class="thumbnail">
                            <a href="<?php echo base_url(); ?>product_detail/<?php echo encrypt_url($row->id) ?>">
                                <div class="productImage">
                                    <img src="<?php echo base_url(); ?>upload/product/<?php echo $row->images ?>" onerror="this.onerror=null;this.src='<?php echo base_url(); ?>upload/product/default.jpg';" alt="<?php echo $row->name ?>">
                            </a>
                        </div>
                        <div class="productTitle">
                            <div class="productName">
                                <h5><?php echo $row->name ?></h5>
                            </div>
                            <div class="price">
                                <h5>Rp.
                                    <?php if ($row->discount != 0) {
                                        $total = $row->price - (($row->price * $row->discount) / 100);
                                        echo number_format($total, 2, ',', '.');
                                    } else {
                                        echo number_format($row->price, 2, ',', '.');
                                    } ?></h5>
                            </div>
                            <?php if ($row->discount != 0) {
                                echo "<div class='discount'>
                                        <h5>
                                        Rp. ", number_format($row->price, 2, ',', '.');
                                "</h5>
                                    </div>";
                            } else {
                                echo "<div class='discount' style='color: transparent'>
                                        <h5>-</h5>
                                    </div>";
                            } ?>
                        </div>
    </div>
    </li>
<?php }
            } else { ?>
<h3 style="color: white;">This product is not available</h3>
<?php } ?>
</ul>
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
    var totalPages = Math.ceil(numItems / perPage);

    items.slice(perPage).hide();

    if (totalPages > 1) {
        $('#pagination-container').pagination({
            items: numItems,
            itemsOnPage: perPage,
            prevText: "&laquo;",
            nextText: "&raquo;",
            onPageClick: function(pageNumber) {
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;
                items.hide().slice(showFrom, showTo).show();
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
            }
        });
    }
</script>