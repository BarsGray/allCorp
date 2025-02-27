<?php
/*
Template Name: kontakti
*/

get_header();
?>

<main id="primary" class="site-main">



	<div class="body  hover_blink">
		<div class="body_media"></div>
		<div role="main" class="main banner-auto">
			<div class="page-top-wrapper color v3">
				<section class="page-top maxwidth-theme ">
					<div class="row">
						<div class="col-md-12">
							<h1 id="pagetitle"><?php the_title(); ?></h1>
							<ul class="breadcrumb" id="navigation" itemscope itemtype="http://schema.org/BreadcrumbList">
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" id="bx_breadcrumb_0"><a
										href="/" title="Главная" itemprop="item"><span itemprop="name">Главная</span></a>
									<meta itemprop="position" content="1" />
								</li>
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" id="bx_breadcrumb_1"
									class="active">
									<link href="/product/" itemprop="item" /><span><span
											itemprop="name"><?php the_title(); ?></span></span>
									<meta itemprop="position" content="2" />
								</li>
							</ul>
						</div>
					</div>
				</section>
			</div>
			<div class="container">
				<div class="row">
					<div class="maxwidth-theme">
						<div class="col-md-12 col-sm-12 col-xs-12 content-md">






							<div itemscope="" itemtype="http://schema.org/Organization">
								<div class="contacts contacts-page-map-inline  maxwidth-theme">
									<div class="contacts-wrapper">
										<div class="row">
											<div class="col-md-4">
												<table>
													<tbody>
														<tr>
															<td class="icon" style="width: 44px;"><i class="fa big-icon s45"><i class="svg inline  svg-inline-address"
																		aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="16"
																			viewBox="0 0 13 16">
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
																	</i></i></td>
															<td>
																<span class="dark_table">Центральный офис</span>
																<div itemprop="address" class=""><?php echo carbon_get_theme_option('crb_address_header'); ?></div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-md-4">
												<table>
													<tbody>
														<tr>
															<td class="icon" style="width: 44px;"><i class="fa big-icon s45"><i class="svg inline  svg-inline-phone"
																		aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
																			viewBox="0 0 14 14">
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
																	</i></i></td>
															<td>
																<span class="dark_table">Справочная служба</span>
																<div class="">
																	<div itemprop="telephone"><a href="tel:+<?php echo preg_replace('/[^0-9]/', '', carbon_get_theme_option('crb_phone_number')); ?>"><?php echo carbon_get_theme_option('crb_phone_number'); ?></a>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-md-4">
												<table>
													<tbody>
														<tr>
															<td class="icon" style="width: 44px;"><i class="fa big-icon s45"><i class="svg inline  svg-inline-email"
																		aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="13"
																			viewBox="0 0 16 13">
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
																	</i></i></td>
															<td>
																<span class="dark_table">E-mail</span>
																<div class="">
																	<div itemprop="email">
																		<a href="mailto:<?php echo carbon_get_theme_option('crb_email'); ?>"><?php echo carbon_get_theme_option('crb_email'); ?></a>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<!-- <div class="col-md-2 b-block">
												<button data-event="jqm" data-param-id="4" data-name="order_services"
													class="btn btn-default btn-transparent-bg btn-block"><span>Задать
														вопрос</span></button>
											</div> -->
										</div>
									</div>
									<div class="hidden">
										<span itemprop="name">Аспро: Allcorp2</span>
									</div>
								</div>
								<hr>
							</div>









							<div class="right_block narrow_Y  catalog_page" style="margin-top: 0">
								<div class="main-catalog-wrapper">
									<div class="section-content-wrapper"  style="width: 100%;">
										<div class="item-views catalog sections">
											<div class="items row margin0 row_block flexbox nmac">




												<?php
												while (have_posts()):
													the_post();

													get_template_part('template-parts/content', 'page');

													// If comments are open or we have at least one comment, load up the comment template.
													// if (comments_open() || get_comments_number()):
													// 	comments_template();
													// endif;
												
												endwhile; // End of the loop.
												?>

											</div>
										</div>
									</div>
									<!-- <div class="left_block">
										<aside class="sidebar">
											<ul class="nav nav-list side-menu">
												<li class=" child">
													<a href="/product/arenda-tekhniki/">Аренда спецтехники</a>
												</li>
												<li class=" child">
													<a href="/product/meditsinskoe-oborudovanie/">Медицинское оборудование</a>
												</li>
												<li class=" child">
													<a href="/product/metalloprokat/">Металлопрокат</a>
												</li>
												<li class=" child">
													<a href="/product/programmnye-produkty/">Программные продукты</a>
												</li>
												<li class=" child">
													<a href="/product/sistemy-bezopasnosti/">Системы безопасности</a>
												</li>
												<li class=" child">
													<a href="/product/sistemy-ventilyatsii1/">Системы вентиляции</a>
												</li>
												<li class=" child">
													<a href="/product/stroymaterialy/">Стройматериалы</a>
												</li>
												<li class=" child">
													<a href="/product/dizaynerskaya-mebel/">Дизайнерская мебель</a>
												</li>
											</ul>
										</aside>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
