<?php 
session_start();
require_once('config/db.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Siaran Online Radio Cita Kreasi FM SMK Negeri 1 Gorontalo">
<meta name="author" content="Operator">

<title>Cita Kreasi FM</title>

<link rel="icon" href="assets/img/favicon.png">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- BEGIN CSS FRAMEWORK -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
<!-- END CSS FRAMEWORK -->

<!-- BEGIN CSS PLUGIN -->
<link rel="stylesheet" href="assets/plugins/pace/pace-theme-minimal.css">
<link rel="stylesheet" href="assets/plugins/jquery-magnific-popup/magnific-popup.css">
<!-- <link rel="stylesheet" href="assets/css/zen.css">
<!-- END CSS PLUGIN -->

<!-- BEGIN CSS TEMPLATE -->
<link rel="stylesheet" href="assets/css/main.css">
<!-- END CSS TEMPLATE -->
</head>

<body>
<!-- BEGIN NAVIGATION -->
<section id="navbar-top">
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand nav-external" href="#home"><img src="assets/img/logo.png" alt="" height="20"></a>
		 	</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
				<?php 
					if (isset($_SESSION['access'])) {						
						if ($_SESSION['access'] == 'admin' or 'guru' or 'siswa') {
				?>
							<li class="active">
								<a class="fa fa-home" href="#home"> Home</a>
							</li>
							
							<li>
								<a class="fa fa-info-circle" href="#about"> Profil</a>
							</li>
							<li>
								<a class="fa fa-image" href="#portfolio"> Gallery</a>
							</li>
							<li>
								<a class="fa fa-suitcase" href="#top-footer"> About Us</a>
							</li>
							<li>
								<a class="fa fa-unlock" href="dashboard"> Dashboard</a>
							</li>								
				<?php
						}
					}else {
				?>
						<li class="active">
							<a class="fa fa-home" href="#home"> Home</a>
							</li>
							<li>
								<a class="fa fa-info-circle" href="#about"> Profil</a>
							</li>
							<li>
								<a class="fa fa-image" href="#portfolio"> Gallery</a>
							</li>
							<li>
								<a class="fa fa-suitcase" href="#top-footer"> About Us</a>
							</li>	
							<li>
								<a class="fa fa-lock" href="dashboard"> Dashboard</a>
							</li>					
				<?php
					}
				?>																	
				</ul>
			</div>
		</div>
	</nav>
</section>
<!-- END NAVIGATION -->