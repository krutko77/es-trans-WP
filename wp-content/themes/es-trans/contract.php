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
	<?php get_template_part('template-parts/action-block'); ?>
</section>

<?php get_footer(); ?>