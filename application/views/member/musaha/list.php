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
						<a href="<?php echo site_url('member/musaha/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
								<tr>
									<tr>
										<th>ID usaha</th>
										<th>Nama usaha</th>
                                        <th>Keterangan usaha</th>
										<th>Longitude usaha</th>
                                        <th>Latitude usaha</th>
										<th>ID Kelurahan usaha</th>
										<th>ID Kecamatan usaha</th>
										<th>ID Kategori usaha</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($musaha as $usaha): ?>
									<tr>
										<td width="50">
										<?php echo $usaha->id_usaha ?>
										</td> <td width="150">
											<?php echo $usaha->nama_ush ?>
										</td>
										<td class="small">
											<?php echo substr($usaha->ket_ush, 0, 150) ?>...</td>
                                        <td width="80">
											<?php echo $usaha->longitude ?>
										</td>
                                        </td> <td width="80">
											<?php echo $usaha->latitude ?>
										</td>
                                        </td> <td width="150">
											<?php echo $usaha->id_kel ?>
										</td>
                                        </td> <td width="150">
											<?php echo $usaha->id_kec ?>
										</td>
                                        </td> <td width="150">
											<?php echo $usaha->id_kat ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('member/musaha/edit/'.$usaha->id_usaha) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('mmeber/musaha/delete/'.$usaha->id_usaha) ?>')"
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