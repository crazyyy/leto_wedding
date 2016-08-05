<?php /* Template Name: Gallery Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <h1 class="page-title col-md-12"><?php the_title(); ?></h1>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
      <div class="article-inside">
        <?php the_content(); ?>
      </div><!-- /.article-inside -->


      <?php if( have_rows('galery') ): ?>
        <div id="wrapper">
          <div id="inner">

            <div id="carousel-wrapper">
              <div id="carousel">

                <?php while( have_rows('galery') ): the_row(); $image = get_sub_field('image'); ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <?php endwhile; ?>
                <?php while( have_rows('galery') ): the_row(); $image = get_sub_field('image'); ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <?php endwhile; ?>
                <?php while( have_rows('galery') ): the_row(); $image = get_sub_field('image'); ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <?php endwhile; ?>

              </div>
              <a class="prev" id="foo2_prev" href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
              <a class="next" id="foo2_next" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>


            <div id="pager-wrapper">
              <div id="pager">
                <?php while( have_rows('galery') ): the_row(); $image = get_sub_field('image'); ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <?php endwhile; ?>
                <?php while( have_rows('galery') ): the_row(); $image = get_sub_field('image'); ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <?php endwhile; ?>
                <?php while( have_rows('galery') ): the_row(); $image = get_sub_field('image'); ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <?php endwhile; ?>
              </div>
            </div>

          </div><!-- inner -->
        </div><!-- wrapper -->
      <?php endif; ?>



      <div class="article-contacts">
        <h6><span>Свяжитесь с нами</span></h6>
        <?php get_template_part('contacts-include'); ?>
      </div><!-- /.article-contacts -->

    </article>
  <?php endwhile; else: ?>
    <article class="col-md-12">
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>
<?php get_footer(); ?>
