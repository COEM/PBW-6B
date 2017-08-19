<?php while ($e = $data->fetch_assoc()) { ?>
<div class="span8 content_with_right_sidebar single_post">
	<div class="post_info">
		<div class="post_date">
			<span class="post_main_month"><?php echo date("M", strtotime($e['tanggal'])) ?></span>
			<span class="post_main_date"><?php echo date("d", strtotime($e['tanggal'])) ?></span>
		</div>
	</div>
	<div class="post_content">
		<div class="postmeta-above clearfix">
			<h5>
				<a href="#"><?php echo $e['judul'] ?></a>
			</h5>
		</div>
		<div class="post_main post">
			<p align="justify">
				<?php echo $e['konten']?>
			</p>
		</div>
	</div>
	<section class="single_post_nav">
		<div class="post-navigation">
			<div class="previous_post">
				<a href="#" rel="prev">
					<span class="previous_post_icon"><i class="ci_icon-angle-left"></i></span>
					Previous post
				</a>
			</div>
			<div class="next_post">
				<a href="#" rel="next">
					Next post
					<span class="next_post_icon"><i class="ci_icon-angle-right"></i></span>
				</a>
			</div>
		</div>
	</section>

</div>
<?php } ?>