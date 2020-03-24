<article>
	<h1>Dashboard</h1>
	<h5>Hallo, <?php echo $this->session->userdata("name"); ?></h5>
	<b><a href="<?php echo site_url('content/c_login/logout') ?>">Logout</a></b>
</article>