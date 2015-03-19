 <?php 
 /*
 	Template Name: Home
  */
 get_header(); 
 ?>
 <?php

  $args = array(
    'post_type' => 'homeslider'
  );
  $loop = new WP_Query($args);
  $i = 0;
  $slide = 0;
 ?>
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php while($loop->have_posts()): $loop->the_post(); ?>
      <li data-target="#carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $i == 0? 'active' : ''; ?>"></li>
    <?php $i++;endwhile;?>
    </ol>

    <div class="carousel-inner" role="listbox">
    <?php
      rewind_posts();
      while($loop->have_posts()): $loop->the_post();
      $slide++;
      $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
    ?>
      <div class="item <?php echo $slide == 1? 'active' : ''; ?>">
        <img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
        <div class="carousel-caption">
          <div class="carousel-title  "><img src="<?php echo IMG; ?>/slide-header.png" alt=""></div>
          <div class="carousel-subtitle"><img src="<?php echo IMG; ?>/slide-logo.png" alt=""></div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    
    <div class="booking-container display-inherit">
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
  </div><!--/#carousel -->

    <div class="content-section container-fluid">
      <div class="row">
      <?php 
        $info = array(
          'post_type'      => 'info',
          'posts_per_page' => 3
        );

        $info_loop = new WP_Query($info);
        while($info_loop->have_posts()): $info_loop->the_post();
        $info_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
      ?>
        <div class="content col-md-4">
          <div class="content-heading">
            <h4 class="heading"><?php the_title(); ?></h4>
          </div>
          <div class="content-img">
            <img src="<?php echo $info_img[0]; ?>" clas="img-responsive" alt="<?php the_title(); ?>">
          </div>
          <div class="content-column">
            <p class="column-heading"><?php the_title(); ?></p>
            <div><?php the_content(); ?></div>
            <p><a class="btn btn-content" href="<?php the_permalink(); ?>" role="button">View details</a></p>
          </div>
        </div><!--/.content-->
      <?php endwhile; ?>
      </div><!-- /.row -->
    </div><!-- /.content-section -->

    <div class="pre-footer container">
        <img src="<?php echo IMG; ?>/pre-footer-logo.png" alt="">
        <div class="pre-footer-content">
        <?php while(have_posts()): the_post(); ?>
          <div><?php the_content(); ?></div>
        </div>
       <?php endwhile; ?>
    </div>
<?php get_footer(); ?>