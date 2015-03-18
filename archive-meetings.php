<?php 
/*
  Template Name: Meetings
 */
get_header(); ?>
  <div class="content-page content-meeting-events padding-lg">
    <div class="container">
      <div class="text-center">
        <h1 class="page-title"><span>M</span>eeting and <span>E</span>vents</h1>
        <?php 
        $meetings = array('page_id' => 50, );
        $m_loop = new WP_Query($meetings);
        while($m_loop->have_posts()):$m_loop->the_post(); 
        ?>
        <div class="blockqoute"><?php the_content(); ?></div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php 
    wp_reset_query();
      $args = array('post_type' => 'meetings' );
      $loop = new WP_Query($args);
      $count = 0;
    ?>
    <?php while($loop->have_posts()): $loop->the_post(); 
      $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
      $count++;
      if ($count % 2 !== 0):
    ?>
    <div class="container">
      <div class="featured padding-sm">
        <div class="row">
          <div class="col-md-6">
            <div class="img-holder">
              <img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive">
            </div>
          </div>
          <div class="col-md-6">
            <div class="details">
              <h3><?php the_title(); ?></h3>
              <div><?php the_content(); ?></div>
              <a href="<?php the_permalink(); ?>" class="btn btn-white">View More</a>
            </div>
          </div>
        </div>
      </div><!-- /.featured -->
    </div>
  <?php elseif($count % 2 === 0): ?>
    <section class="bg-lightgray">
      <div class="container">
        <div class="featured padding-sm">
          <div class="row">
            <div class="col-md-6">
              <div class="details">
                <h3><?php the_title(); ?></h3>
                <div><?php the_content(); ?></div>
                <a href="<?php the_permalink(); ?>" class="btn btn-white">View More</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-holder">
                <img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive">
              </div>
            </div>
          </div>
        </div><!-- /.featured -->
      </div>
    </section>
    <?php endif; ?>
    <?php endwhile; ?>
    <div class="reservation-box text-center">
      <div class="container">
      <?php if (get_field('phone_number', 50)): ?>
        <p>FOR RESERVATION</p>
        <p class="phone">CALL US <?php the_field('phone_number', 50); ?></p>
      <?php endif; ?>
      </div>
    </div>
  </div><!-- /.content-page -->
<?php get_footer(); ?>