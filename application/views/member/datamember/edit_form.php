<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("member/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("member/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("member/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("member/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('member/datamember/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/Kecamatan/edit/ID --->

							<div class="form-group" >
								<label for="name">ID Member*</label>
								<input class="form-control <?php echo form_error('id_member') ? 'is-invalid':'' ?>"
								 type="text" name="id_member" placeholder="ID Member" value="<?php echo $datamember->id_member ?>" disabled="disabled" />
								<div class="invalid-feedback">
									<?php echo form_error('id_member') ?>
								</div>
							</div>

							<div class="form-group" >
								<label for="name">Nama Member*</label>
								<input class="form-control <?php echo form_error('nama_member') ? 'is-invalid':'' ?>"
								 type="text" name="nama_member" placeholder="Nama Member" value="<?php echo $datamember->nama_member ?>" disabled="disabled" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_member') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Email Member*</label>
								<input class="form-control <?php echo form_error('email_member') ? 'is-invalid':'' ?>"
								 type="text" name="email_member" placeholder="Email mmeber" value="<?php echo $datamember->email_member ?>"  disabled="disabled"/>
								<div class="invalid-feedback">
									<?php echo form_error('email_member') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">No HP Member*</label>
								<input class="form-control <?php echo form_error('nohp_member') ? 'is-invalid':'' ?>"
								 type="text" name="nohp_member" placeholder="Nohp member" value="<?php echo $datamember->nohp_member ?>"  disabled="disabled"/>
								<div class="invalid-feedback">
									<?php echo form_error('nohp_member') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat Member*</label>
								<input class="form-control <?php echo form_error('alamat_member') ? 'is-invalid':'' ?>"
								 type="text" name="alamat_member" placeholder="Alamat member" value="<?php echo $datamember->alamat_member ?>" disabled="disabled"/>
								<div class="invalid-feedback">
									<?php echo form_error('alamat_member') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Username Member*</label>
								<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
								 type="text" name="username" placeholder="username member" value="<?php echo $datamember->username ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Password Member*</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="text" name="password" placeholder="password" value="<?php echo $datamember->password ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">ID Admin*</label>
								<input class="form-control <?php echo form_error('id_admin') ? 'is-invalid':'' ?>"
								 type="text" name="id_admin" placeholder="ID Admin" value="<?php echo $datamember->id_admin ?>" disabled="disabled"/>
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

				<!-- Sticky Footer -->
				<?php $this->load->view("member/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("member/_partials/scrolltop.php") ?>

		<?php $this->load->view("member/_partials/js.php") ?>

</body>

</html>