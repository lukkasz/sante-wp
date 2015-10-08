<?php
/*
	Template Name: Galerija Page
*/

	$args = array(
		'post_type' => 'galerija',
		'orderba'	=> 'date',
		'order'		=> 'ASC'

	);

	$loop = new WP_Query( $args );

get_header(); ?>

	<?php get_template_part('template-parts/content', 'feature-image'); ?>
	
	<section class="container gallery">
		<ul class="gallery__nav">
			<li class="gallery__nav__item" data-filter="*"><a class="active" href="#">Sve</a></li>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<li class="gallery__nav__item" data-filter=".<?php echo strtolower( get_the_title() );?>"><a href="#"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ul><!-- end .gallery__nav -->

		<div class="gallery__content is-loading row">
		<?php 
			while ( $loop->have_posts() ) : $loop->the_post();
				if ( get_post_gallery() ):
					$gallery = get_post_gallery( get_the_ID(), false ); 
				    foreach ($gallery['src'] as $src): ?>
					    <div class="gallery__item <?php echo strtolower( get_the_title() );?>">
							<img src="<?php echo $src; ?>" alt="">
						</div>
				<?php 
					endforeach; 
				endif; 
			endwhile; 
			wp_reset_postdata(); ?>
		</div><!-- end -gallery__content -->
	</section><!-- end .gallery -->
	

	<?php get_template_part('template-parts/content', 'cta');?>

<?php get_footer(); ?>