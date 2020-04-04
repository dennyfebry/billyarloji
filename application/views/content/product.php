<article>
    <h1>Product</h1>
    <a href="<?php echo site_url('content/c_product/add') ?>">Add</a>
    <table style="width:100%;">
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Images</th>
            <th>Updated Date</th>
            <th>Updated By</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($product as $row) {
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row->name_product ?></td>
                    <td><?php echo $row->description ?></td>
                    <td>Rp <?php echo number_format($row->price, 2, ',', '.') ?></td>
                    <td><?php echo $row->discount ?>%</td>
                    <td><img src="<?php echo base_url('upload/product/' . $row->images . ''); ?>" alt="" height="200px"></td>
                    <td><?php echo $row->updated_date ?></td>
                    <td><?php echo $row->name ?></td>
                    <td><?php if ($row->status == '1') {
                            echo 'Active';
                        } else {
                            echo 'Draft';
                        } ?></td>
                    <td><a href="<?php echo base_url(); ?>index.php/content/c_product/edit/<?php echo $row->id; ?>">Edit</a> |
                        <a href="<?php echo base_url(); ?>index.php/content/c_product/delete/<?php echo $row->id; ?>">Delete</a></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</article>