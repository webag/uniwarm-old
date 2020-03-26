<footer class="s-footer">
	<div class="container">
		<div class="footer">
			<div class="footer__left">
				<a href="/" class="footer__logo"><img src="/img/logo.svg" alt="logo"></a>
				<div class="footer__descr">Инжиниринговая компания полного цикла</div>
			</div>
			<div class="footer__center">
				<nav class="footer__nav">
					<a href="#">Наши услуги</a>
					<a href="#">Наша продукция</a>
					<a href="#">Проекты</a>
					<a href="#">О компании</a>
					<a href="#">Контакты</a>
				</nav>
			</div>
			<div class="footer__right">
				<a href="tel:88633332772" class="footer__phone">8 (863) 333-27-72</a>
				<a href="mailto:info@uniwarm.ru" class="footer__email">info@uniwarm.ru</a>
				<address class="footer__address">Ростов-на-Дону, пр.&nbsp;40-летия&nbsp;Победы, д.&nbsp;13/7</address>
			</div>
		</div>

		<div class="copyright">
			&copy; <?=date('Y')?> Все права защищены
		</div>
	</div>
</footer>


<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-call" class="modal">
		<p class="h2 modal__title">Обратный звонок</p>
		<p class="modal__descr">Оставьте заявку на&nbsp;обратный звонок и&nbsp;мы перезвоним Вам в&nbsp;течение 5&nbsp;минут</p>
		<form class="ajax-form vertical-form">
			<input type="hidden" value="Заказ обратного звонка" name="form_subject">
			<input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text" >
			<input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон"  class="input-text" data-req="true">
			<button type="submit" class="btn">Заказать звонок</button>
			<div class="form-note">Нажимая кнопку, принимаю <a href="#">условия политики</a> и&nbsp;<a href="#">пользовательского соглашения</a></div>
		</form>
	</div>

	<div id="modal-order" class="modal">
		<p class="h2 modal__title">Заказать проект</p>
		<p class="modal__descr">Оставьте заявку на&nbsp;просчет проекта и&nbsp;мы свяжемся с&nbsp;Вами для&nbsp;уточнения деталей</p>
		<form class="ajax-form vertical-form">
			<input type="hidden" value="Новая заявка" name="form_subject">
			<input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text" >
			<input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон"  class="input-text" data-req="true">
			<input type="email" name="user_email" placeholder="E-mail" data-label="Email" class="input-text">
			<button type="submit" class="btn">Заказать просчет</button>
			<label class="style-file">
				<input type="file" name="user_photo" data-multiple-caption="{count} файла(ов)" multiple>
				<i></i>
				<span class="style-file__text">Прикрепить файл</span>
				<span class="style-file__delete" title="Очистить">&#10006;</span>
			</label>
			<div class="form-note">Нажимая кнопку, принимаю <a href="#">условия политики</a> и&nbsp;<a href="#">пользовательского соглашения</a></div>
		</form>
	</div>

	<div id="modal-thanks" class="modal modal--thanks">
		<p class="h2 modal__title">Спасибо за&nbsp;обращение в&nbsp;нашу компанию</p>
		<p class="modal__descr">Мы уже&nbsp;начали работу по&nbsp;вашей заявке</p>
	</div>

	<div id="modal-error" class="modal">
		<p>Что-то пошло не так.</p>
		<p>Попробуйте еще раз.</p>
		<p>Если постоянно видите эту ошибку, пожалуйста, обратитесь к администратору сайта. Мы будем очень благодарны.</p>
	</div>

</div>
<!-- Модальные окна -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/assets.js?v=<?=rand(0,99999)?>" type="text/javascript" ></script>
<script src="js/main.js?v=<?=rand(0,99999)?>" type="text/javascript" ></script>


<!-- calltouch -->
<script type = "text/javascript">
	(function(w, d, n, c) {
		w.CalltouchDataObject = n;
		w[n] = function() {
			w[n]["callbacks"].push(arguments)
		};
		if (!w[n]["callbacks"]) {
			w[n]["callbacks"] = []
		}
		w[n]["loaded"] = false;
		if (typeof c !== "object") {
			c = [c]
		}
		w[n]["counters"] = c;
		for (var i = 0; i < c.length; i += 1) {
			p(c[i])
		}

		function p(cId) {
			var a = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				i = function() {
					a.parentNode.insertBefore(s, a)
				};
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mod.calltouch.ru/init.js?id=" + cId;
			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", i, false)
			} else {
				i()
			}
		}
	})(window, document, "ct", "y4odpyb5");
</script>
<!--calltouch -->


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	ym(44822359, "init", {
		clickmap:true,
		trackLinks:true,
		accurateTrackBounce:true
	});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44822359" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	</body>
</html>
