<?php include('header.php'); ?>


<section class="s-lp-header">
	<div class="s-lp-header__lines"></div>
	<div class="container">
		<div class="lp-header">
			<h1 class="h1 lp-header__title">Производим и&nbsp;поставляем модульные котельные от&nbsp;0.2&nbsp;мВт до&nbsp;50&nbsp;мВт</h1>

			<div class="h3 lp-header__descr">Гарантия выполнения проекта четко в&nbsp;поставленный срок. Гарантия на&nbsp;котельную 24&nbsp;месяца
			</div>
			<div class="lp-header__actions">
				<button class="btn btn--white fancy-modal" data-src="#modal-order">Заказать проект</button>
				<a href="#" class="video-link"><i class="i-play"></i><span>Видео о компании</span></a>
			</div>

			<img src="/img/lp/kotel/head-img.png" alt="img" class="lp-header__img lp-header__img--kotel">

		</div>
	</div>
</section>


<section class="s-lp-headpreims s-def-bottom">
	<div class="container">
		<div class="headpreims-wrap">
			<div class="h1">Наши преимущества</div>

			<div class="headpreims">
				<div class="headpreim">
					<div class="headpreim__icon">
						<img src="/img/lp/kotel/headpreim-ic-1.svg" alt="img">
					</div>
					<div class="headpreim__title">Гарантия выполнения сроков</div>
					<div class="headpreim__descr">Произведем котельную точно в&nbsp;срок или&nbsp;вернем 400&nbsp;000&nbsp;руб. Закрепим это условие в&nbsp;договоре.</div>
				</div>
				<div class="headpreim">
					<div class="headpreim__icon">
						<img src="/img/lp/kotel/headpreim-ic-2.svg" alt="img">
					</div>
					<div class="headpreim__title">Проектный отдел</div>
					<div class="headpreim__descr">Собственный проектный отдел. Проект любой сложности готов в&nbsp;кратчайший срок.</div>
				</div>
				<div class="headpreim">
					<div class="headpreim__icon">
						<img src="/img/lp/kotel/headpreim-ic-3.svg" alt="img">
					</div>
					<div class="headpreim__title">Сопровождение</div>
					<div class="headpreim__descr">Полный цикл работ. От&nbsp;получения технических условий до&nbsp;сдачи котельной в&nbsp;эксплуатацию.</div>
				</div>
				<div class="headpreim">
					<div class="headpreim__icon">
						<img src="/img/lp/kotel/headpreim-ic-4.svg" alt="img">
					</div>
					<div class="headpreim__title">Сервисная служба</div>
					<div class="headpreim__descr">Собственная сервисная служба. Выполняем сервис, эксплуатацию и&nbsp;техническую поддержку котельных в&nbsp;режиме&nbsp;24/7</div>
				</div>
			</div>
		</div>

	</div>
</section>


<section class="s-lp-calc s-def">
	<div class="container">
		<div class="sec-header">
			<div class="h2">Оставьте заявку и узнайте примерную стоимость котельной</div>
		</div>

		<form class="calc ajax-form">

			<div class="calc__left">
				<div class="calc-result">
					<div class="lead calc-result__title">Примерная стоимость котельной</div>
					<div class="h1"><span class="calc-result__sum">2 000 000</span> Р</div>
				</div>
				<div class="lead calc-form-title">Получите предложение на&nbsp;вашу почту</div>
				<input type="hidden" value="Новая заявка (калькулятор котельных)" name="form_subject">
				<input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text" >
				<input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон"  class="input-text" data-req="true">
				<button type="submit" class="btn btn--light-blue">Получить предложение</button>
				<div class="form-note">Нажимая кнопку, принимаю условия <a href="#">пользовательского соглашения</a></div>
			</div>

			<div class="calc__right">
				<div class="calc__step">
					<div class="lead">Выберете мощность мВт</div>
					<input type="text" class="calc-strength" name="strength" title="Мощность" data-label="Мощность">
				</div>
				<div class="calc__step">
					<div class="lead">Выберете тип топлива</div>
					<div class="calc__radios">
						<label class="style-radio-btn">
							<input type="radio" value="gas" name="type" title="Тип топлива" data-label="Тип топлива" checked>
							<span>Газ</span>
						</label>
						<label class="style-radio-btn">
							<input type="radio" value="gas-diesel" name="type" title="Тип топлива" data-label="Тип топлива">
							<span>Газ-дизель</span>
						</label>
					</div>
				</div>
				<div class="calc__step">
					<div class="lead">Наличие контура ГВС</div>
					<div class="calc__radios">
						<label class="style-radio-btn">
							<input type="radio" value="yes" name="gvs" title="Наличие контура ГВС" data-label="Наличие контура ГВС" checked>
							<span>Да</span>
						</label>
						<label class="style-radio-btn">
							<input type="radio" value="no" name="gvs" title="Наличие контура ГВС" data-label="Наличие контура ГВС">
							<span>Нет</span>
						</label>
					</div>
				</div>
				<div class="calc__step">
					<div class="lead">Вариант исполнения</div>
					<div class="calc__radios">
						<label class="style-radio-btn">
							<input type="radio" value="block" name="variant" title="Вариант исполнения" data-label="Вариант исполнения" checked>
							<span>Блочно-модульное</span>
						</label>
						<label class="style-radio-btn">
							<input type="radio" value="rama" name="variant" title="Вариант исполнения" data-label="Вариант исполнения">
							<span>На раме</span>
						</label>
					</div>
				</div>
			</div>
		</form>

	</div>
</section>


<section class="s-basecomp s-def">
	<div class="container">
		<div class="sec-header">
			<div class="h1">Базовый комплект поставки</div>
		</div>

		<div class="basecomp">

			<div class="basecomp__top">
				<div class="basecomp__items">
					<div class="basecomp__item">
						<img data-lazy="/img/lp/kotel/comp-ic-1.jpg" alt="1">
						<span>Сэндвич панели<br>100 мм</span>
					</div>
					<div class="basecomp__item">
						<img data-lazy="/img/lp/kotel/comp-ic-2.jpg" alt="1">
						<span>Насосы со 100%<br>резервированием</span>
					</div>
					<div class="basecomp__item">
						<img data-lazy="/img/lp/kotel/comp-ic-3.jpg" alt="1">
						<span>Качественная запорная арматура</span>
					</div>
					<div class="basecomp__item">
						<img data-lazy="/img/lp/kotel/comp-ic-4.jpg" alt="1">
						<span>GSM<br>диспетчеризация</span>
					</div>
				</div>
			</div>

			<div class="basecomp__imgwrap">
				<img data-lazy="/img/lp/kotel/basecomp-img.jpg" alt="1" class="basecomp__img basecomp__img--kotel">
			</div>

			<div class="basecomp__bottom">
				<div class="basecomp__items">
					<div class="basecomp__item">
						<img data-lazy="/img/lp/kotel/comp-ic-5.jpg" alt="1">
						<span>Качественные жаротрубные котлы</span>
					</div>
					<div class="basecomp__item">
						<img data-lazy="/img/lp/kotel/comp-ic-6.jpg" alt="1">
						<span>Надежные горелки (газовые, дизельные или комбинированные)</span>
					</div>
					<div class="basecomp__item">
						<img data-lazy="/img/lp/kotel/comp-ic-7.jpg" alt="1">
						<span>Светодиодное освещение</span>
					</div>
					<div class="basecomp__item">
						<img data-lazy="/img/lp/kotel/comp-ic-8.jpg" alt="1">
						<span>Блок химводоподготовки</span>
					</div>
					<div class="basecomp__item">
						<img data-lazy="/img/lp/kotel/comp-ic-9.jpg" alt="1">
						<span>Система охранно-пожарной сигнализации и автоматического пожаротушения</span>
					</div>
					<div class="basecomp__item">
						<img data-lazy="/img/lp/kotel/comp-ic-10.jpg" alt="1">
						<span>Автоматическое управление отопительного контура по уличной температуре</span>
					</div>
					<div class="basecomp__item">
						<img data-lazy="/img/lp/kotel/comp-ic-11.jpg" alt="1">
						<span>Система автоматики Siemens, Omron, Phoenix Contact, Овен</span>
					</div>
					<div class="basecomp__item">
						<img data-lazy="/img/lp/kotel/comp-ic-12.jpg" alt="1">
						<span>Дымоход из высококачкественной стали</span>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>


<section class="s-lp-dop s-def">
	<img data-lazy="/img/lp/kotel/dop-bg.svg" alt="" class="s-lp-dop__bg">
	<div class="container">
		<div class="sec-header">
			<div class="h1">Дополнительные опции</div>
		</div>

		<div class="dop-options">
			<div class="dop-option">
				<div class="dop-option__icon">
					<img data-lazy="/img/lp/kotel/dop-ic-1.svg" alt="1">
				</div>
				<div class="lead">Газорегуляторная установка (ГРУ)</div>
			</div>
			<div class="dop-option">
				<div class="dop-option__icon">
					<img data-lazy="/img/lp/kotel/dop-ic-2.svg" alt="1">
				</div>
				<div class="lead">Узел учета газа</div>
			</div>
			<div class="dop-option">
				<div class="dop-option__icon">
					<img data-lazy="/img/lp/kotel/dop-ic-3.svg" alt="1">
				</div>
				<div class="lead">Узел учета тепловой энергии</div>
			</div>
			<div class="dop-option">
				<div class="dop-option__icon">
					<img data-lazy="/img/lp/kotel/dop-ic-4.svg" alt="1">
				</div>
				<div class="lead">Кожуха шумоглушения на горелки</div>
			</div>
			<div class="dop-option">
				<div class="dop-option__icon">
					<img data-lazy="/img/lp/kotel/dop-ic-5.svg" alt="1">
				</div>
				<div class="lead">Отопление котельной</div>
			</div>
			<div class="dop-option">
				<div class="dop-option__icon">
					<img data-lazy="/img/lp/kotel/dop-ic-6.svg" alt="1">
				</div>
				<div class="lead">Шкаф автоматизации котельной с сенсорной панелью</div>
			</div>
		</div>

	</div>
</section>


<section class="s-lp-preims s-def">
	<div class="container">
		<div class="sec-header">
			<div class="h1">Преимущества модульных котельных Uniwarm</div>
		</div>

		<img data-lazy="/img/lp/kotel/preim-img.jpg" alt="1" class="s-lp-preims__img">

		<div class="lp-preims">
			<div class="headpreim">
				<div class="headpreim__icon">
					<img src="/img/lp/kotel/lp-preim-ic-1.svg" alt="img">
				</div>
				<div class="headpreim__title">Отсутствие капитальных затрат</div>
				<div class="headpreim__descr">Монтаж котельной возможен практически на любую открытую площадку и не требует капитального строительства</div>
			</div>
			<div class="headpreim">
				<div class="headpreim__icon">
					<img src="/img/lp/kotel/lp-preim-ic-2.svg" alt="img">
				</div>
				<div class="headpreim__title">Работа при температуре от&nbsp;-60&nbsp;°С до&nbsp;+60&nbsp;°С</div>
				<div class="headpreim__descr">Система терморегулирования котельной в совокупности с применяемыми утеплителями позволяет бесперебойно эксплуатировать оборудование на протяжении 24 часов</div>
			</div>
			<div class="headpreim">
				<div class="headpreim__icon">
					<img src="/img/lp/kotel/lp-preim-ic-3.svg" alt="img">
				</div>
				<div class="headpreim__title">Полный готовый пакет документов</div>
				<div class="headpreim__descr">Мы предоставляем полный пакет документов для сдачи в технадзор и прочие надзорные органы. (Паспорт, проектная документация и т.д.)</div>
			</div>
		</div>

	</div>
</section>


<section class="s-lp-service s-def">
	<img data-lazy="/img/lp/service-dots.png" alt="car" class="s-lp-service__dots">
	<img data-lazy="/img/lp/service-car.png" alt="car" class="s-lp-service__car">
	<div class="container">
		<div class="sec-header">
			<div class="h1">Сервис и обслуживание котельных</div>
		</div>
		<div class="icon-left-blocks">
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="/img/lp/service-ic-1.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Мы осуществляем техническую поддержку на&nbsp;протяжении всего срока службы котельных.
				</div>
			</div>
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="/img/lp/service-ic-2.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Консультации персонала заказчика по&nbsp;работе котельной.
				</div>
			</div>
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="/img/lp/service-ic-3.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Сервисная служба&nbsp;24/7.
				</div>
			</div>
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="/img/lp/service-ic-4.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Выезд на неисправность в&nbsp;течение 3&nbsp;часов
				</div>
			</div>
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="/img/lp/service-ic-5.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Наличие запасных частей для&nbsp;оперативного ремонта в&nbsp;г.&nbsp;Ростове-на-Дону.
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-def s-home-service-team">
	<div class="container">
		<div class="sec-header">
			<div class="h1">Сервисная служба Uniwarm</div>
		</div>

		<div class="team-list team-list--round">
			<div class="team-list-item">
				<img src="/img/home/steam-1.jpg" alt="">
				<strong>Анастасия Чернуха</strong>
				<span>Начальник сервисной службы</span>
			</div>
			<div class="team-list-item">
				<img src="/img/home/steam-2.jpg" alt="">
				<strong>Алексей Загниборода</strong>
				<span>Проектировщик</span>
			</div>
			<div class="team-list-item">
				<img src="/img/home/steam-3.jpg" alt="">
				<strong>Георгий Паненко</strong>
				<span>Техник</span>
			</div>
			<div class="team-list-item">
				<img src="/img/home/steam-4.jpg" alt="">
				<strong>Дмитрий Родченков</strong>
				<span>Техник</span>
			</div>
			<div class="team-list-item">
				<img src="/img/home/steam-5.jpg" alt="">
				<strong>Александр Чеботов</strong>
				<span>Техник</span>
			</div>
			<div class="team-list-item">
				<img src="/img/home/steam-6.jpg" alt="">
				<strong>Владислав Артеменков</strong>
				<span>Техник</span>
			</div>
			<div class="team-list-item">
				<img src="/img/home/steam-7.jpg" alt="">
				<strong>Сергей Концевой</strong>
				<span>Техник</span>
			</div>
			<div class="team-list-item">
				<img src="/img/home/steam-8.jpg" alt="">
				<strong>Кирилл Орлов</strong>
				<span>Техник</span>
			</div>
		</div>

	</div>
</section>


<section class="s-geo">
	<div class="h2 s-geo__title">География поставок</div>

	<div id="geomap" class="s-geo__map"></div>

	<div class="container">

		<div class="geo-items">

			<div class="geo-item active">
				<a href="#" class="geo-item__imgwrap">
					<img src="/img/temp/geo-img.jpg" alt="1" class="geo-item__img">
					<img src="/img/geo-thumb.png" alt="1" class="geo-item__thumb">
				</a>
				<div class="geo-item__content">
					<header class="geo-item__header">
						<div class="h4 geo-item__name">Стационарные и блочно модульные котельные</div>
						<div class="geo-item__city">г. Ростов-на-Дону</div>
					</header>
					<main class="geo-item__main">
						<strong>Поставляемое оборудование:</strong>
						<div class="geo-item__param">Модульная котельная GB-1500</div>
						<div class="geo-item__param">Мощность: 2 мВТ</div>
						<div class="geo-item__param">Тип топлива: Газ</div>
					</main>
					<footer class="geo-item__footer">
						<a href="#" class="action-link">Подробнее <i class="i-right"></i></a>
						<img data-lazy="/img/temp/geo-logo.jpg" alt="1" class="geo-item__logo">
					</footer>
				</div>
			</div>
			<div class="geo-item">
				<a href="#" class="geo-item__imgwrap">
					<img data-img="/img/temp/geo-img.jpg" alt="1" class="geo-item__img">
					<img data-lazy="/img/geo-thumb.png" alt="1" class="geo-item__thumb">
				</a>
				<div class="geo-item__content">
					<header class="geo-item__header">
						<div class="h4 geo-item__name">ПАО Светлана</div>
						<div class="geo-item__city">г. Калуга</div>
					</header>
					<main class="geo-item__main">
						<strong>Поставляемое оборудование:</strong>
						<div class="geo-item__param">Модульная котельная GB-1500</div>
						<div class="geo-item__param">Мощность: 2 мВТ</div>
						<div class="geo-item__param">Тип топлива: Газ</div>
					</main>
					<footer class="geo-item__footer">
						<a href="#" class="action-link">Подробнее <i class="i-right"></i></a>
					</footer>
				</div>
			</div>
			<div class="geo-item">
				<a href="#" class="geo-item__imgwrap">
					<img data-img="/img/temp/geo-img.jpg" alt="1" class="geo-item__img">
					<img data-lazy="/img/geo-thumb.png" alt="1" class="geo-item__thumb">
				</a>
				<div class="geo-item__content">
					<header class="geo-item__header">
						<div class="h4 geo-item__name">Тестприбор</div>
						<div class="geo-item__city">г. Калуга</div>
					</header>
					<main class="geo-item__main">
						<strong>Поставляемое оборудование:</strong>
						<div class="geo-item__param">Модульная котельная GB-1500</div>
						<div class="geo-item__param">Мощность: 2 мВТ</div>
						<div class="geo-item__param">Тип топлива: Газ</div>
					</main>
					<footer class="geo-item__footer">
						<a href="#" class="action-link">Подробнее <i class="i-right"></i></a>
						<img data-lazy="/img/temp/geo-logo.jpg" alt="1" class="geo-item__logo">
					</footer>
				</div>
			</div>
			<div class="geo-item">
				<a href="#" class="geo-item__imgwrap">
					<img data-img="/img/temp/geo-img.jpg" alt="1" class="geo-item__img">
					<img data-lazy="/img/geo-thumb.png" alt="1" class="geo-item__thumb">
				</a>
				<div class="geo-item__content">
					<header class="geo-item__header">
						<div class="h4 geo-item__name">ООО "ДАНАФЛЕКС"</div>
						<div class="geo-item__city">г. Калуга</div>
					</header>
					<main class="geo-item__main">
						<strong>Поставляемое оборудование:</strong>
						<div class="geo-item__param">Модульная котельная GB-1500</div>
						<div class="geo-item__param">Мощность: 2 мВТ</div>
						<div class="geo-item__param">Тип топлива: Газ</div>
					</main>
					<footer class="geo-item__footer">
						<a href="#" class="action-link">Подробнее <i class="i-right"></i></a>
						<img data-lazy="/img/temp/geo-logo.jpg" alt="1" class="geo-item__logo">
					</footer>
				</div>
			</div>
			<div class="geo-item">
				<a href="#" class="geo-item__imgwrap">
					<img data-img="/img/temp/geo-img.jpg" alt="1" class="geo-item__img">
					<img data-lazy="/img/geo-thumb.png" alt="1" class="geo-item__thumb">
				</a>
				<div class="geo-item__content">
					<header class="geo-item__header">
						<div class="h4 geo-item__name">ООО "Транс сервис"</div>
						<div class="geo-item__city">г. Калуга</div>
					</header>
					<main class="geo-item__main">
						<strong>Поставляемое оборудование:</strong>
						<div class="geo-item__param">Модульная котельная GB-1500</div>
						<div class="geo-item__param">Мощность: 2 мВТ</div>
						<div class="geo-item__param">Тип топлива: Газ</div>
					</main>
					<footer class="geo-item__footer">
						<a href="#" class="action-link">Подробнее <i class="i-right"></i></a>
						<img data-lazy="/img/temp/geo-logo.jpg" alt="1" class="geo-item__logo">
					</footer>
				</div>
			</div>

		</div>

	</div>

	<script>
		const locations_from_admin = [
			['ПГ "ФОСФОРИТ"', 59.376454387264,28.598685457519],
			['ПАО Светлана', 59.906650639809,30.337104475789],
			['Тестприбор', 58.526258957541,31.269989624023],
			['ООО "ДАНАФЛЕКС"', 55.781161740275,49.146048090492],
			['ООО "Транс сервис"', 57.994404664634,56.294651823242],
		];
	</script>
</section>


<section class="s-logos-slider">
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/1.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/2.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/3.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/4.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/5.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/6.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/7.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/8.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/1.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/2.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/3.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/4.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/5.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/6.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/7.png" alt="1"></div>
	<div class="logos-slider__item"><img src="/img/logos/thumb.png" data-flickity-lazyload="/img/logos/8.png" alt="1"></div>
</section>


<section class="s-lp-cases s-def">
	<div class="container">
		<div class="sec-header">
			<div class="h1">Последние выполненные проекты</div>
		</div>

		<div class="cases-grid">
			<a href="/cases/npp-vodnye-tekhgologii/" class="case-preview js-item ">
				<div class="case-preview__bg" style="background-image: url(/img/temp/case-1.jpg)"></div>
				<div class="case-preview__content">
					<div class="case-preview__header">
						<time datetime="21-07-2019" class="datetime">
							<strong>21</strong>
							<span><span>Июля</span><span>2019</span></span>
						</time>
						<div class="preview-label">Котельная</div>
					</div>
					<div class="case-preview__main">
						<div class="h2 case-preview__title">ООО «Газпром»</div>
						<div class="case-preview__city">г. Москва</div>
						<div class="case-preview__product">Модульная котельная GB-1500</div>
					</div>
				</div>
			</a>
			<a href="/cases/npp-vodnye-tekhgologii/" class="case-preview js-item ">
				<div class="case-preview__bg" style="background-image: url(/img/temp/case-2.jpg)"></div>
				<div class="case-preview__content">
					<div class="case-preview__header">
						<time datetime="21-07-2019" class="datetime">
							<strong>02</strong>
							<span><span>Июля</span><span>2019</span></span>
						</time>
						<div class="preview-label">Котельная</div>
					</div>
					<div class="case-preview__main">
						<div class="h2 case-preview__title">ООО «Роснефть»</div>
						<div class="case-preview__city">г. Москва</div>
						<div class="case-preview__product">Модульная котельная GB-1500</div>
					</div>
				</div>
			</a>
			<a href="/cases/npp-vodnye-tekhgologii/" class="case-preview js-item ">
				<div class="case-preview__bg" style="background-image: url(/img/temp/case-3.jpg)"></div>
				<div class="case-preview__content">
					<div class="case-preview__header">
						<time datetime="21-07-2019" class="datetime">
							<strong>01</strong>
							<span><span>Июля</span><span>2019</span></span>
						</time>
						<div class="preview-label">Котельная</div>
					</div>
					<div class="case-preview__main">
						<div class="h2 case-preview__title">ООО «Азбука-вкуса»</div>
						<div class="case-preview__city">г. Москва</div>
						<div class="case-preview__product">Модульная котельная GB-1500</div>
					</div>
				</div>
			</a>
		</div>

	</div>
</section>

<!--
<section class="s-lp-video-reviews s-def">
	<div class="container">
		<div class="sec-header">
			<div class="h1">Видеоотзывы</div>
		</div>

		<div class="video-reviews-list">

			<a href="#" class="video-review fancy-video" data-lazybg="/img/temp/video-review-1-bg.jpg">
				<img data-lazy="/img/temp/video-review-1.png" class="video-review__photo">
				<div class="video-review__content">
					<div class="video-link">
						<i class="i-play"></i>
					</div>
					<div class="video-review__title">Отзыв</div>
					<div class="video-review__position">Технический специалист</div>
					<div class="video-review__company">Росатом</div>
				</div>
			</a>

			<a href="#" class="video-review fancy-video" data-lazybg="/img/temp/video-review-2-bg.jpg">
				<img data-lazy="/img/temp/video-review-2.png" class="video-review__photo">
				<div class="video-review__content">
					<div class="video-link">
						<i class="i-play"></i>
					</div>
					<div class="video-review__title">Отзыв</div>
					<div class="video-review__position">Технический специалист</div>
					<div class="video-review__company">Росатом</div>
				</div>
			</a>

			<a href="#" class="video-review fancy-video" data-lazybg="/img/temp/video-review-3-bg.jpg">
				<img data-lazy="/img/temp/video-review-3.png" class="video-review__photo">
				<div class="video-review__content">
					<div class="video-link">
						<i class="i-play"></i>
					</div>
					<div class="video-review__title">Отзыв</div>
					<div class="video-review__position">Технический специалист</div>
					<div class="video-review__company">Росатом</div>
				</div>
			</a>

			<a href="#" class="video-review fancy-video" data-lazybg="/img/temp/video-review-4-bg.jpg">
				<img data-lazy="/img/temp/video-review-4.png" class="video-review__photo">
				<div class="video-review__content">
					<div class="video-link">
						<i class="i-play"></i>
					</div>
					<div class="video-review__title">Отзыв</div>
					<div class="video-review__position">Технический специалист</div>
					<div class="video-review__company">Росатом</div>
				</div>
			</a>

		</div>

	</div>
</section>
-->

<section class="s-order s-def" data-lazybg="/img/order-bg.jpg">
	<div class="container">
		<div class="order-block">
			<div class="h2 order-block__title">Оставить заявку</div>
			<div class="order-block__descr">Если Вас заинтересовало наше оборудование и вы хоти получить подробную информацию</div>
			<form class="ajax-form order-block__form">
				<input type="hidden" value="Заказ звонка" name="form_subject">
				<div class="row">
					<div class="grid-4 grid-12_m">
						<input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text" >
					</div>
					<div class="grid-4 grid-12_m">
						<input type="tel" name="user_tel" placeholder="Ваш телефон*" data-label="Телефон"  class="input-text" data-req="true">
					</div>
					<div class="grid-4 grid-12_m">
						<button type="submit" class="btn">Заказать звонок</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>
