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

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
		<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

        <h1> SELAMAT DATANG DI SISTEM INFORMASI GEOGRAFIS UMKM YOGYAKARTA </H1>

		<div class="container">
        <h3>Hasil Pencarian</h3>
	    <hr>
 
		<?php
 
		if(count($cari)>0)
		{
			foreach ($cari as $data) {
			echo $data->nama_ush . " => " . $data->alamat_ush ."<br>";
			}
		}
		else
		{
			echo "Data tidak ditemukan";
		}
 
		?>

		
		</div>
		<!-- /.container-fluid -->

		<!-- Sticky Footer -->
		
	</div>
	<!-- /.content-wrapper -->
	<?php $this->load->view("admin/_partials/footer.php") ?>


</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>