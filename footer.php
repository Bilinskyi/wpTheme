<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PhotoTheme
 */

?>



<footer class="footer">
  <div class="wrapper">
    <div class="wrapp-footer clearfix">
      <div class="w-33">
        <div class="text-nrm">Я в социальных сетях:</div>
        <ul class="social">
          <li><a href="#" class="icon-inst"></a></li>
          <li><a href="#" class="icon-vk"></a></li>
          <li><a href="#" class="icon-yt"></a></li>
        </ul>
      </div>
      <div class="w-33">
        <img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="" class="logo-foot" width="251" height="119">
      </div>
      <div class="w-33">
        <div class="contact-footer">
          <div class="icon-phone"><?php echo get_custom( "footer_phone" ); ?> <br><a href="#call" class="modal-form link">Заказать звонок</a></div>
          <div class="icon-mail"><?php echo get_custom( "footer_mail" ); ?></div>
          <div class="icon-place"><?php echo get_custom( "footer_place" ); ?></div>
        </div>
      </div>
    </div>
    <div class="site">
    <?php echo get_custom("copy"); ?>
    </div>
  </div>
</footer>

<div id="call" class="hide form-popup">
  <form class="" method="post" id="feedback-valid-2" action="<?php echo get_template_directory_uri();?>/sendmail.php">
    <h3>Заявка на обратный звонок</h3>
    <input type="text" name="name" placeholder="Ваше имя">  
    <input type="tel" name="phone" placeholder="Ваш телефон"> 
    <input type="email" name="email" placeholder="Ваш e-mail"> 
    <button type="submit" class="btn">Отправить заявку</button>
  </form>
</div>

<div class="modal hide">
  <h3>Ваша заявка принята</h3>
  <p>Я свяжусь с Вами в ближайшее время, спасибо!</p>
</div>


<?php wp_footer(); ?>

</body>
</html>
