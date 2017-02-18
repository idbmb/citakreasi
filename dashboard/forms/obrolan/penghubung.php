<?php
try{
	$koneksi=new PDO('mysql:host=localhost;dbname=citakreasi','root','');	
}catch(PDOException $e){
	echo "Koneksi Database Ke Obrolan Gagal ".$e->getMessage();
	exit;
}
?>