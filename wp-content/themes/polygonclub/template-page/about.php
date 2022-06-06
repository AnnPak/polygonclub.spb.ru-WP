<?php

/**
 * Template Name: О нас (template-page/about.php)
 */

get_header(); ?>



<main>


<section class="about-us-page cooperation">
            <div class="container-fluide">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="about-us-page__title">О НАС</h2>
                        <p class="about-us-page__descr"><?= get_field('description');?></p>
                    </div>
                    <div class="col-lg-4 form-block">
                  
                    <h3> Сотрудничество </h3>
                    <?= do_shortcode('[contact-form-7 id="74" title="Вопрос на контактах"]'); ?>
                    <p class="cooperation-text">Нажимая на кнопку «Отправить заявку», Вы соглашаетесь с политикой
                        конфиденциальности сайта и даете разрешение на обработку Ваших персональных данных.</p>
                </div>
                </div>
            </div>

        </section>

     






    <?php
    get_footer();
