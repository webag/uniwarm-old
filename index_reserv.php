<?php include('header.php'); ?>

<section class="s-home-intro">
	<div class="home-intro__bg"></div>
	<div class="home-intro__videowrap">
		<video autoplay loop muted class="home-intro__video">
			<source src="" type="video/mp4" class="source_mp4" data-videosrc="/img/home/bg.mp4">
		</video>
	</div>
	<div class="container home-intro__content">
		<h1 class="home-intro__title">Производим и&nbsp;поставляем модульные котельные от&nbsp;0.2&nbsp;мВт до&nbsp;50&nbsp;мВт</h1>
		<div class="home-intro__descr">Гарантия выполнения проекта четко в&nbsp;поставленный срок.<br>Гарантия на&nbsp;котельную 24&nbsp;месяца</div>
		<button class="btn fancy-modal" data-src="#modal-order">Заказать проект</button>
	</div>
	<a href="#s-home-services" class="home-intro__scroll scrollto"></a>
</section>

<script>
	const aboutHeaderCheck = function() {
		const videos = document.querySelectorAll(".home-intro__video");
		for (let i = 0; i < videos.length; i++) {
			const thisVideoSource = videos[i].querySelector(".source_mp4");
			const mp4Src = thisVideoSource.dataset.videosrc;
			if (window.matchMedia("(max-width: 1025px)").matches) {
				if (document.body.contains(videos[i])) {
					videos[i].parentNode.removeChild(videos[i]);
				}
			} else {
				if (document.body.contains(videos[i]) && thisVideoSource.getAttribute('src') === ""){
					thisVideoSource.setAttribute('src',mp4Src);
					videos[i].load();
					videos[i].play();
				}
			}
		}
	};
	aboutHeaderCheck();
	window.addEventListener('resize',aboutHeaderCheck);
</script>


<section class="s-def s-home-services" id="s-home-services">
	<div class="container">
		<div class="sec-header">
			<div class="h2">Наши услуги</div>
		</div>

		<div class="services-preview-list">
			<a href="/kotel.php" class="service-preview">
				<img src="/img/home/service-1.jpg" alt="">
				<span>Стационарные и&nbsp;блочно модульные котельные</span>
			</a>
			<a href="#" class="service-preview">
				<img src="/img/home/service-2.jpg" alt="">
				<span>Проектирование инженерных коммуникаций</span>
			</a>
			<a href="#" class="service-preview">
				<img src="/img/home/service-1.jpg" alt="">
				<span>Системы отопления и водоснабжения</span>
			</a>
			<a href="#" class="service-preview">
				<img src="/img/home/service-2.jpg" alt="">
				<span>Системы вентиляции и кондиционирования</span>
			</a>
		</div>
	</div>
</section>


<section class="s-home-about" data-lazybg="/img/home/about-bg.jpg">
	<div class="container">
		<div class="row">
			<div class="grid-7 grid-12_m">
				<div class="home-about__left">
					<div class="h1 home-about__title">О компании</div>
					<div class="home-about__text">Компания Юниварм - это инжиниринговая компания полного цикла, которая осуществляет полный комплекс инжиниринговых работ любой сложности на коммерческих и промышленных объектах. Основные принципы нашей компании - это предоставить качественное выполненные работы чекто в указанный срок. За 11 летнее существования нашей компании, мы еше не разу не просрочили сроки по сдачи проекта заказчику, держа при этом качество выполненных работ на высшем уровне.</div>
					<div class="row home-about__bottom">
						<div class="grid-6 grid-4_s grid-12_xs">
							<div class="home-about__counter">
								<strong>>100</strong>
								<span>проектов</span>
							</div>
						</div>
						<div class="grid-6 grid-8_s grid-12_xs">
							<div class="home-about__links">
								<a href="#" class="home-about__link"><i class="i-pdf"></i> <span>Презентация о компании</span></a>
								<a href="#" class="home-about__link"><i class="i-pdf"></i> <span>Референс - лист</span></a>
								<a href="#" class="home-about__link"><i class="i-pdf"></i> <span>Реквизиты компании</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-5 grid-12_m">
				<div class="home-about__right">
					<a href="https://www.youtube.com/watch?v=dnC_dxKc6bk" class="home-about__video fancy-video">
						<span class="video-link"><i class="i-play"></i></span>
						<strong>Видео о<br>компании</strong>
					</a>
				</div>
			</div>
		</div>

	</div>
</section>


<section class="s-def s-home-team">
	<div class="container">
		<div class="sec-header">
			<div class="h1">Наша команда</div>
			<div>Команда настоящих профессионалов</div>
		</div>

		<div class="team-list">
			<div class="team-list-item">
				<img src="/img/home/team-1.jpg" alt="">
				<strong>Алексей Нестратов</strong>
				<span>Коммерческий директор</span>
			</div>
			<div class="team-list-item">
				<img src="/img/home/team-2.jpg" alt="">
				<strong>Дмитрий Шевцов</strong>
				<span>Директор</span>
			</div>
			<div class="team-list-item">
				<img src="/img/home/team-3.jpg" alt="">
				<strong>Олег Котельников</strong>
				<span>Технический директор</span>
			</div>
			<div class="team-list-item">
				<img src="/img/home/team-4.jpg" alt="">
				<strong>Надежда Нестратова</strong>
				<span>Начальник отдела продаж</span>
			</div>
		</div>
	</div>
</section>


<section class="s-def s-home-service-team">
	<div class="container">
		<div class="sec-header">
			<div class="h2">Сервисная служба Uniwarm</div>
			<div>Эксплуатация и&nbsp;сервис тепловых систем</div>
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


<section class="s-def s-home-news">
	<div class="container">
		<div class="sec-header">
			<div class="h1">Новости компании</div>
		</div>

		<div class="home-news">

			<div class="row-ng home-news-item">
				<a href="#" class="grid-4 grid-12_s home-news-item__bgwrap">
					<span class="home-news-item__bg" data-lazybg="/img/temp/news-1.jpg"></span>
				</a>
				<div class="grid-8 grid-12_s home-news-item__content">
					<div class="label home-news-item__label">Свежие проекты</div>
					<div class="h3 home-news-item__title"><a href="#">Производим и поставляем модульные котельные от 0.2 мВт до 50 мВт</a></div>
					<div class="home-news-item__descr">Что такое Электролиз воды и как его используют для получения водорода. Выполняем реконструкцию действующей котельной с подготовкой всей необходимой документацией  как его используют для получения водорода. Выполняем реконструкцию.</div>
					<time datetime="20-08-2019" class="home-news-item__date">20 июля 2019</time>
				</div>
			</div>

			<div class="row-ng home-news-item">
				<div class="grid-4 grid-12_s home-news-item__content home-news-item__content--left">
					<div class="label home-news-item__label">Свежие проекты</div>
					<div class="h4 home-news-item__title"><a href="#">Мы реализуем Котельные Uniwarm</a></div>
					<div class="home-news-item__descr">Мы осуществляем полный цикл работ начиная от получения технических условий заканчивая сдачей котельной в  как его используют для получения водорода.</div>
					<time datetime="20-08-2019" class="home-news-item__date">20 июля 2019</time>
				</div>
				<a href="#" class="grid-4 grid-12_s home-news-item__bgwrap">
					<span class="home-news-item__bg" data-lazybg="/img/temp/news-2.jpg"></span>
				</a>
				<a href="https://www.youtube.com/watch?v=dnC_dxKc6bk" class="grid-4 grid-12_s home-news-video fancy-video" data-lazybg="/img/temp/news-4.jpg">
					<div class="label label--orange home-news-video__label">Свежие проекты</div>
					<span class="video-link"><i class="i-play"></i></span>
					<div class="home-news-video__text">Новый проект</div>
				</a>
			</div>

			<div class="row-ng home-news-item">
				<a href="#" class="grid-4 grid-12_s home-news-item__bgwrap">
					<span class="home-news-item__bg" data-lazybg="/img/temp/news-3.jpg"></span>
				</a>
				<div class="grid-8 grid-12_s home-news-item__content">
					<div class="label home-news-item__label">Свежие проекты</div>
					<div class="h3 home-news-item__title"><a href="#">Производим и поставляем модульные котельные от 0.2 мВт до 50 мВт</a></div>
					<div class="home-news-item__descr">Что такое Электролиз воды и как его используют для получения водорода. Выполняем реконструкцию действующей котельной с подготовкой всей необходимой документацией  как его используют для получения водорода. Выполняем реконструкцию.</div>
					<time datetime="20-08-2019" class="home-news-item__date">20 июля 2019</time>
				</div>
			</div>

		</div>

	</div>
</section>


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
