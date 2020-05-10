<?php
date_default_timezone_set("Asia/jakarta");
$id = "";
$mark = "";
$title = "";
$description = "";
$link = "";
$updated_date = date("Y-m-d H:i:s");
$updated_by = $this->session->userdata('id');
if ($content == "Edit") {
    $id = $setting->id;
    $mark = $setting->mark;
    $title = $setting->title;
    $description = $setting->description;
    $link = $setting->link;
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
                <div>Dashboard
                    <div class="page-title-subheading">
                        <a style="color:#777;" href="<?php echo site_url('admin') ?>">Dashboard</a> / Setting
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
                            <input type="hidden" name="title" value="<?php echo $title; ?>">
                            <input type="hidden" name="updated_date" value="<?php echo $updated_date; ?>">
                            <input type="hidden" name="updated_by" value="<?php echo $updated_by; ?>">
                            <input type="hidden" name="old_images" value="<?php echo $link; ?>">

                            <div class="col-md-12 mb-3">
                                <label for="Link">Background</label>
                                <input type="file" id="background" class="form-control" name="link" value="<?php echo $link; ?>">
                                <?php if ($link == "") { ?>
                                    <img id="view_background" src="" />
                                <?php } else { ?>
                                    <img id="view_background" src="<?php echo base_url(); ?>upload/<?php echo $link; ?>" alt="Gambar Background" />
                                <?php } ?>
                                <?php echo form_error('link') ?>
                                <br>
                                <span id="hidenote" style="font-size:10px;"> gambar .jpg .jpeg .png</span>
                                <div class="invalid-feedback">
                                    Please choose a background.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="Description">Instagram Feed</label>
                                <select class="form-control" name="description">
                                    <option value="" selected disabled>-- Select Active --</option>
                                    <option value="0" <?php if ($description == 0) echo 'selected'; ?>>Not Active</option>
                                    <option value="1" <?php if ($description == 1) echo 'selected'; ?>>Active</option>
                                </select>
                                <?php echo form_error('description') ?>
                                <div class="invalid-feedback">
                                    Please choose a Active.
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

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            var background = $("#view_background");
            reader.onload = function(e) {
                background.show();
                background.attr('src', e.target.result);
                $('#hidenote').hide();
            }
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#background").change(function() {
        readURL(this);
    });
</script>