<?php 
	session_start();
	if (!isset($_SESSION['username'])) {
		header('Location: ../index.php');
	}elseif (isset($_SESSION['access'])) {
		if ($_SESSION['access'] == 'admin' OR 'guru' OR 'siswa') {

			$baseurl = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"]."?")."/";
			require_once('../config/db.php');
			require_once('layout/header.php');
			require_once('layout/sidebar.php');
?>

		<!-- BEGIN CONTENT -->
		<aside class="right-side">
			<!-- BEGIN CONTENT HEADER -->
		    <section class="content-header">
				<i class="fa fa-home"></i>
				<span>Dashboard</span>
				<ol class="breadcrumb">
					<li><a href="/" target="_blank">Home</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</section> 

		<!--    <section class="content-header">
				<i class="fa fa-home"></i>
				<span>Dashboard</span>
				<ol class="breadcrumb">
				<audio controls autoplay="autoplay"><source src="http://live.pisfm.com:8888/pisfm?type=.mp3" type="audio/mp3">Your browser does not support the audio element.</audio>
				</ol>
			</section> -->

			<!-- END CONTENT HEADER -->
			
			<!-- BEGIN MAIN CONTENT -->
			<section class="content">	
				<div class="row">
					<!-- BEGIN WIDGET -->
					<div class="col-sm-12">
						<div class="row">
							<div class="col-lg-2 col-md-4 col-sm-6">
								<div class="grid widget bg-light-blue">
									<div class="grid-body">
										<span class="title">ADMIN</span>
										<?php 
											$users 		=	mysql_query("SELECT COUNT(name) AS total FROM users WHERE access='admin'");
											$data 		=	mysql_fetch_array($users);
										?>
										<span class="value"><?php echo $data['total']; ?></span>
									</div>
								</div>
							</div>							
							<div class="col-lg-2 col-md-4 col-sm-6">
								<div class="grid widget bg-red">
									<div class="grid-body">
										<span class="title">GURU</span>
										<?php 
											$guru 		=	mysql_query("SELECT COUNT(name) AS total FROM users WHERE access='guru'");
											$data 		=	mysql_fetch_array($guru);
										?>
										<span class="value"><?php echo $data['total']; ?></span>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-6">
								<div class="grid widget bg-orange">
									<div class="grid-body">
										<span class="title">SISWA</span>
										<?php 
											$siswa 		=	mysql_query("SELECT COUNT(name) AS total FROM users WHERE access='siswa'");
											$data 		=	mysql_fetch_array($siswa);
										?>
										<span class="value"><?php echo $data['total']; ?></span>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-6">
								<div class="grid widget bg-teal">
									<div class="grid-body">
										<span class="title">MATERI</span>
										<?php 
											$alat 		=	mysql_query("SELECT COUNT(nama_file) AS total FROM download");
											$data 		=	mysql_fetch_array($alat);
										?>
										<span class="value"><?php echo $data['total']; ?></span>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-6">
								<div class="grid widget bg-green">
									<div class="grid-body">
										<span class="title">REQUEST</span>
										<?php 
											$request	=	mysql_query("SELECT COUNT(name) AS total FROM request");
											$data 		=	mysql_fetch_array($request);
										?>
										<span class="value"><?php echo $data['total']; ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END WIDGET -->
				</div>			
				<?php include('function/content.php'); ?>
			</section>
			<!-- END MAIN CONTENT -->
		</aside>
		<!-- END CONTENT -->
		
<?php 
	require_once('layout/footer.php'); 
		}
	}
?>