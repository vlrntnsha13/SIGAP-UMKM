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

						<a href="<?php echo site_url('admin/adusaha/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/Kecamatan/edit/ID --->

							<input type="hidden" name="id_usaha" value="<?php echo $adusaha->id_usaha?>" />

							<div class="form-group">
								<label for="name">Nama Usaha*</label>
								<input class="form-control <?php echo form_error('nama_ush') ? 'is-invalid':'' ?>"
								 type="text" name="nama_ush" placeholder="Nama usaha" value="<?php echo $adusaha->nama_ush ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_ush') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat Usaha*</label>
								<input class="form-control <?php echo form_error('alamat_ush') ? 'is-invalid':'' ?>"
								 type="text" name="alamat_ush" placeholder="Alamat usaha" value="<?php echo $adusaha->alamat_ush ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat_ush') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Keteranagn usaha*</label>
								<input class="form-control <?php echo form_error('ket_ush') ? 'is-invalid':'' ?>"
								 type="text" name="ket_ush" placeholder="Keterangan usaha" value="<?php echo $adusaha->ket_ush ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('ket_ush') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Longitude*</label>
								<input class="form-control <?php echo form_error('longitude') ? 'is-invalid':'' ?>"
								 type="text" name="longitude" placeholder="Longitude" value="<?php echo $adusaha->longitude ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('longitude') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Latitude*</label>
								<input class="form-control <?php echo form_error('latitude') ? 'is-invalid':'' ?>"
								 type="text" name="latitude" placeholder="Latitude" value="<?php echo $adusaha->latitude ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('latitude') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">ID Member*</label>
								<input class="form-control <?php echo form_error('id_member') ? 'is-invalid':'' ?>"
								 type="dropdown" name="id_member" placeholder="ID Admin" value="<?php echo $adusaha->id_member ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_member') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">ID Admin*</label>
								<input class="form-control <?php echo form_error('id_admin') ? 'is-invalid':'' ?>"
								 type="dropdown" name="id_admin" placeholder="ID Admin" value="<?php echo $adusaha->id_admin ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_admin') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">ID Kelurahan*</label>
								<input class="form-control <?php echo form_error('id_kel') ? 'is-invalid':'' ?>"
								 type="dropdown" name="id_kel" placeholder="ID Kelurahan" value="<?php echo $adusaha->id_kel ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_kel') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">ID Kecamatan*</label>
								<input class="form-control <?php echo form_error('id_kec') ? 'is-invalid':'' ?>"
								 type="dropdown" name="id_kec" placeholder="ID Kecamatan" value="<?php echo $adusaha->id_kec ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_kec') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nama Kategori*</label>
								<select class="form-control" name="kategori" id="kategori">
								<?php
									foreach($dropdwn as $d){
										echo "<option value=".$d->id_kat.">".$d->nama_kat."</option>";
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