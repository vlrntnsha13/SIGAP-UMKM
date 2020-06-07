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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/member/add') ?>"><i class="fas fa-plus"></i> Tambah Member</a>
						<a href="<?php echo site_url('admin/email') ?>"><i class="fas fa-print">
						</i> Kirim Laporan Data Member</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
								<tr>
									<tr>
										<th>ID Member</th>
										<th>Nama Member</th>
										<th>Email Member</th>
										<th>Nohp Member</th>
										<th>Alamat Member</th>
										<th>Password Member</th>
										<th>ID Admin</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($member as $member): ?>
									<tr>
										<td width="150">
										<?php echo $member->id_member ?>
										</td> 
										<td width="150">
											<?php echo $member->nama_member ?>
										</td>
										<td width="150">
											<?php echo $member->email_member ?>
										</td>
										<td width="150">
											<?php echo $member->nohp_member ?>
										</td>
										<td width="150">
											<?php echo $member->alamat_member ?>
										</td>
										<td width="100">
											<?php echo $member->password ?>
										</td> 
										<td width="150">
											<?php echo $member->id_admin ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/member/edit/'.$member->id_member) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/member/delete/'.$member->id_member) ?>')"
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