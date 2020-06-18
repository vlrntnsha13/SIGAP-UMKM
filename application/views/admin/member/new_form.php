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
						<a href="<?php echo site_url('admin/member/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<form action="<?php echo site_url('admin/member/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">ID Member*</label>
								<input class="form-control <?php echo form_error('id_member') ? 'is-invalid':'' ?>"
								 type="text" name="id_member" placeholder="ID member" />
								<div class="invalid-feedback">
									<?php echo form_error('id_member') ?>
								</div>
								
								<label for="name">Nama Member*</label>
								<input class="form-control <?php echo form_error('nama_member') ? 'is-invalid':'' ?>"
								 type="text" name="nama_member" placeholder="Nama member" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_member') ?>
								</div>

								<label for="name">Email Member*</label>
								<input class="form-control <?php echo form_error('email_member') ? 'is-invalid':'' ?>"
								 type="email" name="email_member" placeholder="Email member" />
								<div class="invalid-feedback">
									<?php echo form_error('email_member') ?>
								</div>

								<label for="name">No HP Member*</label>
								<input class="form-control <?php echo form_error('nohp_member') ? 'is-invalid':'' ?>"
								 type="text" name="nohp_member" placeholder="Nohp member" />
								<div class="invalid-feedback">
									<?php echo form_error('nohp_member') ?>
								</div>

								<label for="name">Alamat Member*</label>
								<input class="form-control <?php echo form_error('alamat_member') ? 'is-invalid':'' ?>"
								 type="text" name="alamat_member" placeholder="Alamat member" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat_member') ?>
								</div>


								<label for="name">Password Member*</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="password" name="password" placeholder="password" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>

								<label for="name">ID Admin*</label>
								<input class="form-control <?php echo form_error('id_admin') ? 'is-invalid':'' ?>"
								 type="text" name="id_admin" placeholder="id_admin" />
								<div class="invalid-feedback">
									<?php echo form_error('id_admin') ?>
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
				

			</div>
			<!-- /.content-wrapper -->
			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>
				
			

		</div>
		<!-- /#wrapper -->
		


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>