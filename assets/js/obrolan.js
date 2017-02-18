$(document).ready(function()
{
			//load online
			function ol()
			{
			$(".boxonline").load("../../dashboard/forms/obrolan/online.php");	
			}
			setInterval(ol,1000);
			//kirim pesan chat
			$("#formpesan").submit(function()
			{
				var pesan=$(".input-xlarge").val();
				$.ajax({
					url : '../../dashboard/forms/obrolan/kirim.php',
					type : 'POST',
					data : 'pesan='+pesan,
					success : function(pesan)
					{
						// html5 DOM audio play
						var suara=document.getElementById("suara");
						suara.play();
						if(pesan=="terkirim")
						{
							$(".input-xlarge").val("");
						}
						else
						{
							return false;
						}
					},
					});
				return false;
			
			});
			//hide html audio
			var audio=$('#suara');
			audio.hide();
			//load pesan chat
			function ambilpesan()
			{
				$("#boxpesan").load("../../dashboard/forms/obrolan/ambil.php");
				var con = document.getElementById("boxpesan");
				con.scrollTop = con.scrollHeight;
			}
			setInterval(ambilpesan,1000);
			//load emoticon
			$("#emot").popover({
			html: true,
			content: function(){
			// emoticon from www.animated-gifs.eu
			return "<img src='../../dashboard/forms/obrolan/emot/akasmaran.gif' height='30px' width='30px' title='[kasmaran]' onClick=\"addemot('[kasmaran]')\">"+
			"<img src='../../dashboard/forms/obrolan/emot/akedip.gif' height='30px' width='30px' title='[kedip]' onClick=\"addemot('[kedip]')\">"+
			"<img src='../../dashboard/forms/obrolan/emot/aketawa.gif' height='30px' width='30px' title='[ketawa]' onClick=\"addemot('[ketawa]')\">"+
			"<img src='../../dashboard/forms/obrolan/emot/amarah.gif' height='30px' width='30px' title='[marah]' onClick=\"addemot('[marah]')\">"+
			"<img src='../../dashboard/forms/obrolan/emot/amelet.gif' height='30px' width='30px' title='[melet]' onClick=\"addemot('[melet]')\">"+
			"<img src='../../dashboard/forms/obrolan/emot/anangis.gif' height='30px' width='30px' title='[nangis]' onClick=\"addemot('[nangis]')\">"+
			"<img src='../../dashboard/forms/obrolan/emot/asakit.gif' height='30px' width='30px' title='[sakit]' onClick=\"addemot('[sakit]')\">"+
			"<img src='../../dashboard/forms/obrolan/emot/bye.gif' height='30px' width='30px' title='[bye]' onClick=\"addemot('[bye]')\">"+
			"<img src='../../dashboard/forms/obrolan/emot/maki-maki.gif' height='30px' width='30px' title='[maki-maki]' onClick=\"addemot('[maki-maki]')\">"+
			"<img src='../../dashboard/forms/obrolan/emot/marah.gif' height='30px' width='30px' title='[cmarah]' onClick=\"addemot('[cmarah]')\">"+
			"<img src='../../dashboard/forms/obrolan/emot/murung.gif' height='30px' width='30px' title='[cmurung]' onClick=\"addemot('[cmurung]')\">"+
			"<img src='../../dashboard/forms/obrolan/emot/nangis.gif' height='30px' width='30px' title='[cnangis]' onClick=\"addemot('[cnangis]')\">"+
			"<img src='../../dashboard/forms/obrolan/emot/sedih.gif' height='30px' width='30px' title='[csedih]' onClick=\"addemot('[csedih]')\">"+
			"<img src='../../dashboard/forms/obrolan/emot/smile.gif' height='30px' width='30px' title='[csenyum]' onClick=\"addemot('[csenyum]')\">";
			}
			});
			
			
});
// function add emot to chat form
function addemot(emot)
{
	document.forms[0].pesan.value+=" "+emot;
}
