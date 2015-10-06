<?php
/*
	Template Name: Usluge Page
*/

get_header(); ?>

<section class="page-header">
		<?php if( has_post_thumbnail() ) : ?>
			 <?php echo get_the_post_thumbnail(); ?>
		<?php else: ?>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/section-bg-white.jpg" alt="">
		<?php endif; ?>
    <div class="page-header--overlay">
        <div class="container">
            <h2><?php the_title(); ?></h2>    
        </div>    
    </div><!-- section-heading--overlay -->
</section><!-- end .page-header -->

<section>
    <div class="container">
        <!--<i class="glyphicon glyphicon-leaf"></i>-->
        
        <!-- Nav tabs -->
        <ul id="navTabs" class="nav nav-tabs nav-tabs--vertical" role="tablist">
        	<?php $loop = new WP_Query( array( 'post_type' => 'usluge', 'order_by' => 'post_id', 'order' => 'ASC' ) ); ?>

          <?php while( $loop->have_posts() ) : $loop->the_post();  ?>
          	<?php $service_attribute = get_field('service_attribute'); ?>
						<li role="presentation"><a href="#<?php echo $service_attribute; ?>" aria-controls="tijelo" role="tab" data-toggle="tab"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
            
        </ul>

        <!-- Nav Mobile -->
        <div class="nav-tabs--wrap">
            <select name="tab-select" id="navTabs--mobile" class="nav-tabs--mobile">
             <?php while( $loop->have_posts() ) : $loop->the_post();  ?>
             	<?php $service_attribute = get_field('service_attribute'); ?>
             	<option value="#<?php echo $service_attribute; ?>"><?php the_title(); ?></option>
             <?php endwhile; ?>
            </select>
        </div>

        <!-- Tab panes -->
        <div class="tab-content tab-content--right">
        	<?php while( $loop->have_posts() ) : $loop->the_post();  ?>
        		<?php $service_attribute = get_field('service_attribute'); ?>
						<div role="tabpanel" class="tab-pane active" id="<?php echo $service_attribute; ?>">
						<?php	
								// Loop throught service_ items 
								// Store service_item_title, service_item_image and service_item_description
						    // if service_item exists echo name, image and desctiprion
								for ($i = 0; $i<=6; $i++) : ?>
									<?php 
										$service_item_title = 'service_item_title_'.$i; 
										$service_item_image = 'service_item_image_'.$i;
										$service_item_description = 'service_item_description_'.$i;
									?>
									<?php $service_item = get_field($service_item_title) ?>

									<?php if ( !empty( $service_item ) ): ?>
									<div class="product product--list">
                    <div class="product__img">
                        <img src="<?php echo get_field($service_item_image)['url']; ?>" alt="" class="img-responsive">
                    </div>
                    <div class="product__body">
                        <h4 class="product__heading"><?php echo get_field($service_item_title); ?></h4>
                        <p class="product__text"><?php echo get_field($service_item_description); ?></p>
                    </div>
                	</div><!-- end .product -->	
                	<?php endif; ?>
													
								
						<?php endfor; ?>
							
						</div><!-- end .tab-pane -->

						
        	<?php endwhile; ?>
            
        </div><!-- end .tab-content --> 
    </div><!-- end .container -->

</section>

<section class="cta">
    <div class="container">
        <span class="cta__img"><img src="images/logo.png" alt=""></span>
        <span class="cta__text">Imate pitanje?<span>Želite dogovirti termin?</span></span><a href="#" class="cta__btn">Kontaktirajte nas</a>
    </div>
</section><!-- end .cta -->

<?php get_footer(); ?>