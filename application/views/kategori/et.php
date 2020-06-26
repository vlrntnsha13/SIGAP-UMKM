<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbarutama.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/halutama.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
								<tr>
									<tr>
										<th>Gambar</th>
										<th>Nama usaha</th>
                                        <th>Keterangan usaha</th>
										<th>Alamat usaha</th>
										<th>Longitude usaha</th>
                                        <th>Latitude usaha</th>
										<th>Nama Kelurahan</th>
										<th>Nama Kecamatan</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($et as $usaha): ?>
									<tr>
                                        <td width="250">
											<a href="<?php echo site_url('admin/adgaleri') ?>"
											 class="btn btn-small"><i class="fas fa-image"></i>Lihat Gambar</a>
										</td>
                                        <td width="150">
											<?php echo $usaha->nama_ush ?>
										</td>
										<td class="small">
											<?php echo substr($usaha->ket_ush, 0, 150) ?>...</td>
										<td class="small">
											<?php echo substr($usaha->alamat_ush, 0, 350) ?>...</td>
                                        <td width="80">
											<?php echo $usaha->longitude ?>
										</td>
                                        </td> <td width="80">
											<?php echo $usaha->latitude ?>
										</td>
                                        </td> <td width="150">
											<?php echo $usaha->nama_kel ?>
										</td>
                                        </td> <td width="150">
											<?php echo $usaha->nama_kec ?>
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
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
</body>

</html>