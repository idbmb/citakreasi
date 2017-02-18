	<div class="wrapper row-offcanvas row-offcanvas-left">
		<!-- BEGIN SIDEBAR -->
		<aside class="left-side sidebar-offcanvas">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">					
						<img src="<?php echo $_SESSION['foto']; ?>" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info"><br/>
						<p><?php echo $_SESSION['name']; ?></p>
						<a href="?profile=<?php echo $_SESSION['id']; ?>"><i class="fa fa-circle text-green"></i> <?php echo $_SESSION['username']; ?></a>
					</div>
				</div><br/>			
				<ul class="sidebar-menu">
					<li class="active">
						<a href="/dashboard">
							<i class="fa fa-unlock"></i><span>Dashboard</span>
						</a>
					</li>
				<!--	<li class="menu">
						<a href="/" target="_blank">
							<i class="fa fa-home"></i><span>Home</span>
						</a>
					</li> -->
				<?php 
					if (isset($_SESSION['access'])) {
						if ($_SESSION['access'] == 'admin') {
				?>					
					<li class="menu">
						<a href="#">
							<i class="fa fa-users"></i><span>Users</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">
							<li><a href="?users=admin">Admin</a></li>
							<li><a href="?users=guru">Guru</a></li>
							<li><a href="?users=siswa">Siswa</a></li>
						</ul>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-book"></i><span>Materi Pembelajaran</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">							
							<li><a href="?modul=upload">Upload</a></li>
							<li><a href="?modul=download">Download</a></li>
						</ul>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-music"></i><span>Request</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">							
							<li><a href="?request=lagu">Request Lagu</a></li>
							<li><a href="?request=daftar">Daftar Request Lagu</a></li>
						</ul>
					</li>
					<li>
						<a href="?galeri=galeri">
							<i class="fa fa-camera"></i><span>Gallery</span>
						</a>
					</li>
					<li>
						<a href="?obrolan=obrolan">
						<i class="fa fa-comments"></i><span>Obrolan Users</span>
						</a>
					</li>
					<li>
						<a href="?users=bantuan">
						<i class="fa fa-question-circle"></i><span>Bantuan</span>
						</a>
					</li>
					
				<?php
						}elseif ($_SESSION['access'] == 'guru') {
				?>
					<li class="menu">
						<a href="#">
							<i class="fa fa-users"></i><span>Users</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">
							<li><a href="?users=siswa">Siswa</a></li>
						</ul>
					</li>

					<li class="menu">
						<a href="#">
							<i class="fa fa-book"></i><span>Materi Pembelajaran</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">							
							<li><a href="?modul=upload">Upload</a></li>
							<li><a href="?modul=download">Download</a></li>
						</ul>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-music"></i><span>Request</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">							
							<li><a href="?request=lagu">Request Lagu</a></li>
							<li><a href="?request=daftar">Daftar Request Lagu</a></li>
						</ul>
					</li>
                        <li>
						<a href="?obrolan=obrolan">
						<i class="fa fa-comments"></i><span>Obrolan Users</span>
						</a>
					</li>
					<li>
						<a href="?users=bantuan">
						<i class="fa fa-question-circle"></i><span>Bantuan</span>
						</a>
					</li>


				<?php
						}elseif ($_SESSION['access'] == 'siswa') {
				?>
					<li class="menu">
						<a href="#">
							<i class="fa fa-book"></i><span>Materi Pembelajaran</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">
							<li><a href="?modul=download">Download</a></li>
						</ul>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-music"></i><span>Request</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">							
							<li><a href="?request=lagu">Request Lagu</a></li>
							<li><a href="?request=daftar">Daftar Request Lagu</a></li>
						</ul>
					</li>
						<li>
						<a href="?obrolan=obrolan">
						<i class="fa fa-comments"></i><span>Obrolan Users</span>
						</a>
					</li>
					<li>
						<a href="?users=bantuan">
						<i class="fa fa-question-circle"></i><span>Bantuan</span>
						</a>
					</li>
					<?php
						}elseif ($_SESSION['access'] == 'penyiar') {
				?>
					<li class="menu">
						<a href="#">
							<i class="fa fa-book"></i><span>Materi Pembelajaran</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">
							<li><a href="?modul=download">Download</a></li>
						</ul>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-music"></i><span>Request</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">							
							<li><a href="?request=lagu">Request Lagu</a></li>
							<li><a href="?request=daftar">Daftar Request Lagu</a></li>
						</ul>
					</li>
						<li>
						<a href="?obrolan=obrolan">
						<i class="fa fa-comments"></i><span>Obrolan Users</span>
						</a>
					</li>
					<li>
						<a href="?users=bantuan">
						<i class="fa fa-question-circle"></i><span>Bantuan</span>
						</a>
					</li>
				<?php
						}
					}
				?>										
				</ul>
			</section>
		</aside>
		<!-- END SIDEBAR -->