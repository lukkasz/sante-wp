<?php
/*
	Template Name: Galerija Page
*/


get_header(); ?>

	<?php get_template_part('template-parts/content', 'feature-image'); ?>

	<?php 

		$args = array(
			'type'	=> 'post',
			'order_by'	=> 'name',
			'taxonomy'	=> 'category',
		);

	
		$posts = get_posts( array('post_type' => 'galerija') );
		
	?>

	<section class="gallery">
            <ul class="gallery__nav">
            <?php foreach ($posts as $post): ?>
                <li class="gallery__nav__item" data-filter=".<?php echo lcfirst($post->post_title); ?>"><a href="#"><?php echo ucfirst($post->post_title); ?></a></li>
            <?php endforeach; ?>
            </ul>
						
						<div class="gallery__content">
							<?php foreach ($posts as $post) : ?>
									<?php $images = get_post_gallery_images($post->ID); ?>
										<?php foreach ($images as $image):  ?>
										<div class="gallery__item <?php echo lcfirst($post->post_title);?> ">
										<img src="<?php echo $image; ?>" alt="">
										</div>
								<?php endforeach; ?>
									
							<?php endforeach; ?>
							</div><!-- end -->
        </section>



	

	<?php get_template_part('template-parts/content', 'cta');?>

<?php get_footer(); ?>