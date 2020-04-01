<article>
    <?php
    date_default_timezone_set("Asia/jakarta");
    $id = "";
    $title = "";
    $description = "";
    $images = "";
    $status = "";
    $updated_date = date("Y-m-d H:i:s");
    $updated_by = $this->session->userdata('id');
    if ($content == "Edit") {
        foreach ($sql->result() as $row) {
            $id = $row->id;
            $title = $row->title;
            $description = $row->description;
            $images = $row->images;
            $status = $row->status;
            $updated_date = date("Y-m-d H:i:s");
            $updated_by = $this->session->userdata('id');
        }
    }
    ?>
    <h1><?= $titlepage ?></h1>
    <h5 style="color:#777;"><a style="color:#777;" href="<?php echo site_url('content/c_testimoni') ?>"><?= $titlepage ?></a> / <?php echo $content; ?></h5>
    <?php echo validation_errors(); ?>
    <?php echo form_open('content/c_testimoni/validation'); ?>
    <input type="hidden" name="content" value="<?php echo $content; ?>">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="updated_date" value="<?php echo $updated_date; ?>">
    <input type="hidden" name="updated_by" value="<?php echo $updated_by; ?>">
    <div>
        <label for="">Title</label>
        <input type="text" name="title" value="<?php echo $title; ?>" required>
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name="description" value="<?php echo $description; ?>" required>
    </div>
    <div>
        <label for="">Images Product</label>
        <input type="file" name="images" value="<?php echo $images; ?>" required>
    </div>
    <div>
        <label for="">Status</label>
        <select name="status">
            <option value="2" <?php if ($status == 2) echo 'selected'; ?>>Draft</option>
            <option value="1" <?php if ($status == 1) echo 'selected'; ?>>Aktif</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
    </form>
</article>