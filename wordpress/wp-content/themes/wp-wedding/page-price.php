<?php /* Template Name: Price Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
      <table class="table-price">

        <?php if( have_rows('services') ): while ( have_rows('services') ) : the_row(); ?>
          <tr>
            <td>
              <h5><?php the_sub_field('title'); ?></h5>
              <?php the_sub_field('service-item'); ?>
            </td>
            <td>
              <span class="price-container"><?php the_sub_field('price'); ?> руб</span>
              <button class="btn btn-violet">ЗАКАЗАТЬ</button>
            </td>
          </tr>
        <?php endwhile; endif; ?>

      </table><!-- /.table-price -->
      <?php the_content(); ?>
    </article>
  <?php endwhile; else: ?>
    <article class="col-md-12">
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>

<?php get_footer(); ?>




