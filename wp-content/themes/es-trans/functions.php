<?php

add_action('wp_enqueue_scripts', 'es_trans_scripts');

function es_trans_scripts()
{
	wp_enqueue_style('main-style', get_stylesheet_uri()); // подключение основных стилей
	wp_enqueue_style('other-style', get_template_directory_uri() . '/assets/styles/other-style.css'); // подключение дополнительных стилей
	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/app.min.js', array(), null, true); // подключение скриптов
}

add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu()
{
	register_nav_menu('header_menu', 'Меню в шапке');
	register_nav_menu('footer_menu', 'Меню в подвале');
}

add_filter('nav_menu_link_attributes', "filter_nav_menu_link_attributes", 10, 3);

function filter_nav_menu_link_attributes($atts, $item, $args)
{
	if ($args->menu === 'header_menu') {
		$atts['class'] = 'menu__link';

		if ($item->current) {
			$atts['class'] .= ' _navigator-active';
		}
	};

	if ($args->menu === 'footer_menu') {
		$atts['class'] = 'menu-footer__link';
	};

	return $atts;
}
