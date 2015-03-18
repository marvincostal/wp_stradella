<?php 
/*
  Template Name: Contact
 */
get_header(); ?>

  <div class="content-page content-contact padding-md">
    <section class="section-map">
      <iframe src="<?php the_field('google_map'); ?>" width="100%" height="544" frameborder="0" style="border:0"></iframe>
    </section>

    <div class="container">
      <h1 class="page-title text-center"><span>C</span>ontact Us</h1>
      <div class="row">
        <div class="col-md-6">
          <?php echo do_shortcode( '[contact-form-7 id="119" title="Contact Form"]' ); ?>
        </div>
        <div class="col-md-6">
          <ul class="contact-details">
            <li>
              Stradella Hotel
              <span><?php the_field('hotel_address'); ?></span>
            </li>
            <li>
              Reservations
              <span><?php the_field('reservation_phone_number'); ?></span>
            </li>
            <li>
              Reception
              <span><?php the_field('reception_phone_number'); ?></span>
            </li>
            <li>
              Bannquet Sales
              <span><?php the_field('bannquet_sales_phone_number'); ?></span>
            </li>
            <li>
              Email Add
              <span><?php echo (defined('EMAIL_PRIMARY')? EMAIL_PRIMARY : 'info@stradella.com'); ?></span>
              <?php if (!defined('EMAIL_SECONDARY') || EMAIL_SECONDARY !== false): ?>
              <span><?php echo (defined('EMAIL_SECONDARY')? EMAIL_SECONDARY: 'reservations@stradella.com'); ?></span>
            <?php endif; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div><!-- /.content-page -->

<?php get_footer(); ?>
