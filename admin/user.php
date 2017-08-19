<?php 
	session_start();
if (isset($_SESSION['logged_in'])) {
include 'layouts/head.php';
		include 'layouts/nav.php';
?>
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
                    <th>Username</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Username</th>
                    <th>Email</th>
                  </tr>
                </tfoot>
                <tbody>
	<?php
		require_once '../src/user.php';
		$user = new user;
		$data = $user->read();
		// var_dump($data->fetch_assoc());
		while ($e = $data->fetch_assoc()) {
			?>
			<tr>
				<td><?php echo $e['username']; ?></td>
				<td><?php echo $e['email'] ?></td>
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