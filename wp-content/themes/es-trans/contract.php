<?php
/*
Template Name: Договор
*/
?>

<?php get_header('back'); ?>

<main id="anchor3" class="page">
	<div class="contract">
		<div class="contract__container">
			<div class="contract__wrapper text">
				<h1 class="contract__title contract__title--1 title">Договор</h1>
				<div class="contract__content margin-bottom-20"><img class="contract__img" src="<?php bloginfo('template_url'); ?>/assets/img/contracts/1.jpg" alt="договор"></div>
				<div class="contract__content margin-bottom-20"><img class="contract__img" src="<?php bloginfo('template_url'); ?>/assets/img/contracts/2.jpg" alt="договор"></div>
				<div class="contract__content margin-bottom-20"><img class="contract__img" src="<?php bloginfo('template_url'); ?>/assets/img/contracts/3.jpg" alt="договор"></div>
				<div class="contract__content margin-bottom-20"><img class="contract__img" src="<?php bloginfo('template_url'); ?>/assets/img/contracts/4.jpg" alt="договор"></div>
				<div class="contract__content margin-bottom-20"><img class="contract__img" src="<?php bloginfo('template_url'); ?>/assets/img/contracts/5.jpg" alt="договор"></div>
			</div>
		</div>
</main>
<section class="action-block">
	<div class="action-block__container">
		<div class="action-block__wrapper">
			<h3 class="action-block__subtitle subtitle">Узнайте стоимость вашего заказа</h3>
			<button class="action-block__btn action-button" data-popup="#popup-form" aria-label="Кнопка рассчитать стоимость" data-watch data-watch-once>Рассчитать стоимость</button>
		</div>
	</div>
</section>

<?php get_footer(); ?>