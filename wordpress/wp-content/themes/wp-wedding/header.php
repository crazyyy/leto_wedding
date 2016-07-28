<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="container">
      <div class="row">

        <div class="header-social-container col-md-2">
          <ul class="header-social">
            <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul><!-- /.header-social -->
        </div><!-- /.header-social-container -->

        <div class="logo-container col-md-8">
          <div class="logo">
            <?php if ( is_front_page() && is_home() ){ } else { ?>
              <a href="<?php echo home_url(); ?>">
                <?php  } ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                <?php if ( is_front_page() && is_home() ){
                } else { ?>
              </a>
            <?php } ?>
          </div><!-- /logo -->
        </div><!-- /.logo-container -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </header><!-- /header -->

  <section role="main">
    <nav class="nav__header " role="navigation">
      <div class="container">
        <div class="row">
          <?php wpeHeadNav(); ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </nav><!-- /nav -->

    <div class="container">
      <div class="row">
