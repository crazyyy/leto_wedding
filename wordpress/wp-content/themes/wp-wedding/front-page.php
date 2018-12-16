<?php /* Template Name: Home Page */ get_header(); ?>
  <div class="modal modal-welcome">
    <div class="container">
      <div class="row">
        <div class="col-md-6 modal-choose">
          <a href="<?php the_field('main_link_left')?>" class="choose-img">
            <?php $image = get_field('main_image_left'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
          </a>
          <a href="<?php the_field('main_link_left')?>" class="btn btn-violet"><?php the_field('main_text_left')?></a>
        </div><!-- /.col-md-6 modal-choose -->
        <div class="col-md-6 modal-choose">
          <a href="<?php the_field('main_link_right')?>" class="choose-img">
            <?php $image = get_field('main_image_right'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
          </a>
          <a href="<?php the_field('main_link_right')?>" class="btn btn-violet"><?php the_field('main_text_right')?></a>
        </div><!-- /.col-md-6 modal-choose -->
        <div class="col-md-12 modal-social">
          <?php if(get_field('header_social', 69)): ?>
            <ul>
              <?php while(has_sub_field('header_social', 69)): ?>
                <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('ico'); ?></a></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
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
