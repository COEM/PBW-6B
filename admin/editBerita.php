<?php session_start();
	require_once '../src/berita.php';
	$data = new berita();
	$cek = $data->detail($_GET['berita_id']);
	while ($e = $cek->fetch_assoc()) {
		$judul = $e['judul'];
		$kategori = $e['id_kategori'];
		$konten = $e['konten'];
		$gambar = $e['gambar'];
	}
	if (isset($_SESSION['logged_in'])) { 
		include 'layouts/head.php';
		include 'layouts/nav.php';
	?>
		<!-- <a href="index.php">Dashboard</a><br> -->
		<!-- <a href="berita.php">Kembali</a><br> -->
		<div class="col-lg-8">
			<form action="lib/postEditBerita.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="berita_id" value="<?php echo $_GET['berita_id'] ?>" >
			<input type="hidden" name="old_img" value="<?php echo $gambar ?>">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" name="judul" value="<?php echo $judul ?>" class="form-control">
			</div>
			<div class="form-group">
				Kategori
			<select name="kategori" class="form-control">
				<option value="<?php echo $kategori ?>">Pilih kategori</option>
				<?php
					require_once '../src/kategori.php';
					$kategori = new kategori();

					$data = $kategori->read();
					while ($e = $data->fetch_assoc()) {
				?>
				<option value="<?php echo $e['id'] ?>"><?php echo $e['nama_kategori'] ?></option>

				<?php } ?>
			</select>
			</div>
			<div class="form-group">
				Konten
			<textarea name="konten" class="form-control" rows="10"><?php echo $konten ?></textarea>
			</div>
			<div class="form-control">
				Gambar
			<input type="file" name="gambar" class="form-control">
			</div>
			
			<input type="submit" name="" value="Simpan" class="btn btn-warning">
		</form>
		</div>
	<?php
		} else {
			header('Location: login.php');
		}
?>


