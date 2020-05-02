<?php
date_default_timezone_set("Asia/jakarta");
$id = "";
$mark = "";
$title = "";
$description = "";
$updated_date = date("Y-m-d H:i:s");
$updated_by = $this->session->userdata('id');
if ($content == "Edit") {
    $id = $about->id;
    $mark = $about->mark;
    $title = $about->title;
    $description = $about->description;
    $updated_date = date("Y-m-d H:i:s");
    $updated_by = $this->session->userdata('id');
}
?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-way icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div><?= $titlepage ?>
                    <div class="page-title-subheading">
                        <a style="color:#777;" href="<?php echo site_url('about') ?>"><?= $titlepage ?></a> / <?php echo $content; ?>
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
                    <form class="needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>
                        <div class="form-row">
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="mb-2 mr-2 badge badge-success">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>

                            <input type="hidden" name="content" value="<?php echo $content; ?>">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="mark" value="<?php echo $mark; ?>">
                            <input type="hidden" name="updated_date" value="<?php echo $updated_date; ?>">
                            <input type="hidden" name="updated_by" value="<?php echo $updated_by; ?>">

                            <div class="col-md-12 mb-3">
                                <label for="Title">Judul</label>
                                <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $title; ?>" required>
                                <?php echo form_error('title') ?>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please fill in the title.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="Description">Deskripsi</label>
                                <textarea id="summernote" class="form-control" name="description" required><?php echo $description; ?></textarea>
                                <?php echo form_error('description') ?>
                                <div class="invalid-feedback">
                                    Please fill in the description.
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