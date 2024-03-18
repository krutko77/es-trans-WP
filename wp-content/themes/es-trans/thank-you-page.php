<?php
/*
Template Name: Страница благодарности
*/
?>

<?php get_header('second'); ?>

<main class="page thank text">
	<div class="thank__content">
		<div data-watch data-watch-once class="thank__img-wrap">
			<img class="thank__img" src="<?php bloginfo('template_url'); ?>/assets/img/tick-mark.png" alt="галочка на зеленом круге">
		</div>
		<h2 class="thank__title title">Спасибо!<br>Сообщение отправлено.</h2>
		<p class="thank__text">Мы свяжемся с вами в ближайшее время.</p>
	</div>
</main>
<script>
	setTimeout('location.replace("https://es-trans.ru/")', 3000);
</script>

<?php get_footer(); ?>