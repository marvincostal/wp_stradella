
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title><?php wp_title( '|', true, 'left'); ?></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="apple-touch-icon" href="apple-touch-icon.png">

      <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <header class="t-header">
    <div class="t-header-top">
      <div class="container-lg">
        <div class="t-header-left">
          <p class="t-header-text">Contact: <span>+63 32.238.6592</span></p>
        </div>
        <div class="t-header-right">
          <p class="t-header-text">Location Email <span>strdellainfo@gmail.com </span></p>
        </div>
        <div class="main-logo-sm">
            <a class="logo" href="index.php"><img src="<?php echo IMG; ?>/logo.png" class="img-responsive" alt=""></a>
        </div>
      </div>
    </div><!-- /.t-header-top -->
    <div class="t-header-bottom">
      <div class="container-lg"><!-- <div class="container container-lg"> -->
        <nav class="navbar" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
              <li><a href="index.php">Home</a></li>
              <li><a href="rooms.php">Rooms</a></li>
              <li><a href="meeting-events.php">Meeting and Events</a></li>
              <li><a href="promos.php">Promos</a></li>
            </ul>
            <!-- logo -->
            <div class="main-logo">
              <a class="logo" href="index.php"><img src="<?php echo IMG; ?>/logo.png" class="img-responsive" alt=""></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="photos.php">Photos</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="restaurant.php">Restaurant</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div><!-- /.t-header-bottom -->
  </header>
