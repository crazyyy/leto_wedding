<?php /* Template Name: Home Page */ get_header(); ?>
  <div class="modal modal-welcome">
    <div class="container">
      <div class="row">
        <div class="col-md-6 modal-choose">
          <a href="#" class="choose-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/modal-choose.jpg" alt="">
          </a>
          <a href="#" class="btn btn-violet">СВАДЕБНЫЙ ОБРАЗ</a>
        </div><!-- /.col-md-6 modal-choose -->
        <div class="col-md-6 modal-choose">
          <a href="<?php echo home_url(); ?>/floristika.htm" class="choose-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/modal-choose-2.jpg" alt="">
          </a>
          <a href="<?php echo home_url(); ?>/floristika.htm" class="btn btn-violet">ФЛОРИСТИКА</a>
        </div><!-- /.col-md-6 modal-choose -->
        <div class="col-md-12 modal-social">
          <ul>
            <li><a href=""><i class="fa fa-vk" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul><!-- /.footer-socail -->
        </div><!-- /.col-md-12 modal-social -->
      </div><!-- /.row -->
    </div>
    <!-- /.container -->
  </div><!-- /.modal modal-welcome -->
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 article-about'); ?>>
      <?php the_content(); ?>
    </article>
  <?php endwhile; else: ?>
    <article class="col-md-12">
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>

<?php get_footer(); ?>
