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

						<a href="<?php echo site_url('admin/member/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/Kecamatan/edit/ID --->

							<input type="hidden" name="id_member" value="<?php echo $member->id_member?>" />

							<div class="form-group">
								<label for="name">Nama Member*</label>
								<input class="form-control <?php echo form_error('nama_member') ? 'is-invalid':'' ?>"
								 type="text" name="nama_member" placeholder="Nama Member" value="<?php echo $member->nama_member ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_member') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Email Member*</label>
								<input class="form-control <?php echo form_error('email_member') ? 'is-invalid':'' ?>"
								 type="text" name="email_member" placeholder="Email mmeber" value="<?php echo $member->email_member ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('email_member') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">No HP Member*</label>
								<input class="form-control <?php echo form_error('nohp_member') ? 'is-invalid':'' ?>"
								 type="text" name="nohp_member" placeholder="Nohp member" value="<?php echo $member->nohp_member ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nohp_member') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat Member*</label>
								<input class="form-control <?php echo form_error('alamat_member') ? 'is-invalid':'' ?>"
								 type="text" name="alamat_member" placeholder="Alamat member" value="<?php echo $member->alamat_member ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat_member') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Password Member*</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="text" name="password" placeholder="password" value="<?php echo $member->password ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nama Admin*</label>
								<select class="form-control" name="admin" id="admin">
								<?php
									foreach($dropdwn as $d){
										echo "<option value=".$d->id_admin.">".$d->nama_admin."</option>";
									}
								//echo "<script type='text/javascript'> console.log("+$dropdwn+")</script>";
								?>
								</select>
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