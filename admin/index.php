<?php
	// require_once '../src/auth.php';
	session_start();
	// $auth = new auth();
	if (isset($_SESSION['logged_in'])) { 
		include 'layouts/head.php';
		include 'layouts/nav.php';
		require_once '../src/berita.php';
		$berita = new berita;
		$data = $berita->read();
?>

<div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-envelope"></i>
                </div>
                <div class="mr-5">
                  <?php echo $data->num_rows ?> Berita
                </div>
              </div>
              <a href="berita.php" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Lihat berita</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

    <!-- /.content-wrapper -->

    <!-- Bootstrap core JavaScript -->
    

	<?php 
		include 'layouts/foot.php';
	} else {
		header('Location: login.php');
	}

?>