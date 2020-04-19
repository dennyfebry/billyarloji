<article>
    <?php
    date_default_timezone_set("Asia/jakarta");
    $id = "";
    $title = "";
    $description = "";
    $created_date = date("Y-m-d H:i:s");
    $created_by = $this->session->userdata('id');
    $updated_date = date("Y-m-d H:i:s");
    $updated_by = $this->session->userdata('id');
    if ($content == "Edit") {
        $id = $testimoni->id;
        $title = $testimoni->title;
        $description = $testimoni->description;
        $created_date = $testimoni->created_date;
        $created_by = $testimoni->created_by;
        $updated_date = date("Y-m-d H:i:s");
        $updated_by = $this->session->userdata('id');
    }
    ?>
    <h1><?= $titlepage ?></h1>
    <h5 style="color:#777;"><a style="color:#777;" href="<?php echo site_url('content/c_testimoni') ?>"><?= $titlepage ?></a> / <?php echo $content; ?></h5>
    <?php if ($this->session->flashdata('success')) : ?>
        <div role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php //echo validation_errors(); 
    ?>
    <?php //echo form_open('content/c_testimoni/validation'); 
    ?>

    <?php if ($content == "Edit") {
    ?>
        <form action="" method="post" enctype="multipart/form-data">
        <?php } else { ?>
            <form action="<?php echo site_url('content/c_testimoni/add') ?>" method="post" enctype="multipart/form-data">
            <?php } ?>
            <input type="hidden" name="content" value="<?php echo $content; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="created_date" value="<?php echo $created_date; ?>">
            <input type="hidden" name="created_by" value="<?php echo $created_by; ?>">
            <input type="hidden" name="updated_date" value="<?php echo $updated_date; ?>">
            <input type="hidden" name="updated_by" value="<?php echo $updated_by; ?>">
            <div>
                <label for="name">Title</label>
                <input type="text" name="title" value="<?php echo $title; ?>">
                <?php echo form_error('title') ?>
            </div>
            <div>
                <label for="name">Description</label>
                <textarea id="summernote" name="description"><?php echo $description; ?></textarea>
                <?php echo form_error('description') ?>
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
            </form>
</article>
<!-- <script>
    $('#summernote2').summernote2({
        placeholder: 'Enter text...',
        tabsize: 2,
        height: 100
    });
</script> -->

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