
<?php
	session_start();
	if (isset($_SESSION['logged_id'])) { ?>
		<?php
			require_once '../../src/berita.php';
			// $berita = new berita();

			//gambar
			$file_tmp =  $_FILES['gambar']['tmp_name'];;
			$type = pathinfo($file_tmp, PATHINFO_EXTENSION);
		    $data = file_get_contents($file_tmp);
		    $base64img = 'data:image/' . $type . ';base64,' . base64_encode($data);

			$berita = new berita();
			$berita->idKategori = $_POST['kategori'];
			$berita->judul = $_POST['judul'];;
			$berita->konten = $_POST['konten'];
			$berita->gambar = $base64img;
			$berita->status = "post";
			$berita->username = "cacing";
			$berita->tanggal = "2017/08/20";
			$berita->create();
			header('Location: ../berita.php');
		?>
	<?php } else {
	header('Location: ../login.php');
} ?>