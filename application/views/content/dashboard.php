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
		}

		/* Style the header */
		header {
			background-color: #666;
			padding: 10px;
			text-align: center;
			font-size: 30px;
			color: white;
		}

		/* Create two columns/boxes that floats next to each other */
		nav {
			float: left;
			width: 15%;
			height: 400px;
			/* only for demonstration, should be removed */
			background: #ccc;
			/* padding: 20px; */
		}

		/* Style the list inside the menu */
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
			background-color: #f1f1f1;
			height: 400px;
			/* only for demonstration, should be removed */
		}

		/* Clear floats after the columns */
		section:after {
			content: "";
			display: table;
			clear: both;
		}

		/* Style the footer */
		footer {
			background-color: #777;
			padding: 10px;
			text-align: center;
			color: white;
		}

		/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
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
		<h2>Dashboard</h2>
	</header>

	<section>
		<nav>
			<ul>
				<li><a class="active" href="#dashboard">Dashboard</a></li>
				<li><a href="#slider">Slider</a></li>
				<li><a href="#product">Products</a></li>
				<li><a href="#testimoni">Testimoni</a></li>
				<?php
				if ($this->session->userdata("id") == 1) { ?>
					<li><a href="#admin">Admin</a></li>
				<?php
				}
				?>
			</ul>
		</nav>

		<article>
			<h1>Dashboard</h1>
			<h5>Hallo, <?php echo $this->session->userdata("name"); ?></h5>
			<b><a href="<?php echo site_url('content/c_login/logout') ?>">Logout</a></b>
		</article>
	</section>

	<footer>
		<p>2020 &copy; Billy Arloji</p>
	</footer>
</body>

</html>