<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<meta name="keywords" content="автомобильные грузоперевозки из Европы, автомобильные грузоперевозки из Китая, автомобильные грузоперевозки по России, грузовые авиаперевозки, таможенное оформление в России, автомобильные грузоперевозки в страны ЕАЭС">
	<meta name="format-detection" content="telephone=no">
	<link rel="preload" crossorigin="anonymous" as="font" href="<?php bloginfo('template_url'); ?>/assets/fonts/Roboto-Regular.woff2">
	<link rel="preload" crossorigin="anonymous" as="font" href="<?php bloginfo('template_url'); ?>/assets/fonts/Roboto-Medium.woff2">
	<link rel="preload" crossorigin="anonymous" as="font" href="<?php bloginfo('template_url'); ?>/assets/fonts/Roboto-Light.woff2">
	<link rel="preload" crossorigin="anonymous" as="font" href="<?php bloginfo('template_url'); ?>/assets/fonts/Roboto-Bold.woff2">
	<link rel="preload" crossorigin="anonymous" as="font" href="<?php bloginfo('template_url'); ?>/assets/fonts/Roboto-Black.woff2">
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicons/favicon.ico">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicons/icon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicons/apple.png">
	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<header class="header header-back" data-lp data-scroll="70" data-scroll-show="500">
			<div class="header__container-header">
				<div class="header__logo logo">
					<a class="logo__link" href="<?php echo home_url(); ?>"><img class="logo__img" src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="логотип"></a>
				</div>
				<div class="menu__icon-wrapper">
					<ul class="menu__social social">
						<li class="social__item">
							<a class="social__link" target="_blank" href="whatsapp://send?phone=<?php the_field('whatsapp', 6); ?>">
								<svg class="social__icon">
									<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#whatsapp"></use>
								</svg>
							</a>
						</li>
						<li class="social__item">
							<div class="opening-hours-telephone">
								<a class="telephone link" href="tel:<?php the_field('tag-phone', 6); ?>"><?php the_field('phone', 6); ?></a>
								<p class="opening-hours"><?php the_field('opening-hours', 6); ?></p>
							</div>
						</li>
					</ul>
					<button class="header__back-button back-button" id="backward">Назад</button>
				</div>
			</div>
		</header>