<?php
/*
	Template Name: Home Page
*/


// Advance Custom Fields
	// lead text
	$lead_text_primary		= get_field('lead_text_primary');
	$lead_text_secondary	= get_field('lead_text_secondary');
	$lead_text_accent			= get_field('lead_text_accent');

	// working time
	$working_day	= get_field('mon_fri' );
	$saturday			= get_field('saturday');
	$sunday				= get_field('sunday');


get_header(); ?>

	<section class="lead">
    <div class="lead__image">
        <div class="lead__text">
            <p class="lead__text--primary"><?php echo $lead_text_primary; ?></p>
            <p class="lead__text--accent"><?php echo $lead_text_accent; ?></p>
            <p class="lead__text--secondary"><?php echo $lead_text_secondary; ?></p>
        </div><!-- end .lead__text -->
        <div class="working-time">
            <div class="working-time__item">
                PON-PET <span><?php echo $working_day; ?></span>
            </div>
            <div class="working-time__item">
                SUBOTA <span><?php echo $saturday; ?></span>
            </div>
            <div class="working-time__item">
                Nedjelja <span><?php echo $sunday; ?></span>
            </div>
        </div><!-- end .working-time -->
    </div><!-- end .lead__image -->
</section><!-- end .lead -->

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
                <div class="service__item">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/lice.jpg" alt="" class="img-responsive">
                    <h4>Tretman lica</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ratione, omnis accusamus harum blanditiis fugiat quis iusto!</p>
                </div><!-- end service__item -->
                <div class="service__item">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/lice.jpg" alt="" class="img-responsive">
                    <h4>Tretman lica</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ratione, omnis accusamus harum blanditiis fugiat quis iusto!</p>
                </div><!-- end service__item -->
                <div class="service__item">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/lice.jpg" alt="" class="img-responsive">
                    <h4>Tretman lica</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ratione, omnis accusamus harum blanditiis fugiat quis iusto!</p>    
                </div><!-- end service__item -->
                <div class="service__item">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/lice.jpg" alt="" class="img-responsive">
                    <h4>Tretman lica</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ratione, omnis accusamus harum blanditiis fugiat quis iusto!</p>
                </div><!-- end service__item -->
                <div class="service__item">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/lice.jpg" alt="" class="img-responsive">
                    <h4>Tretman lica</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ratione, omnis accusamus harum blanditiis fugiat quis iusto!</p>
                </div><!-- end service__item -->
                <div class="service__item">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/lice.jpg" alt="" class="img-responsive">
                    <h4>Tretman lica</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ratione, omnis accusamus harum blanditiis fugiat quis iusto!</p>
                </div><!-- end service__item -->
                <div class="service__item">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/lice.jpg" alt="" class="img-responsive">
                    <h4>Tretman lica</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ratione, omnis accusamus harum blanditiis fugiat quis iusto!</p>
                </div><!-- end service__item -->
            </div><!-- end .owl-carousel -->
        </div><!-- end .service__content -->
    </div><!-- end .container -->
</section><!-- end .service -->

<hr class="border--primary">

<section class="featured">
    <div class="container">
        <div class="featured__header">
            <i class="glyphicon glyphicon-leaf"></i>
            <h2>Izdvojeni tretmani</h2>
        </div><!-- end .featured__header -->
        <div class="featured__content">
            <div class="col-md-6">
                <div class="featured__product product product--grid">
                    <div class="product__img">
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/limfna.jpg" alt="">
                    </div><!-- end .media-left -->
                    <div class="product__body">
                        <h4 class="product__heading">Tretman 1</h4>
                        <p class="product__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolores minima commodi, laborum! Repudiandae inventore quo asperiores, ipsa.</p>
                    </div><!-- end .media-body -->
                </div><!-- end .media -->
            </div><!-- end .col-sm-6 -->

            <div class="col-md-6">
                <div class="featured__product product product--grid">
                    <div class="product__img">
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/limfna.jpg" alt="">
                    </div><!-- end .media-left -->
                    <div class="product__body">
                        <h4 class="product__heading">Tretman 1</h4>
                        <p class="product__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolores minima commodi, laborum! Repudiandae inventore quo asperiores, ipsa.</p>
                    </div><!-- end .media-body -->
                </div><!-- end .media -->
            </div><!-- end .col-sm-6 -->

             <div class="col-md-6">
                <div class="featured__product product product--grid">
                    <div class="product__img">
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/limfna.jpg" alt="">
                    </div><!-- end .media-left -->
                    <div class="product__body">
                        <h4 class="product__heading">Tretman 1</h4>
                        <p class="product__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolores minima commodi, laborum! Repudiandae inventore quo asperiores, ipsa.</p>
                    </div><!-- end .media-body -->
                </div><!-- end .media -->
            </div><!-- end .col-sm-6 -->

            <div class="col-md-6">
                <div class="featured__product product product--grid">
                    <div class="product__img">
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/limfna.jpg" alt="">
                    </div><!-- end .media-left -->
                    <div class="product__body">
                        <h4 class="product__heading">Tretman 1</h4>
                        <p class="product__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolores minima commodi, laborum! Repudiandae inventore quo asperiores, ipsa.</p>
                    </div><!-- end .media-body -->
                </div><!-- end .media -->
            </div><!-- end .col-sm-6 -->

        </div><!-- end .featured__content -->
    </div><!-- end .container -->
</section><!-- end .featured -->
<section class="cta">
    <div class="container">
        <span class="cta__img"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png" alt=""></span>
        <span class="cta__text">Imate pitanje?<span>Želite dogovirti termin?</span></span><a href="#" class="cta__btn">Kontaktirajte nas</a>
    </div>
</section><!-- end .cta -->
	
<?php get_footer(); ?>
