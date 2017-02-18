<?php 
	//Admin Delete
	if (isset($_GET['admin-delete'])) {
		$id 	=	$_GET['admin-delete'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=admin '/>";
		}
	}elseif (isset($_GET['guru-delete'])) {
		$id 	=	$_GET['guru-delete'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=guru '/>";
		}
	}elseif (isset($_GET['siswa-delete'])) {
		$id 	=	$_GET['siswa-delete'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=siswa '/>";
		}
	}elseif (isset($_GET['modul-delete'])) {
		$id 	=	$_GET['modul-delete'];

		$delete 	=	mysql_query("DELETE FROM download WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?modul=download '/>";
		}
	}elseif (isset($_GET['galeri-delete'])) {
		$id 	=	$_GET['galeri-delete'];

		$delete 	=	mysql_query("DELETE FROM galeri WHERE galeri_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?galeri=galeri '/>";
		}
	}elseif (isset($_GET['request-delete'])) {
		$id 	=	$_GET['request-delete'];

		$delete 	=	mysql_query("DELETE FROM request WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?request=daftar '/>";
		}
	}elseif (isset($_GET['request-kosong'])) {
		
		$delete 	=	mysql_query("DELETE FROM request");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?request=daftar '/>";
		}
	}
?>