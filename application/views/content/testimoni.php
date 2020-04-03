<article>
    <h1>Testimoni</h1>
    <a href="<?php echo site_url('content/c_testimoni/add') ?>">Add</a>
    <table style="width:100%;">
        <thead>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created Date</th>
            <th>Updated Date</th>
            <th>Updated By</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($testimoni as $row) {
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row->title ?></td>
                    <td><?php echo $row->description ?></td>
                    <td><?php echo $row->created_date ?></td>
                    <td><?php echo $row->updated_date ?></td>
                    <td><?php echo $row->name ?></td>
                    <td><a href="<?php echo base_url(); ?>index.php/content/c_testimoni/edit/<?php echo $row->id; ?>">Edit</a> |
                        <a href="<?php echo base_url(); ?>index.php/content/c_testimoni/delete/<?php echo $row->id; ?>">Delete</a></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</article>