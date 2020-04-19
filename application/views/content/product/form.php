<?php
date_default_timezone_set("Asia/jakarta");
$id = "";
$category_id = "";
$brand_id = "";
$name = "";
$description = "";
$price = "";
$discount = "";
$images = "";
$images_front = "";
$images_side = "";
$images_top = "";
$images_detail = "";
$status = "";
$created_date = date("Y-m-d H:i:s");
$created_by = $this->session->userdata('id');
$updated_date = date("Y-m-d H:i:s");
$updated_by = $this->session->userdata('id');
if ($content == "Edit") {
    $id = $product->id;
    $category_id = $product->category_id;
    $brand_id = $product->brand_id;
    $name = $product->name;
    $description = $product->description;
    $price = $product->price;
    $discount = $product->discount;
    $images = $product->images;
    $images_front = $product->images_front;
    $images_side = $product->images_side;
    $images_top = $product->images_top;
    $images_detail = $product->images_detail;
    $status = $product->status;
    $created_date = $product->created_date;
    $created_by = $product->created_by;
    $updated_date = date("Y-m-d H:i:s");
    $updated_by = $this->session->userdata('id');
}
?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div><?= $titlepage ?>
                    <div class="page-title-subheading">
                        <a style="color:#777;" href="<?php echo site_url('product') ?>"><?= $titlepage ?></a> / <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header"><?= $titlepage ?>
                    <div class="btn-actions-pane-right">
                    </div>
                </div>
                <div class="card-body">
                    <?php if ($content == "Edit") { ?>
                        <form class="needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>
                        <?php } else { ?>
                            <form class="needs-validation" action="<?php echo site_url('product/add') ?>" method="post" enctype="multipart/form-data" novalidate>
                            <?php } ?>

                            <div class="form-row">
                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="mb-2 mr-2 badge badge-success">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>

                                <input type="hidden" name="content" value="<?php echo $content; ?>">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="hidden" name="created_date" value="<?php echo $created_date; ?>">
                                <input type="hidden" name="created_by" value="<?php echo $created_by; ?>">
                                <input type="hidden" name="updated_date" value="<?php echo $updated_date; ?>">
                                <input type="hidden" name="updated_by" value="<?php echo $updated_by; ?>">
                                <input type="hidden" name="old_images" value="<?php echo $images; ?>">
                                <input type="hidden" name="old_images_front" value="<?php echo $images_front; ?>">
                                <input type="hidden" name="old_images_side" value="<?php echo $images_side; ?>">
                                <input type="hidden" name="old_images_top" value="<?php echo $images_top; ?>">
                                <input type="hidden" name="old_images_detail" value="<?php echo $images_detail; ?>">

                                <div class="col-md-12 mb-3">
                                    <label for="Category_id">Category</label>
                                    <select class="form-control" name="category_id">
                                        <?php foreach ($name_category as $row) { ?>
                                            <option value="<?php echo $row->id ?>" <?php if ($category_id == $row->id) echo 'selected'; ?>><?php echo $row->category ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('category_id') ?>
                                    <div class="invalid-feedback">
                                        Please choose a category.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="Brand_id">Brand</label>
                                    <select class="form-control" name="brand_id">
                                        <option value="1">-</option>
                                    </select>
                                    <?php echo form_error('brand_id') ?>
                                    <div class="invalid-feedback">
                                        Please choose a brand.
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="Name">Name Product</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $name; ?>" required>
                                    <?php echo form_error('name') ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill in the name product.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Description">Description</label>
                                    <textarea id="summernote" class="form-control" name="description" required><?php echo $description; ?></textarea>
                                    <?php echo form_error('description') ?>
                                    <div class="invalid-feedback">
                                        Please fill in the description.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Price">Price</label>
                                    <input type="number" class="form-control" name="price" placeholder="Price" value="<?php echo $price; ?>" required>
                                    <?php echo form_error('price') ?>
                                    <div class="invalid-feedback">
                                        Please fill in the price.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Discount">Discount</label>
                                    <input type="number" class="form-control" name="discount" placeholder="Discount" value="<?php echo $discount; ?>" required>
                                    <?php echo form_error('discount') ?>
                                    <div class="invalid-feedback">
                                        Please fill in the discount.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Images">Images Product Main</label>
                                    <input type="file" class="form-control" name="images" placeholder="Images" value="<?php echo $images; ?>">
                                    <?php echo form_error('images') ?>
                                    <div class="invalid-feedback">
                                        Please choose a images.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Images_Front">Images Product Front</label>
                                    <input type="file" class="form-control" name="images_front" placeholder="Images Front" value="<?php echo $images_front; ?>">
                                    <?php echo form_error('images_front') ?>
                                    <div class="invalid-feedback">
                                        Please choose a images.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Images_Side">Images Product Side</label>
                                    <input type="file" class="form-control" name="images_side" placeholder="Images Side" value="<?php echo $images_side; ?>">
                                    <?php echo form_error('images_side') ?>
                                    <div class="invalid-feedback">
                                        Please choose a images.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Images_Top">Images Product Top</label>
                                    <input type="file" class="form-control" name="images_detail" placeholder="Images Top" value="<?php echo $images_detail; ?>">
                                    <?php echo form_error('images_detail') ?>
                                    <div class="invalid-feedback">
                                        Please choose a images.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Images_Detail">Images Product Detail</label>
                                    <input type="file" class="form-control" name="images_detail" placeholder="Images Detail" value="<?php echo $images_detail; ?>">
                                    <?php echo form_error('images_detail') ?>
                                    <div class="invalid-feedback">
                                        Please choose a images.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="Status">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="2" <?php if ($status == 2) echo 'selected'; ?>>Draft</option>
                                        <option value="1" <?php if ($status == 1) echo 'selected'; ?>>Active</option>
                                    </select>
                                    <?php echo form_error('status') ?>
                                    <div class="invalid-feedback">
                                        Please choose a status.
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit form">
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
foreach ($rows as $row) {
}
?>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<script>
    $('#summernote').summernote({
        placeholder: 'Enter text...',
        tabsize: 2,
        height: 100,
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontstyle', ['fontname', 'fontsize', 'color']],
            ['para', ['ul', 'ol', 'paragraph', 'height']],
            ['insert', ['link', 'table', 'hr']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>