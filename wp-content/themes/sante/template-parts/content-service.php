<section class="service">
    <div class="container">
        <div class="service__header clearfix">
            <h2 class="service__title">Usluge</h2>
            <div class="service__nav">
                <i class="glyphicon glyphicon-menu-left"></i>
                <i class="glyphicon glyphicon-th-large"></i>
                <i class="glyphicon glyphicon-menu-right"></i>                        
            </div><!-- end .service__nav -->
        </div><!-- end .service__header -->
        <div class="service__content">
            <div class="owl-carousel">
                
                <?php $loop = new WP_Query( array( 'post_type' => 'usluge', 'order_by' => 'post_id', 'order' => 'ASC' ) ); ?>

                <?php while( $loop->have_posts() ) : $loop->the_post();  ?>

                    <div href="#" class="service__item">
                    <?php $image = get_field('service_image'); ?>
                    <?php if ( !empty( $image ) ): ?>
                        <div class="img-wrap" style="max-height: 145px; overflow: hidden;">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive">    
                        </div>
                    <?php endif; ?>
                        <h4><?php the_title(); ?></h4>
                        <?php $service_description = the_field('service_description'); ?>
                        <?php if ( !empty ($service_description) ) :?>
                            <p><?php echo $service_description; ?></p>
                        <?php endif; ?>
                    </div><!-- end service__item -->

                <?php endwhile; ?>
                
                <?php wp_reset_query(); // use this function to reset global Query variables ?>

               
            </div><!-- end .owl-carousel -->
        </div><!-- end .service__content -->
    </div><!-- end .container -->
</section><!-- end .service -->