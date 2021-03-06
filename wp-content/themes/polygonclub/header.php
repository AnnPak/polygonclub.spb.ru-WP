<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nazagency
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

	<title>Туры и концерты</title>
</head>

<body>
	<header class="header container-fluide">
		<div class="header-left-block">

			<nav class="navbar navbar-expand-lg navbar-light">

				<div class="navbar-nav">
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
				<button type="button" class="btn  navbar-toggler sm-btn" data-bs-toggle="modal" data-bs-target="#exampleModal ">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-fullscreen">
						<div class="modal-content">
							<div class="modal-header">
								<div class="header__logo-wrapper">
									<img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
									<button type="button" class="btn-close modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
							</div>


							<div class="header__menu__items">
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


							<div class="modal-footer">
								<div class="header__social-links d-lg-none">
									<a href="<?= get_field('vk', 91);?>" target="_blank" class="header__social-links__item">
										<svg width="20" height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_127_12243)">
												<path d="M34.6504 26.0754C34.4754 25.9004 33.9504 24.5004 31.1504 21.8754C28.1754 19.0754 28.5254 19.4254 32.2004 14.5254C34.3004 11.3754 35.1754 9.62539 35.0004 8.75039C34.8254 8.22539 33.2504 8.40039 33.2504 8.40039H28.0004C28.0004 8.40039 27.1254 8.40039 26.7754 8.92539C26.2504 9.97539 25.9004 11.2004 24.8504 13.3004C22.5754 17.5004 21.5254 17.6754 21.1754 17.5004C20.3004 16.9754 20.4754 15.0504 20.4754 13.8254C20.4754 9.80039 21.0004 8.05039 19.2504 7.70039C18.7254 7.52539 18.3754 7.52539 16.8004 7.52539C14.8754 7.52539 13.3004 7.52539 12.4254 8.05039C11.9004 8.05039 11.3754 8.75039 11.7254 8.75039C12.0754 8.75039 12.7754 8.92539 13.3004 9.62539C13.8254 10.3254 13.8254 12.0754 13.8254 12.0754C13.8254 12.0754 14.0004 16.9754 12.9504 17.5004C12.2504 17.8504 11.2004 17.1504 9.10043 13.3004C8.22543 11.3754 8.05043 9.97539 7.35043 9.10039C7.00043 8.57539 6.12543 8.40039 6.12543 8.40039H1.22543C1.22543 8.40039 0.350434 8.40039 0.175434 8.57539C0.000434019 8.92539 0.175434 9.45039 0.175434 9.45039C0.175434 9.45039 4.02543 19.0754 8.57543 23.9754C12.6004 28.3504 17.3254 28.1754 17.3254 28.1754C17.3254 28.1754 19.9504 28.3504 20.3004 27.6504C20.6504 27.3004 20.6504 26.6004 20.6504 26.6004C20.6504 26.6004 20.6504 23.6254 21.8754 23.2754C23.1004 22.9254 24.8504 26.0754 26.6004 27.4754C28.0004 28.3504 28.3504 28.1754 28.8754 28.1754C30.1004 28.1754 33.6004 28.1754 33.6004 28.1754C33.6004 28.1754 35.8754 28.0004 34.6504 26.0754Z" fill="black" />
											</g>
											<defs>
												<clipPath id="clip0_127_12243">
													<rect width="20" height="13" fill="white" />
												</clipPath>
											</defs>
										</svg>
									</a>
									<!--a href="<?= get_field('facebook', 91);?>"  target="_blank" class="header__social-links__item">
										<svg width="20" height="20" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M20.2209 35H13.4209V17.5H8.94727V11.55H13.4209V8.05C13.4209 2.975 14.8525 0 20.7578 0H25.7683V5.95H22.7262C20.3999 5.95 20.2209 6.825 20.2209 8.4V11.375H25.7683L25.0525 17.5H20.2209V35Z" fill="black" />
										</svg>
									</a-->
									<!--a href="<?= get_field('instagram', 91);?>" target="_blank" class="header__social-links__item">
										<svg width="20" height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M28 0H7C3.15 0 0 3.15 0 7V28C0 31.85 3.15 35 7 35H28C31.85 35 35 31.85 35 28V7C35 3.15 31.85 0 28 0ZM31.5 30.275C31.5 30.975 30.975 31.5 30.275 31.5H4.725C4.025 31.5 3.5 30.975 3.5 30.275V15.225H10.85C11.9 12.425 14.525 10.5 17.5 10.5C20.475 10.5 23.1 12.425 24.15 15.225H31.5V30.275ZM31.5 9.275C31.5 9.975 30.975 10.5 30.275 10.5H25.55C25.025 10.5 24.5 9.975 24.5 9.275V4.725C24.5 4.025 25.025 3.5 25.725 3.5H30.45C30.975 3.5 31.5 4.025 31.5 4.725V9.275Z" fill="black" />
											<path d="M26.25 11.7246H21.35C23.275 12.9496 24.5 15.0496 24.5 17.4996C24.5 21.3496 21.35 24.4996 17.5 24.4996C13.65 24.4996 10.5 21.3496 10.5 17.4996C10.5 15.0496 11.725 12.9496 13.65 11.7246H8.75C7.7 13.4746 7 15.3996 7 17.4996C7 23.2746 11.725 27.9996 17.5 27.9996C23.275 27.9996 28 23.2746 28 17.4996C28 15.3996 27.3 13.2996 26.25 11.7246Z" fill="black" />
										</svg>

									</a-->
									<a href="<?= get_field('telegram', 91);?>" target="_blank" class="header__social-links__item">
										<svg width="20" height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_127_12250)">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M26.8096 33.2196C27.2792 33.5521 27.8844 33.6352 28.424 33.4311C28.9636 33.2254 29.3602 32.7646 29.4798 32.2061C30.7471 26.2502 33.8213 11.1754 34.9748 5.75772C35.0623 5.34938 34.9165 4.92501 34.5956 4.6523C34.2748 4.37959 33.83 4.30084 33.4334 4.44813C27.3186 6.71147 8.4871 13.7771 0.79002 16.6252C0.301479 16.806 -0.016438 17.2756 -0.000396359 17.7904C0.0171036 18.3067 0.364187 18.7544 0.864395 18.9046C4.31627 19.9371 8.84731 21.3736 8.84731 21.3736C8.84731 21.3736 10.9648 27.7683 12.0688 31.0204C12.2073 31.4288 12.5267 31.7496 12.9481 31.8604C13.3681 31.9698 13.8173 31.8546 14.1309 31.5586C15.9042 29.8844 18.6459 27.2958 18.6459 27.2958C18.6459 27.2958 23.855 31.1152 26.8096 33.2196ZM10.7534 20.5656L13.2019 28.6419L13.7459 23.5275C13.7459 23.5275 23.2061 14.9948 28.599 10.1313C28.7565 9.98834 28.7784 9.74918 28.6471 9.58147C28.5173 9.41376 28.2781 9.37438 28.0988 9.48813C21.8484 13.4796 10.7534 20.5656 10.7534 20.5656Z" fill="black" />
											</g>
											<defs>
												<clipPath id="clip0_127_12250">
													<rect width="35" height="35" fill="white" />
												</clipPath>
											</defs>
										</svg>

									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>

		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<?php
				wp_nav_menu(array(
					'theme_location'  => 'primary_menu',


					'menu_id'         => false,

					'depth'           => 4,
					'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
					'walker'          => new wp_bootstrap_navwalker()
				));
				?>

				<div class="header__social-links d-lg-none">
					<a href="<?= get_field('vk', 91); ?>" target="_blank" class="header__social-links__item">
						<svg width="20" height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_127_12243)">
								<path d="M34.6504 26.0754C34.4754 25.9004 33.9504 24.5004 31.1504 21.8754C28.1754 19.0754 28.5254 19.4254 32.2004 14.5254C34.3004 11.3754 35.1754 9.62539 35.0004 8.75039C34.8254 8.22539 33.2504 8.40039 33.2504 8.40039H28.0004C28.0004 8.40039 27.1254 8.40039 26.7754 8.92539C26.2504 9.97539 25.9004 11.2004 24.8504 13.3004C22.5754 17.5004 21.5254 17.6754 21.1754 17.5004C20.3004 16.9754 20.4754 15.0504 20.4754 13.8254C20.4754 9.80039 21.0004 8.05039 19.2504 7.70039C18.7254 7.52539 18.3754 7.52539 16.8004 7.52539C14.8754 7.52539 13.3004 7.52539 12.4254 8.05039C11.9004 8.05039 11.3754 8.75039 11.7254 8.75039C12.0754 8.75039 12.7754 8.92539 13.3004 9.62539C13.8254 10.3254 13.8254 12.0754 13.8254 12.0754C13.8254 12.0754 14.0004 16.9754 12.9504 17.5004C12.2504 17.8504 11.2004 17.1504 9.10043 13.3004C8.22543 11.3754 8.05043 9.97539 7.35043 9.10039C7.00043 8.57539 6.12543 8.40039 6.12543 8.40039H1.22543C1.22543 8.40039 0.350434 8.40039 0.175434 8.57539C0.000434019 8.92539 0.175434 9.45039 0.175434 9.45039C0.175434 9.45039 4.02543 19.0754 8.57543 23.9754C12.6004 28.3504 17.3254 28.1754 17.3254 28.1754C17.3254 28.1754 19.9504 28.3504 20.3004 27.6504C20.6504 27.3004 20.6504 26.6004 20.6504 26.6004C20.6504 26.6004 20.6504 23.6254 21.8754 23.2754C23.1004 22.9254 24.8504 26.0754 26.6004 27.4754C28.0004 28.3504 28.3504 28.1754 28.8754 28.1754C30.1004 28.1754 33.6004 28.1754 33.6004 28.1754C33.6004 28.1754 35.8754 28.0004 34.6504 26.0754Z" fill="black" />
							</g>
							<defs>
								<clipPath id="clip0_127_12243">
									<rect width="20" height="13" fill="white" />
								</clipPath>
							</defs>
						</svg>
					</a>
					<!--a href="<?= get_field('facebook', 91); ?>" target="_blank" class="header__social-links__item">
						<svg width="20" height="20" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M20.2209 35H13.4209V17.5H8.94727V11.55H13.4209V8.05C13.4209 2.975 14.8525 0 20.7578 0H25.7683V5.95H22.7262C20.3999 5.95 20.2209 6.825 20.2209 8.4V11.375H25.7683L25.0525 17.5H20.2209V35Z" fill="black" />
						</svg>
					</a-->
					<!--a href="<?= get_field('instagram', 91); ?>" target="_blank" class="header__social-links__item">
						<svg width="20" height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M28 0H7C3.15 0 0 3.15 0 7V28C0 31.85 3.15 35 7 35H28C31.85 35 35 31.85 35 28V7C35 3.15 31.85 0 28 0ZM31.5 30.275C31.5 30.975 30.975 31.5 30.275 31.5H4.725C4.025 31.5 3.5 30.975 3.5 30.275V15.225H10.85C11.9 12.425 14.525 10.5 17.5 10.5C20.475 10.5 23.1 12.425 24.15 15.225H31.5V30.275ZM31.5 9.275C31.5 9.975 30.975 10.5 30.275 10.5H25.55C25.025 10.5 24.5 9.975 24.5 9.275V4.725C24.5 4.025 25.025 3.5 25.725 3.5H30.45C30.975 3.5 31.5 4.025 31.5 4.725V9.275Z" fill="black" />
							<path d="M26.25 11.7246H21.35C23.275 12.9496 24.5 15.0496 24.5 17.4996C24.5 21.3496 21.35 24.4996 17.5 24.4996C13.65 24.4996 10.5 21.3496 10.5 17.4996C10.5 15.0496 11.725 12.9496 13.65 11.7246H8.75C7.7 13.4746 7 15.3996 7 17.4996C7 23.2746 11.725 27.9996 17.5 27.9996C23.275 27.9996 28 23.2746 28 17.4996C28 15.3996 27.3 13.2996 26.25 11.7246Z" fill="black" />
						</svg>

					</a-->
					<a href="<?= get_field('telegram', 91); ?>" target="_blank" class="header__social-links__item">
						<svg width="20" height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_127_12250)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M26.8096 33.2196C27.2792 33.5521 27.8844 33.6352 28.424 33.4311C28.9636 33.2254 29.3602 32.7646 29.4798 32.2061C30.7471 26.2502 33.8213 11.1754 34.9748 5.75772C35.0623 5.34938 34.9165 4.92501 34.5956 4.6523C34.2748 4.37959 33.83 4.30084 33.4334 4.44813C27.3186 6.71147 8.4871 13.7771 0.79002 16.6252C0.301479 16.806 -0.016438 17.2756 -0.000396359 17.7904C0.0171036 18.3067 0.364187 18.7544 0.864395 18.9046C4.31627 19.9371 8.84731 21.3736 8.84731 21.3736C8.84731 21.3736 10.9648 27.7683 12.0688 31.0204C12.2073 31.4288 12.5267 31.7496 12.9481 31.8604C13.3681 31.9698 13.8173 31.8546 14.1309 31.5586C15.9042 29.8844 18.6459 27.2958 18.6459 27.2958C18.6459 27.2958 23.855 31.1152 26.8096 33.2196ZM10.7534 20.5656L13.2019 28.6419L13.7459 23.5275C13.7459 23.5275 23.2061 14.9948 28.599 10.1313C28.7565 9.98834 28.7784 9.74918 28.6471 9.58147C28.5173 9.41376 28.2781 9.37438 28.0988 9.48813C21.8484 13.4796 10.7534 20.5656 10.7534 20.5656Z" fill="black" />
							</g>
							<defs>
								<clipPath id="clip0_127_12250">
									<rect width="35" height="35" fill="white" />
								</clipPath>
							</defs>
						</svg>

					</a>
				</div>
			</div>
		</div>

		<div class="header__logo-wrapper navbar-brand">
			<p class="header__logo-wrapper__txt">BKNG</p>
			<a href="/"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo"></a>
			<p class="header__logo-wrapper__txt">MNGMNT</p>
		</div>

		<div class="header-right-block d-lg-only ">
			<div class="header__social-links">
				<a href="<?= get_field('vk', 91); ?>" target="_blank" class="header__social-links__item">
					<svg width="20" height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_127_12243)">
							<path d="M34.6504 26.0754C34.4754 25.9004 33.9504 24.5004 31.1504 21.8754C28.1754 19.0754 28.5254 19.4254 32.2004 14.5254C34.3004 11.3754 35.1754 9.62539 35.0004 8.75039C34.8254 8.22539 33.2504 8.40039 33.2504 8.40039H28.0004C28.0004 8.40039 27.1254 8.40039 26.7754 8.92539C26.2504 9.97539 25.9004 11.2004 24.8504 13.3004C22.5754 17.5004 21.5254 17.6754 21.1754 17.5004C20.3004 16.9754 20.4754 15.0504 20.4754 13.8254C20.4754 9.80039 21.0004 8.05039 19.2504 7.70039C18.7254 7.52539 18.3754 7.52539 16.8004 7.52539C14.8754 7.52539 13.3004 7.52539 12.4254 8.05039C11.9004 8.05039 11.3754 8.75039 11.7254 8.75039C12.0754 8.75039 12.7754 8.92539 13.3004 9.62539C13.8254 10.3254 13.8254 12.0754 13.8254 12.0754C13.8254 12.0754 14.0004 16.9754 12.9504 17.5004C12.2504 17.8504 11.2004 17.1504 9.10043 13.3004C8.22543 11.3754 8.05043 9.97539 7.35043 9.10039C7.00043 8.57539 6.12543 8.40039 6.12543 8.40039H1.22543C1.22543 8.40039 0.350434 8.40039 0.175434 8.57539C0.000434019 8.92539 0.175434 9.45039 0.175434 9.45039C0.175434 9.45039 4.02543 19.0754 8.57543 23.9754C12.6004 28.3504 17.3254 28.1754 17.3254 28.1754C17.3254 28.1754 19.9504 28.3504 20.3004 27.6504C20.6504 27.3004 20.6504 26.6004 20.6504 26.6004C20.6504 26.6004 20.6504 23.6254 21.8754 23.2754C23.1004 22.9254 24.8504 26.0754 26.6004 27.4754C28.0004 28.3504 28.3504 28.1754 28.8754 28.1754C30.1004 28.1754 33.6004 28.1754 33.6004 28.1754C33.6004 28.1754 35.8754 28.0004 34.6504 26.0754Z" fill="black" />
						</g>
						<defs>
							<clipPath id="clip0_127_12243">
								<rect width="20" height="13" fill="white" />
							</clipPath>
						</defs>
					</svg>
				</a>
				<!--a href="<?= get_field('facebook', 91); ?>" target="_blank" class="header__social-links__item">
					<svg width="20" height="20" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M20.2209 35H13.4209V17.5H8.94727V11.55H13.4209V8.05C13.4209 2.975 14.8525 0 20.7578 0H25.7683V5.95H22.7262C20.3999 5.95 20.2209 6.825 20.2209 8.4V11.375H25.7683L25.0525 17.5H20.2209V35Z" fill="black" />
					</svg>
				</a-->
				<!--a href="<?= get_field('instagram', 91); ?>" target="_blank" class="header__social-links__item">
					<svg width="20" height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M28 0H7C3.15 0 0 3.15 0 7V28C0 31.85 3.15 35 7 35H28C31.85 35 35 31.85 35 28V7C35 3.15 31.85 0 28 0ZM31.5 30.275C31.5 30.975 30.975 31.5 30.275 31.5H4.725C4.025 31.5 3.5 30.975 3.5 30.275V15.225H10.85C11.9 12.425 14.525 10.5 17.5 10.5C20.475 10.5 23.1 12.425 24.15 15.225H31.5V30.275ZM31.5 9.275C31.5 9.975 30.975 10.5 30.275 10.5H25.55C25.025 10.5 24.5 9.975 24.5 9.275V4.725C24.5 4.025 25.025 3.5 25.725 3.5H30.45C30.975 3.5 31.5 4.025 31.5 4.725V9.275Z" fill="black" />
						<path d="M26.25 11.7246H21.35C23.275 12.9496 24.5 15.0496 24.5 17.4996C24.5 21.3496 21.35 24.4996 17.5 24.4996C13.65 24.4996 10.5 21.3496 10.5 17.4996C10.5 15.0496 11.725 12.9496 13.65 11.7246H8.75C7.7 13.4746 7 15.3996 7 17.4996C7 23.2746 11.725 27.9996 17.5 27.9996C23.275 27.9996 28 23.2746 28 17.4996C28 15.3996 27.3 13.2996 26.25 11.7246Z" fill="black" />
					</svg>

				</a-->
				<a href="<?= get_field('telegram', 91); ?>" target="_blank" class="header__social-links__item">
					<svg width="20" height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_127_12250)">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M26.8096 33.2196C27.2792 33.5521 27.8844 33.6352 28.424 33.4311C28.9636 33.2254 29.3602 32.7646 29.4798 32.2061C30.7471 26.2502 33.8213 11.1754 34.9748 5.75772C35.0623 5.34938 34.9165 4.92501 34.5956 4.6523C34.2748 4.37959 33.83 4.30084 33.4334 4.44813C27.3186 6.71147 8.4871 13.7771 0.79002 16.6252C0.301479 16.806 -0.016438 17.2756 -0.000396359 17.7904C0.0171036 18.3067 0.364187 18.7544 0.864395 18.9046C4.31627 19.9371 8.84731 21.3736 8.84731 21.3736C8.84731 21.3736 10.9648 27.7683 12.0688 31.0204C12.2073 31.4288 12.5267 31.7496 12.9481 31.8604C13.3681 31.9698 13.8173 31.8546 14.1309 31.5586C15.9042 29.8844 18.6459 27.2958 18.6459 27.2958C18.6459 27.2958 23.855 31.1152 26.8096 33.2196ZM10.7534 20.5656L13.2019 28.6419L13.7459 23.5275C13.7459 23.5275 23.2061 14.9948 28.599 10.1313C28.7565 9.98834 28.7784 9.74918 28.6471 9.58147C28.5173 9.41376 28.2781 9.37438 28.0988 9.48813C21.8484 13.4796 10.7534 20.5656 10.7534 20.5656Z" fill="black" />
						</g>
						<defs>
							<clipPath id="clip0_127_12250">
								<rect width="35" height="35" fill="white" />
							</clipPath>
						</defs>
					</svg>

				</a>
			</div>
		</div>

	</header>



	<?php if (function_exists('wp_body_open')) {
		wp_body_open();
	} ?>