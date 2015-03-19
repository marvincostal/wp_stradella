<?php get_header(); ?>

  <div class="container">
    <div class="content-page content-photos padding-lg">
      <h1 class="page-title text-center"><span>P</span>romos</h1>
      <div class="row promos">
      <?php 
        $args = array('post_type' => 'promos' ); 
        $loop = new WP_Query($args);
        while($loop->have_posts()): $loop->the_post();
        $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID ), 'full');
      ?>
        <div class="col-sm-6 col-md-4">
          <div class="promo-item">
            <div class="img-holder">
              <img class="img-responsive" src="<?php echo $img[0]; ?>" alt="image">
            </div>
            <div class="details">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
              <a href="<?php the_permalink(); ?>" class="btn btn-white">Learn More</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      </div><!-- /.promos -->
    </div><!-- /.content-page -->
  </div>

<?php get_footer(); ?>