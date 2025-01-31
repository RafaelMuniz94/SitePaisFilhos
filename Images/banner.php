<!-- Banners -->
<div id="banners" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
	<?php 
	$banners = new WP_Query([
		'post_type' => 'banners',
	]);
	$i = 0;
	while($banners->have_posts()) : $banners->the_post();
		$itens = get_field('cadastrar_banners');
		while( have_rows('cadastrar_banners') ): the_row(); 
			$fotoMobile = get_sub_field('imagem_mobile'); 
			$fotoDesktop = get_sub_field('imagem_desktop'); 
			$link = get_sub_field('link');
			$janela = get_sub_field('janela');
			?>
			<div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
				<img src="<?php echo $fotoDesktop['url']; ?>"  class="d-none d-md-block"  alt="<?php echo $fotoDesktop['alt'] ?>" />
				<img src="<?php echo $fotoMobile['url']; ?>"  class="d-sm-block d-md-none"  alt="<?php echo $fotoMobile['alt'] ?>" />
			</div>
			<?php $i++; endwhile;
		endwhile;
		?>
	</div>
	<a class="carousel-control-prev" href="#banners" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#banners" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>