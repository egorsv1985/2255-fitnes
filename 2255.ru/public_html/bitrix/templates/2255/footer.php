<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<? if (PAGE == 'TEXT') : ?>
	</div>
	</section>
<? endif; ?>
<section class="contacts bg-primary" id="contacts">
	<div class="container">
		<h2 class="contacts__title title fs-14 fw-500">Контакты</h2>
		<div class="row">
			<div class="col-12 col-xl-6 position-relative contacts__content">
				<h3 class="contacts__subtitle subtitle fw-700 mb-3">
					Мы всегда на<br />
					связи с вами
				</h3>
				<p class="contacts__text text fs-16 fw-500 mb-5">
					Добавьте фитнес в свою жизнь!
				</p>
				<div class="row mb-4">
					<div class="col-6 ps-5">
						<div class="contacts__box contacts__box--map">
							<p class="contacts__text text fw-600 fs-14 mb-1">Адрес</p>
							<a href="https://yandex.by/profile/222162440489 " class="d-block">
								<span class="contacts__span d-block">Тушинская, 17 </span>
								<span class="contacts__span d-block">ТЦ Праздник 5 этаж</span>
							</a>

							<div class="contacts__btn fs-14 fw-600 text-white text-start d-block mt-3">
								<a href="https://yandex.by/profile/222162440489 " role="button" title="Смотреть на карте">Смотреть на карте</a>
							</div>
						</div>
					</div>
					<div class="col-6 ps-5">
						<div class="contacts__box contacts__box--metro">
							<p class="contacts__text text fw-600 fs-14 mb-1 d-none">
								Метро
							</p>
							<span class="contacts__span d-block">2 минуты от </span>
							<span class="contacts__span d-block">м. «Тушинская»</span>
						</div>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-6 ps-5">
						<div class="contacts__box contacts__box--time">
							<p class="contacts__text text fw-600 fs-14">Режим работы клуба</p>
							<span class="contacts__span d-block">Пн-Пт 6:30-24:00 </span>
							<span class="contacts__span d-block">Сб-Вс 8:30-22:00</span>
						</div>
					</div>
					<div class="col-6 ps-5">
						<div class="contacts__box contacts__box--time">
							<p class="contacts__text text fw-600 fs-14">Отдел продаж</p>
							<span class="contacts__span d-block">Ежедневно 10:00-22:00 </span>
						</div>
					</div>
				</div>
				<!-- <div class="row">
          <div class="col-2 ps-4">
            <div class="contacts__box-border box-border">
              <div
                class="contacts__box-circle box-circle d-flex justify-content-center align-items-center"
              >
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_141_478)">
                    <path
                      d="M21 16.42V19.956C21.0001 20.2092 20.9042 20.453 20.7316 20.6382C20.559 20.8234 20.3226 20.9363 20.07 20.954C19.633 20.984 19.276 21 19 21C10.163 21 3 13.837 3 5C3 4.724 3.015 4.367 3.046 3.93C3.06372 3.67744 3.17658 3.44101 3.3618 3.26841C3.54703 3.09581 3.79082 2.99989 4.044 3H7.58C7.70404 2.99987 7.8237 3.04586 7.91573 3.12902C8.00776 3.21218 8.0656 3.32658 8.078 3.45C8.101 3.68 8.122 3.863 8.142 4.002C8.34073 5.38892 8.748 6.73783 9.35 8.003C9.445 8.203 9.383 8.442 9.203 8.57L7.045 10.112C8.36445 13.1865 10.8145 15.6365 13.889 16.956L15.429 14.802C15.4919 14.714 15.5838 14.6509 15.6885 14.6237C15.7932 14.5964 15.9042 14.6068 16.002 14.653C17.267 15.2539 18.6156 15.6601 20.002 15.858C20.141 15.878 20.324 15.9 20.552 15.922C20.6752 15.9346 20.7894 15.9926 20.8724 16.0846C20.9553 16.1766 21.0012 16.2961 21.001 16.42H21Z"
                      fill="white"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_141_478">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
            </div>
          </div>
          <div class="col-10 ps-4">
            <div class="contacts__box--tel">
              <a
                href="tel:+74992830153"
                class="contacts__link d-block fs-32 fw-700"
              >
                +7 (499) 283-01-53
              </a>
              <div class="contacts__btn fs-16">
                <a
                  data-popup="#callback"
                  href="#callback"
                  role="button"
                  title="Заказать обратный звонок"
                  >Заказать обратный звонок</a
                >
              </div>
            </div>
          </div>
        </div> -->
			</div>
			<div class="col-12 col-xl-6">
				<div class="row position-relative">
					<div class=" col-6 col-lg-3 col-xl-4 d-flex justify-content-end flex-column position-relative">
						<div class="contacts__box-img contacts__box-img--left position-relative">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/iphone_13_pro.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/iphone_13_pro.png" alt="iphone 13 pro" class="contacts__img" />
							</picture>
						</div>
					</div>
					<div class=" col-6 col-lg-3 col-xl-4 d-flex justify-content-end flex-column">
						<div class="contacts__box-img contacts__box-img--right position-relative">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/iphone_13.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/iphone_13.png" alt="iphone 13 pro" class="contacts__img" />
							</picture>
						</div>
						<!-- <div class="contacts__btn fs-16">
              <a href="#" role="button" title="Вконтакте">Вконтакте</a>
            </div> -->
					</div>
					<div class="col-12 col-lg-6 col-xl-4 position-relative d-flex flex-column contacts__content">
						<div class="contacts__box-border box-border mb-3">
							<div class="contacts__box-circle box-circle d-flex justify-content-center align-items-center">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_141_376)">
										<path d="M13 13V18.585L14.828 16.757L16.243 18.172L12 22.414L7.75702 18.172L9.17202 16.757L11 18.585V13H13ZM12 2C13.717 2.00008 15.3741 2.63111 16.6562 3.77312C17.9383 4.91512 18.7561 6.48846 18.954 8.194C20.1983 8.53332 21.2837 9.2991 22.0207 10.3575C22.7576 11.416 23.0992 12.6997 22.9856 13.9844C22.8721 15.2691 22.3107 16.473 21.3996 17.3858C20.4884 18.2986 19.2855 18.8622 18.001 18.978L18 17C18.0016 15.4271 17.3855 13.9166 16.2844 12.7935C15.1832 11.6703 13.6851 11.0245 12.1125 10.995C10.54 10.9655 9.01868 11.5547 7.8762 12.6357C6.73372 13.7168 6.06142 15.2032 6.00402 16.775L6.00002 17V18.978C4.71547 18.8623 3.51242 18.2989 2.60115 17.3862C1.68988 16.4735 1.12834 15.2696 1.01469 13.9848C0.901037 12.7001 1.2425 11.4163 1.97939 10.3578C2.71627 9.29926 3.80172 8.53339 5.04602 8.194C5.24372 6.48838 6.06142 4.91491 7.3436 3.77287C8.62577 2.63082 10.283 1.99986 12 2Z" fill="white" />
									</g>
									<defs>
										<clipPath id="clip0_141_376">
											<rect width="24" height="24" fill="white" />
										</clipPath>
									</defs>
								</svg>
							</div>
						</div>

						<span class="contacts__span fs-16 d-block">Мобильное </span>
						<span class="contacts__span fs-16 fw-700 d-block text-uppercase mb-1">приложение</span>
						<p class="contacts__text text mb-4">Установи прямо сейчас!</p>
						<div class="d-flex flex-column gap-3">
							<a href="https://play.google.com/store/apps/details?id=io.fitbase.twotwofivefivefitness&hl=ru " role="button" class="btn btn-light text-primary text-uppercase fw-600 fs-14 py-3" style="max-width: 200px">Google play</a>
							<a href="https://apps.apple.com/ru/app/2255-fitness/id6446172741?l=en" role="button" class="btn btn-light text-primary text-uppercase fw-600 fs-14 py-3" style="max-width: 200px">app store</a>
						</div>
						<!-- <div class="contacts__btn fs-16 mt-auto">
              <a href="#" role="button" title="WhatsApp">WhatsApp</a>
            </div> -->
					</div>
					<div class="contacts__box-border box-border box-border--big">
						<div class="contacts__box-circle box-circle box-circle--big"></div>
					</div>
					<div class="contacts__box-border box-border box-border--center">
						<div class="contacts__box-circle box-circle box-circle--center"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row position-relative contacts__bottom mt-5 mt-lg-0">
			<div class=" col-12 col-sm-8 d-flex mb-4 mb-sm-0">
				<div class="contacts__box-border box-border d-none d-sm-flex">
					<div class="contacts__box-circle box-circle d-flex justify-content-center align-items-center">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_141_478)">
								<path d="M21 16.42V19.956C21.0001 20.2092 20.9042 20.453 20.7316 20.6382C20.559 20.8234 20.3226 20.9363 20.07 20.954C19.633 20.984 19.276 21 19 21C10.163 21 3 13.837 3 5C3 4.724 3.015 4.367 3.046 3.93C3.06372 3.67744 3.17658 3.44101 3.3618 3.26841C3.54703 3.09581 3.79082 2.99989 4.044 3H7.58C7.70404 2.99987 7.8237 3.04586 7.91573 3.12902C8.00776 3.21218 8.0656 3.32658 8.078 3.45C8.101 3.68 8.122 3.863 8.142 4.002C8.34073 5.38892 8.748 6.73783 9.35 8.003C9.445 8.203 9.383 8.442 9.203 8.57L7.045 10.112C8.36445 13.1865 10.8145 15.6365 13.889 16.956L15.429 14.802C15.4919 14.714 15.5838 14.6509 15.6885 14.6237C15.7932 14.5964 15.9042 14.6068 16.002 14.653C17.267 15.2539 18.6156 15.6601 20.002 15.858C20.141 15.878 20.324 15.9 20.552 15.922C20.6752 15.9346 20.7894 15.9926 20.8724 16.0846C20.9553 16.1766 21.0012 16.2961 21.001 16.42H21Z" fill="white" />
							</g>
							<defs>
								<clipPath id="clip0_141_478">
									<rect width="24" height="24" fill="white" />
								</clipPath>
							</defs>
						</svg>
					</div>
				</div>
				<div class="contacts__box--tel ms-1 ms-sm-5">
					<a href="tel:+74992830153" class="contacts__link d-block fs-32 fw-700">
						+7 (499) 283-01-53
					</a>
					<div class="contacts__btn fs-16">
						<a data-popup="#callback" href="#callback" role="button" title="Заказать обратный звонок">Заказать обратный звонок</a>
					</div>
				</div>
			</div>
			<div class="col-6 col-sm-2 d-flex align-items-end">
				<div class="contacts__btn fs-16">
					<a href="https://vk.com/club220348627 " role="button" title="Вконтакте" target="_blank">Вконтакте</a>
				</div>
			</div>
			<div class="col-6 col-sm-2 d-flex align-items-end">
				<div class="contacts__btn fs-16">
					<a href="https://wa.me/+79030006089" role="button" title="WhatsApp" target="_blank">WhatsApp</a>
				</div>
			</div>
		</div>
	</div>
</section>




</main>
<footer class="footer py-5">
	<div class="container">
		<div class="row g-3 g-md-0">
			<div class="col-12 col-sm-4 col-lg-6 ">
				<a href="index.html" class="footer__logo logo d-block">
					<img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/logo-footer.svg" alt="logo" class="mw-100 logo__img" />
				</a>
				<small class="footer__text text fs-12 text-success d-block mt-2 mb-3">&#169 2022 ИП Овсянко<br> ИНН 502007880841</small>
				<ul class="footer__social-list d-flex align-items-center justify-content-start gap-3 ps-0 mb-5">
					<li class="footer__social-item rounded-circle d-none justify-content-center align-items-center">
						<a href="https://instagram.com/fitness_2255?igshid=NTc4MTIwNjQ2YQ==" class="footer__social-link social-ico-ig" target="_blank"></a>
					</li>
					<li class="footer__social-item rounded-circle d-flex justify-content-center align-items-center">
						<a href="https://vk.com/club220348627 " class="footer__social-link social-ico-vk" target="_blank"></a>
					</li>
					<li class="footer__social-item rounded-circle d-flex justify-content-center align-items-center">
						<a href="https://dzen.ru/id/64814548d7291f01e915c18b" class="footer__social-link social-ico-dzen" target="_blank"></a>
					</li>
					<li class="footer__social-item rounded-circle d-flex justify-content-center align-items-center">
						<a href="https://pin.it/26DGIqe " class="footer__social-link social-ico-pr" target="_blank"></a>
					</li>
					<li class="footer__social-item rounded-circle d-flex justify-content-center align-items-center">
						<a href="https://ok.ru/group/70000002740738 " class="footer__social-link social-ico-ok" target="_blank"></a>
					</li>
					<li class="footer__social-item rounded-circle d-flex justify-content-center align-items-center">
						<a href="https://tenchat.ru/2167581" class="footer__social-link social-ico-tenchat" target="_blank"></a>
					</li>
				</ul>
				<a class="footer__text text text-success fs-14 d-block" href="#">Правила клуба</a>
				<a class="footer__text text text-success fs-14 d-block" href="#">Публичный договор</a>
				<a class="footer__text text text-success fs-14 d-block" href="https://target-kc.ru/">Разработка сайта: ТКК</a>

			</div>

			<div class="col-6 col-sm-4 col-lg-3">
				<h3 class="footer__subtitle subtitle fs-14 fw-400 mb-4">Контакты</h3>

				<a href="https://yandex.by/profile/222162440489 " class="footer__box d-block footer__box--map fs-14 fw-400 mb-4">
					<span class="footer__span d-block text-success">Тушинская, 17 </span>
					<span class="footer__span d-block text-success">ТЦ Праздник 5 этаж</span>
				</a>

				<div class="footer__box footer__box--time fs-14 fw-400 mb-4">
					<span class="footer__span d-block">Пн-Пт 6:30-24:00 </span>
					<span class="footer__span d-block">Сб-Вс 8:30-22:00</span>
				</div>


				<div class="footer__box footer__box--tel fs-14 fw-400 mb-4">
					<a href="tel:+74992830153" class="footer__link d-block">
						<span class="footer__span">+7 (499) 283-01-53 </span>
					</a>
					<a href="tel:+74992834431" class="footer__link d-block">
						<span class="footer__span">+7 (499) 283-44-31 </span>
					</a>
				</div>


			</div>
			<div class="col-6 col-sm-4 col-lg-3">
				<h3 class="footer__subtitle subtitle fs-14 fw-400 mb-4">Меню</h3>

				<ul class="footer__list d-flex flex-column ps-0">
					<li class="footer__item">
						<a href="/o-klube/" class="footer__link d-block text-success fs-14">О клубе</a>
					</li>
					<li class="footer__item">
						<a href="/uslugi/" class="footer__link d-block text-success fs-14">Услуги</a>
					</li>
					<li class="footer__item">
						<a href="/raspisanie/" class="footer__link d-block text-success fs-14">Расписание</a>
					</li>
					<li class="footer__item">
						<a href="/karty/" class="footer__link d-block text-success fs-14">Клубные карты</a>
					</li>
					<li class="footer__item">
						<a href="/komanda/" class="footer__link d-block text-success fs-14">Наша команда</a>
					</li>
					
					<li class="footer__item">
						<a href="/kontakty/" class="footer__link d-block text-success fs-14">Контакты</a>
					</li>

				</ul>

			</div>
		</div>
	</div>
</footer>
</div>
<div id="callback" aria-hidden="true" class="popup">
	<div class="popup__wrapper">
		<div class="popup__content">
			<button data-close type="button" class="popup__close">
				<svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M22.4999 24.6545L32.7543 34.9117L34.7455 32.9232L24.4883 22.666L34.7455 12.4117L32.7571 10.4204L22.4999 20.6776L12.2455 10.4204L10.2571 12.4117L20.5115 22.666L10.2571 32.9204L12.2455 34.9117L22.4999 24.6545Z" fill="white" />
				</svg>
			</button>



			<form action="#" class="popup__form form">
				<div class="form__body d-flex flex-column">
					<div class="form__box position-relative mb-3">
						<input type="text" id="name" name="form[]" data-error="Ошибка" placeholder="" class="form__input w-100 p-3" required />
						<label for="name" class="form__label position-absolute fs-14">Ваше имя</label>
					</div>
					<div class="form__box position-relative mb-3">
						<input type="tel" id="tel" name="form[]" data-error="Ошибка" placeholder="" class="form__input w-100 p-3" required />
						<label for="tel" class="form__label position-absolute fs-14">Телефон</label>
					</div>
					<div class="form__box checkbox position-relative mb-3 form-check form-check-inline ">
						<input type="checkbox" class="form-check-input checkbox__input m-0" value="" name="check" id="check" checked />

						<label class="form-check-label checkbox__label fs-14 d-block ps-5" for="check">
							Нажимая на кнопку, Вы даете согласие на обработку персональных
							данных
						</label>
					</div>
					<button type="submit" class="form__btn btn btn fs-16 fw-600 px-2 py-3 btn-primary btn-sm text-uppercase">
						Отправить
					</button>
				</div>

			</form>
		</div>
	</div>
</div>
<?if (!isset($_COOKIE['cookie']) || $_COOKIE['cookie'] != 'Y'):?>
<a data-popup="#cookie" href="#header" role="button" id="cookieopen" title="Уведомление"></a>
<div id="cookie" aria-hidden="true" class="cookie-popup">
	<div class="popup__wrapper">
		<div class="popup__content">
			<button data-close type="button" class="popup__close">
				<svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M22.4999 24.6545L32.7543 34.9117L34.7455 32.9232L24.4883 22.666L34.7455 12.4117L32.7571 10.4204L22.4999 20.6776L12.2455 10.4204L10.2571 12.4117L20.5115 22.666L10.2571 32.9204L12.2455 34.9117L22.4999 24.6545Z" fill="white" />
				</svg>
			</button>

			<div class="pb-2">Наш сайт использует cookies. продолжая им пользоваться, вы соглашаетесь на обработку персональных данных в соответствии с нашей <a href="#">политикой конфиденциальности</a>.</div>
			<div class="text-center">
				<a class="col-3 btn fs-14 fw-600 p-1 btn-primary btn-sm me-auto my-1 position-relative" href="#" data-close  onclick="javascript: document.cookie = 'cookie=Y';">
					Принять
				</a>
			</div>

		</div>
	</div>
</div>
<script>
	//document.getElementById('cookieopen').click();

	function sayHi() {
		document.getElementById('cookieopen').click();
	}

	setTimeout(function() {
		document.getElementById('cookieopen').click();
	}, 1000);
</script>
<?endif;?>

</body>

</html>