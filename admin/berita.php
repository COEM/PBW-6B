<?php 
	session_start();
if (isset($_SESSION['logged_in'])) { ?>
	<a href="index.php">Dashboard</a><br>
	<a href="tambahBerita.php">Tambah Berita</a><br>
	<?php
		require_once '../src/berita.php';
		$berita = new berita;
		$data = $berita->read();
		// var_dump($data->fetch_assoc());
		while ($e = $data->fetch_assoc()) {
			echo $e['judul']; ?></b>, <i><?php echo substr($e['konten'],0,30) ?>...</i><a href="lib/hapusBerita.php?berita_id=<?php echo $e['berita_id'] ?>"> Hapus</a> <br>
		<?php } ?>
<?php } else {
	header('Location: login.php');
} ?>