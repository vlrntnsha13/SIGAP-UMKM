<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/berita/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/berita/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">ID berita*</label>
								<input class="form-control <?php echo form_error('id_berita') ? 'is-invalid':'' ?>"
								 type="text" name="id_berita" placeholder="ID berita" />
								<div class="invalid-feedback">
									<?php echo form_error('id_berita') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Judul berita*</label>
								<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"
								 type="text" name="judul" placeholder="Judul berita" />
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Isi*</label>
								<textarea class="form-control <?php echo form_error('isi') ? 'is-invalid':'' ?>"
								 name="isi" placeholder="Isi..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('isi') ?>
								</div>
							</div>

                            <div class="form-group">
                                <label for="name">Tanggal Terbit berita*</label>
								<input class="form-control <?php echo form_error('tgl_terbit') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_terbit" placeholder="Tanggal terbit berita" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_terbit') ?>
								</div>
							</div>

							<div class="form-group">
                                <label for="name">Penulis berita*</label>
								<input class="form-control <?php echo form_error('penulis') ? 'is-invalid':'' ?>"
								 type="text" name="penulis" placeholder="Penulis berita" />
								<div class="invalid-feedback">
									<?php echo form_error('penulis') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Image Berita</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
                                <label for="name">Link berita*</label>
								<input class="form-control <?php echo form_error('link') ? 'is-invalid':'' ?>"
								 type="text" name="link" placeholder="link berita" />
								<div class="invalid-feedback">
									<?php echo form_error('link') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>