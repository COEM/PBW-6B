<?php
	session_start();
	if (isset($_SESSION['logged_in'])) { ?>
		<?php
			require_once '../../src/berita.php';
			$berita = new berita();
			$berita->idKategori = $_POST['kategori'];
			$berita->judul = $_POST['judul'];;
			$berita->konten = $_POST['konten'];
			if ($_FILES['gambar']['tmp_name']) {
				$file_tmp =  $_FILES['gambar']['tmp_name'];
				$type = pathinfo($file_tmp, PATHINFO_EXTENSION);
			    $data = file_get_contents($file_tmp);
			    $base64img = 'data:image/' . $type . ';base64,' . base64_encode($data);
			    $berita->gambar = $base64img;
			} else {
				$berita->gambar = null;
			}
			$berita->status = "post";
			$berita->username = $_SESSION['username'];
			$berita->tanggal = date('Y-m-d');
			$berita->create();
			// var_dump($berita);
			header('Location: ../berita.php');
		?>
	<?php } else {
	header('Location: login.php');
} ?>