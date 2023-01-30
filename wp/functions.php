<?php

	add_action('wp_enqueue_scripts', 'inspot_media');

	add_action('after_setup_theme', 'inspot_after_setup');

	/**
	 * Enqueues script with WordPress and adds version number that is a timestamp of the file modified date.
	 * 
	 * @param string      $handle    Name of the script. Should be unique.
	 * @param string|bool $src       Path to the script from the theme directory of WordPress. Example: '/js/myscript.js'.
	 * @param array       $deps      Optional. An array of registered script handles this script depends on. Default empty array.
	 * @param bool        $in_footer Optional. Whether to enqueue the script before </body> instead of in the <head>.
	 *                               Default 'false'.
	 */
	function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = false ) {
		wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
	}
	
	/**
	 * Enqueues stylesheet with WordPress and adds version number that is a timestamp of the file modified date.
	 *
	 * @param string      $handle Name of the stylesheet. Should be unique.
	 * @param string|bool $src    Path to the stylesheet from the theme directory of WordPress. Example: '/css/mystyle.css'.
	 * @param array       $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
	 * @param string      $media  Optional. The media for which this stylesheet has been defined.
	 *                            Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like
	 *                            '(orientation: portrait)' and '(max-width: 640px)'.
	 */
	function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
		wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
	}

	function inspot_media() {
		enqueue_versioned_style('test-main', '/style.css');
		enqueue_versioned_script('test-main', '/js/main.min.js', array( 'jquery'), false);
	}

	function inspot_after_setup() {
		register_nav_menu('menu', 'Menu');

		add_theme_support('post-thumbnails');
	}
	
	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title'   => 'Основные настройки',
			'menu_title'  => 'Настройки темы',
			'menu_slug'   => 'theme-general-settings',
			'capability'  => 'edit_posts',
			'redirect'    => false
		));
	}

	add_action( 'init', 'tpl_clubs' );
	function tpl_clubs() {
		register_post_type( 'clubs', array(
			'public' => true,
			'has_archive' => false,
			'show_in_nav_menus' => true,
			'labels' => array(
				'name' => 'Клубы',
				'all_items' => 'Все Клубы',
				'add_new' => 'Добавить Клуб',
				'add_new_item' => 'Добавление Клуба'
				),
			'supports' => array( 'title', 'thumbnail' ),
			)
		);
	};

	add_action('wp_ajax_get_clubs', 'get_clubs');
	add_action('wp_ajax_nopriv_get_clubs', 'get_clubs');
	function get_clubs() { ?>
	<?php
		$paged = $_POST['paged'];
		$args = array(
			'post_type' => 'clubs',
			'post_status' => 'publish',
			'paged' => $paged,
			'order' => 'ASC',
			'posts_per_page' => '4',
		);
		$clubs = new WP_Query( $args );
		?>
		<?php if($clubs->have_posts()):
		while($clubs->have_posts()): $clubs->the_post(); ?>
			<div class="clubs__item">
				<div class="clubs__swiper swiper">
					<div class="clubs__swiper-wrapper swiper-wrapper">
						<?php $images = get_field('gallery'); foreach( $images as $key=>$image ): ?>
							<div class="clubs__swiper-slide swiper-slide">
								<span class="clubs__swiper-slide-mask clubs__swiper-slide-bg">
									<span style="background-image: url(<?php echo esc_url($image['url']); ?>);"></span>
								</span>
								<span class="clubs__swiper-slide-mask">
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>">
								</span>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="swiper-pagination"></div>
				</div>
				<div class="clubs__content">
					<div class="clubs__country"><?php the_field('country'); ?></div>
					<div class="clubs__loc"><b><?php the_field('preview_title'); ?></b> <?php the_field('preview_text'); ?></div>
					<a href="<?php the_permalink(); ?>" class="clubs__btn btn btn_grey">подробнее</a>
				</div>
			</div>
		<?php endwhile; ?>
		<?php else: ?>
			Записей нет!
		<?php endif; wp_reset_query(); ?>
		<?php if($clubs->max_num_pages > $paged): ?>
			<button class="clubs__show-more">показать больше клубов</button>
		<?php endif; ?>
	<?php }