<?php while ($e = $data->fetch_assoc()) { ?>
	<div class="post_wrapper clearfix post">
		<div class="post_content">
			<div class="post_main">
				<img src="<?php echo $e['gambar'] ?>" width="673" alt="post2">
				<div class="post_main_inner_wrapper">
					<div class="post_info">
						<a href="single-blog-fullwidth.html">
							<div class="post_date">
								<span class="post_main_month"><?php echo date("M", strtotime($e['tanggal'])) ?></span>
								<span class="post_main_date"><?php echo date("d", strtotime($e['tanggal'])) ?></span>
							</div>
						</a>
					</div>
					<div class="post_content_inner">
						<h2>
							<a href="index.php?berita_id=<?php echo $e['berita_id'] ?>"><?php echo $e['judul'] ?></a>
						</h2>
						<span class="post_author">
							by
							<span><a href="#" title="Posts by admin" rel="author"><?php echo $e['username'] ?></a></span> | 
							<span class="category">
								<a href="blog-right-sidebar.html"><?php echo $e['nama_kategori'] ?></a>
							</span>
						</span>
						<div class="post_padding">
							<p align="justify">
								<?php echo substr($e['konten'], 0, 150)."..." ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>