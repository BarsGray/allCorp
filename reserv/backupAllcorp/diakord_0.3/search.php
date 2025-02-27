<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package diakord
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()): ?>

		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf(esc_html__('Search Results for: %s', 'diak'), '<span>' . get_search_query() . '</span>');
				?>
			</h1>
		</header><!-- .page-header -->

		<div class="body  hover_blink">
			<div class="body_media"></div>
			<div role="main" class="main banner-auto">
				<div class="page-top-wrapper color v3">
					<section class="page-top maxwidth-theme ">
						<div class="row">
							<div class="col-md-12">
								<h1 id="pagetitle"><?php single_cat_title(); ?></h1>
								<ul class="breadcrumb" id="navigation" itemscope itemtype="http://schema.org/BreadcrumbList">
									<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" id="bx_breadcrumb_0"><a
											href="/" title="Главная" itemprop="item"><span itemprop="name">Главная</span></a>
										<meta itemprop="position" content="1" />
									</li>
									<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" id="bx_breadcrumb_1"
										class="active">
										<link href="/product/" itemprop="item" /><span><span itemprop="name">Продукты</span></span>
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
											<div class="text_before_items">
												<p>
													Наша компания&nbsp;предоставляет инженерные услуги широкого профиля. Мы работаем с
													государственными и коммерческими организациями, крупными тендерами и индивидуальными
													предпринимателями. Мы гарантируем высокое качество обслуживания и безопасность эксплуатации
													нашей продукции.&nbsp;
												</p>
												<p>
													В работе мы придерживаемся комплексных решений, поэтому создаем многофункциональные системы,
													которые решают сразу несколько задач, и при этом просты в эксплуатации.
												</p>
											</div>
											<div class="item-views catalog sections">
												<div class="items row margin0 row_block flexbox nmac">


													<?php
													/* Start the Loop */
													while (have_posts()):
														the_post();

														/**
														 * Run the loop for the search to output the results.
														 * If you want to overload this in a child theme then include a file
														 * called content-search.php and that will be used instead.
														 */
														get_template_part('template-parts/content', 'search');

													endwhile;

													the_posts_navigation();
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
	else:
		get_template_part('template-parts/content', 'none');
	endif;
	?>
<?php
// get_sidebar();
get_footer();
