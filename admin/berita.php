<?php 
	session_start();
if (isset($_SESSION['logged_in'])) { 
		include 'layouts/head.php';
		include 'layouts/nav.php';
?>
<a href="tambahBerita.php" class="btn btn-info"> Tambah Berita</a>
<div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Data Berita
          </div>
          <div class="card-body">
	<!-- <a href="index.php">Dashboard</a><br> -->
	<!-- <a href="tambahBerita.php">Tambah Berita</a><br> -->
	<div class="table-responsive">
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th>Penulis</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th>Penulis</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                  </tr>
                </tfoot>
                <tbody>

	<?php
		require_once '../src/berita.php';
		$berita = new berita;
		$data = $berita->read();
		// var_dump($data->fetch_assoc());
		while ($e = $data->fetch_assoc()) { ?>
			<tr>
                    <td><?php echo $e['judul']; ?></td>
                    <td><?php echo substr($e['konten'],0,30) ?></td>
                    <td><img src="<?php echo $e['gambar']; ?>" width="64"></td>
                    <td><?php echo $e['status']; ?></td>
                    <td><?php echo $e['username']; ?></td>
                    <td><a href="editBerita.php?berita_id=<?php echo $e['berita_id'] ?>" class="btn btn-warning"> Edit</a></td>
                    <td><a href="lib/hapusBerita.php?berita_id=<?php echo $e['berita_id'] ?>" class="btn btn-danger"> Hapus</a></td>
                  </tr>
		<?php } ?>
		</tbody>
		 </table>
            </div>
<?php 
	include 'layouts/foot.php';
} else {
	header('Location: login.php');
} ?>