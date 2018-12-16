      </div><!-- /.row -->
    </div><!-- /.container -->

  </section><!-- /section -->
</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="container">
    <div class="row">

      <nav class="nav-footer col-md-6 col-lg-6 col-sm-6 col-xs-6 col-md-offset-3">
        <?php wpeFootNav(); ?>
      </nav><!-- /.nav-footer col-md-6 col-md-offset-5 -->

      <nav class="footer-socail col-md-2">
        <?php if(get_field('footer_social', 69)): ?>
          <ul>
            <?php while(has_sub_field('footer_social', 69)): ?>
              <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('ico'); ?></a></li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </nav><!-- /.footer-socail col-md-1 -->

      <p class="copyright col-md-12">
        Все права защищены © <?php echo date("Y"); ?> Li Letto Wedding
      </p><!-- /copyright -->

    </div><!-- /.row -->
  </div><!-- /.container -->
</footer><!-- /footer -->

  <div class="modal modal-order">
    <div class="container">
      <div class="row">
        <div class="col-md-12 modal-order-container">
          <form action="">
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="phone" placeholder="Телефон">
            <select name="" id="" class="order-select">
              <option value=""></option>
            </select>
            <textarea name="" id="" cols="30" rows="10">Ваше сообщение</textarea>
            <input type="submit" class="btn btn-violet" value="ОТПРАВИТЬ">
          </form>
        </div><!-- /.col-md-12 modal-order-container -->
      </div><!-- /.row -->
    </div><!-- /.container -->
    <i class="fa fa-times-circle" aria-hidden="true"></i>
  </div><!-- /.modal modal-order -->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <?php wp_footer(); ?>

</body>
</html>
