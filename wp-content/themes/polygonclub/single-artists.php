<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wpbstarter
 */

get_header();
?>


<main class="artists-detail-section">
    <section>
        <div class="top-banner" style="background-image: url('<?= get_field('artist_header_img'); ?>');"></div>

        <div class="container-fluide artist-info">
            <div class="left-block">


                <h1 class="artists-detail-section-h1"><? the_title() ?></h1>
            </div>

            <div class="right-block">
                <a href="<?= get_field('artist_site'); ?>" target="_blank" class="artist-link">Сайт артиста</a>

                <div class="artist-social">

                    <?php
                    while (the_repeater_field('artist_social')) {
                    ?>
                        <a href="<?= get_sub_field('artist_social_link'); ?>" target="_blank" class="artist-social__item">
                            <img src="<?= get_sub_field('artist_social_img'); ?>" alt="vk">
                        </a>
                    <?
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>
    <?php if (have_rows('artist_agent')) { ?>
        <section class="booking-section">
            <div class="container-fluide">
                <div class="row">
                    <section class="booking-agent">

                        <?php
                        while (have_rows('artist_agent')) : the_row();
                        ?>
                            <div class="left-agent">
                                <h3 class="booking-title">Букинг-агент</h2>
                                    <h3 class="booking-agent__name"><?= get_sub_field('artist_agent_name'); ?> </h3>
                                </h3>
                            </div>
                            <div class="booking-agent__info">
                                <a href="malto:shevchenko@polygonclub.spb.ru"><?= get_sub_field('artist_agent_mail'); ?></a><br>
                                <a href="tel:<?= get_sub_field('artist_agent_phone'); ?>"><?= get_sub_field('artist_agent_phone'); ?></a>
                            </div>
                        <?
                        endwhile;
                        ?>
                    </section>
                </div>
            </div>
        </section>
    <? } ?>
    <section class="performances">
        <div class="container-fluide">
            <div class="row">
                <div class="col-8 performances-section">


                    <div class="performances-list">
                        <?php
                        while (the_repeater_field('artist_concert')) {
                            get_template_part('template-parts/content', 'concert');
                        }
                        ?>
                    </div>

                </div>
                <div class="col-4 performances-info">

                    <div class="performances-info__player" >
                        <div class="button__widget"><button class="open_widget"><span>Развернуть виджет</span><span>Свернуть виджет</span></button></div>
                        <iframe src="<?= get_field('artist_widget'); ?>/iframe?header=1&amp;picture=1&amp;footer=0" frameborder="0" scrolling="no" allowfullscreen="true" width="100%" height="1500"></iframe> 
                            
                    </div>
                </div>
            </div>
        </div>

        <div class="gray-line"></div>
    </section>

    <section class="artist__content">
        <div class="container-fluide">
            <?= get_field('content_artist'); ?>
            <div class="artist-content__video">
                <?
                while (the_repeater_field('video_artist')) {
                    preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", get_sub_field('link_youtube'), $matches);
                ?>
                    <iframe width="100%" src="https://www.youtube.com/embed/<?= $matches[0]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <? } ?>
            </div>
        </div>

    </section>
    <!-- <section class="posters artists-page artists-detail-section">
        <div class="container">
            <div class="row">
                <div class="posters__header">
                    <div class="posters__header__title">Aртисты</div>
                    <a href="/artists" class="posters__header__btn button">Показать всех</a>
                </div>
                <div class="posters__wrapper">
                    <?php
                    $argsPost = array(
                        'post_type' => 'artists',
                        'post__not_in' =>  array(get_the_ID()),
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                    );
                    $query = new WP_Query($argsPost);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();

                    ?>
                            <a href="<?= get_permalink(); ?>" class="posters__wrapper__poster">
                                <div class="posters__wrapper__poster__img" style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');"></div>
                                <div class="posters__wrapper__poster__info">
                                    <p class="posters__wrapper__poster__info__name"><?= get_the_title(); ?></p>
                                </div>
                            </a>
                    <?
                            wp_reset_postdata();
                        endwhile;
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </section> -->

    <!-- Modal -->
    <!-- <div class="modal fade" id="agentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Оставить заявку</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body cooperation form-block">

                    <?= do_shortcode('[contact-form-7 id="74" title="Без названия"]'); ?>
                    <p class="cooperation-text">Нажимая на кнопку «Отправить заявку», Вы соглашаетесь с политикой
                        конфиденциальности сайта и даете разрешение на обработку Ваших персональных данных.</p>
                </div>
              
            </div>
        </div>
    </div> -->


</main>

<?php
get_footer();
