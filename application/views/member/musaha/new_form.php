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

				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('member/musaha/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('member/musaha/add') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="name">ID usaha*</label>
								<input class="form-control <?php echo form_error('id_usaha') ? 'is-invalid' : '' ?>" type="text" name="id_usaha" placeholder="ID usaha" />
								<div class="invalid-feedback">
									<?php echo form_error('id_usaha') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nama Usaha*</label>
								<input class="form-control <?php echo form_error('nama_ush') ? 'is-invalid' : '' ?>" type="text" name="nama_ush" placeholder="Nama Usaha" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_ush') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat Usaha*</label>
								<input class="form-control <?php echo form_error('alamat_ush') ? 'is-invalid' : '' ?>" type="text" name="alamat_ush" placeholder="Alamat Usaha" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat_ush') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Keterangan Usaha*</label>
								<input class="form-control <?php echo form_error('ket_ush') ? 'is-invalid' : '' ?>" type="text" name="ket_ush" placeholder="Keterangan Usaha" />
								<div class="invalid-feedback">
									<?php echo form_error('ket_ush') ?>
								</div>
							</div>
							
							<script src="<?php echo base_url('js/jquery-1.7.2.min.js') ?>"></script>
							<script src="<?php echo base_url('js/OpenLayers.js') ?>"></script>

							<link href="<?php echo base_url('css/jquery-position-picker.css') ?>" rel="stylesheet" type="text/css" />
							<script src="<?php echo base_url('js/jquery-position-picker.debug.js') ?>"></script>

							<div class='gllpLatlonPicker'>
								<div class='gllpMap'></div>
					
						
							<div class="form-group">
								<label for="name">Longitude*</label>
								<input class="form-control gllpLongitude " type="text" name="longitude"  value='109.7326' placeholder="Longitude"  readonly/>
								<div class="invalid-feedback">
									<?php echo form_error('longitude') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Latitude*</label>
								<input class="form-control gllpLatitude" type="text" name="latitude" value='-6.908' placeholder="Latitude" readonly />
								<div class="invalid-feedback">
									<?php echo form_error('latitude') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Nama Member*</label>
								<select class="form-control" name="id_member" id="member">
									<?php
									foreach ($dropdwnmem as $d) {
										echo "<option value=" . $d->id_member . ">" . $d->nama_member . "</option>";
									}
									//echo "<script type='text/javascript'> console.log("+$dropdwn+")</script>";
									?>
								</select>
							</div>

							<div class="form-group">
								<label for="name">Nama Kelurahan*</label>
								<select class="form-control" name="id_kel" id="kelurahan">
									<?php
									foreach ($dropdwnkel as $d) {
										echo "<option value=" . $d->id_kel . ">" . $d->nama_kel . "</option>";
									}
									//echo "<script type='text/javascript'> console.log("+$dropdwn+")</script>";
									?>
								</select>
							</div>

							<div class="form-group">
								<label for="name">Nama Kecamatan*</label>
								<select class="form-control" name="id_kec" id="kecamatan">
									<?php
									foreach ($dropdwnkec as $d) {
										echo "<option value=" . $d->id_kec . ">" . $d->nama_kec . "</option>";
									}
									//echo "<script type='text/javascript'> console.log("+$dropdwn+")</script>";
									?>
								</select>
							</div>

							<div class="form-group">
								<label for="name">Nama Kategori*</label>
								<select class="form-control" name="id_kat" id="kategori">
									<?php
									foreach ($dropdwnkat as $d) {
										echo "<option value=" . $d->id_kat . ">" . $d->nama_kat . "</option>";
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
				

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->
		<?php $this->load->view("member/_partials/footer.php") ?>

		<?php $this->load->view("member/_partials/scrolltop.php") ?>

		<?php $this->load->view("member/_partials/js.php") ?>

</body>

</html>