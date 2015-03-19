<?php get_header(); ?>
<?php while(have_posts()): the_post(); 
  $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
?>

  <section class="banner">
    <div class="container">
      <div class="banner-content">
        <h1 class="banner-title"><span>O</span>ur <span>R</span>ooms</h1>
        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
      </div>  
    </div>

    <div class="booking-container">
      <div class="container-lg">
          <form action="">

            <div class="booking-form-field input-group date">
              <input id="booking-arrival" type="text" class="form-control" placeholder="Arrival"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>

            <div class="booking-form-field input-group date">
              <input id="booking-departure" type="text" class="form-control" placeholder="Departure"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>

            <div class="booking-form-field booking-form-field-select">
              <select name="" class="form-control">
                <option value="placeholder">Adults</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>

            <div class="booking-form-field booking-form-field-select">
              <select name="" class="form-control">
                <option value="placeholder">Children</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <button type="submit" class="btn btn-booking-form">Check Availabilty</button>
        </form>
      </div><!--/.contain-lg -->
    </div><!--/.booking-container -->
  </section>

  <div class="bg-whiteflesh">
      <div class="container">
          <div class="content-page content-photos padding-sm text-center">
            <h2 class="room-title"><?php echo substr(get_the_title(), 2); ?></h2>
                <div class="row room-container">
                  <div class="col-md-5">
                    <div class="promo-img">
                      <img src="<?php echo $img[0]; ?>">
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="room-detail-container">
                      <div role="tabpanel">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs room-navtabs" role="tablist">
                        <li role="presentation" class="active"><a href="#room" aria-controls="room" role="tab" data-toggle="tab">Room</a></li>
                        <li role="presentation"><a href="#rates" aria-controls="rates" role="tab" data-toggle="tab">Rates</a></li>
                      </ul>

                      <!-- Tab panes -->
                     
                      <div class="tab-content room-tab-content">
                      
                        <?php if (get_field('room_info')):?>
                        <div role="tabpanel" class="tab-pane room-tabpane active" id="room">
                          <h3>About the rooms</h3>
                            <p><?php the_field('room_info'); ?></p>
                        </div>
                        <?php endif; ?>

                        <?php if (get_field('rate_info')):?>
                        <div role="tabpanel" class="tab-pane room-tabpane" id="rates">
                            <h3>Room rates</h3>
                            <p><?php the_field('rate_info'); ?></p>
                        </div>
                        <?php endif; ?>

                      </div>
                    </div>
                      <button class="btn btn-book"><a href="/">Book Now</a></button>
                    </div>
                    
                  </div>
                </div>

                <div class="footer-reservation">
                  <h3>for reservation</h3>
                  <h2>call us <?php echo (defined('PHONE_NUMBER')? PHONE_NUMBER : '123-456-678'); ?></h2>
                </div>
                
          </div>
        </div>
  </div>
<?php endwhile; ?>
<?php get_footer(); ?>
