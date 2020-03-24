<article>
    <h1>Admin</h1>
    <a href="<?php echo site_url('content/c_superadmin/add') ?>">Add</a>
    <table style="width:100%;">
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Username</th>
            <th>Role</th>
            <th>Last Login</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($list as $row) {
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php
                        if ($row['role'] == 1) {
                            echo "Super Admin";
                        } else {
                            echo " Admin";
                        } ?></td>
                    <td><?php echo $row['last_login'] ?></td>
                    <td><a href="<?php echo base_url(); ?>index.php/content/c_superadmin/edit/<?php echo $row['id']; ?>">Edit</a> |
                        <a href="<?php echo base_url(); ?>index.php/content/c_superadmin/delete/<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</article>