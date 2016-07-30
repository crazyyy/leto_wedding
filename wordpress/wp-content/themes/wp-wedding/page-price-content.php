<?php /* Template Name: Price Content Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <?php if( have_rows('service') ): while ( have_rows('service') ) : the_row(); ?>
      <div class="price-second col-md-6">
        <span class="price-second-img">
          <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </span>
        <h5><?php the_sub_field('title'); ?></h5>
        <?php the_sub_field('description'); ?>
        <span class="price-container">от <?php the_sub_field('price'); ?> руб</span>
        <button class="btn btn-violet">ЗАКАЗАТЬ</button>
      </div><!-- /.price-second col-md-6 -->
    <?php endwhile; endif; ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
      <?php the_content(); ?>
    </article>
  <?php endwhile; else: ?>
    <article class="col-md-12">
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>

<?php get_footer(); ?>




