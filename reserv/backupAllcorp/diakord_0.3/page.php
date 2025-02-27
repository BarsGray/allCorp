<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
							<h1 id="pagetitle"><?php the_title(); ?></h1>
							<ul class="breadcrumb" id="navigation" itemscope itemtype="http://schema.org/BreadcrumbList">
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" id="bx_breadcrumb_0"><a
										href="/" title="Главная" itemprop="item"><span itemprop="name">Главная</span></a>
									<meta itemprop="position" content="1" />
								</li>
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" id="bx_breadcrumb_1"
									class="active">
									<link href="/product/" itemprop="item" /><span><span itemprop="name"><?php the_title();?></span></span>
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
// get_sidebar();
get_footer();
