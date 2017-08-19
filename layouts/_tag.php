
<?php
	require 'src/kategori.php';
	$kategori = new kategori();
	$data = $kategori->read();
?>
<aside class="span4 sidebar sidebar_right">
	<div class="widget widget_tag_cloud">
		<div class="sidebar-widget-heading">
			<h3>Kategori</h3>
		</div>
		<div class="tagcloud">
			<?php while ($e = $data->fetch_assoc()) { ?>
			<a href="#" title="2 topics"><?php echo $e['nama_kategori'] ?></a>
			<?php } ?>
		</div>
	</div>
</aside>