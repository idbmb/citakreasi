<?php 	require_once('layout/header.php');	?>
	
	<!-- BEGIN HOME -->
	<section id="home" class="page">
		<div class="container">
			<div class="content cover text-center">
				<div class="row">
					<div class="col-lg-2" style="padding-top: 30px;">
					<!--	<img src="" alt="">  -->
					</div>
					<div class="col-lg-8" style="padding-top: 30px;">
						<h3><label>Siaran Radio Online Cita Kreasi FM</label></h3>
						<h3><label>Teknik Broadcasting</label></h3>
						<h3><label>SMK Negeri 1 Gorontalo</label></h3><br>
						<?php 
						if (isset($_SESSION['access'])) {						
							if ($_SESSION['access'] == 'admin' or 'guru' or 'siswa') {
						?>
<a href="logout.php" class="btn btn-primary"><i class="fa fa-user"></i><span> LOGOUT ! </span></a>
					<?php
							}
						}else {
					?>
<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user"></i><span> LOGIN ! </span></a>	
					
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="loginmodal-container">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h4><font color=#0000> Login user</font></h4></div>
<form role="form" method="POST" action="login.php">
<p id="notif"></p>
<input type="text" name="username" class="form-control" placeholder="Masukkan Username" required x-moz-errormessage='Form harus diisi 5-10 Karakter !'  pattern="[a-zA-Z]{4,10}">
<input type="password" name="password" class="form-control" placeholder="Password" required x-moz-errormessage='Form harus diisi 5-10 Karakter !'  pattern="[a-zA-Z]{5,10}">
<input type="submit" name="signin" class="btn btn-primary" value="Masuk">
<input type="submit" class="btn btn-danger" data-dismiss="modal" aria-hidden="true" value="Batal">
</form>
<!-- <div class="login-help"> -->
<!-- <a href="#">Register</a> - <a href="#">Forgot Password</a> -->
<!-- </div> -->
</div>
</div>
</div>
<?php
	}
?>
<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#login-help"><i class="fa fa-question-circle"></i><span> HELP ?</span></a>

<div class="modal fade" id="login-help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="loginmodal-help">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h4><font color=#0000> Bantuan</font></h4></div>
<div class="grid-body">
<h4 class="grid-title" align=justify><font color=#0000><b>Pertanyaan yang Sering Ditanyakan ?</b></font></h4>
<p align=justify><font color=#0000>Jika anda akan atau baru saja bergabung ke Citakreasi FM, mungkin pertanyaan-jawaban dibawah ini akan membantu anda. Apabila anda tidak menemukan jawaban atas pertanyaan anda.</font></p>	
<p align=justify><font color=#0000><b>T: Apakah Citakreasi FM itu?</b></font></p>
<p align=justify><font color=#0000>J: Citakreasi FM adalah program yang dikhususkan untuk jurusan Teknik Broadcasting di SMKN 1 Gorontalo, Yang menjadi alternatif sistem broadcasting sebuah radio sekolah dengan teknologi live streaming.</font></p>
<p align=justify><font color=#0000><b>T: Siapa saja yang boleh mendaftar ke Citakreasi FM?</b></font></p>
<p align=justify><font color=#0000>J: Citakreasi FM dapat diakses siapa saja untuk mendengarkan siaran radio, Namun terbatas pada Guru dan Siswa/i Teknik Broadcasting SMKN 1 Gorontalo yang bisa masuk dalam sistem (Dashboard).</font></p>
<p align=justify><font color=#0000><b>T: Apakah seorang Guru/Siswa/i dapat memiliki lebih dari satu akun?</b></font></p>
<p align=justify><font color=#0000>J: Tidak. Setiap Guru/Siswa/i hanya dapat memiliki sebuah akun Citakreasi FM. Setiap registrasi, Administrator akan memastikan nama yang ditampilkan (belum tentu merupakan nama Guru dan Siswa/i dapat berupa nama sembarang), dan nomor telepon belum pernah diregistrasikan sebelumnya.</font></p>
<p align=justify><font color=#0000><b>T: Apakah ada biaya untuk mengikuti Citakreasi FM?</b></font></p>
<p align=justify><font color=#0000>J: Tidak, Citakreasi FM adalah program bebas / tanpa biaya. Syaratnya hanya terdaftar sebagai Guru/Siswa/i Teknik Broadcasting SMKN 1 Gorontalo.</font></p>
<br>
<p align=justify><font color=#0000>Jika ada pertanyaan lainnya dapat menghubungi Admin/Guru yang terdaftar dan aktif di Citakreasi FM SMKN 1 Gorontalo.</font></p>
</div>
</div>
</div>
</div>
		<div class="page" style="padding-top: 30px;">
		    <audio controls autoplay="autoplay">
		    <source src="http://citakreasi.smkn1gorontalo.sch.id:2000/live" type="audio/mp3">Your browser does not support the audio element.</audio>
			</div>
					<div class="col-lg-2" style="padding-top: 30px;">
					<!--	<img src="" alt="">  -->
					</div>
				</div>
			</div>

		</div>
		
	</section>
	<!-- END HOME -->

	<!-- BEGIN ABOUT US -->
	<section id="about" class="page">
		<div class="container">
			<div class="content text-center">
				<div class="heading">
					<h2><i class="fa fa-paper-plane-o"></i>Teacher Profile</h2>
					<p>We are teacher on Teknik Broadcasting SMK Negeri 1 Gorontalo</p>
				</div>
				<div class="row">
					<?php 
						$guru 	=	mysql_query("SELECT * FROM users WHERE access='guru'");

						while ($data=mysql_fetch_array($guru)) {
					?>
					<div class="col-md-3">
						<div class="profile">
							<img src="dashboard/<?php echo $data['foto']; ?>" alt="Crew Cita Kreasi FM">
							<span class="name"><?php echo $data['name']; ?></span>
						</div>
					</div>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- END ABOUT US -->
	
	<!-- BEGIN PORTFOLIO -->
	<section id="portfolio" class="page">
		<div class="container">
			<div class="content text-center">
				<div class="heading">
					<h2><i class="fa fa-image"></i>Gallery Of Citakreasi</h2>	
					<p>Lensa Kegiatan Teknik Broadcasting SMK Negeri 1 Gorontalo</p>				
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="gallery">							
							<ul class="items popup-gallery list-unstyled clearfix">
								<?php 
									$gallery  = mysql_query("SELECT * FROM galeri ORDER BY galeri_tgl DESC");

									while ($data=mysql_fetch_array($gallery)) {
								?>
								<li class="item web">
									<center><a href="dashboard/<?php echo $data['galeri_link']; ?>" title="<?php echo $data['galeri_nama']; ?>">
										<img src="dashboard/<?php echo $data['galeri_link']; ?>" alt="<?php echo $data['galeri_nama']; ?>">
										<div class="heading"><?php echo $data['galeri_nama']; ?></div>
										<div class="overlay"><span><label><?php echo $data['galeri_keterangan']; ?></label></span></div>
									</a></center>
								</li>
								<?php
									}
								?>															
							</ul>
						</div>
					</div>
				</div>
			</div>
    </section>
	<!-- END PORTFOLIO -->
	
<?php 	require_once('layout/footer.php'); 	?>