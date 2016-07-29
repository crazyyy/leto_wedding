<?php /* Template Name: Contact Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <h1 class="page-title col-md-12">Свяжитесь со мной</h1>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
      <a href="tel:89213881668" class="contact-body contact-phone">8 (921) 388 1668</a>
      <a href="https://new.vk.com/ivanishina" class="contact-body contact-vk">https://new.vk.com/ivanishina</a>

      <?php get_template_part('contacts-include'); ?>

      <?php the_content(); ?>
    </article>
  <?php endwhile; else: ?>
    <article class="col-md-12">
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>
<?php get_footer(); ?>
