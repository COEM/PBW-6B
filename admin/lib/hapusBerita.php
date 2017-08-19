
<?php
	session_start();
	if (isset($_SESSION['logged_in'])) { ?>
		<?php
			require_once '../../src/berita.php';
			// $berita = new berita();

			//gambar
			$berita = new berita();

			$berita->delete($_GET['berita_id']);
			header('Location: ../berita.php');
		?>
	<?php } else {
	header('Location: ../login.php');
} ?>