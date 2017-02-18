<?php
include "penghubung.php";
$ambil=$koneksi->prepare("select * from online order by id desc");
$ambil->execute();
while($list=$ambil->fetch())
{
	echo "<i class='icon-user'></i><span class='label label-info'>".$list['username']."</span><span class='label'>".substr($list['waktu'],0,5)."</span><br>";
}
?>