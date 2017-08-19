<?php
	include 'layouts/_header.php';
	require_once 'src/berita.php';
	$berita = new berita();
?>
	<div class="container">
			<div class="row">
				<?php if(isset($_GET['berita_id'])){
					$data = $berita->detail($_GET['berita_id']);
					include 'page/singlePost.php';
				 } else{
					$data = $berita->read();
				?>
					<div class="span8">
					<?php include 'page/allPost.php'; ?>
					<section id="blog_pagination" class="clearfix">
						<div class="pagination">
							<span class="page-numbers current">1</span>
							<a class="page-numbers" href="#">2</a>
							<a class="next page-numbers" href="#"><i class="ci_icon-angle-right"></i></a>
						</div>
					</section>

				</div>
				<?php } ?>
				<?php include 'layouts/_tag.php'; ?>
			</div>
		</div>
		<?php
	include 'layouts/_footer.php';
?>