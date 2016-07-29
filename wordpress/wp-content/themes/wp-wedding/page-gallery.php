<?php /* Template Name: Gallery Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <h1 class="page-title col-md-12"><?php the_title(); ?></h1>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
      <?php the_content(); ?>

      <?php get_template_part('circle-carousel'); ?>

      <?php get_template_part('contacts-include'); ?>

    </article>
  <?php endwhile; else: ?>
    <article class="col-md-12">
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>
<?php get_footer(); ?>
