
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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/admin/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/Kecamatan/edit/ID --->

							<input type="hidden" name="id_admin" value="<?php echo $admin->id_admin?>" />

							<div class="form-group">
								<label for="name">Nama Admin*</label>
								<input class="form-control <?php echo form_error('nama_admin') ? 'is-invalid':'' ?>"
								 type="text" name="nama_admin" placeholder="Nama admin" value="<?php echo $admin->nama_admin ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_admin') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Email Admin*</label>
								<input class="form-control <?php echo form_error('email_admin') ? 'is-invalid':'' ?>"
								 type="email" name="email_admin" placeholder="Email admin" value="<?php echo $admin->email_admin ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('email_admin') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">No HP Admin*</label>
								<input class="form-control <?php echo form_error('nohp_admin') ? 'is-invalid':'' ?>"
								 type="text" name="nohp_admin" placeholder="Nohp admin" value="<?php echo $admin->nohp_admin ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nohp_admin') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Password Admin*</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="password" name="password" placeholder="password" value="<?php echo $admin->password ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
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