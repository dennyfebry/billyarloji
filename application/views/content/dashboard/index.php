<div class="app-main__inner">
	<div class="app-page-title">
		<div class="page-title-wrapper">
			<div class="page-title-heading">
				<div class="page-title-icon">
					<i class="pe-7s-display1 icon-gradient bg-mean-fruit">
					</i>
				</div>
				<div><?= $titlepage ?>
					<div class="page-title-subheading">
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
						<div role="group" class="btn-group-sm btn-group">
						</div>
					</div>
				</div>
				<div class="d-block card-footer">
					<!-- <div class="d-block text-center card-footer"> -->
					<h5>Hallo, <?php echo $this->session->userdata("name"); ?></h5>
				</div>
			</div>
		</div>
	</div>
</div>