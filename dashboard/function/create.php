<?php 
	// Admin Create
	if (isset($_POST['create-admin'])) {
		$name			=	$_POST['name'];
		$username		=	$_POST['username'];
		$password		=	$_POST['password'];
		$alamat			=	$_POST['alamat'];
		$telp			=	$_POST['telp'];
		$status			=	$_POST['status'];
		$gender			= 	$_POST['gender'];
		$access			=	'admin';
		$folder 		= 	'foto';
        $tmp_name 		= 	$_FILES["foto"]["tmp_name"];
        $link 			= 	$folder."/".$_FILES["foto"]["name"];

		//Upload ke folder foto
        move_uploaded_file($tmp_name, $link);

		$admin 			=	mysql_query("INSERT INTO users (`id`, `name`, `username`, `password`, `alamat`, 
													`telp`, `status`, `gender`, `foto`, `access`) 
										VALUES (NULL, '$name', '$username', '$password', '$alamat', '$telp', '$status', '$gender', '$link', '$access')");

		if ($admin) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?users=admin'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}
?>
<?php 
	// Guru Create
	if (isset($_POST['create-guru'])) {
		$noinduk		=	$_POST['noinduk'];
		$name			=	$_POST['name'];
		$username		=	$_POST['username'];
		$password		=	$_POST['password'];
		$alamat			=	$_POST['alamat'];
		$telp			=	$_POST['telp'];
		$status			=	$_POST['status'];
		$gender			= 	$_POST['gender'];
		$access			=	'guru';
		$folder 		= 	'foto';
        $tmp_name 		= 	$_FILES["foto"]["tmp_name"];
        $link 			= 	$folder."/".$_FILES["foto"]["name"];

		//Upload ke folder foto
        move_uploaded_file($tmp_name, $link);

		$guru 			=	mysql_query("INSERT INTO users (`id`, `nomor_induk`, `name`, `username`, `password`, `alamat`, 
													`telp`, `status`, `gender`, `foto`, `access`) 
										VALUES (NULL, '$noinduk', '$name', '$username', '$password', '$alamat', '$telp', '$status', '$gender', '$link', '$access')");

		if ($guru) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?users=guru'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	// Siswa Create
	if (isset($_POST['create-siswa'])) {
		$noinduk		=	$_POST['noinduk'];
		$name			=	$_POST['name'];
		$username		=	$_POST['username'];
		$password		=	$_POST['password'];
		$alamat			=	$_POST['alamat'];
		$telp			=	$_POST['telp'];
		$status			=	$_POST['status'];
		$gender			= 	$_POST['gender'];
		$kelas			=	$_POST['kelas'];
		$access			=	'siswa';
		$folder 		= 	'foto';
        $tmp_name 		= 	$_FILES["foto"]["tmp_name"];
        $link 			= 	$folder."/".$_FILES["foto"]["name"];

		//Upload ke folder foto
        move_uploaded_file($tmp_name, $link);

		$siswa 			=	mysql_query("INSERT INTO users (`id`, `nomor_induk`, `name`, `username`, `password`, `alamat`, 
													`telp`, `status`, `gender`, `foto`, `kelas`, `access`) 
										VALUES (NULL, '$noinduk', '$name', '$username', '$password', '$alamat', '$telp', '$status', '$gender', '$link', '$kelas', '$access')");

		if ($siswa) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?users=siswa'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	//Upload Materi
	if(isset($_POST['upload'])){
        $allowed_ext    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
        $file_name      = $_FILES['file']['name'];
        $file_ext       = strtolower(end(explode('.', $file_name)));
        $file_size      = $_FILES['file']['size'];
        $file_tmp       = $_FILES['file']['tmp_name'];
        
        $nama           = $_POST['nama'];
        $tgl            = date("Y-m-d");
        
        if(in_array($file_ext, $allowed_ext) === true){
            if($file_size < 20440700){
                $lokasi = '../materi/'.$nama.'.'.$file_ext;
                move_uploaded_file($file_tmp, $lokasi);
                $in = mysql_query("INSERT INTO download VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
                if($in){
                    echo "<meta http-equiv='refresh' content='0;URL= ?modul=download '/>";
                }else{
                    echo '<div class="error">ERROR: Gagal upload file!</div>';
                }
            }else{
                echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 20 Mb!</div>';
            }
        }else{
            echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
        }
    }
?>


<?php 
	// Request lagu
	if (isset($_POST['lagu'])) {
		$name			=	$_POST['name'];
		$lagu			=	$_POST['lagu'];
		$pesan			=	$_POST['pesan'];
		$waktu			=	date("h:m:s");
		
		$request 		=	mysql_query("INSERT INTO request VALUES(NULL, '$name', '$lagu', '$pesan', '$waktu')");

		if ($request) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Lagu berhasil di request Lihat di Daftar Antrian.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?request=daftar'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Lagu gagal di request.
					</div>";
		}			
	}

?>

<?php

    if (isset($_POST['upload-foto'])) {
        $nama = $_POST['judul'];
        $keterangan = $_POST['keterangan'];
        $folder = "gallery";
        $tmp_name = $_FILES["foto"]["tmp_name"];
        $link = $folder."/".$_FILES["foto"]["name"];

        //kode untuk upload ke folder uploads
        move_uploaded_file($tmp_name, $link);

        //masukkan datanya ke database
        $galeri = mysql_query("INSERT INTO galeri (galeri_nama, galeri_keterangan, galeri_link, galeri_tgl) VALUES('$nama','$keterangan','$link', now())");

        if ($galeri) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?galeri=galeri'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}
    }
?>