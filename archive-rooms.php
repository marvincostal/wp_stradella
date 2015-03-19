<?php 
/*
  Template Name: Rooms
 */
get_header(); ?>

  <section class="banner">
    <div class="container">
      <div class="banner-content">
        <h1 class="banner-title"><span>O</span>ur <span>R</span>ooms</h1>
        <?php 
        $rooms = array('page_id' => 30);
        $r_loop = new WP_Query($rooms);
        while ($r_loop->have_posts()): $r_loop->the_post(); 
        ?>
        <div><?php the_content(); ?></div>
        <?php endwhile; ?>
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
            <button type="submit" class="btn btn-booking-form">heck Availabilty</button>
        </form>
      </div><!--/.contain-lg -->
    </div><!--/.booking-container -->
  </section>

  <div class="container">
    <div class="content-page content-photos padding-sm text-center">
      <div class="row rooms">
      <?php $args = array(
        'post_type' => 'rooms',
        'orderby' => 'title',
        'order' => 'ASC'
      ); 
      $loop = new WP_Query($args);
      while($loop->have_posts()):$loop->the_post();
      $img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
      ?>
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="room-item">
            <div class="img-holder">
              <img class="img-responsive" src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
              <div class="details">
                <img src="<?php echo IMG; ?>/footer-logo.png" alt="image">
                <a href="<?php the_permalink(); ?>"><p>Click To View</p></a>
              </div>
            </div>
            <div class="caption">
              <h3><?php the_title(); ?></h3>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      </div><!-- /.row.rooms -->
      <a class="btn btn-white" href="#">Load More</a>
    </div><!-- /.content-page -->
  </div>
<?php get_footer(); ?>