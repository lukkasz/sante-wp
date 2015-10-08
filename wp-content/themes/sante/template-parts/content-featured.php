
<section class="featured">
    <div class="container">
        <div class="featured__header">
            <i class="glyphicon glyphicon-leaf"></i>
            <h2>Izdvojeni tretmani</h2>
        </div><!-- end .featured__header -->
        <div class="featured__content">
            <?php 
            $args = array(
                'post_type' => 'najave',
                'order_by' => 'post_id',
                'order' => 'asc',
                'posts_per_page' => 4 
            );

            $loop = new WP_Query( $args ); ?>

            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="col-md-6">
                <div class="featured__product product product--grid">
                    <div class="product__img">
                        <?php the_post_thumbnail('medium', array('class' => 'img-responsive') ); ?>
                    </div><!-- end .media-left -->
                    <div class="product__body">
                        <h4 class="product__heading"><?php the_title(); ?></h4>
                        <div class="product__text"><?php the_content(); ?></div>
                    </div><!-- end .media-body -->
                </div><!-- end .media -->
            </div><!-- end .col-sm-6 -->    

            <?php endwhile; ?>
            <?php wp_reset_postdata(); // use this function to reset global Query variables ?>


        </div><!-- end .featured__content -->
    </div><!-- end .container -->
</section><!-- end .featured -->