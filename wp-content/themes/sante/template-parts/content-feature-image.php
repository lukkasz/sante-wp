<section class="feature-image">
		<?php if( has_post_thumbnail() ) : ?>
			 <?php echo get_the_post_thumbnail(); ?>
		<?php else: ?>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/section-bg-white.jpg" alt="">
		<?php endif; ?>
    <div class="feature-image--overlay">
        <div class="container">
            <h2><?php the_title(); ?></h2>    
        </div>    
    </div><!-- end feature-image--overlay -->
</section><!-- end .feature-image -->