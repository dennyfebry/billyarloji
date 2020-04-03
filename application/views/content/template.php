<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $titlepage ?></title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>
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
                <?php
                if ($page == "dashboard") {
                ?><li><a class="active" <?php
                                    } else {
                                        ?> <li><a <?php
                                                } ?> href="<?php echo site_url('content/c_dashboard') ?>">Dashboard</a></li>
                    <?php
                    if ($page == "slider") {
                    ?>
                        <li><a class="active" <?php
                                            } else { ?> <li><a <?php
                                                            } ?> href="<?php echo site_url('content/c_slider') ?>">Slider</a></li>
                        <?php
                        if ($page == "product") {
                        ?>
                            <li><a class="active" <?php
                                                } else { ?> <li><a <?php
                                                                } ?> href="<?php echo site_url('content/c_product') ?>">Products</a></li>
                            <?php
                            if ($page == "testimoni") {
                            ?>
                                <li><a class="active" <?php
                                                    } else { ?> <li><a <?php
                                                                    } ?> href="<?php echo site_url('content/c_testimoni') ?>">Testimoni</a></li>
                                <?php
                                if ($this->session->userdata("id") == 1) { ?>
                                    <?php
                                    if ($page == "superadmin") {
                                    ?>
                                        <li><a class="active" <?php
                                                            } else { ?> <li><a <?php
                                                                            } ?> href="<?php echo site_url('content/c_superadmin') ?>">Admin</a></li>
                                    <?php
                                }
                                    ?>
            </ul>
        </nav>
        <?php
        include $page . '.php';
        ?>

    </section>

    <footer>
        <p>2020 &copy; Billy Arloji</p>
    </footer>
</body>

</html>