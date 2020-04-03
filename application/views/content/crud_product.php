<article>
    <?php
    date_default_timezone_set("Asia/jakarta");
    $id = "";
    $name_product = "";
    $description = "";
    $price = "";
    $discount = "";
    $images = "";
    $status = "";
    $created_date = date("Y-m-d H:i:s");
    $created_by = $this->session->userdata('id');
    $updated_date = date("Y-m-d H:i:s");
    $updated_by = $this->session->userdata('id');
    if ($content == "Edit") {
        $id = $product->id;
        $name_product = $product->name_product;
        $description = $product->description;
        $price = $product->price;
        $discount = $product->discount;
        $images = $product->images;
        $status = $product->status;
        $created_date = $product->created_date;
        $created_by = $product->created_by;
        $updated_date = date("Y-m-d H:i:s");
        $updated_by = $this->session->userdata('id');
    }
    ?>
    <h1><?= $titlepage ?></h1>
    <h5 style="color:#777;"><a style="color:#777;" href="<?php echo site_url('content/c_product') ?>"><?= $titlepage ?></a> / <?php echo $content; ?></h5>
    <?php if ($this->session->flashdata('success')) : ?>
        <div role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php //echo validation_errors(); 
    ?>
    <?php //echo form_open('content/c_product/validation'); 
    ?>

    <?php if ($content == "Edit") {
    ?>
        <form action="" method="post" enctype="multipart/form-data">
        <?php } else { ?>
            <form action="<?php echo site_url('content/c_product/add') ?>" method="post" enctype="multipart/form-data">
            <?php } ?>

            <input type="hidden" name="content" value="<?php echo $content; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="created_date" value="<?php echo $created_date; ?>">
            <input type="hidden" name="created_by" value="<?php echo $created_by; ?>">
            <input type="hidden" name="updated_date" value="<?php echo $updated_date; ?>">
            <input type="hidden" name="updated_by" value="<?php echo $updated_by; ?>">
            <div>
                <label for="name">Name Product</label>
                <input type="text" name="name_product" value="<?php echo $name_product; ?>">
                <?php echo form_error('name_product') ?>
            </div>
            <div>
                <label for="name">Description</label>
                <textarea id="summernote" name="description"><?php echo $description; ?></textarea>
                <?php echo form_error('description') ?>
            </div>
            <div>
                <label for="name">Price</label>
                <input type="number" name="price" value="<?php echo $price; ?>">
                <?php echo form_error('price') ?>
            </div>
            <div>
                <label for="name">Discount</label>
                <input type="number" name="discount" value="<?php echo $discount; ?>">
                <?php echo form_error('discount') ?>
            </div>
            <div>
                <label for="name">Images Product</label>
                <input type="file" name="images" value="<?php echo $images; ?>">
                <?php echo form_error('images') ?>
            </div>
            <div>
                <label for="name">Status</label>
                <select name="status">
                    <option value="2" <?php if ($status == 2) echo 'selected'; ?>>Draft</option>
                    <option value="1" <?php if ($status == 1) echo 'selected'; ?>>Active</option>
                </select>
                <?php echo form_error('status') ?>
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
            </form>
</article>

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