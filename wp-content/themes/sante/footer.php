<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sante
 */

?>

<section class="footer-wrap">
  <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <h4 class="footer__brand">SANTE <span class="footer__brand--small">zdravlje njega i ljepota</span></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur a dipisicing elit. Porro hic cumque molestiae nesciunt maiores non nulla neque sed quae quaerat! Accusamus nihil unde nostrum quasi excepturi perferendis rem, at libero!</p>
              </div>
              <div class="col-md-4">
                  <h5 class="footer__header">Novosti</h5>
                  <ul class="footer__list list">
                      <li class="list__item--bullhorn">Dragi klijenti iskoristitte zadnje snjiženje cijena na anticelulitne tretmane <a href="#">http://on.fb.me/1NF5rgS</a></li>
                      <li class="list__item--bullhorn">Dragi klijenti iskoristitte zadnje snjiženje cijena na anticelulitne tretmane<a href="#">http://on.fb.me/1NF5rgS</a></li>
                  </ul>
              </div>
              <div class="col-md-4">
                  <h5 class="footer__header">Kontakt</h5>
                  <ul class="footer__list list">
                      <li class="list__item--address"></i>Put Pazdigrada 8, 21000 Split Hrvatska</li>
                      <li class="list__item--email">info@sante.hr</li>
                      <li class="list__item--phone">+389 95 1234 567</li>
                  </ul>
              </div>
          </div><!-- end .row -->
      </div><!-- end .container -->
      
  </footer>
  <div class="copyright">
      Copyright 2015 &copy; <span>Sante</span> za zdravlje, njegu i ljepotu
  </div>
</section><!-- end .footer-wrap -->

<?php wp_footer(); ?>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

<script src="<?php bloginfo('template_directory');?>/assets/scripts/vendor.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/scripts/plugins.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/scripts/main.js"></script>



</body>
</html>
