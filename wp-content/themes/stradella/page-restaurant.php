<?php
/*
  Template Name: Restaurant
 */
get_header(); ?>
  <div class="content-page content-restaurant padding-lg">
    <div class="container">
      <div class="text-center">
        <h1 class="page-title"><span>R</span>estaurant</h1>
        <?php while(have_posts()): the_post(); ?>
        <div class="blockqoute"><?php the_content(); ?></div>
        <?php endwhile; ?>
      </div>
    </div><!--/.container -->
    <?php 
    $i = 0;
    if (have_rows('restaurant_post')):
      while(have_rows('restaurant_post')): the_row();

      $img = get_sub_field('restaurant_post_image');
      $title = get_sub_field('restaurant_post_title');
      $content = get_sub_field('restaurant_post_content');

      $i++;

      if ($i % 2 !== 0):
    ?>
    <div class="container">
      <div class="featured padding-sm">
        <div class="row">
          <div class="col-md-6">
            <div class="img-holder">
              <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>" class="img-responsive">
            </div>
          </div>
          <div class="col-md-6">
            <div class="details">
              <h3><?php echo $title; ?></h3>
              <p><?php echo $content; ?></p>
            </div>
          </div>
        </div>
      </div><!-- /.featured -->
    </div>
    <?php elseif ($i % 2 == 0): ?>
    <section class="bg-lightgray">
      <div class="container">
        <div class="featured padding-sm">
          <div class="row">
            <div class="col-md-6">
              <div class="details">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $content; ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-holder">
                <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>" class="img-responsive">
              </div>
            </div>
          </div>
        </div><!-- /.featured -->
      </div>
    </section>
    <?php 
    endif; 
    endwhile;
    endif; ?>
    <section class="section-menu">
      <div class="container">
        <h2 class="text-center">Our Best Menu</h2>

        <div class="best-menu">
          <div class="img-holder">
            <img src="<?php echo IMG; ?>/menu/3.jpg" alt="menu 3" class="img-responsive">
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-5">
              <div class="img-holder">
                <img src="<?php echo IMG; ?>/menu/4.jpg" alt="menu 4" class="img-responsive">
              </div>
              <div class="img-holder">
                <img src="<?php echo IMG; ?>/menu/5.jpg" alt="menu 5" class="img-responsive">
              </div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="img-holder">
                <img src="<?php echo IMG; ?>/menu/6.jpg" alt="menu 6" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="reservation-box text-center">
      <div class="container">
        <p>FOR RESERVATION</p>
        <p class="phone">CALL US <?php echo (defined('PHONE_NUMBER')? PHONE_NUMBER : '123-456-678'); ?></p>
      </div>
    </div>
  </div><!-- /.content-page -->

<?php get_footer(); ?>
