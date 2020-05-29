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

						<a href="<?php echo site_url('member/musaha/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/usaha/edit/ID --->

							<input type="hidden" name="id_usaha" value="<?php echo $musaha->id_usaha?>" />

							<div class="form-group">
								<label for="name">Nama usaha*</label>
								<input class="form-control <?php echo form_error('nama_ush') ? 'is-invalid':'' ?>"
								 type="text" name="judul" placeholder="Nama usaha" value="<?php echo $musaha->nama_ush ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_ush') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat Usaha *</label>
								<textarea class="form-control <?php echo form_error('alamat_ush') ? 'is-invalid':'' ?>"
								 name="isi" placeholder="Alamat Usaha"><?php echo $musaha->alamat_ush ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('alamat_ush') ?>
								</div>
							</div>


                            <div class="form-group">
								<label for="name">Keterangan usaha*</label>
								<input class="form-control <?php echo form_error('ket_ush') ? 'is-invalid':'' ?>"
								 type="date" name="ket_ush" placeholder="Keterangan usaha" value="<?php echo $musaha->ket_ush ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('ket_ush') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Longitude *</label>
								<input class="form-control <?php echo form_error('longitude') ? 'is-invalid':'' ?>"
								 type="text" name="longitude" placeholder="Longitude" value="<?php echo $musaha->longitude ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('longitude') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="link">Latitude*</label>
								<input class="form-control <?php echo form_error('latitude') ? 'is-invalid':'' ?>"
								 type="text" name="latitude" placeholder="Latitude" value="<?php echo $musaha->latitude ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('latitude') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="link">ID Kelurahan*</label>
								<input class="form-control <?php echo form_error('id_kel') ? 'is-invalid':'' ?>"
								 type="text" name="id_kel" placeholder="ID Kelurahan" value="<?php echo $musaha->id_kel ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_kel') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="link">ID Kecamatan*</label>
								<input class="form-control <?php echo form_error('id_kec') ? 'is-invalid':'' ?>"
								 type="text" name="id_kec" placeholder="ID Kecamatan" value="<?php echo $musaha->id_kec ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_kec') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="link">ID Kategori*</label>
								<input class="form-control <?php echo form_error('id_kat') ? 'is-invalid':'' ?>"
								 type="text" name="id_kat" placeholder="ID Kategori" value="<?php echo $musaha->id_kat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_kat') ?>
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