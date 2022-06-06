<?php

/**
 * Template Name: Артисты (template-page/artists.php)
 */

get_header(); ?>



<main>



    <section class="posters artists-page">
        <div class="container-fluide">
            <div class="row">
                <div class="posters__header">
                    <div class="posters__header__title">Артисты</div>
                </div>
                <div class="posters__wrapper">
                    <?php
                    while (the_repeater_field('artists_group')) {
                        get_template_part('template-parts/content', 'artist');
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="gray-line"></div>
    </section>
    <section class="cooperation">
        <div class="container">
            <div class="row">
                <div class="col-7 form-block">
                    <h2 class="cooperation__title">Сотрудничество </h2>

                    <?= do_shortcode('[contact-form-7 id="74" title="Без названия"]'); ?>
                    <p class="cooperation-text">Нажимая на кнопку «Отправить заявку», Вы соглашаетесь с политикой
                        конфиденциальности сайта и даете разрешение на обработку Ваших персональных данных.</p>
                </div>
            </div>
        </div>
    </section>





    <?php
    get_footer();
