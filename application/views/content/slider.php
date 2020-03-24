<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 104px 0px;
            background-color: #f1f1f1;
        }

        header {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            background-color: #666;
            padding: 10px;
            text-align: center;
            font-size: 20px;
            color: white;
        }

        nav {
            float: left;
            width: 15%;
            height: auto;
            background: #ccc;
            padding: 5px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: auto;
            background-color: #ccc;
        }

        nav li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        nav li a.active {
            background-color: #4CAF50;
            color: white;
        }

        nav li a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        article {
            float: left;
            padding: 20px;
            width: 85%;
            height: 400px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        section:after {
            content: "";
            display: table;
            clear: both;
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #777;
            color: white;
            text-align: center;
        }

        @media (max-width: 600px) {

            nav,
            article {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <header>
        <h2>Billy Arloji</h2>
    </header>

    <section>
        <nav>
            <ul>
                <li><a href="<?php echo site_url('content/c_dashboard') ?>">Dashboard</a></li>
                <li><a class="active" href="<?php echo site_url('content/c_slider') ?>">Slider</a></li>
                <li><a href="<?php echo site_url('content/c_product') ?>">Products</a></li>
                <li><a href="<?php echo site_url('content/c_testimoni') ?>">Testimoni</a></li>
                <?php
                if ($this->session->userdata("id") == 1) { ?>
                    <li><a href="<?php echo site_url('content/c_superadmin') ?>">Admin</a></li>
                <?php
                }
                ?>
            </ul>
        </nav>

        <article>
            <h1>Slider</h1>
            <table style="width:100%;">
                <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Last Login</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Papaw</td>
                        <td>papaw.admin</td>
                        <td>super.admin</td>
                        <td>2020-03-22 23:13:18</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bob</td>
                        <td>bob.admin</td>
                        <td>admin</td>
                        <td>2020-03-22 23:13:18</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Ucha</td>
                        <td>ucha.admin</td>
                        <td>admin</td>
                        <td>2020-03-22 23:13:18</td>
                    </tr>
                </tbody>
            </table>
        </article>
    </section>

    <footer>
        <p>2020 &copy; Billy Arloji</p>
    </footer>
</body>

</html>