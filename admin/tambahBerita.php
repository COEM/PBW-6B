<?php session_start();
if (isset($_SESSION['logged_in'])) { 
	include 'layouts/head.php';
		include 'layouts/nav.php';
?>
	<!-- <a href="index.php">Dashboard</a><br> -->
	<!-- <a href="berita.php">Kembali</a><br> -->
	<form action="lib/postBerita.php" method="post" enctype="multipart/form-data">
		<div class="col-lg-10">
			<div class="form-group">
				<label for="nama">Judul :</label>
				<input name="judul" type="text" class="form-control" required>
			</div>
			
			<label for="nama">Ketegori :</label>
			<div class="form-group">
				<select name="kategori" class="form-control" required
				<option value="">pilih kategori</option>
				<?php require_once '../src/kategori.php';
					$kategori = new kategori();
					$data = $kategori->read();
					while ($e = $data->fetch_assoc()) {
				?>
				<option value="<?php echo $e['id'] ?>"><?php echo $e['nama_kategori'] ?></option>

				<?php } ?>
			</select>
			</div>
			<div class="form-group">
				<label for="nama">Konten :</label>
				<textarea name="konten" class="form-control" rows="10" required></textarea>
			</div>
			<br>
			<label for="nama">Gambar :</label>
			<div class="form-group">
				<input type="file" name="gambar" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="" value="Simpan" class="btn btn-success ">
			</div>
		</div>
	</form>
<?php
	} else {
		header('Location: login.php');
	}
?>


