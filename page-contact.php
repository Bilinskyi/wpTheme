<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PhotoTheme
 */

get_header(); ?>


</header>


<div class="section-bg">
  <div class="wrapper">
    <div class="line clearfix">
      <div class="line-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/line-logo.png" alt="" width="81" height="80"></div>
      <div class="center-y">
        <div class="head">Контакты</div>
      </div>
    </div>
    <div class="block center">
      <table class="table-contact">
        <tr>
          <td class="phone-icon">Телефон:</td>
          <td><?php echo get_custom('phone_n'); ?></td>
        </tr>
        <tr>
          <td class="city-icon">Город:</td>
          <td><?php echo get_custom('city_n'); ?></td>
        </tr>
        <tr>
          <td>Выезд:</td>
          <td><?php echo get_custom('field_n'); ?></td>
        </tr>
      </table>
      <ul class="social-c">
        <li><a class="ico-1" href=""></a></li>
        <li><a class="ico-2" href=""></a></li>
      </ul>
    </div>

    <div class="block center">
      <form class="form-popup contact-form" method="post" id="feedback-valid-3" action="<?php echo get_template_directory_uri();?>/sendmail.php" novalidate="novalidate">
        <div class="head">Напишите мне сообщение</div>
        <div class="inline-bl">
          <input type="text" name="name" placeholder="Ваше имя">  
          <input type="tel" name="phone" placeholder="Ваш телефон"> 
          <input type="email" name="email" placeholder="Ваш e-mail"> 
        </div>
        <div class="inline-bl">
          <textarea name="comm" placeholder="Ваше сообщение"></textarea>
        </div>

        <button type="submit" class="btn">ОТПРАВИТЬ СООБЩЕНИЕ</button>
      </form>
    </div>
  </div>
</div>



<?php
get_footer();