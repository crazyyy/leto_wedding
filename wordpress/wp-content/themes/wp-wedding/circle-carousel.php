<?php if( have_rows('galery') ): ?>

  <div class="circle-carousel">
    <ul>

    <?php $i = 1; while( have_rows('galery') ): the_row(); $image = get_sub_field('image'); ?>
      <?php $class = 'item-'.$i; ?>
      <li class="item <?php echo $class; ?>">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
      </li>
    <?php $i++; endwhile; ?>

    </ul>
    <div class="circle-controls">
      <span class="prev"> < </span>
      <span class="next"> > </span>
    </div>
  </div><!-- /.circle-carousel -->

<?php endif; ?>
