<?php
	session_start();
	if (isset($_SESSION['logged_in'])) { ?>
		<?php
			require_once '../../src/berita.php';
			// $berita = new berita();

			

			$berita = new berita();
			$berita->idKategori = $_POST['kategori'];
			$berita->judul = $_POST['judul'];;
			$berita->konten = $_POST['konten'];
			if (!empty($_FILES['gambar']['tmp_Namr'])) {
				$berita->gambar = $base64img;
				//gambar
				$file_tmp =  $_FILES['gambar']['tmp_name'];;
				$type = pathinfo($file_tmp, PATHINFO_EXTENSION);
			    $data = file_get_contents($file_tmp);
			    $base64img = 'data:image/' . $type . ';base64,' . base64_encode($data);
			} else {
				$berita->gambar = $_POST['old_img'];
			}
			$berita->status = "post";
			$berita->username = $_SESSION['username'];
			$berita->tanggal = date('Y-m-d');
			$berita->update($_POST['berita_id']);
			// var_dump($berita);
			header('Location: ../berita.php');
		?>
	<?php } else {
	header('Location: login.php');
} ?>