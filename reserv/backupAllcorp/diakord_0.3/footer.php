<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package diakord
 */

?>

<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php //echo esc_url(__('https://wordpress.org/', 'diak')); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf(esc_html__('Proudly powered by %s', 'diak'), 'WordPress');
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf(esc_html__('Theme: %1$s by %2$s.', 'diak'), 'diak', '<a href="#">Аноним</a>');
				?>
		</div> -->
<!-- .site-info -->
<!-- </footer> -->
<!-- #colophon -->


<footer id="footer">
	<div class="subscribe-block-wrapper">
		<div class="row margin0">
			<div class="maxwidth-theme">
				<div class="col-md-12">
					<div class="outer-wrapper">
						<div class="inner-wrapper">
							<div class="row margin0">
								<div class="col-md-3 col-sm-3 hidden-sm text">
									<i class="svg inline  svg-inline-subscribe" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
											width="70" height="30" viewBox="0 0 70 30">
											<defs>
												<style>
													.fcls-1 {
														fill: #fff;
														fill-rule: evenodd
													}
												</style>
											</defs>
											<path class="fcls-1"
												d="M32,0H65a4,4,0,0,1,4,4V26a4,4,0,0,1-4,4H32a4,4,0,0,1-4-4V4A4,4,0,0,1,32,0Zm0,2H65a2,2,0,0,1,2,2V26a2,2,0,0,1-2,2H32a2,2,0,0,1-2-2V4A2,2,0,0,1,32,2ZM45.672,18.834L32.134,5.3A1.992,1.992,0,0,1,33.7,4.031L47.086,17.419a2,2,0,0,0,2.828,0L63.3,4.031A1.992,1.992,0,0,1,64.866,5.3L51.328,18.834A4,4,0,0,1,45.672,18.834ZM7,8H21a1,1,0,0,1,1,1h0a1,1,0,0,1-1,1H7A1,1,0,0,1,6,9H6A1,1,0,0,1,7,8ZM1,14H15a1,1,0,0,1,1,1h0a1,1,0,0,1-1,1H1a1,1,0,0,1-1-1H0A1,1,0,0,1,1,14Zm6,6H21a1,1,0,0,1,1,1h0a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1H6A1,1,0,0,1,7,20Z">
											</path>
										</svg>
									</i> Подписывайтесь на&nbsp;новости и акции:
								</div>
								<div class="col-md-8 col-sm-9 col-xs-12">
									<div class="subscribe-edit">
										<form action="/cabinet/subscribe/" method="post" class="subscribe-form" novalidate="novalidate">
											<input type="hidden" name="sessid" id="sessid" value="96c8cb1e87048180f275d156f83b5192"> <input
												type="text" name="EMAIL" class="form-control subscribe-input required" placeholder="E-mail"
												value="" size="30" maxlength="255" aria-required="true">
											<input type="hidden" name="RUB_ID[]" value="1">
											<input type="hidden" name="FORMAT" value="html">
											<input type="submit" name="Save" class="btn btn-default btn-md subscribe-btn" value="Подписаться">
											<input type="hidden" name="PostAction" value="Add">
											<input type="hidden" name="ID" value="">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row bottom-middle">
			<div class="maxwidth-theme">
				<div class="col-md-8">
					<div class="row">

						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'Footer-menu',
								'menu_class' => 'bottom-menu',
								'menu_id' => 'footer_menu',
								'container' => '',
								'container_class' => '',
								'items_wrap' => '<div id="%1$s bottom-menu" class="%2$s">%3$s</div>',
								'walker' => new Custom_Walker_Nav_Menu(),


								// 'theme_location'  => '',
								// 'menu'            => '',
								// 'container'       => '',
								// 'container_class' => 'div',
								// 'container_id'    => '',
								// 'menu_class'      => 'menu',
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
				</div>
				<div class="col-md-4 contact-block">
					<div class="row">
						<div class="col-md-9 col-md-offset-2">
							<span class="white_middle_text">Наши контакты<br>
								<br>
							</span>
							<div class="info">
								<div class="row">
									<div class="col-md-12 col-sm-4">
										<div class="blocks phones">

											<?php if (carbon_get_theme_option('crb_phone_number')): ?>
												<div class="phone">
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
									<div class="col-md-12 col-sm-4">

										<?php if (carbon_get_theme_option('crb_address_header')): ?>

											<div class="address blocks">
												<i class="svg inline  svg-inline-address" aria-hidden="true"><svg
														xmlns="http://www.w3.org/2000/svg" width="13" height="16" viewBox="0 0 13 16">
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
												<!-- <div> Москва, ул. Пушкина 21, 3 этаж, офис 4 </div> -->
											</div>
										<?php endif; ?>

									</div>
									<div class="col-md-12 col-sm-4">
										<?php if (carbon_get_theme_option('crb_email')): ?>
											<div class="email blocks">
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
														href="mailto:<?php echo carbon_get_theme_option('crb_email'); ?>"><?php echo carbon_get_theme_option('crb_email'); ?></a>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row bottom-under">
			<div class="maxwidth-theme">
				<div class="col-md-12 outer-wrapper">
					<div class="inner-wrapper">
						<div class="copy-block">
							<div class="copy"><?php echo carbon_get_theme_option('crb_bottom_footer_copy'); ?></div>
							<div class="print-block"></div>
							<div id="bx-composite-banner"></div>
						</div>
						<div class="social-block">
							<div class="social-icons">
								<ul>
									<?php if (carbon_get_theme_option('crb_address_vk')): ?>
										<li class="vk">
											<a href="<?php echo carbon_get_theme_option('crb_address_vk'); ?>" target="_blank" rel="nofollow"
												title="Вконтакте">
												<i class="svg inline  svg-inline-vk" aria-hidden="true"><svg width="20" height="20"
														viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<defs>
															<style>
																.cls-1 {
																	fill: #222;
																	fill-rule: evenodd
																}
															</style>
														</defs>
														<path class="cls-1"
															d="M10.7379 15C5.81001 15 2.9992 11.6216 2.88208 6H5.35055C5.43163 10.1261 7.25145 11.8739 8.69289 12.2342V6H11.0172V9.55856C12.4406 9.40541 13.9361 7.78378 14.4406 6H16.765C16.3776 8.1982 14.756 9.81982 13.6028 10.4865C14.756 11.027 16.6028 12.4414 17.3055 15H14.7469C14.1974 13.2883 12.828 11.964 11.0172 11.7838V15H10.7379Z">
														</path>
													</svg>
												</i> </a>
										</li>
									<?php endif; ?>
									<?php if (carbon_get_theme_option('crb_address_telegram')): ?>
										<li class="telegram">
											<a href="<?php echo carbon_get_theme_option('crb_address_telegram'); ?>" target="_blank"
												rel="nofollow" title="Telegram">
												<i class="svg inline  svg-inline-tel" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
														width="20" height="20" viewBox="0 0 20 20">
														<defs>
															<style>
																.cls-1 {
																	fill: #909090;
																	fill-rule: evenodd
																}
															</style>
														</defs>
														<path class="cls-1"
															d="M14.78,15.369a0.727,0.727,0,0,1-1.205.565l-3.332-2.455L8.636,15.027a0.837,0.837,0,0,1-.669.327L8.2,11.962h0l6.174-5.579c0.268-.238-0.059-0.372-0.417-0.134L6.33,11.054,3.042,10.028C2.328,9.8,2.313,9.314,3.191,8.972L16.044,4.018c0.6-.223,1.116.134,0.922,1.041Z">
														</path>
													</svg>
												</i> </a>
										</li>
									<?php endif; ?>
									<?php if (carbon_get_theme_option('crb_address_whatsapp')): ?>
										<li class="whatsapp">
											<a href="<?php echo carbon_get_theme_option('crb_address_whatsapp'); ?>" target="_blank"
												rel="nofollow" title="WhatsApp">
												<i class="svg inline  svg-inline-tw" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
														width="20" height="20" viewBox="0 0 20 20">
														<defs>
															<style>
																.cls-1 {
																	fill: #222;
																	fill-rule: evenodd
																}
															</style>
														</defs>
														<path class="cls-1"
															d="M10.294,8.784s0.2-2.739,2.175-2.763c1.61-.02,1.916.686,1.916,0.686A3.662,3.662,0,0,0,15.7,6a2.046,2.046,0,0,1-.539,1.234A1.365,1.365,0,0,0,16,6.942a1.6,1.6,0,0,1-.879,1.017A9.089,9.089,0,0,1,13.769,12.8c-1.291,2.11-4.055,2.171-5.49,2.188a7.855,7.855,0,0,1-3.272-.922A6.935,6.935,0,0,0,8.159,13.4,15.331,15.331,0,0,1,6,11.68,2.219,2.219,0,0,0,6.782,11.6,11.26,11.26,0,0,1,5.006,9.233a2.933,2.933,0,0,0,.819.041S4.557,7.281,5.156,5.989A8.159,8.159,0,0,0,10.294,8.784Z">
														</path>
													</svg>
												</i> </a>
										</li>
									<?php endif; ?>
									<?php if (carbon_get_theme_option('crb_email')): ?>
										<li class="mail">
											<a href="mailto:<?php echo carbon_get_theme_option('crb_email'); ?>" target="_blank"
												rel="nofollow" title="Mail.ru">
												<i class="svg inline  svg-inline-ml" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
														width="20" height="20" viewBox="0 0 20 20">
														<defs>
															<style>
																.cls-1 {
																	fill: #222;
																	fill-rule: evenodd
																}
															</style>
														</defs>
														<path class="cls-1"
															d="M12.753,10.434a2.386,2.386,0,0,0-2.429-2.407H10.275A2.375,2.375,0,0,0,7.964,10.64a2.319,2.319,0,0,0,2.305,2.537,2.47,2.47,0,0,0,2.487-2.439Zm-2.47-3.752A3.649,3.649,0,0,1,12.9,7.861v0a0.555,0.555,0,0,1,.531-0.606H13.5a0.607,0.607,0,0,1,.581.628l0,5.367a0.334,0.334,0,0,0,.558.308c0.824-.886,1.81-4.552-0.512-6.677a5.368,5.368,0,0,0-6.612-.543,5.363,5.363,0,0,0-1.672,6.268A4.963,4.963,0,0,0,12.036,15.3c0.958-.4,1.4.95,0.406,1.393A6.49,6.49,0,0,1,4.8,13.749,6.581,6.581,0,0,1,15.394,6.092c2.226,2.432,2.1,6.987-.075,8.758A1.509,1.509,0,0,1,12.883,13.7l-0.01-.383a3.574,3.574,0,0,1-2.59,1.126,3.885,3.885,0,0,1,0-7.759h0">
														</path>
													</svg>
												</i> </a>
										</li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</footer>
<div id="popup_iframe_wrapper">
	<div class="jqmOverlay"
		style="height: 100%; width: 100%; position: fixed; left: 0px; top: 0px; z-index: 2999; opacity: 0.5;"></div>
	<div class="callback_frame jqmWindow jqm-init scrollblock show"
		style="width: 500px; z-index: 3000; opacity: 1; display: block;"
		data-trigger="%7B%22class%22%3A%22callback-block%20animate-load%20colored%20%20btn-transparent-bg%20btn-default%20btn%22%2C%22data-event%22%3A%22jqm%22%2C%22data-param-id%22%3A%221%22%2C%22data-name%22%3A%22callback%22%7D">
		<span class="jqmClose top-close fa fa-close"></span>
		<div id="comp_e012d9adde2b7147ee1bff07400139b5">
			<div id="comp_2522a5a6e6ac76c1d8339352dd7297aa">
				<div class="form popup">
					<div class="form-header">
						<div class="text">
							<div class="title">Заказать звонок</div>
							<div class="form_desc">Представьтесь, мы вам перезвоним.</div>
						</div>
					</div>
					<?php //echo do_shortcode('[contact-form-7 id="574a9a7" title="Без названия"]'); ?>
					
					<form name="aspro_allcorp2_callback_s1" action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
						method="POST">
						<input type="hidden" name="action" value="custom_form">
						<div class="form-body">
							<div class="row" data-sid="FIO">
								<div class="col-md-12 ">
									<div class="form-group animated-labels">
										<label for="POPUP_FIO"><span>Ваше имя:&nbsp;<span class="required-star">*</span></span></label>
										<div class="input ">
											<input type="text" id="POPUP_FIO" class="form-control inputtext" name="name" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row" data-sid="PHONE">
								<div class="col-md-12 ">
									<div class="form-group animated-labels ">
										<label for="POPUP_PHONE"><span>Телефон:&nbsp;<span class="required-star">*</span></span></label>
										<div class="input ">
											<input type="tel" id="POPUP_PHONE" class="form-control phone" name="phone" required>
										</div>
									</div>
								</div>
							</div>
							<textarea name="nspm" style="display:none;"></textarea>
						</div>
						<div class="form-footer">
							<div class="licence_block bx_filter">
								<input type="hidden" name="aspro_allcorp2_form_validate">
								<input type="checkbox" id="licenses_popup" required>
								<label for="licenses_popup">
									Я согласен на <a href="<?php echo carbon_get_theme_option('crb_license'); ?>" target="_blank">обработку персональных данных</a>
								</label>
							</div>
							<div class="inner-table-block">
								<button type="submit" class="btn btn-default btn-lg"><span>Отправить</span></button>
							</div>
							<div class="inner-table-block">
								<div class="more_text_small">
									<span class="required-star">*</span> — Обязательные поля
								</div>
							</div>
						</div>
						<input type="hidden" value="Отправить" name="web_form_submit">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>