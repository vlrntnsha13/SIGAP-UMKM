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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('member/mgaleri/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Foto</th>
										<th>Nama Usaha</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($mgaleri as $galeri): ?>
									<tr>
										<td width="150">
											<?php echo $galeri->nama_gal ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/adgaleri/'.$galeri->image) ?>" width="64" />
										</td>
										<td width="150">
											<?php echo $galeri->nama_ush ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/adgaleri/edit/'.$galeri->id_galeri) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/adgaleri/delete/'.$galeri->id_galeri) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("member/_partials/modal.php") ?>

	<?php $this->load->view("member/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
