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

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
		<?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

		<!-- Icon Cards-->
		<div class="row">
			<!--<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-success o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-shopping-cart"></i>
				</div>
				<div class="mr-5">Daftar UMKM</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/adusaha') ?>">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div> 
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-primary o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-comments"></i>
				</div>
				<div class="mr-5">Daftar Usaha</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('mmeber/musaha') ?>">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-warning o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-list"></i>
				</div>
				<div class="mr-5">Daftar Berita</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('member/berita') ?>">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-danger o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-life-ring"></i>
				</div>
				<div class="mr-5">13 New Tickets!</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="#">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div> -->
		</div>

		<div class="card-body">
		<h1> SELAMAT DATANG DI SISTEM INFORMASI GEOGRAFIS UMKM YOGYAKARTA </H1>
		
		   
        <link rel="stylesheet" href="<?php echo base_url('/css/map.css') ?>">
        
        <div id="map" class="map"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/openlayers/4.6.5/ol.js"></script>
		<script src="<?php echo base_url('/js/map.js') ?>"></script>

		</div>

		<!-- Area Chart Example-->
		<!-- <div class="card mb-3">
			<div class="card-header">
			<i class="fas fa-chart-area"></i>
			Visitor Stats</div>
			<div class="card-body">
			<canvas id="myAreaChart" width="100%" height="30"></canvas>
			</div>
			<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
		</div> -->

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
    
</body>
</html>