<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>

<div class="body index hover_blink">
  <div class="body_media"></div>
  <div role="main" class="main banner-auto">
    <div class="container  ">
      <div class="flexbox">






        <div class="drag-block container BIG_BANNER_INDEX " data-class="BIG_BANNER_INDEX_drag" data-order="1">
          <div class="row margin0">
            <div class="banners-big long-banner front view_1">
              <div class="maxwidth-banner">


                <div class="flexslider unstyled  flexslider-init flexslider-control-nav flexslider-direction-nav"
                  data-plugin-options="{&quot;directionNav&quot;: true, &quot;customDirection&quot;: &quot;.nav-carousel a&quot;, &quot;controlNav&quot;: true, &quot;nav&quot; : &quot;normal&quot;, &quot;slideshow&quot;: false, &quot;animation&quot;: &quot;slide&quot;, &quot;direction&quot;: &quot;horizontal&quot;, &quot;slideshowSpeed&quot;: 5000, &quot;animationSpeed&quot;: 600, &quot;animationLoop&quot;: false }">

                  <div class="maxwidth-theme">
                    <div class="col-md-12">
                      <div class="nav-carousel">
                        <ul class="flex-direction-nav opacity1">
                          <li class="flex-nav-prev">
                            <a href="javascript:void(0)" class="flex-prev"><span>Prev</span></a>
                          </li>
                          <li class="flex-nav-next">
                            <a href="javascript:void(0)" class="flex-next"><span>Next</span></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>



                  <div class="mySwiper">
                    <div class="swiper-wrapper">




                      <?php foreach (carbon_get_theme_option('crb_slider') as $item) { ?>

                        <div class="swiper-slide slides items">

                          <div class="box item shown" id="bx_3218110189_1496"
                            style="background-image: url(<?php echo $item['crb_slider_image_background']; ?>); width: 100%; margin-right: 0px; float: left; display: block; background-size: cover;"
                            data-slide_index="2" data-color="dark" data-thumb-alt="">
                            <div class="maxwidth-theme ">
                              <div class="row  ">
                                <div class="col-md-6 col-sm-6 text">
                                  <div class="inner">
                                    <div class="title"><?php echo $item['crb_slider_title']; ?></div>
                                    <div class="text-block"><?php echo $item['crb_slider_text']; ?></div>
                                    <?php if ($item['crb_slider_btn_url']): ?>
                                      <a href="<?php echo $item['crb_slider_btn_url']; ?>"
                                        class="btn btn-default">Подробнее</a>
                                    <?php endif; ?>
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 img">
                                  <div class="inner">
                                    <?php if ($item['crb_slider_image_front']): ?>
                                      <img class="plaxy" src="<?php echo $item['crb_slider_image_front']; ?>"
                                        alt="Аренда спецтехники" title="Аренда спецтехники">
                                    <?php endif; ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      <?php } ?>


                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>




        <div class="drag-block container FLOAT_BANNERS_INDEX " data-class="FLOAT_BANNERS_INDEX_drag" data-order="2">
          <div class="row margin0 greyline">
            <div class="maxwidth-theme">
              <div class="col-md-12">
                <div class="float-banners v1 item-views blocks">
                  <div class="title_block">

                    <!-- <a href="/services/" class="right_link_block">Все услуги</a> -->
                    <?php
                    // $category = get_category_by_slug('nashi-uslugi');
                    // if ($category) {
                    //   $category_link = get_category_link($category->term_id);
                    //   echo '<a href="' . esc_url($category_link) . '" class="right_link_block">Все услуги</a>';
                    // } 
                    ?>
                    <!--                     <a href="/nashi-uslugi/" class="right_link_block">Все статьи</a> -->
                    <?php if (carbon_get_theme_option('crb_bottom_about_produkt')): ?>
                      <h3 class="line"><?php echo carbon_get_theme_option('crb_bottom_about_produkt'); ?></h3>
                    <?php endif; ?>
                  </div>
                  <div class="items row">
                    <div class="col-md-3 text-block">
                      <?php echo wpautop(carbon_get_theme_option('crb_bottom_about_produkt_text')); ?>
                      <a href="/kompaniya/" class="btn btn-transparent-bg btn-default">Подробнее</a>
                    </div>
                    <div class="col-md-9">
                      <div class="row indent10">


                        <?php
                        $parent_slug = 'produkty';
                        $parent_category = get_category_by_slug($parent_slug);
                        $uslugi_count = 0;

                        if ($parent_category) {
                          $subcategories = get_terms([
                            'taxonomy' => 'category',
                            'parent' => $parent_category->term_id,
                            'hide_empty' => false,
                            'numberposts' => 6,
                          ]);

                          if (!empty($subcategories)) {
                            foreach ($subcategories as $subcategory) {
                              $uslugi_count++;
                              $image_id = get_term_meta($subcategory->term_id, 'category_image_id', true);
                              $image_url = $image_id ? wp_get_attachment_url($image_id) : '';
                              ?>



                              <div
                                class="<?php echo ($uslugi_count == 1 || $uslugi_count == 6) ? 'col-md-6' : 'col-md-3'; ?> col-sm-6 col-xs-6">
                                <div class="item" id="bx_651765591_1515">
                                  <a href="<?php echo get_term_link($subcategory); ?>" class="dark_block_animate"></a>
                                  <?php if ($image_url) { ?>
                                    <div class="img_block scale_block_animate"
                                      style="background-image:url(<?php echo esc_url($image_url); // Получает URL в размере "large" ?>)">
                                    </div>
                                  <?php } ?>
                                  <div class="wrap_tizer ">
                                    <div class="wrapper_inner_tizer">
                                      <div class="wr_block">
                                        <span class="wrap_outer">
                                          <a href="<?php echo get_term_link($subcategory); ?>" class="outer_text">
                                            <span class="inner_text"><?php echo $subcategory->name; ?></span>
                                          </a>
                                        </span>
                                      </div>
                                      <div class="wr_block price">
                                        <span class="wrap_outer_desc">
                                          <a class="outer_text_desc" href="<?php echo get_term_link($subcategory); ?>">
                                            <span
                                              class="inner_text_desc"><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); // Обрезает до 30 слов ?></span>
                                          </a>
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <?php
                            }
                          }
                        }
                        ?>







                        <?php
                        // $uslugi_count = 0;
                        // $posts = get_posts(array(
                        //   // 'category_name' => 'nashi-uslugi',
                        //   'post_type' => 'my_custom_products',
                        //   'numberposts' => 6,
                        // ));
                        // foreach ($posts as $post):
                        //   setup_postdata($post);
                        //   $uslugi_count++;
                        ?>

                        <?php
                        // $args = array(
                        //   'post_type' => 'my_custom_products',
                        //   'posts_per_page' => 10
                        // );
                        // $query = new WP_Query($args);
                        
                        // if ($query->have_posts()):
                        //   while ($query->have_posts()):
                        //     $query->the_post(); 
                        ?>

                        <!-- <div
                            class="<?php //echo ($uslugi_count == 1 || $uslugi_count == 6) ? 'col-md-6' : 'col-md-3'; ?> col-sm-6 col-xs-6">
                            <div class="item" id="bx_651765591_1515">
                              <a href="<?php //the_permalink(); ?>" class="dark_block_animate"></a>
                              <div class="img_block scale_block_animate"
                                style="background-image:url(<?php //echo get_the_post_thumbnail_url(get_the_ID(), 'large'); // Получает URL в размере "large" ?>)">
                              </div>
                              <div class="wrap_tizer ">
                                <div class="wrapper_inner_tizer">
                                  <div class="wr_block">
                                    <span class="wrap_outer">
                                      <a href="<?php //the_permalink(); ?>" class="outer_text">
                                        <span class="inner_text"><?php //the_title(); ?></span>
                                      </a>
                                    </span>
                                  </div>
                                  <div class="wr_block price">
                                    <span class="wrap_outer_desc">
                                      <a class="outer_text_desc" href="<?php //the_permalink(); ?>">
                                        <span
                                          class="inner_text_desc"><?php //echo wp_trim_words(get_the_excerpt(), 10, '...'); // Обрезает до 30 слов ?></span>
                                      </a>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> -->

                        <?php //endforeach;
                        // wp_reset_postdata();
                        ?>


                        <?php
                        // $categories = get_categories(array(
                        //   'taxonomy' => 'category', // Указываем таксономию (в данном случае это рубрики)
                        //   'hide_empty' => false, // Показывать даже пустые рубрики
                        //   'parent' => 8 // Указываем ID родительской категории
                        // ));
                        
                        // if ($categories) {
                        //   echo '<ul class="category-list">';
                        //   foreach ($categories as $category) {
                        //     // Получаем URL изображения с помощью фильтра
                        //     $image_url = z_taxonomy_image_url($category->term_id);
                        
                        //     echo '<li class="category-item">';
                        //     if ($image_url) {
                        //       // Выводим изображение
                        //       echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($category->name) . '" />';
                        //     }
                        //     echo '<h2><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></h2>';
                        //     echo '</li>';
                        //   }
                        //   echo '</ul>';
                        // }
                        ?>



                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="drag-block container TEASERS_INDEX " data-class="TEASERS_INDEX_drag" data-order="3">
          <div class="row margin0">
            <div class="maxwidth-theme">
              <div class="col-md-12">
                <div class="tizers_block2 vertical">
                  <div class="row flexbox">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                      <div id="bx_3485106786_1510" class="item">
                        <div class="img">
                          <img
                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/62e0727c1c4c23e913191b042ccee268.png"
                            alt="Гарантия качества" title="Гарантия качества">
                        </div>
                        <div class="title">
                          <span class="top-text">Гарантия качества</span>
                          <span class="desc-text">Весь товар сертифицирован</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                      <div id="bx_3485106786_1508" class="item">
                        <div class="img">
                          <a class="name" href="/product/">
                            <img
                              src="<?php bloginfo('template_url'); ?>/assets/img/icons/625363ae41f8cccc1587c79f2db67c68.png"
                              alt="Оптимальный выбор" title="Оптимальный выбор">
                          </a>
                        </div>
                        <div class="title">
                          <span class="top-text">Оптимальный выбор</span>
                          <span class="desc-text">Низкие цены <br>
                            и широкий ассортимент</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                      <div id="bx_3485106786_1511" class="item">
                        <div class="img">
                          <img
                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/5dbbe3f7c3d47a469484840c7718be4b.png"
                            alt="Доставка в срок" title="Доставка в срок">
                        </div>
                        <div class="title">
                          <span class="top-text">Доставка в срок</span>
                          <span class="desc-text">Оперативная доставка и выгрузка товара</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="drag-block container CATALOG_INDEX " data-class="CATALOG_INDEX_drag" data-order="4">
          <div class="maxwidth-theme">
            <div class="col-md-12">
              <div class="row margin0 block-with-bg">
                <div class="item-views catalog blocks">
                  <div class="title_block row">
                    <div class="col-md-3 col-sm-12">
                      <h3>Наши продукты</h3>
                    </div>

                    <div class="col-md-3 col-sm-3">
                      <div class="nav-direction">
                        <ul class="flex-direction-nav">
                          <li class="flex-nav-prev initied">
                            <a href="javascript:void(0)" class="flex-prev flex-disabled"
                              tabindex="-1"><span>Prev</span></a>
                          </li>
                          <li class="flex-nav-next initied">
                            <a href="javascript:void(0)" class="flex-next flex-disabled"
                              tabindex="-1"><span>Next</span></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <span class="request-data"
                    data-value="a%3A61%3A%7Bs%3A12%3A%22CACHE_FILTER%22%3Bs%3A1%3A%22Y%22%3Bs%3A12%3A%22CACHE_GROUPS%22%3Bs%3A1%3A%22N%22%3Bs%3A10%3A%22CACHE_TIME%22%3Bs%3A8%3A%2236000000%22%3Bs%3A10%3A%22CACHE_TYPE%22%3Bs%3A1%3A%22A%22%3Bs%3A20%3A%22COMPOSITE_FRAME_MODE%22%3Bs%3A1%3A%22A%22%3Bs%3A20%3A%22COMPOSITE_FRAME_TYPE%22%3Bs%3A4%3A%22AUTO%22%3Bs%3A10%3A%22DETAIL_URL%22%3Bs%3A0%3A%22%22%3Bs%3A11%3A%22FILTER_NAME%22%3Bs%3A15%3A%22arFilterCatalog%22%3Bs%3A8%3A%22HIT_PROP%22%3Bs%3A3%3A%22HIT%22%3Bs%3A9%3A%22IBLOCK_ID%22%3Bs%3A3%3A%22252%22%3Bs%3A11%3A%22IBLOCK_TYPE%22%3Bs%3A22%3A%22aspro_allcorp2_catalog%22%3Bs%3A10%3A%22NEWS_COUNT%22%3Bs%3A2%3A%2220%22%3Bs%3A14%3A%22PARENT_SECTION%22%3Bs%3A0%3A%22%22%3Bs%3A13%3A%22PROPERTY_CODE%22%3Ba%3A44%3A%7Bi%3A0%3Bs%3A10%3A%22FORM_ORDER%22%3Bi%3A1%3Bs%3A18%3A%22SHOW_ON_INDEX_PAGE%22%3Bi%3A2%3Bs%3A5%3A%22PRICE%22%3Bi%3A3%3Bs%3A8%3A%22PRICEOLD%22%3Bi%3A4%3Bs%3A6%3A%22STATUS%22%3Bi%3A5%3Bs%3A7%3A%22ARTICLE%22%3Bi%3A6%3Bs%3A3%3A%22AGE%22%3Bi%3A7%3Bs%3A7%3A%22KARTOPR%22%3Bi%3A8%3Bs%3A6%3A%22HEIGHT%22%3Bi%3A9%3Bs%3A5%3A%22DEPTH%22%3Bi%3A10%3Bs%3A4%3A%22DEEP%22%3Bi%3A11%3Bs%3A4%3A%22GRUZ%22%3Bi%3A12%3Bs%3A11%3A%22GRUZ_STRELI%22%3Bi%3A13%3Bs%3A12%3A%22DLINA_STRELI%22%3Bi%3A14%3Bs%3A5%3A%22DLINA%22%3Bi%3A15%3Bs%3A8%3A%22CATEGORY%22%3Bi%3A16%3Bs%3A5%3A%22CLASS%22%3Bi%3A17%3Bs%3A11%3A%22KOL_FORMULA%22%3Bi%3A18%3Bs%3A5%3A%22USERS%22%3Bi%3A19%3Bs%3A9%3A%22EXTENSION%22%3Bi%3A20%3Bs%3A10%3A%22MARK_STEEL%22%3Bi%3A21%3Bs%3A4%3A%22MASS%22%3Bi%3A22%3Bs%3A5%3A%22MODEL%22%3Bi%3A23%3Bs%3A5%3A%22POWER%22%3Bi%3A24%3Bs%3A7%3A%22UPDATES%22%3Bi%3A25%3Bs%3A6%3A%22VOLUME%22%3Bi%3A26%3Bs%3A12%3A%22PROIZVODSTVO%22%3Bi%3A27%3Bs%3A4%3A%22SIZE%22%3Bi%3A28%3Bs%3A5%3A%22PLACE%22%3Bi%3A29%3Bs%3A9%3A%22RECOMMEND%22%3Bi%3A30%3Bs%3A6%3A%22SERIES%22%3Bi%3A31%3Bs%3A5%3A%22SPEED%22%3Bi%3A32%3Bs%3A8%3A%22DURATION%22%3Bi%3A33%3Bs%3A8%3A%22TYPE_TUR%22%3Bi%3A34%3Bs%3A9%3A%22THICKNESS%22%3Bi%3A35%3Bs%3A4%3A%22MARK%22%3Bi%3A36%3Bs%3A3%3A%22HIT%22%3Bi%3A37%3Bs%3A9%3A%22FREQUENCY%22%3Bi%3A38%3Bs%3A12%3A%22WIDTH_PROHOD%22%3Bi%3A39%3Bs%3A12%3A%22WIDTH_PROEZD%22%3Bi%3A40%3Bs%3A5%3A%22WIDTH%22%3Bi%3A41%3Bs%3A9%3A%22LANGUAGES%22%3Bi%3A42%3Bs%3A5%3A%22BRAND%22%3Bi%3A43%3Bs%3A0%3A%22%22%3B%7Ds%3A8%3A%22SORT_BY1%22%3Bs%3A4%3A%22SORT%22%3Bs%3A8%3A%22SORT_BY2%22%3Bs%3A2%3A%22ID%22%3Bs%3A11%3A%22SORT_ORDER1%22%3Bs%3A3%3A%22ASC%22%3Bs%3A11%3A%22SORT_ORDER2%22%3Bs%3A3%3A%22ASC%22%3Bs%3A5%3A%22TITLE%22%3Bs%3A13%3A%22%CD%E0%F8%E8+%EF%F0%EE%E4%F3%EA%F2%FB%22%3Bs%3A18%3A%22COMPONENT_TEMPLATE%22%3Bs%3A6%3A%22slider%22%3Bs%3A10%3A%22SECTION_ID%22%3Bs%3A0%3A%22%22%3Bs%3A12%3A%22SECTION_CODE%22%3Bs%3A0%3A%22%22%3Bs%3A10%3A%22FIELD_CODE%22%3Ba%3A4%3A%7Bi%3A0%3Bs%3A4%3A%22NAME%22%3Bi%3A1%3Bs%3A15%3A%22PREVIEW_PICTURE%22%3Bi%3A2%3Bs%3A14%3A%22DETAIL_PICTURE%22%3Bi%3A3%3Bs%3A0%3A%22%22%3B%7Ds%3A15%3A%22S_ORDER_PRODUCT%22%3Bs%3A8%3A%22%C7%E0%EA%E0%E7%E0%F2%FC%22%3Bs%3A14%3A%22S_MORE_PRODUCT%22%3Bs%3A9%3A%22%CF%EE%E4%F0%EE%E1%ED%E5%E5%22%3Bs%3A24%3A%22ELEMENTS_TABLE_TYPE_VIEW%22%3Bs%3A11%3A%22FROM_MODULE%22%3Bs%3A12%3A%22SHOW_SECTION%22%3Bs%3A1%3A%22Y%22%3Bs%3A13%3A%22COUNT_IN_LINE%22%3Bs%3A1%3A%224%22%3Bs%3A13%3A%22%7ECACHE_FILTER%22%3Bs%3A1%3A%22Y%22%3Bs%3A13%3A%22%7ECACHE_GROUPS%22%3Bs%3A1%3A%22N%22%3Bs%3A11%3A%22%7ECACHE_TIME%22%3Bs%3A8%3A%2236000000%22%3Bs%3A11%3A%22%7ECACHE_TYPE%22%3Bs%3A1%3A%22A%22%3Bs%3A21%3A%22%7ECOMPOSITE_FRAME_MODE%22%3Bs%3A1%3A%22A%22%3Bs%3A21%3A%22%7ECOMPOSITE_FRAME_TYPE%22%3Bs%3A4%3A%22AUTO%22%3Bs%3A11%3A%22%7EDETAIL_URL%22%3Bs%3A0%3A%22%22%3Bs%3A12%3A%22%7EFILTER_NAME%22%3Bs%3A15%3A%22arFilterCatalog%22%3Bs%3A9%3A%22%7EHIT_PROP%22%3Bs%3A3%3A%22HIT%22%3Bs%3A10%3A%22%7EIBLOCK_ID%22%3Bs%3A3%3A%22252%22%3Bs%3A12%3A%22%7EIBLOCK_TYPE%22%3Bs%3A22%3A%22aspro_allcorp2_catalog%22%3Bs%3A11%3A%22%7ENEWS_COUNT%22%3Bs%3A2%3A%2220%22%3Bs%3A15%3A%22%7EPARENT_SECTION%22%3Bs%3A0%3A%22%22%3Bs%3A14%3A%22%7EPROPERTY_CODE%22%3Ba%3A44%3A%7Bi%3A0%3Bs%3A10%3A%22FORM_ORDER%22%3Bi%3A1%3Bs%3A18%3A%22SHOW_ON_INDEX_PAGE%22%3Bi%3A2%3Bs%3A5%3A%22PRICE%22%3Bi%3A3%3Bs%3A8%3A%22PRICEOLD%22%3Bi%3A4%3Bs%3A6%3A%22STATUS%22%3Bi%3A5%3Bs%3A7%3A%22ARTICLE%22%3Bi%3A6%3Bs%3A3%3A%22AGE%22%3Bi%3A7%3Bs%3A7%3A%22KARTOPR%22%3Bi%3A8%3Bs%3A6%3A%22HEIGHT%22%3Bi%3A9%3Bs%3A5%3A%22DEPTH%22%3Bi%3A10%3Bs%3A4%3A%22DEEP%22%3Bi%3A11%3Bs%3A4%3A%22GRUZ%22%3Bi%3A12%3Bs%3A11%3A%22GRUZ_STRELI%22%3Bi%3A13%3Bs%3A12%3A%22DLINA_STRELI%22%3Bi%3A14%3Bs%3A5%3A%22DLINA%22%3Bi%3A15%3Bs%3A8%3A%22CATEGORY%22%3Bi%3A16%3Bs%3A5%3A%22CLASS%22%3Bi%3A17%3Bs%3A11%3A%22KOL_FORMULA%22%3Bi%3A18%3Bs%3A5%3A%22USERS%22%3Bi%3A19%3Bs%3A9%3A%22EXTENSION%22%3Bi%3A20%3Bs%3A10%3A%22MARK_STEEL%22%3Bi%3A21%3Bs%3A4%3A%22MASS%22%3Bi%3A22%3Bs%3A5%3A%22MODEL%22%3Bi%3A23%3Bs%3A5%3A%22POWER%22%3Bi%3A24%3Bs%3A7%3A%22UPDATES%22%3Bi%3A25%3Bs%3A6%3A%22VOLUME%22%3Bi%3A26%3Bs%3A12%3A%22PROIZVODSTVO%22%3Bi%3A27%3Bs%3A4%3A%22SIZE%22%3Bi%3A28%3Bs%3A5%3A%22PLACE%22%3Bi%3A29%3Bs%3A9%3A%22RECOMMEND%22%3Bi%3A30%3Bs%3A6%3A%22SERIES%22%3Bi%3A31%3Bs%3A5%3A%22SPEED%22%3Bi%3A32%3Bs%3A8%3A%22DURATION%22%3Bi%3A33%3Bs%3A8%3A%22TYPE_TUR%22%3Bi%3A34%3Bs%3A9%3A%22THICKNESS%22%3Bi%3A35%3Bs%3A4%3A%22MARK%22%3Bi%3A36%3Bs%3A3%3A%22HIT%22%3Bi%3A37%3Bs%3A9%3A%22FREQUENCY%22%3Bi%3A38%3Bs%3A12%3A%22WIDTH_PROHOD%22%3Bi%3A39%3Bs%3A12%3A%22WIDTH_PROEZD%22%3Bi%3A40%3Bs%3A5%3A%22WIDTH%22%3Bi%3A41%3Bs%3A9%3A%22LANGUAGES%22%3Bi%3A42%3Bs%3A5%3A%22BRAND%22%3Bi%3A43%3Bs%3A0%3A%22%22%3B%7Ds%3A9%3A%22%7ESORT_BY1%22%3Bs%3A4%3A%22SORT%22%3Bs%3A9%3A%22%7ESORT_BY2%22%3Bs%3A2%3A%22ID%22%3Bs%3A12%3A%22%7ESORT_ORDER1%22%3Bs%3A3%3A%22ASC%22%3Bs%3A12%3A%22%7ESORT_ORDER2%22%3Bs%3A3%3A%22ASC%22%3Bs%3A6%3A%22%7ETITLE%22%3Bs%3A13%3A%22%CD%E0%F8%E8+%EF%F0%EE%E4%F3%EA%F2%FB%22%3Bs%3A19%3A%22%7ECOMPONENT_TEMPLATE%22%3Bs%3A6%3A%22slider%22%3Bs%3A11%3A%22%7ESECTION_ID%22%3Bs%3A0%3A%22%22%3Bs%3A13%3A%22%7ESECTION_CODE%22%3Bs%3A0%3A%22%22%3Bs%3A11%3A%22%7EFIELD_CODE%22%3Ba%3A4%3A%7Bi%3A0%3Bs%3A4%3A%22NAME%22%3Bi%3A1%3Bs%3A15%3A%22PREVIEW_PICTURE%22%3Bi%3A2%3Bs%3A14%3A%22DETAIL_PICTURE%22%3Bi%3A3%3Bs%3A0%3A%22%22%3B%7Ds%3A16%3A%22%7ES_ORDER_PRODUCT%22%3Bs%3A8%3A%22%C7%E0%EA%E0%E7%E0%F2%FC%22%3Bs%3A15%3A%22%7ES_MORE_PRODUCT%22%3Bs%3A9%3A%22%CF%EE%E4%F0%EE%E1%ED%E5%E5%22%3Bs%3A25%3A%22%7EELEMENTS_TABLE_TYPE_VIEW%22%3Bs%3A11%3A%22FROM_MODULE%22%3Bs%3A13%3A%22%7ESHOW_SECTION%22%3Bs%3A1%3A%22Y%22%3Bs%3A14%3A%22%7ECOUNT_IN_LINE%22%3Bs%3A1%3A%224%22%3Bs%3A10%3A%22ORDER_VIEW%22%3Bb%3A1%3Bs%3A20%3A%22DISPLAY_BOTTOM_PAGER%22%3Bs%3A1%3A%22N%22%3Bs%3A17%3A%22DISPLAY_TOP_PAGER%22%3Bs%3A1%3A%22N%22%3Bs%3A9%3A%22PROP_CODE%22%3Bs%3A3%3A%22HIT%22%3Bs%3A9%3A%22SET_TITLE%22%3Bs%3A1%3A%22N%22%3B%7D"></span>
                  <div class="tabs_ajax">
                    <div class="body-block" style="height: auto;">
                      <div class="row margin0">
                        <div class="item-block active opacity1"
                          data-filter="a%3A5%3A%7Bs%3A18%3A%22PROPERTY_HIT_VALUE%22%3Ba%3A1%3A%7Bi%3A0%3Bs%3A5%3A%22%C0%EA%F6%E8%FF%22%3B%7Ds%3A6%3A%22ACTIVE%22%3Bs%3A1%3A%22Y%22%3Bs%3A9%3A%22IBLOCK_ID%22%3Bs%3A3%3A%22252%22%3Bs%3A21%3A%22SECTION_GLOBAL_ACTIVE%22%3Bs%3A1%3A%22Y%22%3Bs%3A28%3A%22%21PROPERTY_SHOW_ON_INDEX_PAGE%22%3Bb%3A0%3B%7D">
                          <div class="row margin0">
                            <div class="catalog item-views table front catalog_table_2">
                              <div
                                class="flexslider unstyled row dark-nav2 flexslider-init flexslider-control-nav flexslider-direction-nav"
                                data-plugin-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;directionNav&quot;: true, &quot;customDirection&quot;: &quot;.catalog .nav-direction a&quot;, &quot;controlNav&quot; :true, &quot;animationLoop&quot;: true, &quot;slideshow&quot;: false, &quot;itemMargin&quot;: 0, &quot;counts&quot;: [4, 2, 2, 2]}">
                                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                  <ul class="slides" itemscope="" itemtype="http://schema.org/ItemList">

                                    <?php
                                    $args = array(
                                      'post_type' => 'my_custom_products',
                                      'posts_per_page' => 10
                                    );
                                    $query = new WP_Query($args);

                                    if ($query->have_posts()):
                                      while ($query->have_posts()):
                                        $query->the_post(); ?>


                                        <li class="col-md-6 col-sm-4 col-xs-6 js-popup-block sliced">
                                          <div class="item hover_props sliced" id="bx_1373509569_1433"
                                            data-item="{&quot;IBLOCK_ID&quot;:&quot;252&quot;,&quot;ID&quot;:&quot;1433&quot;,&quot;NAME&quot;:&quot;\u042d\u043b\u0435\u043a\u0442\u0440\u0438\u0447\u0435\u0441\u043a\u0430\u044f \u043f\u0435\u0447\u044c Nyman 2000&quot;,&quot;DETAIL_PAGE_URL&quot;:&quot;\/product\/stroymaterialy\/pechi-kaminy-dymokhody\/elektricheskaya-pech-nyman-2000\/&quot;,&quot;PREVIEW_PICTURE&quot;:&quot;3727&quot;,&quot;DETAIL_PICTURE&quot;:&quot;3728&quot;,&quot;PROPERTY_FILTER_PRICE_VALUE&quot;:&quot;19600&quot;,&quot;PROPERTY_PRICE_VALUE&quot;:&quot;19 600 \u0440.&quot;,&quot;PROPERTY_PRICEOLD_VALUE&quot;:&quot;22 000 \u0440.&quot;,&quot;PROPERTY_ARTICLE_VALUE&quot;:&quot;5467908&quot;,&quot;PROPERTY_STATUS_VALUE&quot;:&quot;934&quot;}"
                                            itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                                            style="opacity: 1;">
                                            <meta itemprop="position" content="1">
                                            <div class="inner-wrap">
                                              <div class="stickers">
                                                <div class="stickers-wrapper">
                                                  <!-- <div class="sticker_sale">Акция</div> -->
                                                </div>
                                              </div>
                                              <div class="image  image-list-wrapper">
                                                <a href="<?php the_permalink(); ?>" class="blink-block">
                                                  <img class="img-responsive"
                                                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); // Получает URL в размере "large" ?>"
                                                    alt="Электрическая печь Nyman 2000"
                                                    title="Электрическая печь Nyman 2000" itemprop="image">
                                                </a>
                                              </div>
                                              <div class="text">
                                                <div class="cont">
                                                  <div class="cont_inner">
                                                    <div class="title js-popup-title">
                                                      <a href="<?php the_permalink(); ?>" class="dark-color" itemprop="url">
                                                        <span itemprop="name"><?php the_title(); ?></span>
                                                      </a>
                                                    </div>
                                                    <div class="arts">
                                                      <span class="article"
                                                        itemprop="description"><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); // Обрезает до 30 слов ?></span>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row foot">
                                                  <div class="col-md-12 col-sm-12 col-xs-12 clearfix slice_price">
                                                    <div class="price  inline">
                                                      <div class="price_new">
                                                        <span
                                                          class="price_val"><?php echo carbon_get_post_meta(get_the_ID(), 'crb_product_price'); ?></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </li>

                                      <?php endwhile;
                                      wp_reset_postdata();
                                    endif;
                                    ?>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="drag-block container NEWS_INDEX " data-class="NEWS_INDEX_drag" data-order="5">
          <div class="maxwidth-theme">
            <div class="col-md-12">
              <div class="news_block item-views table-elements blocks">
                <div class="title_block">

                  <?php
                  // $category = get_category_by_slug('novosti');
                  // if ($category) {
                  //   $category_link = get_category_link($category->term_id);
                  //   echo '<a href="' . esc_url($category_link) . '" class="right_link_block">Все новости</a>';
                  // }
                  ?>
                  <a href="/novosti/" class="right_link_block">Все статьи</a>
                  <h3>Новости</h3>
                </div>
                <div class="items row flexbox">

                  <?php
                  $posts = get_posts(array(
                    'category_name' => 'novosti',
                    'numberposts' => 4,
                  ));
                  foreach ($posts as $post):
                    setup_postdata($post); ?>


                    <div class="col-md-3 col-sm-6 col-xs-6">
                      <div id="bx_3099439860_1493" class="item ">
                        <div class="img image shine">
                          <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                            <!-- <img
                              src="https://msk.allcorp2.aspro-demo.ru/upload/iblock/673/6731870a4dd7666b59528ea07d7ba368.jpg"
                              alt="Новый филиал в Нижнем Новгороде"> -->
                          </a>
                        </div>
                        <div class="date"><?php echo get_the_date('d F Y'); ?></div>
                        <div class="info">
                          <a class="name dark_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                      </div>
                    </div>

                  <?php endforeach;
                  wp_reset_postdata();
                  ?>


                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="drag-block container BLOG_INDEX " data-class="BLOG_INDEX_drag" data-order="6">
          <div class="maxwidth-theme">
            <div class="col-md-12">
              <div class="news_block item-views table-elements blocks portfolio">
                <div class="title_block">
                  <?php
                  // $category = get_category_by_slug('stati');
                  // if ($category) {
                  //   $category_link = get_category_link($category->term_id);
                  //   echo '<a href="' . esc_url($category_link) . '" class="right_link_block">Все статьи</a>';
                  // } 
                  ?>
                  <a href="/stati/" class="right_link_block">Все статьи</a>
                  <h3>Статьи</h3>
                </div>
                <div class="items row flexbox">

                  <?php
                  $posts = get_posts(array(
                    'category_name' => 'stati',
                    'numberposts' => 1,
                  ));
                  foreach ($posts as $post):
                    setup_postdata($post); ?>
                    <div class="col-md-6 col-sm-12 custom">
                      <div id="bx_565502798_1336" class="item sliced big ">
                        <div class="img image shine">
                          <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                            <!-- <img
                              src="<?php //echo get_the_post_thumbnail_url(get_the_ID(), 'large'); // Получает URL в размере "large" ?>"
                              alt=""> -->
                          </a>
                        </div>
                        <div class="date"><?php echo get_the_date('d F Y'); ?></div>
                        <div class="info">
                          <!-- <div class="sticker-block">Управление проектами </div> -->
                          <a class="name dark_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          <!-- <div class="text"><?php //the_excerpt(); ?></div> -->
                          <div class="text">
                            <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); // Обрезает до 30 слов ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach;
                  wp_reset_postdata();
                  ?>
                  <div class="col-md-6 col-sm-12 custom">
                    <div class="item wrapper s_4">
                      <div class="row items flexbox">

                        <?php
                        $posts = get_posts(array(
                          'category_name' => 'stati',
                          'numberposts' => 5,
                          'offset' => 1,
                        ));
                        foreach ($posts as $post):
                          setup_postdata($post); ?>
                          <div class="col-md-6 col-sm-6 col-xs-6">
                            <div id="bx_565502798_1490" class="item sliced ">
                              <div class="img image shine">
                                <a href="<?php the_permalink(); ?>">
                                  <?php the_post_thumbnail('medium'); ?>
                                  <!-- <img
                                    src="<?php //echo get_the_post_thumbnail_url(get_the_ID(), 'large'); // Получает URL в размере "large" ?>"
                                    alt=""> -->
                                </a>
                              </div>
                              <div class="date"><?php echo get_the_date('d F Y'); ?></div>
                              <div class="info">
                                <!-- <div class="sticker-block">Дизайн</div> -->
                                <a class="name dark_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                              </div>
                            </div>
                          </div>
                        <?php endforeach;
                        wp_reset_postdata();
                        ?>
                      </div>
                    </div>
                  </div>




                </div>
                <div class="nav_wrapper">
                  <div class="bottom_nav index_block" data-class=".news_block.blocks.portfolio" data-item=">.items">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="drag-block container REVIEWS_INDEX " data-class="REVIEWS_INDEX_drag" data-order="8">
          <div class="maxwidth-theme">
            <div class="col-md-12">
              <div class="item-views reviews slider blocks">
                <div class="title_block">
                  <div class="pull-right ">
                    <div class="nav-direction">
                      <ul class="flex-direction-nav">
                        <li class="flex-nav-prev initied">
                          <a href="javascript:void(0)" class="flex-prev flex-prev_reviuse"><span>Prev</span></a>
                        </li>
                        <li class="flex-nav-next initied">
                          <a href="javascript:void(0)" class="flex-next flex-next_reviuse"><span>Next</span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <a href="/reviuws/" class="right_link_block">Все отзывы</a>
                  <h3>Отзывы клиентов</h3>
                </div>
                <div
                  class="flexslider unstyled row dark-nav2 shadow-block flex_loader_circle flexslider-init flexslider-control-nav flexslider-direction-nav"
                  data-plugin-options="{&quot;directionNav&quot;: true, &quot;controlNav&quot; :true, &quot;animationLoop&quot;: true, &quot;slideshow&quot;: false, &quot;customDirection&quot;: &quot;.reviews .nav-direction a&quot;, &quot;itemMargin&quot;: 32, &quot;counts&quot;: [2, 2, 1]}">

                  <div class="flex-viewport" style="overflow: hidden; position: relative;">
                    <ul class="slides items" data-slice="Y">


                      <div class="mySwiper_reviuse">
                        <div class="swiper-wrapper">

                          <?php
                          $args = array(
                            'post_type' => 'my_custom_reviuse',
                            'posts_per_page' => 10
                          );
                          $query = new WP_Query($args);

                          if ($query->have_posts()):
                            while ($query->have_posts()):
                              $query->the_post(); ?>

                              <div class="swiper-slide col-md-6" data-thumb-alt="">
                                <div class="item" data-slice-block="Y" id="bx_3322728009_1260"
                                  style="opacity: 1; height: 315px;">
                                  <div class="table_block">
                                    <div class="image ">
                                      <div class="image-wrapper">
                                        <div class="image-inner">
                                          <img class="img-responsive"
                                            src="<?php echo carbon_get_post_meta(get_the_ID(), 'crb_reviuse_foto'); ?>"
                                            alt="<?php echo carbon_get_post_meta(get_the_ID(), 'crb_reviuse_name'); ?>"
                                            title="<?php echo carbon_get_post_meta(get_the_ID(), 'crb_reviuse_name'); ?>">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="text">
                                      <div class="title">
                                        <?php echo carbon_get_post_meta(get_the_ID(), 'crb_reviuse_name'); ?>
                                      </div>
                                      <div class="company">
                                        <?php echo carbon_get_post_meta(get_the_ID(), 'crb_reviuse_dolznost'); ?>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="preview-text-wrapper">
                                    <div class="quote"><i class="svg inline  svg-inline-" aria-hidden="true"><svg
                                          xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16">
                                          <defs>
                                            <style>
                                              .cls-1 {
                                                fill: #222;
                                                fill-rule: evenodd
                                              }
                                            </style>
                                          </defs>
                                          <path class="cls-1"
                                            d="M19.13,8.776a3.042,3.042,0,0,0-2.282-1.142,4.708,4.708,0,0,1,1-2.448,5.159,5.159,0,0,1,2.126-1.665L17.973,0A14.2,14.2,0,0,0,15.91,1.009,9.549,9.549,0,0,0,13.627,2.9a10.8,10.8,0,0,0-1.876,3.035,11.264,11.264,0,0,0-.782,4.439,6.058,6.058,0,0,0,1.313,4.08,4.519,4.519,0,0,0,3.627,1.534,4.265,4.265,0,0,0,3.033-1.142,3.96,3.96,0,0,0,1.219-3.035A4.357,4.357,0,0,0,19.13,8.776Zm-11.1,0A3.042,3.042,0,0,0,5.748,7.634a4.708,4.708,0,0,1,1-2.448A5.16,5.16,0,0,1,8.875,3.522L6.873,0A14.2,14.2,0,0,0,4.81,1.009,9.548,9.548,0,0,0,2.527,2.9,10.8,10.8,0,0,0,.651,5.937,11.264,11.264,0,0,0-.13,10.376a6.057,6.057,0,0,0,1.313,4.08A4.519,4.519,0,0,0,4.81,15.989a4.265,4.265,0,0,0,3.033-1.142,3.96,3.96,0,0,0,1.219-3.035A4.357,4.357,0,0,0,8.03,8.776Z">
                                          </path>
                                        </svg>
                                      </i></div>
                                    <div class="preview-text">
                                      <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); // Обрезает до 30 слов ?>
                                    </div>
                                    <a class="link-block-more" href="<?php the_permalink(); ?>">
                                      <div class="link-block-more">
                                        <span class="btn btn-default btn-sm btn-transparent-bg animate-load"
                                          data-event="jqm" data-param-id="1260" data-param-type="review"
                                          data-name="review">Подробнее</span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>

                          <?php endwhile;
                            wp_reset_postdata();
                          endif;
                          ?>
                      </div>
                  </div>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="drag-block container INSTAGRAMM_INDEX hidden" data-class="INSTAGRAMM_INDEX_drag" data-order="9">
        <div class="row margin0">
          <div class="maxwidth-theme">
            <div class="col-md-12">
              <div class="instagram_ajax loader_circle loaded"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="drag-block container COMPANY_INDEX " data-class="COMPANY_INDEX_drag" data-order="10">
        <div class="row">
          <div class="maxwidth-theme company-front flexbox">
            <div class="col-md-8 col-sm-12 col-xs-12">
              <br>
              <br>
              <?php if (carbon_get_theme_option('crb_bottom_about_title')): ?>
                <h3><?php echo carbon_get_theme_option('crb_bottom_about_title'); ?></h3>
              <?php endif; ?>
              <p>
                <?php echo wpautop(carbon_get_theme_option('crb_bottom_about_text')); ?>
              </p>
            </div>
            <div class="col-md-4 hidden-xs hidden-sm">
              <?php if (carbon_get_theme_option('crb_bottom_about_img')): ?>
                <img alt="person" src="<?php echo carbon_get_theme_option('crb_bottom_about_img'); ?>" title="person">
              <?php endif; ?>
            </div>
            <br>
          </div>
        </div>
      </div>
      <div class="drag-block container c " data-class="PARTNERS_INDEX_drag" data-order="11">
        <div class="row margin0">
          <div class="maxwidth-theme">
            <div class="col-md-12">
              <div class="item-views partners front blocks">
                <div
                  class="flexslider unstyled row flex_loader_circle navigation-vcenter dark-nav2 flexslider-init flexslider-control-nav flexslider-direction-nav"
                  data-plugin-options="{&quot;directionNav&quot;: true, &quot;controlNav&quot; :true, &quot;animationLoop&quot;: true, &quot;slideshow&quot;: true, &quot;slideshowSpeed&quot;: 5000, &quot;animationSpeed&quot;: 600, &quot;counts&quot;: [5, 3, 1]}">

                  <div class="flex-viewport" style="overflow: hidden; position: relative;">
                    <ul class="slides items"
                      style="width: 1000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                      <li class="col-md-2 col-sm-4 flex-active-slide"
                        style="width: 254.4px; margin-right: 0px; float: left; display: block;">
                        <div class="item" id="bx_2970353375_1321" style="opacity: 1;">
                          <a href="/"> <img class="img-responsive"
                              src="https://msk.allcorp2.aspro-demo.ru/upload/iblock/5d0/6c8c298xekp328r41yq2nigkeaa7mgf2.png"
                              alt="Аспро" title="Аспро">
                          </a>
                        </div>
                      </li>
                      <li class="col-md-2 col-sm-4"
                        style="width: 254.4px; margin-right: 0px; float: left; display: block;">
                        <div class="item" id="bx_2970353375_1324" style="opacity: 1;">
                          <a href="/"> <img class="img-responsive"
                              src="https://msk.allcorp2.aspro-demo.ru/upload/iblock/700/j7xohfvz0q4y9syfjeswre3bcriabv8o.png"
                              alt="Аспро.Cloud" title="Аспро.Cloud">
                          </a>
                        </div>
                      </li>
                      <li class="col-md-2 col-sm-4"
                        style="width: 254.4px; margin-right: 0px; float: left; display: block;">
                        <div class="item" id="bx_2970353375_1320" style="opacity: 1;">
                          <a href="/"> <img class="img-responsive"
                              src="https://msk.allcorp2.aspro-demo.ru/upload/iblock/a14/a145ed95a88c390b97ae92fd9f9bbd84.png"
                              alt="1C-Битрикс" title="1C-Битрикс">
                          </a>
                        </div>
                      </li>
                      <li class="col-md-2 col-sm-4"
                        style="width: 254.4px; margin-right: 0px; float: left; display: block;">
                        <div class="item" id="bx_2970353375_1322" style="opacity: 1;">
                          <a href="/"> <img class="img-responsive"
                              src="https://msk.allcorp2.aspro-demo.ru/upload/iblock/b66/7o2wtbwxaw0qozboqtjd6zyyusb4df7a.png"
                              alt="Аспро.Agile" title="Аспро.Agile">
                          </a>
                        </div>
                      </li>
                      <li class="col-md-2 col-sm-4"
                        style="width: 254.4px; margin-right: 0px; float: left; display: block;">
                        <div class="item" id="bx_2970353375_1323" style="opacity: 1;">
                          <a href="/r"> <img class="img-responsive"
                              src="https://msk.allcorp2.aspro-demo.ru/upload/iblock/601/uoykevfohdpncxsczpghnkijobug5csw.png"
                              alt="DemoHost" title="DemoHost">
                          </a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <ol class="flex-control-nav flex-control-paging" style="z-index: 2;"></ol>
                  <ul class="flex-direction-nav opacity0">
                    <li class="flex-nav-prev initied"><a class="flex-prev flex-disabled" href="#"
                        tabindex="-1">Назад</a></li>
                    <li class="flex-nav-next initied"><a class="flex-next flex-disabled" href="#"
                        tabindex="-1">Вперед</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="drag-block container MAP_INDEX hidden" data-class="MAP_INDEX_drag" data-order="12">
        <div class="bx-yandex-view-layout front_map swipeignore">
          <div class="maxwidth-theme">
            <div class="pane_info_wrapper">
              <div class="pane_info">
                <div class="title_block">
                  <div class="title">Наши контакты</div>
                </div>
                <div class="info_block">
                  <div class="value-block address">
                    <div>
                      <i class="svg inline  svg-inline-address colored" aria-hidden="true"><svg
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
                      <div>Москва, ул. Пушкина 21, 3 этаж, офис 4 </div>
                    </div>
                  </div>
                  <div class="phones">
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
                      <a href="tel:+70000000030">+7 (000) 000-00-30</a>
                    </div>
                    <div class="schedule">
                      Время работы с 8:00 до 20:00 </div>
                  </div>
                  <div class="value-block email">
                    <div>
                      <i class="svg inline  svg-inline-address colored" aria-hidden="true"><svg
                          xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13">
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
                      <div class="email__item">
                        <a rel="nofollow" href="mailto:msk.no-reply@aspro-demo.ru">msk.no-reply@aspro-demo.ru</a>
                      </div>
                    </div>
                  </div>
                  <div class="btn-block">
                    <span class="ask-block animate-load colored  btn-transparent-bg btn-default btn" data-event="jqm"
                      data-param-id="4" data-name="ask">Задать вопрос</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>