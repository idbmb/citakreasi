<?php
	//Admin Edit 
	if (isset($_GET['admin-edit'])) {
		$id 	=	$_GET['admin-edit'];

		if (isset($_POST['admin-update'])) {
			$username 	=	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$alamat 	=	$_POST['alamat'];
			$password	= 	$_POST['password'];

			$admin 		=	mysql_query("UPDATE users 
											SET `name` = '$name', `username` = '$username', `telp` = '$telp', 
												`alamat` = '$alamat', `password` = '$password'
											WHERE id = '$id'");
			if ($admin) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=admin'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=admin'>";
			}
		}

		$dataadmin 		= 	mysql_query("SELECT * FROM users WHERE id = $id");
		$row 			= 	mysql_fetch_array($dataadmin);
	}
?>
<?php
	//Guru Edit 
	if (isset($_GET['guru-edit'])) {
		$id 	=	$_GET['guru-edit'];

		if (isset($_POST['guru-update'])) {
			$noinduk	=	$_POST['noinduk'];
			$username 	=	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$alamat 	=	$_POST['alamat'];
			$password	= 	$_POST['password'];

			$guru 		=	mysql_query("UPDATE users 
											SET `nomor_induk` = '$noinduk', `name` = '$name', `username` = '$username', `telp` = '$telp', 
												`alamat` = '$alamat', `password` = '$password'
											WHERE id = '$id'");
			if ($guru) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=guru'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=guru'>";
			}
		}

		$dataguru 		= 	mysql_query("SELECT * FROM users WHERE id = $id");
		$row 			= 	mysql_fetch_array($dataguru);
	}
?>
<?php
	//Siswa Edit 
	if (isset($_GET['siswa-edit'])) {
		$id 	=	$_GET['siswa-edit'];

		if (isset($_POST['siswa-update'])) {
			$noinduk	=	$_POST['noinduk'];
			$username 	=	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$alamat 	=	$_POST['alamat'];
			$status 	=	$_POST['status'];
			$access 	=	$_POST['access'];
			$kelas		=	$_POST['kelas'];
			$password	= 	$_POST['password'];

			$siswa 		=	mysql_query("UPDATE users 
											SET `nomor_induk` = '$noinduk', `name` = '$name', `username` = '$username', `telp` = '$telp', 
												`alamat` = '$alamat', `kelas` = '$kelas', `status` = '$status', `access` = '$access', `password` = '$password'
											WHERE id = '$id'");
			if ($siswa) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=siswa'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=siswa'>";
			}
		}

		$datasiswa 		= 	mysql_query("SELECT * FROM users WHERE id = $id");
		$row 			= 	mysql_fetch_array($datasiswa);
	}
?>
<?php
	//Siswa Edit 
	if (isset($_GET['profile'])) {
		$id 	=	$_GET['profile'];

		if (isset($_POST['pass-update'])) {
			$password	=	$_POST['password'];

			$users 		=	mysql_query("UPDATE users 
											SET `password` = '$password'
											WHERE id = '$id'");
			if ($users) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL= index.php'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=index.php'>";
			}
		}

		$datausers 		= 	mysql_query("SELECT * FROM users WHERE id = $id");
		$row 			= 	mysql_fetch_array($datausers);
	}
?>
<?php
	//Edit Gallery 
	if (isset($_GET['galeri-edit'])) {
		$galeri_id 	=	$_GET['galeri-edit'];

		if (isset($_POST['galeri-update'])) {
			$galeri_nama		=	$_POST['galeri_nama'];
			$galeri_keterangan 	=	$_POST['galeri_keterangan'];
			$galeri_tgl 		=	$_POST['galeri_tgl'];
			

			$galeri 		=	mysql_query("UPDATE galeri 
											SET `galeri_nama` = '$galeri_nama', `galeri_keterangan` = '$galeri_keterangan', `galeri_tgl` = '$galeri_tgl'
											WHERE galeri_id = '$galeri_id'");
			if ($galeri) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?galeri=galeri'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?galeri=galeri'>";
			}
		}

		$datagaleri 		= 	mysql_query("SELECT * FROM galeri WHERE galeri_id = $galeri_id");
		$row 				= 	mysql_fetch_array($datagaleri);
	}
?>