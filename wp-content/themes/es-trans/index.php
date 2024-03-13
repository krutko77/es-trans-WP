<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>

<main class="page text">
	<section class="home" data-watch="navigator" data-watch-threshold="0.55">
		<div class="home__container">
			<div class="home__content">
				<div class="home__name-block">
					<h1 class="home__title" data-watch data-watch-once><?php the_field('name'); ?></h1>
					<p class="home__label" data-watch data-watch-once><?php the_field('slogan'); ?></p>
				</div>
				<div class="home__offer-wrap margin-bottom-60">
					<ul class="home__list list">

						<li class="list__item margin-bottom-10">
							<svg class="home__icons">
								<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#check"></use>
							</svg>
							<p class="list__text"><?php the_field('utp-1'); ?></p>
						</li>

						<li class="list__item margin-bottom-10">
							<svg class="home__icons">
								<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#check"></use>
							</svg>
							<p class="list__text"><?php the_field('utp-2'); ?></p>
						</li>

						<li class="list__item margin-bottom-10">
							<svg class="home__icons">
								<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#check"></use>
							</svg>
							<p class="list__text"><?php the_field('utp-3'); ?>
							<p>
						</li>

						<li class="list__item margin-bottom-10">
							<svg class="home__icons">
								<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#check"></use>
							</svg>
							<p class="list__text"><?php the_field('utp-4'); ?></p>
						</li>

						<li class="list__item margin-bottom-10">
							<svg class="home__icons">
								<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#check"></use>
							</svg>
							<p class="list__text"><?php the_field('utp-5'); ?></p>
						</li>

					</ul>
				</div>
				<div class="home__action action">
					<p class="action__text margin-bottom-30">Узнайте стоимость вашего заказа</p>
					<button class="button offer-button preload" data-popup="#popup-form" aria-label="Кнопка рассчитать стоимость">Рассчитать
						стоимость</button>
				</div>
			</div>
		</div>
	</section>
	<section class="prices" data-watch="navigator" data-watch-threshold="0.25">
		<div class="prices__container">
			<div class="prices__wrapper">
				<h2 class="prices__title title">Цены</h2>
				<div class="prices__subtitle-box subtitle-box">
					<svg class="prices__icons icons-check">
						<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#check"></use>
					</svg>
					<h3 class="prices__subtitle subtitle">Перевозка грузов</h3>
				</div>
				<div class="prices__grid grid-prices text margin-bottom-40">

					<div data-watch data-watch-once class="grid-prices__item grid-prices__item--1 card">
						<div class="card__top">
							<div class="card__img-wrapper">
								<img class="card__icons" width="67" height="65" data-src="<?php bloginfo('template_url'); ?>/assets/img/icons/card-icon.png" alt="иконка грузовика">
							</div>
							<h4 class="card__title sub-subtitle"><?php the_field('marshrut_perevozki-1'); ?></h4>
							<p class="card__text"><?php the_field('uslovija_perevozki-1'); ?></p>
							<p class="card__text">Срок доставки от <strong><?php the_field('srok_dostavki-1'); ?> дней</strong></p>
						</div>
						<div class="card__bottom">
							<div class="card__wrapper-link">
								<a class="card__link link" href="" data-goto-top="100" data-goto=".europe">Подробнее</a>
							</div>
							<p class="card__price"><span class="card__text">от</span> <span class="card__price-color"><strong><?php the_field('stavka-1'); ?></strong></span> EUR
							</p>
						</div>
					</div>

					<div data-watch data-watch-once class="grid-prices__item grid-prices__item--2 card">
						<div class="card__top">
							<div class="card__img-wrapper">
								<img class="card__icons" width="67" height="65" data-src="<?php bloginfo('template_url'); ?>/assets/img/icons/card-icon.png" alt="иконка грузовика">
							</div>
							<h4 class="card__title sub-subtitle"><?php the_field('marshrut_perevozki-2'); ?></h4>
							<p class="card__text"><?php the_field('uslovija_perevozki-2'); ?></p>
							<p class="card__text">Срок доставки от <strong><?php the_field('srok_dostavki-2'); ?> дней</strong></p>
						</div>
						<div class="card__bottom">
							<div class="card__wrapper-link">
								<a class="card__link link" href="" data-goto-top="100" data-goto=".china">Подробнее</a>
							</div>
							<p class="card__price"><span class="card__text">от</span> <span class="card__price-color"><strong><?php the_field('stavka-2'); ?></strong></span> USD
							</p>
						</div>
					</div>

					<div data-watch data-watch-once class="grid-prices__item grid-prices__item--3 card">
						<div class="card__top">
							<div class="card__img-wrapper">
								<img class="card__icons" width="67" height="65" data-src="<?php bloginfo('template_url'); ?>/assets/img/icons/card-icon.png" alt="иконка грузовика">
							</div>
							<h4 class="card__title sub-subtitle"><?php the_field('marshrut_perevozki-3'); ?></h4>
							<p class="card__text"><?php the_field('uslovija_perevozki-3'); ?></p>
							<p class="card__text">Срок доставки от <strong><?php the_field('srok_dostavki-3'); ?> дней</strong></p>
						</div>
						<div class="card__bottom">
							<div class="card__wrapper-link">
								<a class="card__link link" href="" data-goto-top="100" data-goto=".tlc">Подробнее</a>
							</div>
							<p class="card__price"><span class="card__text">от</span> <span class="card__price-color"><strong><?php the_field('stavka-3'); ?></strong></span> EUR
							</p>
						</div>
					</div>

					<div data-watch data-watch-once class="grid-prices__item grid-prices__item--4 card">
						<div class="card__top">
							<div class="card__img-wrapper">
								<img class="card__icons" width="67" height="65" data-src="<?php bloginfo('template_url'); ?>/assets/img/icons/card-icon.png" alt="иконка грузовика">
							</div>
							<h4 class="card__title sub-subtitle"><?php the_field('marshrut_perevozki-4'); ?></h4>
							<p class="card__text"><?php the_field('uslovija_perevozki-4'); ?></p>
							<p class="card__text">Срок доставки от <strong><?php the_field('srok_dostavki-4'); ?> дней</strong></p>
						</div>
						<div class="card__bottom">
							<div class="card__wrapper-link">
								<a class="card__link link" href="" data-goto-top="100" data-goto=".russia">Подробнее</a>
							</div>
							<p class="card__price"><span class="card__text">от</span> <span class="card__price-color"><strong><?php the_field('stavka-4'); ?></strong></span> RUB
							</p>
						</div>
					</div>

				</div>
				<p class="prices__text margin-bottom-20">Здесь указаны индикативные фрахтовые ставки по нашим основным
					направлениям автомобильных перевозок грузов. Стоимость
					перевозки и время доставки груза в первую очередь зависят от маршрута перевозки, веса и количества
					груза, класса опасности груза, необходимости дополнительного страхования в случае высокой стоимости
					груза. Все условия
					перевозок грузов очень разные, как и грузы, которые мы перевозим.</p>
				<p class="prices__text margin-bottom-20">Информацию о стоимости перевозки груза самолетом (<a class="prices__link link" href="" data-goto-top="100" data-goto=".avia">подробнее</a>) мы можем
					предоставить по вашему запросу. Чтобы получить наиболее точный расчет, нам необходима детальная
					информация о вашем грузе. Эти данные позволят нам оценить объем работы, требуемые ресурсы и прочие
					факторы, которые влияют на стоимость перевозки.</p>
				<!-- <p class="prices__text margin-bottom-20">Свяжитесь с нами, предоставив все необходимые данные, и мы с
							удовольствием поможем вам с расчетом стоимости и предложим наилучший вариант перевозки вашего
							груза.</p> -->
				<p class="prices__text margin-bottom-60">Для быстрой предварительной оценки стоимости и времени
					доставки, пожалуйста заполните небольшую форму, нажав на красную кнопку в блоке ниже.</p>
				<div class="prices__subtitle-box subtitle-box">
					<svg class="prices__iconsk icons-check">
						<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#check"></use>
					</svg>
					<h3 class="prices__subtitle subtitle">таможенное оформление грузов</h3>
				</div>
				<p class="prices__text margin-bottom-20">Мы рады оказать помощь в таможенном оформлении груза (<a class="prices__link link" href="" data-goto-top="100" data-goto=".customs">подробнее</a>).
					Предоставьте упрощенную информацию о грузе, и мы сформируем примерную стоимость наших услуг.</p>
				<p class="prices__text margin-bottom-20">Чтобы
					сделать точный расчет стоимости, нам необходима полная информация о грузе. Эти данные
					помогут нам
					оценить сложность и объем работы, связанные с таможенным оформлением, а также учесть прочие
					факторы, влияющие на стоимость, такие как необходимая сертификация, получение разрешений и прочие
					согласования.</p>
				<p class="prices__text">Для быстрой предварительной оценки стоимости таможенного оформления,
					пожалуйста заполните небольшую форму, нажав на красную кнопку в блоке ниже.</p>
			</div>
		</div>
	</section>
	<section class="action-block">
		<div class="action-block__container">
			<div class="action-block__wrapper">
				<h3 class="action-block__subtitle subtitle">Узнайте стоимость вашего заказа</h3>
				<button class="action-block__btn action-button" data-popup="#popup-form" aria-label="Кнопка рассчитать стоимость" data-watch data-watch-once>Рассчитать стоимость</button>
			</div>
		</div>
	</section>
	<section class="services" data-watch="navigator" data-watch-threshold="0.15">
		<div class="services__container">
			<h2 class="services__title title">Услуги</h2>
			<div class="clearfix margin-bottom-50">
				<div class="services__img-box services__img-box--1 img-box float-left">
					<img class="services__img" data-src="<?php the_field('photo-uslugi-1'); ?>" width="400" height="300" alt="автомобиль 'ЕС Транс'">
				</div>
				<p class="services__text margin-bottom-20"><?php the_field('text-uslugi-1-1'); ?></p>
				<p class="services__text margin-bottom-20"><?php the_field('text-uslugi-1-2'); ?></p>
				<div class="services__img-box services__img-box--2 img-box float-right">
					<img class="services__img" data-src="<?php the_field('photo-uslugi-2'); ?>" width="400" height="300" alt="автомобиль 'ЕС Транс'">
				</div>
				<p class="services__text margin-bottom-20"><?php the_field('text-uslugi-1-3'); ?></p>
				<p class="services__text margin-bottom-20"><?php the_field('text-uslugi-1-4'); ?></p>
				<div class="services__img-box services__img-box--1 img-box float-left">
					<img class="services__img" data-src="<?php the_field('photo-uslugi-3'); ?>" width="400" height="300" alt="автомобиль 'ЕС Транс'">
				</div>
				<p class="services__text margin-bottom-20"><?php the_field('text-uslugi-1-5'); ?></p>
				<p class="services__text"><?php the_field('text-uslugi-1-6'); ?></p>
			</div>
			<div class="services__subtitle-box subtitle-box">
				<svg class="services__icons icons-check">
					<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#check"></use>
				</svg>
				<h3 class="services__subtitle subtitle"><?php the_field('zagolovok-uslugi-1'); ?></h3>
			</div>
			<ul class="services__list list margin-bottom-50">
				<li class="list__item margin-bottom-20">
					<h4 class="about__text europe"><strong><?php the_field('podzagolovok-uslugi-1'); ?></strong></h4>
					<p><?php the_field('text-uslugi-2-1'); ?></p>
				</li>
				<li class="list__item margin-bottom-20">
					<h4 class="about__text china"><strong><?php the_field('podzagolovok-uslugi-2'); ?></strong></h4>
					<p class="services__text margin-bottom-10"><?php the_field('text-uslugi-2-2'); ?></p>
					<p class="services__text"><?php the_field('text-uslugi-2-3'); ?></p>
				</li>
				<li class="list__item margin-bottom-20">
					<h4 class="about__text tlc"><strong><?php the_field('podzagolovok-uslugi-3'); ?></strong></h4>
					<p class="services__text margin-bottom-10"><?php the_field('text-uslugi-2-4'); ?></p>
				</li>
				<li class="list__item margin-bottom-20">
					<h4 class="about__text"><strong><?php the_field('podzagolovok-uslugi-4'); ?></strong></h4>
					<p class="services__text"><?php the_field('text-uslugi-2-5'); ?></p>
				</li>
				<li class="list__item">
					<h4 class="about__text russia"><strong><?php the_field('podzagolovok-uslugi-5'); ?></strong></h4>
					<p class="services__text"><?php the_field('text-uslugi-2-6'); ?></p>
				</li>
			</ul>
			<div class="services__subtitle-box subtitle-box">
				<svg class="services__icons icons-check">
					<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#check"></use>
				</svg>
				<h3 class="services__subtitle subtitle avia"><?php the_field('zagolovok-uslugi-2'); ?></h3>
			</div>
			<p class="services__text margin-bottom-10"><?php the_field('text-uslugi-2-7'); ?></p>
			<p class="services__text margin-bottom-10"><?php the_field('text-uslugi-2-8'); ?></p>
			<p class="services__text margin-bottom-50"><?php the_field('text-uslugi-2-9'); ?></p>
			<div class=" services__subtitle-box subtitle-box">
				<svg class="services__icons icons-check">
					<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#check"></use>
				</svg>
				<h3 class="services__subtitle subtitle customs"><?php the_field('zagolovok-uslugi-3'); ?></h3>
			</div>
			<p class=" services__text margin-bottom-10"><?php the_field('text-uslugi-2-10'); ?></p>
			<p class="services__text"><?php the_field('text-uslugi-2-11'); ?></p>
		</div>
	</section>
	<section class="reviews" data-watch="navigator" data-watch-threshold="0.35">
		<div class="reviews__container">
			<h2 class="reviews__title title">Отзывы</h2>
			<div class="reviews__subtitle-box subtitle-box">
				<svg class="reviews__icons icons-check">
					<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#check"></use>
				</svg>
				<h3 class="reviews__subtitle subtitle">Мы гордимся нашими клиентами!</h3>
			</div>
			<ul class="reviews__list list margin-bottom-80">
				<li class="list__item">
					<div class="list__item-wrapper list__item-wrapper--1"><img class="list__img" width="342" height="60" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/logo-60/1.png" alt="логотип"></div>
				</li>
				<li class="list__item">
					<div class="list__item-wrapper list__item-wrapper--2"><img class="list__img" width="286" height="60" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/logo-60/2.png" alt="логотип"></div>
				</li>
				<li class="list__item">
					<div class="list__item-wrapper list__item-wrapper--3"><img class="list__img" width="148" height="60" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/logo-60/3.png" alt="логотип"></div>
				</li>
				<li class="list__item">
					<div class="list__item-wrapper list__item-wrapper--4"><img class="list__img" width="60" height="60" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/logo-60/4.png" alt="логотип"></div>
				</li>
				<li class="list__item">
					<div class="list__item-wrapper list__item-wrapper--5"><img class="list__img" width="149" height="60" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/logo-60/5.png" alt="логотип"></div>
				</li>
				<li class="list__item">
					<div class="list__item-wrapper list__item-wrapper--6"><img class="list__img" width="158" height="60" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/logo-60/6.png" alt="логотип"></div>
				</li>
				<li class="list__item">
					<div class="list__item-wrapper list__item-wrapper--7"><img class="list__img" width="87" height="60" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/logo-60/7.png" alt="логотип"></div>
				</li>
			</ul>
			<div class="reviews__subtitle-box subtitle-box margin-bottom-30">
				<svg class="reviews__icons icons-check">
					<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#check"></use>
				</svg>
				<h3 class="reviews__subtitle subtitle">Клиенты о нас</h3>
				<div class="reviews__video-box">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/swipe-left/hand-swipe.gif" width="70" height="35" alt="иконка руки">
				</div>
			</div>
			<!-- Оболочка слайдера -->
			<div class="reviews__slider swiper margin-bottom-30">
				<!-- Двигающееся часть слайдера -->
				<div class="swiper__wrapper swiper-wrapper">
					<!-- Слайд -->
					<div class="swiper__slide swiper-slide">
						<div class="swiper__image">
							<img class="swiper__img" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/small/Metallprofil-small.jpg" alt="благодарственное письмо" width="350" height="481">
						</div>
						<div class="swiper__label"><a class="swiper__link link" href="#" data-popup="#popup-1">Увеличить</a>
						</div>
					</div>

					<div class="swiper__slide swiper-slide">
						<div class="swiper__image">
							<img class="swiper__img" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/small/Green-small.jpg" alt="благодарственное письмо" width="350" height="481">
						</div>
						<div class="swiper__label"><a class="swiper__link link" href="#" data-popup="#popup-2">Увеличить</a>
						</div>
					</div>

					<div class="swiper__slide swiper-slide">
						<div class="swiper__image">
							<img class="swiper__img" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/small/NEXT-small.jpg" alt="благодарственное письмо" width="350" height="481">
						</div>
						<div class="swiper__label"><a class="swiper__link link" href="#" data-popup="#popup-3">Увеличить</a>
						</div>
					</div>

					<div class="swiper__slide swiper-slide">
						<div class="swiper__image">
							<img class="swiper__img" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/small/Spasskie-small.jpg" alt="благодарственное письмо" width="350" height="481">
						</div>
						<div class="swiper__label"><a class="swiper__link link" href="#" data-popup="#popup-4">Увеличить</a>
						</div>
					</div>

					<div class="swiper__slide swiper-slide">
						<div class="swiper__image">
							<img class="swiper__img" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/small/KHPS-small.jpg" alt="благодарственное письмо" width="350" height="481">
						</div>
						<div class="swiper__label"><a class="swiper__link link" href="#" data-popup="#popup-5">Увеличить</a>
						</div>
					</div>

					<div class="swiper__slide swiper-slide">
						<div class="swiper__image">
							<img class="swiper__img" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/small/Kvarta-Stal-small.jpg" alt="благодарственное письмо" width="350" height="481">
						</div>
						<div class="swiper__label"><a class="swiper__link link" href="#" data-popup="#popup-6">Увеличить</a>
						</div>
					</div>

					<div class="swiper__slide swiper-slide">
						<div class="swiper__image">
							<img class="swiper__img" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/small/Danfoss-small.jpg" alt="благодарственное письмо" width="350" height="481">
						</div>
						<div class="swiper__label"><a class="swiper__link link" href="#" data-popup="#popup-7">Увеличить</a>
						</div>
					</div>

					<div class="swiper__slide swiper-slide">
						<div class="swiper__image">
							<img class="swiper__img" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/small/Ridan-small.jpg" alt="благодарственное письмо" width="350" height="481">
						</div>
						<div class="swiper__label"><a class="swiper__link link" href="#" data-popup="#popup-8">Увеличить</a>
						</div>
					</div>

					<div class="swiper__slide swiper-slide">
						<div class="swiper__image">
							<img class="swiper__img" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/small/UNIFOODTECH-small.jpg" alt="благодарственное письмо" width="350" height="481">
						</div>
						<div class="swiper__label"><a class="swiper__link link" href="#" data-popup="#popup-9">Увеличить</a>
						</div>
					</div>

					<div class="swiper__slide swiper-slide">
						<div class="swiper__image">
							<img class="swiper__img" data-src="<?php bloginfo('template_url'); ?>/assets/img/reviews/small/VEDA-MK-small.jpg" alt="благодарственное письмо" width="350" height="481">
						</div>
						<div class="swiper__label"><a class="swiper__link link" href="#" data-popup="#popup-10">Увеличить</a>
						</div>
					</div>

				</div>
				<!-- Если нужна пагинация -->
				<!-- <div class="swiper-pagination"></div> -->
				<!-- Если нужна навигация (влево/вправо) -->
				<button type="button" class="swiper-button-prev"></button>
				<button type="button" class="swiper-button-next"></button>
			</div>
		</div>
	</section>
	<section class="action-block">
		<div class="action-block__container">
			<div class="action-block__wrapper">
				<h3 class="action-block__subtitle subtitle">Узнайте стоимость вашего заказа</h3>
				<button class="action-block__btn action-button" data-popup="#popup-form" aria-label="Кнопка рассчитать стоимость" data-watch data-watch-once>Рассчитать стоимость</button>
			</div>
		</div>
	</section>
	<section class="contact" data-watch="navigator" data-watch-threshold="0.3">
		<div class="contact__container">
			<h2 class="contact__title title">Контакты</h2>
			<div class="contact__content">
				<div class="contact__company">
					<ul class="contact__list list margin-bottom-20">
						<li class="list__item margin-bottom-20">
							<p class="list__item-text">ООО «ЕС Транс»</p>
							<p class="list__item-text">Наш код на бирже грузоперевозок <a class="list__item-link link" href="https://ati.su/" target="_blank">ATI.SU</a>: 422346</p>
						</li>
						<li class="list__item margin-bottom-20">
							<div class="list__item-wrapper">
								<span class="list__item-icon _icon-phone-flip"></span><a href="tel:74957753078" class="list__item-link link">+7 (495) 775-30-78</a>
							</div>
						</li>
						<li class="list__item margin-bottom-20">
							<div class="list__item-wrapper">
								<span class="list__item-icon _icon-email"></span><a href="mailto:info@es-trans.pro" class="list__item-link link">info@es-trans.pro</a>
							</div>
						</li>
						<li class="list__item margin-bottom-20">
							<div class="list__item-wrapper location">
								<span class="list__item-icon _icon-location-dot"></span>
								<p class="list__item-link">Россия, 125315, г. Москва, Ленинградский проспект, д. 80, кор.
									5, офис 203</p>
							</div>
						</li>
						<li class="list__item">
							<p class="list__item-text">ОГРН 1065047062574</p>
						</li>
					</ul>
					<p class=" contact__text margin-bottom-20">Для письменного общения в формате онлайн,
						пожалуйста пишите нам в мессенджеры:</p>
					<div class="contact__social">
						<a class="contact__link-icon" href="https://t.me/ESTrans1" target="_blank">
							<svg class="icon">
								<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#telegram"></use>
							</svg>
						</a>
						<a class="contact__link-icon" href="whatsapp://send?phone=79872294675" target="_blank">
							<svg class="icon">
								<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icons/icons.svg#whatsapp"></use>
							</svg>
						</a>
					</div>
				</div>
				<div class="contact__map">
					<iframe data-src="https://yandex.ru/map-widget/v1/?um=constructor%3A9d231bda729e55daf8e0ab7341ed242b99f2c48478d79f506328277b903feb53&amp;source=constructor"></iframe>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>