<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package diakord
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
							<h1 id="pagetitle"><?php esc_html_e('Эта страница не найдена.', 'diak'); ?></h1>
							<ul class="breadcrumb" id="navigation" itemscope itemtype="http://schema.org/BreadcrumbList">
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" id="bx_breadcrumb_0"><a
										href="/" title="Главная" itemprop="item"><span itemprop="name">Главная</span></a>
									<meta itemprop="position" content="1" />
								</li>
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" id="bx_breadcrumb_1"
									class="active">
									<link href="/product/" itemprop="item" /><span><span
											itemprop="name"><?php esc_html_e('Эта страница не найдена.', 'diak'); ?></span></span>
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
							<div class="right_block narrow_Y  catalog_page">
								<div class="main-catalog-wrapper">
									<div class="section-content-wrapper">
										<div class="item-views catalog sections">
											<div class="items row margin0 row_block flexbox nmac">

												<section class="error-404 not-found">
													<header class="page-header">
														<h1 class="page-title">
															<?php esc_html_e('Эта страница не найдена.', 'diak'); ?></h1>
													</header><!-- .page-header -->

													<div class="page-content">
														<!-- <p>
															<?php //esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'diak'); ?>
														</p> -->

														<?php
														// get_search_form();

														// the_widget('WP_Widget_Recent_Posts');c
														?>

														<!-- <div class="widget widget_categories">
															<h2 class="widget-title"><?php //esc_html_e('Most Used Categories', 'diak'); ?></h2>
															<ul>
																<?php
																// wp_list_categories(
																// 	array(
																// 		'orderby' => 'count',
																// 		'order' => 'DESC',
																// 		'show_count' => 1,
																// 		'title_li' => '',
																// 		'number' => 10,
																// 	)
																// );
																?>
															</ul>
														</div>.widget -->

														<?php
														/* translators: %1$s: smiley */
														// $diak_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'diak'), convert_smilies(':)')) . '</p>';
														// the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$diak_archive_content");

														// the_widget('WP_Widget_Tag_Cloud');
														?>

													</div><!-- .page-content -->
												</section><!-- .error-404 -->

											</div>
										</div>
									</div>
									<div class="left_block">
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
									</div>
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
get_footer();
