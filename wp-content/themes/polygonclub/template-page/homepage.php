<?php

/**
 * Template Name: Главная страница (template-page/homepage.php)
 */

get_header(); ?>



<main>
	<section class="posters slider__header">
		
			<div class="arrows-block">
				<div class="arrow-left">
					<svg width="29" height="24" viewBox="0 0 29 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.939339 10.9393C0.353552 11.5251 0.353552 12.4749 0.939339 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97918 12.6066 1.3934C12.0208 0.80761 11.0711 0.80761 10.4853 1.3934L0.939339 10.9393ZM29 10.5L2 10.5L2 13.5L29 13.5L29 10.5Z" fill="black" />
					</svg>
				</div>
				<div class="arrow-right">
					<svg width="29" height="24" viewBox="0 0 29 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M28.0607 13.0607C28.6464 12.4749 28.6464 11.5251 28.0607 10.9393L18.5147 1.3934C17.9289 0.807612 16.9792 0.807612 16.3934 1.3934C15.8076 1.97918 15.8076 2.92893 16.3934 3.51472L24.8787 12L16.3934 20.4853C15.8076 21.0711 15.8076 22.0208 16.3934 22.6066C16.9792 23.1924 17.9289 23.1924 18.5147 22.6066L28.0607 13.0607ZM0 13.5H27V10.5H0V13.5Z" fill="black" />
					</svg>
				</div>
			</div>

			<div class="swiper banner-slider swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events">
				<div class="swiper-wrapper">
					<?php
					while (the_repeater_field('homepage_slider')) {
					?>
						<div class=" swiper-slide">
							<a href="<?= get_sub_field('slider_link'); ?>" class="top-banner" style="background-image: url('<?= get_sub_field('slider_img') ?>'); background-repeat: no-repeat;">
							</a>

						</div>
					<? } ?>
				</div>
			</div>

	</section>

	<section class="posters posters__card">
		<div class="container-fluide">
			<div class="row">
				<div class="posters__header tours-page">
					<div class="posters__header__title">Концерты | Туры </div>
				</div>
				<div class="posters__wrapper tours-page">
					<?php
					while (the_repeater_field('tours')) {
						get_template_part('template-parts/content', 'tours');
					}
					?>
					<div class="cooperation coop_posters posters__wrapper__poster">
						<div class="form-block">
							<h2 class="cooperation__title">Сотрудничество </h2>

							<?= do_shortcode('[contact-form-7 id="118" title="Сотрудничество"]'); ?>
							<p class="cooperation-text">Нажимая на кнопку «Отправить заявку», Вы соглашаетесь с политикой
								конфиденциальности сайта и даете разрешение на обработку Ваших персональных данных.</p>
						</div>
					</div>
				</div>
			</div>
		</div>


	</section>







	<?php
	get_footer();
