<article>
    <h1>Slider</h1>
    <a href="<?php echo site_url('content/c_slider/add') ?>">Add</a>
    <table style="width:100%;">
        <thead>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Images</th>
            <th>Updated Date</th>
            <th>Updated By</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($slider as $row) {
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row->title ?></td>
                    <td><?php echo $row->description ?></td>
                    <td><?php echo $row->images ?></td>
                    <td><?php echo $row->updated_date ?></td>
                    <td><?php echo $row->name ?></td>
                    <td><?php if ($row->status == '1') {
                            echo 'Active';
                        } else {
                            echo 'Draft';
                        } ?></td>
                    <td><a href="<?php echo base_url(); ?>index.php/content/c_slider/edit/<?php echo $row->id; ?>">Edit</a> |
                        <a href="<?php echo base_url(); ?>index.php/content/c_slider/delete/<?php echo $row->id; ?>">Delete</a></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</article>