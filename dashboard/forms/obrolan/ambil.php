<?php
include "penghubung.php";
$ambil=$koneksi->prepare("select * from pesan order by id");
$ambil->execute();
while($ulangi=$ambil->fetch())
{
	// this is emoticon's operation bro 
	$text_awal=$ulangi['pesan'];
	$symbol=array("[kasmaran]","[kedip]","[ketawa]","[marah]","[melet]","[nangis]",
				"[sakit]","[bye]","[maki-maki]","[cmarah]","[cmurung]","[cnangis]",
				"[csedih]","[csenyum]");
				
	$icon=array("<img src='../../dashboard/forms/obrolan/emot/akasmaran.gif' title='handup'>",
			"<img src='../../dashboard/forms/obrolan/emot/akedip.gif' title='bingung'>",
			"<img src='../../dashboard/forms/obrolan/emot/aketawa.gif' title='capek'>",
			"<img src='../../dashboard/forms/obrolan/emot/amarah.gif' title='cemen'>",
			"<img src='../../dashboard/forms/obrolan/emot/amelet.gif' title='cool'>",
			"<img src='../../dashboard/forms/obrolan/emot/anangis.gif' title='galau'>",
			"<img src='../../dashboard/forms/obrolan/emot/asakit.gif' title='hay'>",
			"<img src='../../dashboard/forms/obrolan/emot/bye.gif' title='kedip'>",
			"<img src='../../dashboard/forms/obrolan/emot/maki-maki.gif' title='kesetrum'>",
			"<img src='../../dashboard/forms/obrolan/emot/marah.gif' title='lol'>",
			"<img src='../../dashboard/forms/obrolan/emot/murung.gif' title='mewek'>",
			"<img src='../../dashboard/forms/obrolan/emot/nangis.gif' title='nangis'>",
			"<img src='../../dashboard/forms/obrolan/emot/sedih.gif' title='nyengir'>",
			"<img src='../../dashboard/forms/obrolan/emot/smile.gif' title='psimis'>",);
	$pesan=str_replace($symbol,$icon,$text_awal);
	
	
	// this is emoticon's operation bro 
	echo "<p><span class='label label-info text-center'><i class='icon-user icon-white'></i> ".$ulangi['username']." </span><small>&nbsp;".$pesan."</small>
	<small class='muted'>(".$ulangi['waktu'].")</small></p>";	
}
?>