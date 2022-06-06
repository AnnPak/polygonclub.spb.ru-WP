<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpbstarter
 */

?>
<footer class="footer">
    <div class="footer__main-block">
        <div class="footer__logos-wrapper d-xxl-none">
            <div class="footer__logo-wrapper">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/logo-eng.png" alt="Polygon">
            </div>
           
        </div>
        <div class="footer-left-block">
            <div class="footer__logo-wrapper d-none d-xxl-block">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/logo-eng.png" alt="Polygon">
            </div>
            <div class="footer__menu">
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'primary_menu',


                    'menu_id'         => false,

                    'depth'           => 4,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>
            </div>
        </div>

        <div class="footer-center-block">

            <div class="footer__social-links">
                <a href="<?= get_field('vk', 91);?>" target="_blank" class="footer__social-links__item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/icon-vk-white.png" alt="vk">
                </a>
                <!--a href="<?= get_field('facebook', 91);?>" target="_blank" class="footer__social-links__item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/icon-fb-white.png" alt="facebook">
                </a-->
                <!--a href="<?= get_field('instagram', 91);?>" target="_blank" class="footer__social-links__item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/icon-inst-white.png" alt="instagram">
                </a-->
                <a href="<?= get_field('telegram', 91);?>" target="_blank" class="footer__social-links__item">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/icon-tg-white.png" alt="telegram">
                </a>
            </div>
        </div>

        <div class="footer-right-block ">
            <div class="footer-phone-wrapper">
                <a href="tel:<?= get_field('phone', 91);?>"><?= get_field('phone', 91);?></a>
            </div>
          
        </div>

        <div class="footer-line"></div>
    </div>

    <div class="footer__info-block">
        <p class="footer__info-block__item"> 2003–<?= date('Y') ?> ПОЛИГОН. Концертное агентство.</p>
        <a class="footer__info-block__item txt-underline">Политика конфиденциальности</a>
        <p class="footer__info-block__item">Разработано в <a class="txt-underline">rupor.agency</a> </p>
    </div>

</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/slick.min.js"></script>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>