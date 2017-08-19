<?php session_start();
if (isset($_SESSION['logged_in'])) { ?>
	<a href="index.php">Dashboard</a><br>
	<a href="berita.php">Kembali</a><br>
	<form action="lib/postBerita.php" method="post" enctype="multipart/form-data">

		Judul
		<input type="text" name="judul">
		<br>
		Kategori
		<select name="kategori">
			<option value="">pilih kategori</option>
			<?php
				require_once '../src/kategori.php';
				$kategori = new kategori();
				$data = $kategori->read();
				while ($e = $data->fetch_assoc()) {
			?>
			<option value="<?php echo $e['id'] ?>"><?php echo $e['nama_kategori'] ?></option>

			<?php } ?>
		</select>
		<br>
		Konten
		<textarea name="konten"></textarea>
		<br>
		Gambar
		<input type="file" name="gambar"><br>
		<input type="submit" name="" value="Simpan">
	</form>
<?php
	} else {
		header('Location: login.php');
	}
?>


