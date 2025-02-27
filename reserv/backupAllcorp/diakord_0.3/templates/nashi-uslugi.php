<?php
/*
Template Name: nashi-uslugic
*/
get_header();
?>

<main id="primary" class="site-main">


  <?php if (have_posts()): ?>

    <!-- <header class="page-header">
      <?php
      // the_archive_title('<h1 class="page-title">', '</h1>');
      // the_archive_description('<div class="archive-description">', '</div>');
      ?>
    </header> -->
    <!-- .page-header -->






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
                    <link href="/product/" itemprop="item" /><span><span itemprop="name"><?php the_title(); ?></span></span>
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
                        <?php the_content(); ?>
                      </div>
                      <div class="item-views catalog sections">

                        <div class="items row row_block services flexbox">
                          <?php
                          $posts = get_posts(array(
                            'category_name' => 'nashi-uslugi',
                            'numberposts' => -1,
                          ));
                          foreach ($posts as $post):
                            setup_postdata($post); ?>

                            <div class="col-md-6 col-sm-12">
                              <div class="item   slice-item left" id="bx_3218110189_430">
                                <div class="image">
                                  <a href="<?php the_permalink(); ?>">
                                    <div class="img_block"
                                      style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); // Получает URL в размере "large" ?>)">
                                    </div>
                                  </a>
                                </div>
                                <div class="info">
                                  <div class="title">
                                    <a href="<?php the_permalink(); ?>" class="dark-color"><?php the_title(); ?></a>
                                  </div>
                                  <div class="text childs">
                                    <!-- <ul class="clearfix">
                                      <li><a href="/services/avtomatizatsiya/avtomatizatsiya-otdela-prodazh/"><span>Автоматизация отдела продаж</span></a></li>
                                      <li><a href="/services/avtomatizatsiya/kompleksnaya-avtomatizatsiya/"><span>Комплексная автоматизация</span></a></li>
                                      <li><a href="/services/avtomatizatsiya/pos-sistemy/"><span>POS-системы</span></a></li>
                                    </ul> -->
                                  </div>
                                  <div class="text">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); // Обрезает до 30 слов ?></div>
                                </div>
                              </div>
                            </div>
                          <?php endforeach;
                          wp_reset_postdata();
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





















    <?php
  /* Start the Loop */
  // while (have_posts()):
  // 	the_post();

  // 	/*
  // 	 * Include the Post-Type-specific template for the content.
  // 	 * If you want to override this in a child theme, then include a file
  // 	 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
  // 	 */
  // 	get_template_part('template-parts/content', get_post_type());

  // endwhile;

  // the_posts_navigation();

else:

  get_template_part('template-parts/content', 'none');

endif;
?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
?>