<?php
/*
  Template Name: About
 */
get_header(); ?>
  <div class="container">
    <div class="content-page content-about padding-lg text-center">
      <h1 class="page-title"><span>A</span>bout Us</h1>
      <img class="content-logo" src="<?php echo IMG; ?>/logo-dark.png" alt="image">
      <p class="blockqoute"><?php the_field('block_quote'); ?></p>
      <?php while(have_posts()): the_post(); ?>
      <div><?php the_content(); ?></div>
    <?php endwhile; ?>
    </div><!-- /.content-page -->
  </div>
<?php get_footer(); ?>
