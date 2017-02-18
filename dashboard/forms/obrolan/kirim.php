<?php
session_start();
include "penghubung.php";
$username=$_SESSION['username'];
$pesan=strip_tags($_POST['pesan']);
$waktu=date("h:m:s");
$masukan=$koneksi->prepare("insert into pesan (username,pesan,waktu) values (:username,:pesan,:waktu) ");
$masukan->BindParam(":username",$username);
$masukan->BindParam(":pesan",$pesan);
$masukan->BindParam(":waktu",$waktu);
$masukan->execute();
if($masukan->rowCount()==1)
{
	print "";
}
else
{
	print "gagal";
}
?>