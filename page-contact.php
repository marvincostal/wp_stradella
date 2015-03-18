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
          <form class="form-contact">
            <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control" id="firstname">
            </div>
            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control" id="lastname">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="contact">Contact Number</label>
                  <input type="text" class="form-control" id="contact">
                </div>
              </div>
              <div class="col-md-6">
                <label for="country">Country</label>
                <select id="country" class="form-control">
                  <option>Australia</option>
                  <option>America</option>
                  <option>Canada</option>
                  <option>Japan</option>
                  <option>Philippines</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
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
