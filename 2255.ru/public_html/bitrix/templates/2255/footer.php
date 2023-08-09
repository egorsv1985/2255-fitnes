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
							<p class="contacts__text text fw-600 fs-14 mb-1 opacity-0">
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
					<li class="footer__social-item rounded-circle d-flex justify-content-center align-items-center">
						<a href="https://instagram.com/fitness_2255?igshid=NTc4MTIwNjQ2YQ== " class="footer__social-link" target="_blank">
							<svg width="15" height="15" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.73638 5.4999C7.73638 6.73498 6.73519 7.73616 5.50012 7.73616C4.26504 7.73616 3.26385 6.73498 3.26385 5.4999C3.26385 4.26482 4.26504 3.26364 5.50012 3.26364C6.73519 3.26364 7.73638 4.26482 7.73638 5.4999Z" fill="white" />
								<path d="M10.7299 1.54331C10.6224 1.25201 10.4509 0.988347 10.2281 0.771924C10.0117 0.549082 9.74817 0.377583 9.45669 0.270084C9.2203 0.178273 8.86518 0.0689918 8.21109 0.0392201C7.50353 0.00695267 7.29138 0 5.50009 0C3.70862 0 3.49648 0.0067744 2.78909 0.0390419C2.135 0.0689918 1.7797 0.178273 1.54349 0.270084C1.25201 0.377583 0.988347 0.549082 0.772102 0.771924C0.54926 0.988347 0.377761 1.25184 0.270084 1.54331C0.178273 1.7797 0.0689918 2.135 0.0392201 2.78909C0.00695267 3.49648 0 3.70862 0 5.50009C0 7.29138 0.00695267 7.50353 0.0392201 8.21109C0.0689918 8.86518 0.178273 9.2203 0.270084 9.45669C0.377761 9.74817 0.549082 10.0117 0.771924 10.2281C0.988347 10.4509 1.25184 10.6224 1.54331 10.7299C1.7797 10.8219 2.135 10.9312 2.78909 10.961C3.49648 10.9932 3.70844 11 5.49991 11C7.29156 11 7.5037 10.9932 8.21091 10.961C8.865 10.9312 9.2203 10.8219 9.45669 10.7299C10.0418 10.5042 10.5042 10.0418 10.7299 9.45669C10.8217 9.2203 10.931 8.86518 10.961 8.21109C10.9932 7.50353 11 7.29138 11 5.50009C11 3.70862 10.9932 3.49648 10.961 2.78909C10.9312 2.135 10.8219 1.7797 10.7299 1.54331ZM5.50009 8.94487C3.59738 8.94487 2.05496 7.40262 2.05496 5.49991C2.05496 3.5972 3.59738 2.05496 5.50009 2.05496C7.40262 2.05496 8.94504 3.5972 8.94504 5.49991C8.94504 7.40262 7.40262 8.94487 5.50009 8.94487ZM9.08124 2.72384C8.63663 2.72384 8.27616 2.36337 8.27616 1.91876C8.27616 1.47414 8.63663 1.11367 9.08124 1.11367C9.52586 1.11367 9.88633 1.47414 9.88633 1.91876C9.88615 2.36337 9.52586 2.72384 9.08124 2.72384Z" fill="white" />
							</svg>

						</a>
					</li>
					<li class="footer__social-item rounded-circle d-flex justify-content-center align-items-center">
						<a href="https://vk.com/club220348627 " class="footer__social-link" target="_blank">

							<svg width="15" height="15" viewBox="0 0 1000 1000" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 1000 1000">
								<path d="M500 1000C223.9 1000 0 776.1 0 500S223.9 0 500 0s500 223.9 500 500-223.9 500-500 500z" fill="#ffffff" class="fill-000000"></path>
								<path d="M819 344.5c4.6-15.5 0-26.8-22.1-26.8H724c-18.5 0-27.1 9.8-31.7 20.6 0 0-37.1 90.4-89.6 149.1-17 17-24.7 22.4-34 22.4-4.6 0-11.3-5.4-11.3-20.9V344.5c0-18.5-5.4-26.8-20.8-26.8H422c-11.6 0-18.6 8.6-18.6 16.8 0 17.6 26.3 21.6 29 71.1V513c0 23.5-4.3 27.8-13.5 27.8-24.7 0-84.8-90.8-120.5-194.7-7-20.2-14-28.3-32.6-28.3h-72.9c-20.8 0-25 9.8-25 20.6 0 19.3 24.7 115.1 115.1 241.8 60.3 86.5 145.1 133.4 222.4 133.4 46.3 0 52.1-10.4 52.1-28.4v-65.4c0-20.8 4.4-25 19.1-25 10.8 0 29.4 5.4 72.6 47.1 49.4 49.4 57.6 71.6 85.4 71.6h72.9c20.8 0 31.2-10.4 25.2-31-6.6-20.5-30.2-50.2-61.5-85.5-17-20.1-42.5-41.7-50.2-52.5-10.8-13.9-7.7-20.1 0-32.4-.1 0 88.7-125.1 98-167.6z" fill="#000000" class="fill-ffffff"></path>
							</svg>
						</a>
					</li>
					<li class="footer__social-item rounded-circle d-flex justify-content-center align-items-center">
						<a href="https://dzen.ru/id/64814548d7291f01e915c18b  " class="footer__social-link" target="_blank">

							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="15" height="15" fill-rule="nonzero">
								<g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
									<path d="M0,256v-256h256v256z" id="bgRectangle"></path>
								</g>
								<g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
									<g transform="scale(5.12,5.12)">
										<path d="M27.00977,2.0957c-0.26555,0.0026 -0.51917,0.11072 -0.70493,0.3005c-0.18576,0.18979 -0.2884,0.44567 -0.28531,0.71121c0.08696,7.35516 0.51678,12.53447 3.52734,16.00195c3.01056,3.46748 8.28549,4.77793 17.3457,4.87695c0.28289,0.00332 0.55395,-0.11332 0.74603,-0.32103c0.19208,-0.20771 0.28719,-0.48705 0.26179,-0.76882c-1.00026,-11.01646 -9.7746,-19.79348 -20.79102,-20.79687c-0.03312,-0.00296 -0.06636,-0.00426 -0.09961,-0.00391zM22.90039,2.10156c-0.02543,0.00033 -0.05084,0.00164 -0.07617,0.00391c-10.98535,1.03268 -19.72748,9.79641 -20.72461,20.79102c-0.02541,0.28176 0.06971,0.56111 0.26179,0.76882c0.19208,0.20771 0.46314,0.32435 0.74602,0.32103c9.03355,-0.10408 14.29466,-1.41714 17.29492,-4.88477c3.00026,-3.46762 3.42621,-8.64234 3.51367,-15.98828c0.00317,-0.26996 -0.10294,-0.52974 -0.29422,-0.72028c-0.19127,-0.19054 -0.45146,-0.29565 -0.72141,-0.29144zM28.10742,4.30664c9.10373,1.36093 16.24533,8.50946 17.5918,17.61719c-7.99974,-0.21227 -12.36132,-1.49751 -14.64258,-4.125c-2.24289,-2.5833 -2.80505,-7.03288 -2.94922,-13.49219zM21.83008,4.31445c-0.14442,6.44983 -0.70682,10.89584 -2.94141,13.47852c-2.27267,2.62669 -6.61703,3.91169 -14.58789,4.12891c1.34397,-9.08589 8.45595,-16.22348 17.5293,-17.60742zM3.10742,26.01367c-0.28289,-0.00332 -0.55395,0.11332 -0.74602,0.32103c-0.19208,0.20771 -0.28719,0.48705 -0.26179,0.76882c0.99816,10.99544 9.73919,19.75937 20.72461,20.79102c0.28208,0.02599 0.56196,-0.06886 0.77012,-0.261c0.20816,-0.19214 0.32506,-0.46355 0.32168,-0.74681c-0.08746,-7.34594 -0.51342,-12.52053 -3.51367,-15.98828c-3.00026,-3.46776 -8.26135,-4.78119 -17.29492,-4.88477zM46.89258,26.01367c-9.06021,0.09902 -14.33528,1.40947 -17.3457,4.87695c-3.01042,3.46748 -3.43988,8.64683 -3.52734,16.00195c-0.00332,0.28289 0.11332,0.55395 0.32103,0.74603c0.20771,0.19208 0.48705,0.28719 0.76882,0.26179c11.01545,-1.0034 19.78972,-9.77852 20.79102,-20.79492c0.02599,-0.28209 -0.06886,-0.56196 -0.261,-0.77012c-0.19214,-0.20816 -0.46355,-0.32506 -0.74681,-0.32168zM45.69922,28.07617c-1.34729,9.10779 -8.48894,16.25626 -17.5918,17.61719c0.14457,-6.45934 0.70643,-10.90889 2.94922,-13.49219c2.28115,-2.62749 6.64286,-3.91273 14.64258,-4.125zM4.30078,28.07813c7.97084,0.21679 12.31522,1.50211 14.58789,4.12891c2.23459,2.58278 2.79698,7.02866 2.94141,13.47852c-9.07326,-1.38318 -16.18461,-8.5205 -17.5293,-17.60742z"></path>
									</g>
								</g>
							</svg>
						</a>
					</li>
					<li class="footer__social-item rounded-circle d-flex justify-content-center align-items-center">
						<a href="https://pin.it/26DGIqe " class="footer__social-link" target="_blank">

							<svg width="15" height="15" enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="Flat_copy">
									<g>
										<g>
											<path d="M15.995,31.625C7.38,31.625,0.37,24.615,0.37,16S7.38,0.375,15.995,0.375S31.62,7.385,31.62,16     S24.61,31.625,15.995,31.625z" fill="#FFFFFF" />
											<path d="M15.995,0.75c8.409,0,15.25,6.841,15.25,15.25s-6.841,15.25-15.25,15.25S0.745,24.409,0.745,16     S7.586,0.75,15.995,0.75 M15.995,0c-8.837,0-16,7.163-16,16c0,8.836,7.163,16,16,16s16-7.164,16-16     C31.995,7.163,24.831,0,15.995,0L15.995,0z" fill="#E5E5E5" />
										</g>
									</g>
									<path d="M24.002,12.466c0,4.658-2.59,8.139-6.407,8.139c-1.283,0-2.488-0.693-2.901-1.481   c0,0-0.69,2.736-0.835,3.264c-0.514,1.866-2.027,3.733-2.144,3.886c-0.082,0.106-0.263,0.073-0.282-0.068   c-0.033-0.238-0.418-2.592,0.036-4.513c0.228-0.964,1.527-6.471,1.527-6.471s-0.379-0.758-0.379-1.879   c0-1.76,1.02-3.074,2.29-3.074c1.08,0,1.601,0.81,1.601,1.782c0,1.086-0.691,2.71-1.048,4.214c-0.298,1.26,0.632,2.288,1.874,2.288   c2.25,0,3.765-2.89,3.765-6.314c0-2.602-1.752-4.551-4.941-4.551c-3.601,0-5.846,2.686-5.846,5.687   c0,1.035,0.306,1.765,0.784,2.329c0.219,0.26,0.25,0.364,0.17,0.662c-0.058,0.219-0.187,0.744-0.243,0.953   c-0.079,0.301-0.323,0.408-0.594,0.297c-1.659-0.677-2.432-2.495-2.432-4.537c0-3.373,2.845-7.418,8.487-7.418   C21.019,5.663,24.002,8.943,24.002,12.466z" fill="#333333" />
								</g>
							</svg>
						</a>
					</li>
					<li class="footer__social-item rounded-circle d-flex justify-content-center align-items-center">
						<a href="https://ok.ru/group/70000002740738 " class="footer__social-link" target="_blank">

						<svg width="15" height="15" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64"><g id="Layer_11"><path d="M32 2c-7.4 0-13.5 6-13.5 13.5 0 7.4 6 13.5 13.5 13.5s13.5-6 13.5-13.5S39.4 2 32 2zm0 18c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5 4.5 2 4.5 4.5-2 4.5-4.5 4.5zM48.6 38.1c-3.4 1.9-7.1 3.2-10.8 3.8l10.5 12.9c1.2 1.5 1.5 3.6.4 5.2-1.7 2.6-5.3 2.7-7.1.4l-9.7-11.9-9.6 11.9c-.9 1.1-2.1 1.6-3.4 1.6-1.3 0-2.6-.6-3.5-1.8-1.1-1.5-1-4 .2-5.5l10.4-13c-3.7-.7-7.4-1.9-10.7-3.8-2.1-1.2-2.8-3.8-1.6-6 1.2-2.1 3.9-2.8 6-1.6 7.6 4.3 17.1 4.3 24.8.1 2.1-1.2 4.8-.4 5.9 1.7 1.1 2.2.3 4.8-1.8 6z" fill="#ffffff" class="fill-f58220"></path></g></svg>
						</a>
					</li>
					<li class="footer__social-item rounded-circle d-flex justify-content-center align-items-center">
						<a href="https://tenchat.ru/2167581" class="footer__social-link" target="_blank">


							<svg width="15" height="15" version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

								<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="none">
									<path d="M177 5106 c-66 -24 -111 -61 -142 -117 l-30 -54 0 -2375 0 -2375 31 -55 c35 -61 106 -113 171 -124 65 -10 4684 -7 4723 4 65 18 123 63 155 121 l30 54 0 2375 0 2375 -31 55 c-35 61 -106 113 -171 124 -21 3 -1086 6 -2368 5 -1934 0 -2336 -2 -2368 -13z m2754 -646 c368 -29 880 -123 1042 -192 220 -94 386 -276 455 -500 25 -79 66 -342 83 -518 6 -69 11 -226 11 -350 0 -339 -43 -717 -101 -887 -85 -249 -278 -433 -533 -507 -114 -33 -117 -35 -133 -67 -12 -23 -15 -88 -15 -357 0 -340 -1 -352 -41 -352 -10 0 -168 127 -351 282 -183 155 -353 290 -378 302 -42 19 -60 20 -310 18 -398 -5 -723 24 -1080 94 -362 71 -488 116 -622 222 -156 124 -244 274 -288 486 -50 247 -64 414 -64 771 0 359 12 512 64 765 54 266 201 460 438 579 142 72 625 170 982 201 69 5 141 12 160 14 87 8 559 5 681 -4z" />
									<path d="M1712 3725 c-55 -24 -62 -57 -62 -280 0 -199 8 -250 41 -271 8 -5 119 -11 247 -14 l234 -5 34 -37 34 -38 0 -535 c0 -573 0 -578 49 -605 27 -14 502 -13 534 1 53 24 52 12 57 605 5 524 6 553 24 573 31 34 80 41 294 41 l204 0 29 29 29 29 0 222 c0 246 -5 269 -61 289 -22 8 -274 11 -843 11 -680 -1 -816 -3 -844 -15z" />
								</g>
							</svg>

						</a>
					</li>
				</ul>
				<a class="footer__text text text-success fs-14 d-block" href="#">Правила клуба</a>
				<a class="footer__text text text-success fs-14 d-block" href="#">Публичный договор</a>
				<a class="footer__text text text-success fs-14 d-block" href="https://target-kc.ru/">Разработка сайта: ТКК</a>

			</div>

			<div class="col-6 col-sm-4 col-lg-3">
				<h3 class="footer__subtitle subtitle fs-14 fw-400 mb-4">Контакты</h3>

				<a href="https://yandex.by/profile/222162440489 " class="footer__box footer__box--map fs-14 fw-400 mb-4">
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
						<a href="#about" class="footer__link d-block text-success fs-14">О клубе</a>
					</li>
					<li class="footer__item">
						<a href="#services" class="footer__link d-block text-success fs-14">Услуги</a>
					</li>
					<li class="footer__item">
						<a href="#shedule" class="footer__link d-block text-success fs-14">Расписание</a>
					</li>
					<li class="footer__item">
						<a href="#cards" class="footer__link d-block text-success fs-14">Клубные карты</a>
					</li>
					<li class="footer__item">
						<a href="#team" class="footer__link d-block text-success fs-14">Наша команда</a>
					</li>
					<li class="footer__item">
						<a href="#vacansii" class="footer__link d-block text-success fs-14">Вакансии</a>
					</li>
					<li class="footer__item">
						<a href="#contacts" class="footer__link d-block text-success fs-14">Контакты</a>
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
					<div
              class="form__box checkbox position-relative mb-3 form-check form-check-inline "
            >
              <input
                type="checkbox"
                class="form-check-input checkbox__input m-0"
                value=""
                name="check"
                id="check"
                checked
              />

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


<div id="team-modal" aria-hidden="true" class="popup">
	<div class="popup__wrapper">
		<div class="popup__content">
			<button data-close type="button" class="popup__close">
				<svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M22.4999 24.6545L32.7543 34.9117L34.7455 32.9232L24.4883 22.666L34.7455 12.4117L32.7571 10.4204L22.4999 20.6776L12.2455 10.4204L10.2571 12.4117L20.5115 22.666L10.2571 32.9204L12.2455 34.9117L22.4999 24.6545Z" fill="white" />
				</svg>
			</button>



			<h2>Должность</h2>
		</div>
	</div>
</div>



</body>

</html>