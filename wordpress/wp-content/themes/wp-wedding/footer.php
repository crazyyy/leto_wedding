      </div><!-- /.row -->
    </div><!-- /.container -->

  </section><!-- /section -->
</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="container">
    <div class="row">

      <nav class="nav-footer col-md-6 col-lg-6 col-sm-6 col-xs-6 col-md-offset-3">
        <ul class="footernav">
          <li><a href="">Обо мне</a></li>
          <li><a href="">Услуги</a></li>
          <li><a href="">Блог</a></li>
          <li><a href="">Контакты</a></li>
        </ul><!-- /.footernav -->
      </nav><!-- /.nav-footer col-md-6 col-md-offset-5 -->

      <nav class="footer-socail col-md-2">
        <ul>
          <li><a href=""><i class="fa fa-vk" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul><!-- /.footer-socail -->
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
