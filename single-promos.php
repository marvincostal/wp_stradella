<?php get_header(); ?>
<?php while(have_posts()): the_post(); 
$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
?>

  <div class="container">
    <div class="content-page content-photos padding-lg">
      <h1 class="page-title text-center"><span>P</span>romos</h1>
      <div class="row">
        <div class="col-md-5">
          <div class="promo-img">
            <img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
          </div>
        </div>
        <div class="col-md-7">
          <div class="promo-detail-container">
            <h3 class="promo-title"><?php the_title(); ?></h3>
            <div class="promo-details"><?php the_content(); ?></div>
            <h4 class="email-title">email add</h4>
            <p class="email-add"><?php echo (defined('EMAIL_PRIMARY')? EMAIL_PRIMARY : 'info@stradella.com'); ?></p>
            <?php if (!defined('EMAIL_SECONDARY') || EMAIL_SECONDARY !== false): ?>
            <p class="email-add"><?php echo (defined('EMAIL_SECONDARY')? EMAIL_SECONDARY: 'reservations@stradella.com'); ?></p>
          <?php endif; ?>
            <h4 class="contact-details">Call <?php echo (defined('PHONE_NUMBER')? PHONE_NUMBER : '123-456-678'); ?> to book by phone or inquire</h4>
            <button class="btn btn-book"><a href="/">Book Now</a></button>
          </div>
          
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
<?php get_footer(); ?>

