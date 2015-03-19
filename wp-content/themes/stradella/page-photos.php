<?php
/*
  Template Name: Photos
 */
get_header(); ?>

<div class="container">
    <div class="content-page content-photos padding-lg text-center">
      <h1 class="page-title"><span>P</span>hotos</h1>
      <div class="row gallery" id="links">

        <?php if( have_rows('images_photos') ): ?>
          <?php while( have_rows('images_photos') ): the_row(); 
            $image = get_sub_field('image_photo');
            ?>
          <div class="col-xs-6 col-sm-4 col-md-4">
            <div class="gallery-item">
              <div class="img-holder">
                <a href="<?php echo $image; ?>" title="image">
                  <img class="img-responsive" src="<?php echo $image; ?>" alt="image">
                </a>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div><!-- /.gallery -->
      
      <div id="blueimp-gallery" class="blueimp-gallery">
          <div class="slides"></div>
          <a class="prev"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-left.png"></a>
          <a class="next"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.png"></a>
          <a class="close">×</a>
      </div>

      <a class="btn btn-white" href="#">Load More</a>
    </div><!-- /.content-page -->
  </div>
<?php get_footer(); ?>