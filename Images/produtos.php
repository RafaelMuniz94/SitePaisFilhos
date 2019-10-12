<?php
/*template name: Produtos*/
?>
<?php get_header() ?>
<div class="title"><?php the_title(); ?></div>
<section class="container main">
	<div class=" padding1">
		<div class="row">
			<div class="col-12">
				<?php while(have_posts()) : the_post(); ?>
					<div class="col-md-12">
						<p class="text-center"><?php the_content(); ?></p> <br>
					</div>
				<?php endwhile ?>
			</div>
			<div class="col-md-12">
				<!-- Loop Produtos -->
				<?php 
				$produtos = new WP_Query([
					'posts_per_page' => 16,
					'post_type' => 'produtos'
				]);
				?>
				<div class="row">
					<?php
					while($produtos->have_posts()) : $produtos->the_post();?>
						<article class="col-md-4 box1">
							<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail( $size = 'Tamanho Pequeno', ['class'=>'img-fluid']); ?>
								<h3 class="title2"><?php the_title(); ?></h3>
								<?php the_excerpt();?><br>
							</a>
						</article>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer() ?>