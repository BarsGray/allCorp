<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package diakord
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php // wp_body_open(); ?>
	<div id="page" class="site">
		<div class="visible-lg visible-md title-v5 index">
			<header class="header_1 long with_regions dark">
				<div class="logo_and_menu-row">
					<div class="logo-row top-fill">
						<div class="maxwidth-theme">
							<div class="logo-block paddings pull-left">
								<div class="logo">
									<a href="<?php bloginfo('url'); ?>">
										<?php the_custom_logo(); ?>
									</a>
								</div>
							</div>
							<div class="col-md-2 visible-lg nopadding-right slogan">
								<div class="top-description">
									<div><?php bloginfo('description'); ?></div>
								</div>
							</div>
							<div class="right-icons pull-right">
								<div class="phone-block with_btn">
									<div class="region-block inner-table-block">
										<div class="inner-table-block p-block">
											<?php if (carbon_get_theme_option('crb_phone_number')): ?>
												<div class="phone big">
													<i class="svg inline  svg-inline-phone colored" aria-hidden="true"><svg
															xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
															<defs>
																<style>
																	.pcls-1 {
																		fill: #222;
																		fill-rule: evenodd
																	}
																</style>
															</defs>
															<path class="pcls-1"
																d="M14,11.052a0.5,0.5,0,0,0-.03-0.209,1.758,1.758,0,0,0-.756-0.527C12.65,10,12.073,9.69,11.515,9.363a2.047,2.047,0,0,0-.886-0.457c-0.607,0-1.493,1.8-2.031,1.8a2.138,2.138,0,0,1-.856-0.388A9.894,9.894,0,0,1,3.672,6.253,2.134,2.134,0,0,1,3.283,5.4c0-.536,1.8-1.421,1.8-2.027a2.045,2.045,0,0,0-.458-0.885C4.3,1.932,3.99,1.355,3.672.789A1.755,1.755,0,0,0,3.144.034,0.5,0.5,0,0,0,2.935,0,4.427,4.427,0,0,0,1.551.312,2.62,2.62,0,0,0,.5,1.524,3.789,3.789,0,0,0-.011,3.372a7.644,7.644,0,0,0,.687,2.6A9.291,9.291,0,0,0,1.5,7.714a16.783,16.783,0,0,0,4.778,4.769,9.283,9.283,0,0,0,1.742.825,7.673,7.673,0,0,0,2.608.686,3.805,3.805,0,0,0,1.851-.507,2.62,2.62,0,0,0,1.214-1.052A4.418,4.418,0,0,0,14,11.052Z">
															</path>
														</svg>
													</i>
													<a
														href="tel:+<?php echo preg_replace('/[^0-9]/', '', carbon_get_theme_option('crb_phone_number')); ?>"><?php echo carbon_get_theme_option('crb_phone_number'); ?></a>
												</div>
											<?php endif; ?>
										</div>
									</div>
									<div class="social-block">
										<div class="social-icons inner-table-block">
											<ul>
												<?php if (carbon_get_theme_option('crb_address_vk')): ?>
													<li class="vk">
														<a href="<?php echo carbon_get_theme_option('crb_address_vk'); ?>" target="_blank"
															rel="nofollow" title="Вконтакте"></a>
													</li>
												<?php endif; ?>
												<?php if (carbon_get_theme_option('crb_address_telegram')): ?>
													<li class="telegram">
														<a href="<?php echo carbon_get_theme_option('crb_address_telegram'); ?>" target="_blank"
															rel="nofollow" title="Telegram"></a>
													</li>
												<?php endif; ?>
												<?php if (carbon_get_theme_option('crb_address_whatsapp')): ?>
													<li class="whatsapp">
														<a href="<?php echo carbon_get_theme_option('crb_address_whatsapp'); ?>" target="_blank"
															rel="nofollow" title="WhatsApp"></a>
													</li>
												<?php endif; ?>
												<?php if (carbon_get_theme_option('crb_email')): ?>
													<li class="mail">
														<a href="mailto:<?php echo carbon_get_theme_option('crb_email'); ?>" target="_blank"
															rel="nofollow" title="Mail.ru"></a>
													</li>
												<?php endif; ?>
											</ul>
										</div>
									</div>
									<div class="inner-table-block">
										<span
											class="callback-block animate-load colored  btn-transparent-bg btn-default btn callback-block-btn"
											data-event="jqm" data-param-id="1" data-name="callback">Заказать звонок</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-row with-color bgnone colored_dark sliced">
					<div class="maxwidth-theme">
						<div class="col-md-12">
							<div class="right-icons pull-right">

								<div class="pull-right">
									<div class="wrap_icon inner-table-block">
										<a href="<?php echo get_search_link(); ?>" class="inline-search-show twosmallfont" title="Поиск"
											style="display: flex;
	align-items: center;">
											<i class="svg inline  svg-inline-search" aria-hidden="true"><svg
													xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
													<defs>
														<style>
															.stcls-1 {
																fill: #222;
																fill-rule: evenodd
															}
														</style>
													</defs>
													<path class="stcls-1"
														d="M15.644,15.644a1.164,1.164,0,0,1-1.646,0l-2.95-2.95a7.036,7.036,0,1,1,1.645-1.645L15.644,14A1.164,1.164,0,0,1,15.644,15.644ZM7,2a5,5,0,1,0,5,5A5,5,0,0,0,7,2Z">
													</path>
												</svg>
											</i> </a>
									</div>
								</div>

							</div>


							<div class="menu-only" style="padding-left: 0px; padding-right: 204px; opacity: 1;">


								<nav id="site-navigation" class="main-navigation">
									<button class="menu-toggle" aria-controls="primary-menu"
										aria-expanded="false"><?php // esc_html_e('Primary Menu', 'diak'); ?></button>
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'Top-menu',
											'menu_id' => 'primary-menu',
										)
									);
									?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>



















		<div id="mobileheader" class="visible-xs visible-sm">
			<div class="mobileheader-v1">
				<div class="burger pull-left">
					<i class="svg inline  svg-inline-burger dark" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
							width="18" height="16" viewBox="0 0 18 16">
							<defs>
								<style>
									.cls-1 {
										fill: #fff;
										fill-rule: evenodd
									}
								</style>
							</defs>
							<path data-name="Rounded Rectangle 81 copy 2" class="cls-1"
								d="M330,114h16a1,1,0,0,1,1,1h0a1,1,0,0,1-1,1H330a1,1,0,0,1-1-1h0A1,1,0,0,1,330,114Zm0,7h16a1,1,0,0,1,1,1h0a1,1,0,0,1-1,1H330a1,1,0,0,1-1-1h0A1,1,0,0,1,330,121Zm0,7h16a1,1,0,0,1,1,1h0a1,1,0,0,1-1,1H330a1,1,0,0,1-1-1h0A1,1,0,0,1,330,128Z"
								transform="translate(-329 -114)"></path>
						</svg>
					</i> <i class="svg inline  svg-inline-close dark" aria-hidden="true"><svg id="Close.svg"
							xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
							<defs>
								<style>
									.cls-1 {
										fill: #222;
										fill-rule: evenodd
									}
								</style>
							</defs>
							<path id="Rounded_Rectangle_114_copy_3" data-name="Rounded Rectangle 114 copy 3" class="cls-1"
								d="M334.411,138l6.3,6.3a1,1,0,0,1,0,1.414,0.992,0.992,0,0,1-1.408,0l-6.3-6.306-6.3,6.306a1,1,0,0,1-1.409-1.414l6.3-6.3-6.293-6.3a1,1,0,0,1,1.409-1.414l6.3,6.3,6.3-6.3A1,1,0,0,1,340.7,131.7Z"
								transform="translate(-325 -130)"></path>
						</svg>
					</i>
				</div>
				<div class="logo-block pull-left">
					<div class="logo">
						<a href="<?php bloginfo('url'); ?>">
							<?php the_custom_logo(); ?>
						</a>
					</div>
				</div>
				<div class="right-icons pull-right">
					<div class="pull-right">
						<div class="wrap_icon">
							<button class="inline-search-show twosmallfont" title="Поиск">
								<i class="svg inline  svg-inline-search" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
										width="21" height="21" viewBox="0 0 21 21">
										<defs>
											<style>
												.cls-1 {
													fill: #222;
													fill-rule: evenodd
												}
											</style>
										</defs>
										<path data-name="Rounded Rectangle 106" class="cls-1"
											d="M1590.71,131.709a1,1,0,0,1-1.42,0l-4.68-4.677a9.069,9.069,0,1,1,1.42-1.427l4.68,4.678A1,1,0,0,1,1590.71,131.709ZM1579,113a7,7,0,1,0,7,7A7,7,0,0,0,1579,113Z"
											transform="translate(-1570 -111)"></path>
									</svg>
								</i> </button>
						</div>
					</div>
					<div class="pull-right">
						<div class="wrap_icon wrap_phones">
							<a href="tel:+70000000030">
								<i class="svg inline  svg-inline-phone" aria-hidden="true"><svg width="21" height="21"
										viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M18.9562 15.97L18.9893 16.3282C19.0225 16.688 18.9784 17.0504 18.8603 17.3911C18.6223 18.086 18.2725 18.7374 17.8248 19.3198L17.7228 19.4524L17.6003 19.5662C16.8841 20.2314 15.9875 20.6686 15.0247 20.8243C14.0374 21.0619 13.0068 21.0586 12.0201 20.814L11.9327 20.7924L11.8476 20.763C10.712 20.3703 9.65189 19.7871 8.71296 19.0385C8.03805 18.582 7.41051 18.0593 6.83973 17.4779L6.81497 17.4527L6.79112 17.4267C4.93379 15.3963 3.51439 13.0063 2.62127 10.4052L2.6087 10.3686L2.59756 10.3315C2.36555 9.5598 2.21268 8.76667 2.14121 7.9643C1.94289 6.79241 1.95348 5.59444 2.17289 4.42568L2.19092 4.32964L2.21822 4.23581C2.50215 3.26018 3.0258 2.37193 3.7404 1.65124C4.37452 0.908181 5.21642 0.370416 6.15867 0.107283L6.31009 0.0649959L6.46626 0.0468886C7.19658 -0.0377903 7.93564 -0.00763772 8.65659 0.136237C9.00082 0.203673 9.32799 0.34095 9.61768 0.540011L9.90227 0.735566L10.1048 1.01522C10.4774 1.52971 10.7173 2.12711 10.8045 2.75455C10.8555 2.95106 10.9033 3.13929 10.9499 3.32228C11.0504 3.71718 11.1446 4.08764 11.2499 4.46408C11.5034 5.03517 11.6255 5.65688 11.6059 6.28327L11.5984 6.52137L11.5353 6.75107C11.3812 7.31112 11.0546 7.68722 10.8349 7.8966C10.6059 8.11479 10.3642 8.2737 10.18 8.38262C9.89673 8.55014 9.57964 8.69619 9.32537 8.8079C9.74253 10.2012 10.5059 11.4681 11.5455 12.4901C11.7801 12.3252 12.0949 12.1097 12.412 11.941C12.6018 11.8401 12.8614 11.7177 13.1641 11.6357C13.4565 11.5565 13.9301 11.4761 14.4706 11.6169L14.6882 11.6736L14.8878 11.7772C15.4419 12.0649 15.9251 12.4708 16.3035 12.9654C16.5807 13.236 16.856 13.4937 17.1476 13.7666C17.2974 13.9068 17.4515 14.0511 17.6124 14.2032C18.118 14.5805 18.5261 15.0751 18.8003 15.6458L18.9562 15.97ZM16.3372 15.7502C16.6216 15.9408 16.8496 16.2039 16.9977 16.5121C17.0048 16.5888 16.9952 16.6661 16.9697 16.7388C16.8021 17.2295 16.5553 17.6895 16.2391 18.1009C15.795 18.5134 15.234 18.7788 14.6329 18.8608C13.9345 19.0423 13.2016 19.0464 12.5012 18.8728C11.5558 18.5459 10.675 18.0561 9.8991 17.4258C9.30961 17.0338 8.76259 16.5817 8.26682 16.0767C6.59456 14.2487 5.31682 12.0971 4.51287 9.75567C4.31227 9.08842 4.18279 8.40192 4.12658 7.70756C3.95389 6.74387 3.95792 5.75691 4.13855 4.79468C4.33628 4.11526 4.70731 3.49868 5.21539 3.00521C5.59617 2.53588 6.11383 2.19633 6.69661 2.03358C7.22119 1.97276 7.75206 1.99466 8.26981 2.09849C8.34699 2.11328 8.42029 2.14388 8.48501 2.18836C8.68416 2.46334 8.80487 2.78705 8.83429 3.12504C8.89113 3.34235 8.94665 3.56048 9.00218 3.77864C9.12067 4.24418 9.2392 4.70987 9.37072 5.16815C9.5371 5.49352 9.61831 5.85557 9.60687 6.22066C9.51714 6.54689 8.89276 6.81665 8.28746 7.07816C7.71809 7.32415 7.16561 7.56284 7.0909 7.83438C7.07157 8.17578 7.12971 8.51712 7.26102 8.83297C7.76313 10.9079 8.87896 12.7843 10.4636 14.2184C10.6814 14.4902 10.9569 14.7105 11.2702 14.8634C11.5497 14.9366 12.0388 14.5907 12.5428 14.2342C13.0783 13.8555 13.6307 13.4648 13.9663 13.5523C14.295 13.7229 14.5762 13.9719 14.785 14.2773C15.1184 14.6066 15.4631 14.9294 15.808 15.2523C15.9849 15.418 16.1618 15.5836 16.3372 15.7502Z"
											fill="#222222"></path>
									</svg>
								</i> </a>
						</div>
					</div>
				</div>
			</div>
			<div id="mobilemenu" class="leftside">
				<div class="mobilemenu-v1 scroller compact_menu">
					<div class="wrap">

						<div class="menu middle phones">
							<ul>
								<li>
									<a href="tel:+<?php echo preg_replace('/[^0-9]/', '', carbon_get_theme_option('crb_phone_number')); ?>"
										class="dark-color">
										<i class="svg inline  svg-inline-phone" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
												width="14" height="14" viewBox="0 0 14 14">
												<defs>
													<style>
														.pcls-1 {
															fill: #222;
															fill-rule: evenodd
														}
													</style>
												</defs>
												<path class="pcls-1"
													d="M14,11.052a0.5,0.5,0,0,0-.03-0.209,1.758,1.758,0,0,0-.756-0.527C12.65,10,12.073,9.69,11.515,9.363a2.047,2.047,0,0,0-.886-0.457c-0.607,0-1.493,1.8-2.031,1.8a2.138,2.138,0,0,1-.856-0.388A9.894,9.894,0,0,1,3.672,6.253,2.134,2.134,0,0,1,3.283,5.4c0-.536,1.8-1.421,1.8-2.027a2.045,2.045,0,0,0-.458-0.885C4.3,1.932,3.99,1.355,3.672.789A1.755,1.755,0,0,0,3.144.034,0.5,0.5,0,0,0,2.935,0,4.427,4.427,0,0,0,1.551.312,2.62,2.62,0,0,0,.5,1.524,3.789,3.789,0,0,0-.011,3.372a7.644,7.644,0,0,0,.687,2.6A9.291,9.291,0,0,0,1.5,7.714a16.783,16.783,0,0,0,4.778,4.769,9.283,9.283,0,0,0,1.742.825,7.673,7.673,0,0,0,2.608.686,3.805,3.805,0,0,0,1.851-.507,2.62,2.62,0,0,0,1.214-1.052A4.418,4.418,0,0,0,14,11.052Z">
												</path>
											</svg>
										</i> <span><?php echo carbon_get_theme_option('crb_phone_number'); ?></span>
									</a>
								</li>
							</ul>
						</div>

						<div class="menu top">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'mobile_menu',
									'menu_class' => 'mobile_menu',
									'menu_id' => 'mobile_menu',
									'container' => '',
									'container_class' => '',
									'walker' => new Custom_Walker_Nav_Mobile_Menu(),


									// 'theme_location'  => '',
									// 'menu'            => '',
									// 'container'       => '',
									// 'container_class' => 'div',
									// 'container_id'    => '',
									'menu_class' => 'menu top',
									// 'menu_id'         => '',
									// 'echo'            => true,
									// 'fallback_cb'     => 'wp_page_menu',
									// 'before'          => '',
									// 'after'           => '',
									// 'link_before'     => '',
									// 'link_after'      => '',
									// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									// 'depth'           => 0,
									// 'walker'          => '',
								)
							);
							?>
						</div>

						<div class="contacts">
							<div class="title"></div>

							<?php if (carbon_get_theme_option('crb_address_header')): ?>
								<div class="address">
									<i class="svg inline  svg-inline-address" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
											width="13" height="16" viewBox="0 0 13 16">
											<defs>
												<style>
													.cls-1 {
														fill-rule: evenodd
													}
												</style>
											</defs>
											<path data-name="Ellipse 74 copy" class="cls-1"
												d="M763.9,42.916h0.03L759,49h-1l-4.933-6.084h0.03a6.262,6.262,0,0,1-1.1-3.541,6.5,6.5,0,0,1,13,0A6.262,6.262,0,0,1,763.9,42.916ZM758.5,35a4.5,4.5,0,0,0-3.741,7h-0.012l3.542,4.447h0.422L762.289,42H762.24A4.5,4.5,0,0,0,758.5,35Zm0,6a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,758.5,41Z"
												transform="translate(-752 -33)"></path>
										</svg>
									</i>
									<div><?php echo carbon_get_theme_option('crb_address_header'); ?></div>
								</div>
							<?php endif; ?>

							<?php if (carbon_get_theme_option('crb_email')): ?>
								<div class="email">
									<i class="svg inline  svg-inline-email" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
											width="16" height="13" viewBox="0 0 16 13">
											<defs>
												<style>
													.ecls-1 {
														fill: #222;
														fill-rule: evenodd
													}
												</style>
											</defs>
											<path class="ecls-1"
												d="M14,13H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0H14a2,2,0,0,1,2,2v9A2,2,0,0,1,14,13ZM3.534,2L8.015,6.482,12.5,2H3.534ZM14,3.5L8.827,8.671a1.047,1.047,0,0,1-.812.3,1.047,1.047,0,0,1-.811-0.3L2,3.467V11H14V3.5Z">
											</path>
										</svg>
									</i>
									<div>
										<a
											href="<?php echo carbon_get_theme_option('crb_email'); ?>"><?php echo carbon_get_theme_option('crb_email'); ?></a>
									</div>
								</div>
							<?php endif; ?>
						</div>

						<div class="social-icons">






























							<ul>
								<?php if (carbon_get_theme_option('crb_address_vk')): ?>
									<li class="vk">
										<a href="<?php echo carbon_get_theme_option('crb_address_vk'); ?>" target="_blank" rel="nofollow"
											title="Вконтакте"></a>
									</li>
								<?php endif; ?>

								<?php if (carbon_get_theme_option('crb_address_whatsapp')): ?>
									<li class="twitter">
										<a href="<?php echo carbon_get_theme_option('crb_address_whatsapp'); ?>" target="_blank"
											rel="nofollow" title="Twitter"></a>
									</li>
								<?php endif; ?>

								<?php if (carbon_get_theme_option('crb_address_telegram')): ?>
									<li class="telegram">
										<a href="<?php echo carbon_get_theme_option('crb_address_telegram'); ?>" target="_blank"
											rel="nofollow" title="Telegram"></a>
									</li>
								<?php endif; ?>

								<?php if (carbon_get_theme_option('crb_email')): ?>
									<li class="mail">
										<a href="mailto:<?php echo carbon_get_theme_option('crb_email'); ?>" target="_blank" rel="nofollow"
											title="Mail.ru"></a>
									</li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="mobilemenu-overlay"></div>
		</div>