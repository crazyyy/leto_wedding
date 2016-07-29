<?php $i = 1; if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(' col-md-12 looper'); ?>>
    <div class="row">

      <?php if ($i % 2) { ?>
        <div class="shor-loop col-md-6">
          <h2 class="inner-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </h2><!-- /post title -->
          <?php wpeExcerpt('wpeExcerpt10'); ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn-violet">ЧИТАТЬ ДАЛЕЕ</a>
        </div><!-- /.shor-loop-col-md-6 -->

        <a rel="nofollow" class="feature-img feature-img--right col-md-6" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('medium');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
        </a><!-- /post thumbnail -->

      <?php } else { ?>
        <a rel="nofollow" class="feature-img feature-img--left col-md-6" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('medium');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
        </a><!-- /post thumbnail -->

        <div class="shor-loop col-md-6">
          <h2 class="inner-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </h2><!-- /post title -->
          <?php wpeExcerpt('wpeExcerpt10'); ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn-violet">ЧИТАТЬ ДАЛЕЕ</a>
        </div><!-- /.shor-loop-col-md-6 -->
      <?php } ?>

    </div><!-- /.row -->
  </div><!-- /looper -->
  <?php $i++; endwhile; else: ?>
  <div class="col-md-12">
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </div><!-- /article -->
<?php endif; ?>
