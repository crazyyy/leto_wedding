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

        <div class="header-social-container col-md-2 col-lg-2 col-sm-2 col-xs-2">
          <?php if(get_field('header_social', 69)): ?>
            <ul class="header-social">
              <?php while(has_sub_field('header_social', 69)): ?>
                <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('ico'); ?></a></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div><!-- /.header-social-container -->

        <div class="logo-container col-md-8 col-lg-8 col-sm-8 col-xs-8">
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
