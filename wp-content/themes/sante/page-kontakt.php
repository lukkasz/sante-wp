<?php
/*
	Template Name: Kontakt Page
*/

	$naziv_tvrtke 		= get_field('naziv_tvrtke', 69);
	$oib							= get_field('oib', 69);
	$registarski_sud 	= get_field('registarski_sud', 69);
	$mb_subjekta			= get_field('maticni_broj', 69);
	$temeljni_kapital = get_field('temeljni_kapital', 69);
	$ziro_racun				= get_field('ziro_racun', 69);
	$banka						= get_field('banka', 69);
	$clanovi_uprave		= get_field('clanovi_uprave', 69);

get_header(); ?>

	<?php get_template_part('template-parts/content', 'feature-image'); ?>

	<section class="contact">
      <div class="container">
          <div class="contact__info">
              <div class="contact__info__item"><i class="glyphicon glyphicon-earphone"></i><span><?php echo $phone;?></span></div>
              <!--<div class="contact__info__item"><i class="glyphicon glyphicon-envelope"></i><span>info@sante.hr</span></div>-->
              <div class="contact__info__item"><i class="glyphicon glyphicon-home"></i><span><?php echo $address;?></span></div>
          </div><!-- end .contact__info -->
          <div class="row">
              
              <div class="contact__company-info col-sm-5">
                  <h4 class="contact__heading">Informacije</h4>
                  <p>Naziv tvrtke: <?php echo $naziv_tvrtke; ?></p>
                  <p>Sjedište: <?php echo $address; ?></p>
                  <p>OIB: <?php echo $oib; ?></p>
                  <p>Registarski sud: <?php echo $registarski_sud; ?></p>
                  <p>Matični broj: <?php echo $mb_subjekta; ?></p>
                  <p>Žiro račun: <?php echo $ziro_racun; ?>, otvoren kod <?php echo $banka; ?></p>
                  <p>Članovi uprave: <?php echo $clanovi_uprave; ?></p>
                  <p>Temeljni kapital od <?php echo $temeljni_kapital; ?> uplaćen u cijelosti</p>
              </div><!-- end .contact__company-info -->
              
              <div class="contact__form col-sm-offset-1 col-sm-6">
                  <h4 class="contact__heading">Kontaktirajte nas</h4>
                  <form>
                      <div class="form-group">
                          <label for="name">Ime i prezime</label>
                          <input type="name" class="form-control" id="name" placeholder="Ime i prezime">
                      </div>
                      <div class="form-group">
                          <label for="email">Email adresa</label>
                          <input type="email" class="form-control" id="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                          <label for="message">Poruka </label>
                          <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                      </div>
                      <button type="submit" class="btn btn-send pull-right">Pošalji</button>
                  </form>
              </div><!-- end .contact__form -->

          </div><!-- end .row -->
      </div><!-- end .container -->
      <div class="find-us">
          <h2>Pronađi nas na karti</h2>
      </div>
      <div class="map" id="map"></div>
  </section>

	

<?php get_footer(); ?>