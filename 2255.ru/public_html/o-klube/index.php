<?
define("PAGE", "CONTAINER");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Философия клуба");
$APPLICATION->SetTitle("Философия клуба");

$APPLICATION->IncludeComponent("bitrix:news.list", "data", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "7200",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "2",	// Код информационного блока
		"IBLOCK_TYPE" => "SYSTEM",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "200",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "ICON",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);
?>


			<section class="team-about bg-white " id="team-about">
				<div class="container">
					<h2 class="team-about__title title text-primary fs-14 fw-500 mb-4">
						Команда
					</h2>

					<h3 class="team-about__subtitle subtitle text-secondary fw-700 mb-5">
						Занимайся с профессионалами
					</h3>
					<div class="row">
						<div class="col-12 position-relative">
							<div class="swiper teamSwiper" id="teamSwiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide d-flex justify-content-center">
										<a data-bs-popup="#team-modal" href="#team-modal" role="button" title="team">
											<div class="team__box-img mb-4">
												<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/img/team.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/img/team.png" alt="Команда" class="team__img w-100" width="350" /></picture>
											</div>
											<span class="team__text text fs-16 fw-700 d-block text-secondary">Фамилия Имя</span>
											<span class="team__text text fs-16 d-block text-secondary">Должность</span>
										</a>
									</div>
									<div class="swiper-slide d-flex justify-content-center">
										<a data-bs-popup="#team-modal" href="#team-modal" role="button" title="team">
											<div class="team__box-img mb-4">
												<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/img/team.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/img/team.png" alt="Команда" class="team__img w-100" width="350" /></picture>
											</div>
											<span class="team__text text fs-16 fw-700 d-block text-secondary">Фамилия Имя</span>
											<span class="team__text text fs-16 d-block text-secondary">Должность</span>
										</a>
									</div>
									<div class="swiper-slide d-flex justify-content-center">
										<a data-bs-popup="#team-modal" href="#team-modal" role="button" title="team">
											<div class="team__box-img mb-4">
												<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/img/team.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/img/team.png" alt="Команда" class="team__img w-100" width="350" /></picture>
											</div>
											<span class="team__text text fs-16 fw-700 d-block text-secondary">Фамилия Имя</span>
											<span class="team__text text fs-16 d-block text-secondary">Должность</span>
										</a>
									</div>
									<div class="swiper-slide d-flex justify-content-center">
										<a data-bs-popup="#team-modal" href="#team-modal" role="button" title="team">
											<div class="team__box-img mb-4">
												<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/img/team.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/img/team.png" alt="Команда" class="team__img w-100" width="350" /></picture>
											</div>
											<span class="team__text text fs-16 fw-700 d-block text-secondary">Фамилия Имя</span>
											<span class="team__text text fs-16 d-block text-secondary">Должность</span>
										</a>
									</div>
									<div class="swiper-slide d-flex justify-content-center">
										<a data-bs-popup="#team-modal" href="#team-modal" role="button" title="team">
											<div class="team__box-img mb-4">
												<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/img/team.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/img/team.png" alt="Команда" class="team__img w-100" width="350" /></picture>
											</div>
											<span class="team__text text fs-16 fw-700 d-block text-secondary">Фамилия Имя</span>
											<span class="team__text text fs-16 d-block text-secondary">Должность</span>
										</a>
									</div>
									<div class="swiper-slide d-flex justify-content-center">
										<a data-bs-popup="#team-modal" href="#team-modal" role="button" title="team">
											<div class="team__box-img mb-4">
												<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/img/team.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/img/team.png" alt="Команда" class="team__img w-100" width="350" /></picture>
											</div>
											<span class="team__text text fs-16 fw-700 d-block text-secondary">Фамилия Имя</span>
											<span class="team__text text fs-16 d-block text-secondary">Должность</span>
										</a>
									</div>
									<div class="swiper-slide d-flex justify-content-center">
										<a data-bs-popup="#team-modal" href="#team-modal" role="button" title="team">
											<div class="team__box-img mb-4">
												<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/img/team.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/img/team.png" alt="Команда" class="team__img w-100" width="350" /></picture>
											</div>
											<span class="team__text text fs-16 fw-700 d-block text-secondary">Фамилия Имя</span>
											<span class="team__text text fs-16 d-block text-secondary">Должность</span>
										</a>
									</div>
									<div class="swiper-slide d-flex justify-content-center">
										<a data-bs-popup="#team-modal" href="#team-modal" role="button" title="team">
											<div class="team__box-img mb-4">
												<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/img/team.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/img/team.png" alt="Команда" class="team__img w-100" width="350" /></picture>
											</div>
											<span class="team__text text fs-16 fw-700 d-block text-secondary">Фамилия Имя</span>
											<span class="team__text text fs-16 d-block text-secondary">Должность</span>
										</a>
									</div>
									<div class="swiper-slide d-flex justify-content-center">
										<a data-bs-popup="#team-modal" href="#team-modal" role="button" title="team">
											<div class="team__box-img mb-4">
												<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/img/team.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/img/team.png" alt="Команда" class="team__img w-100" width="350" /></picture>
											</div>
											<span class="team__text text fs-16 fw-700 d-block text-secondary">Фамилия Имя</span>
											<span class="team__text text fs-16 d-block text-secondary">Должность</span>
										</a>
									</div>
									<div class="swiper-slide d-flex justify-content-center">
										<a data-bs-popup="#team-modal" href="#team-modal" role="button" title="team">
											<div class="team__box-img mb-4">
												<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/img/team.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/img/team.png" alt="Команда" class="team__img w-100" width="350" /></picture>
											</div>
											<span class="team__text text fs-16 fw-700 d-block text-secondary">Фамилия Имя</span>
											<span class="team__text text fs-16 d-block text-secondary">Должность</span>
										</a>
									</div>
									<div class="swiper-slide d-flex justify-content-center">
										<a data-bs-popup="#team-modal" href="#team-modal" role="button" title="team">
											<div class="team__box-img mb-4">
												<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/img/team.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/img/team.png" alt="Команда" class="team__img w-100" width="350" /></picture>
											</div>
											<span class="team__text text fs-16 fw-700 d-block text-secondary">Фамилия Имя</span>
											<span class="team__text text fs-16 d-block text-secondary">Должность</span>
										</a>
									</div>
								</div>
							</div>
							<div class="carousel-control-prev">
								<span class="team-about__box-border box-border">
									<span class="team-about__box-circle box-circle d-flex justify-content-center align-items-center">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									</span>
								</span>
							</div>
							<div class="carousel-control-next">
								<span class="team-about__box-border box-border">
									<span class="team-about__box-circle box-circle d-flex justify-content-center align-items-center">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<script>
		var swiper = new Swiper(".teamSwiper", {
			// задаем количество слайдов, которые будут показываться одновременно
			slidesPerView: 1,
			spaceBetween: 30,
			loop: true,
			// включаем курсор в виде "руки" при наведении на слайды
			grabCursor: true,

			// включаем кнопки "вперед" и "назад" для навигации по слайдам
			navigation: {
				nextEl: ".carousel-control-next ",
				prevEl: ".carousel-control-prev",
			},
			breakpoints: {
				768: {
					slidesPerView: 2,
				},
				1100: {
					slidesPerView: 3,
				},
			},
		});
	</script>
			<section class="vacansies position-relative d-none" id="vacansies">
				<div class="container">
					<h2 class="vacansies__title title text-primary fs-14 fw-500 mb-4">
						Вакансии
					</h2>

					<h3 class="vacansies__subtitle subtitle fw-700 mb-5">
						Стань частью нашей команды
					</h3>
					<div class="row align-items-end justify-content-center gy-lg-0 gy-5">
						<div class="col-12 col-md-7 col-lg-5">
							<div class="vacansies__box-border vacansies__box-border--form h-100">
								<div class="vacansies__box vacansies__box--pseudo vacansies__box--form h-100 position-relative">
									<form action="#" class="vacansies__form form d-flex flex-column position-relative">
										<h3 class="vacansies__subtitle subtitle fs-32 text-center mb-3">
											Попробуй себя на новом месте!
										</h3>
										<p class="vacansies__text text fs-16 text-center mb-5">
											Отправь нам свое резюме
										</p>
										<div class="form__body d-flex flex-column">
											<div class="form__box position-relative mb-3">
												<input type="text" id="name" name="form[]" data-bs-error="Ошибка" placeholder="" class="form__input w-100 p-3" required />
												<label for="name" class="form__label position-absolute fs-14">Ваше имя</label>
											</div>
											<div class="form__box position-relative mb-3">
												<input type="tel" id="tel" name="form[]" data-bs-error="Ошибка" placeholder="" class="form__input w-100 p-3" required />
												<label for="tel" class="form__label position-absolute fs-14">Телефон</label>
											</div>
											<div class="form__box position-relative mb-3">
												<input type="email" id="email" name="form[]" data-bs-error="Ошибка" placeholder="" class="form__input w-100 p-3" required />
												<label for="email" class="form__label position-absolute fs-14">Email</label>
											</div>
											<div class="form__box position-relative mb-3">
												<textarea name="message" placeholder="" id="message" cols="30" rows="4" class="form__textarea w-100 p-3"></textarea>

												<label for="message" class="form__label form__label--textarea position-absolute fs-14">Сообщение</label>
											</div>
											<div class="form__box position-relative mb-4">
												<input type="file" id="file" name="form[]" class="form__input w-100 d-none" />

												<label for="file" class="fs-14 opacity-100 start-0 d-flex justify-content-between">
													<span>Прикрепить файл</span>
													<span class="text-primary form__label--bg ps-4">Файл</span>
												</label>
											</div>
											<button type="submit" class="form__btn btn btn fs-16 fw-600 px-2 py-3 btn-primary btn-sm text-uppercase">
												Откликнуться
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col d-none d-xl-block"></div>
						<div class="col-12 col-lg-6">
							<div class="row g-5 h-100 vacansies__content">
								<div class="col-12 col-sm-6">
									<div class="vacansies__box-border h-100">
										<div class="vacansies__box h-100">
											<p class="vacansies__text text fw-700 fs-16 text-center">
												Сменный, гибкий график работы
											</p>
											<div class="box-border">
												<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g clip-path="url(#clip0_113_376)">
															<path d="M20 13V20C20 20.2652 19.8946 20.5196 19.7071 20.7071C19.5196 20.8946 19.2652 21 19 21H5C4.73478 21 4.48043 20.8946 4.29289 20.7071C4.10536 20.5196 4 20.2652 4 20V13H20ZM14.5 2C15.0906 1.9998 15.6717 2.14908 16.1892 2.43393C16.7066 2.71879 17.1435 3.12995 17.4592 3.62914C17.7749 4.12832 17.9592 4.69929 17.9948 5.28886C18.0305 5.87843 17.9163 6.46743 17.663 7.001L21 7C21.2652 7 21.5196 7.10536 21.7071 7.2929C21.8946 7.48043 22 7.73479 22 8V11C22 11.2652 21.8946 11.5196 21.7071 11.7071C21.5196 11.8946 21.2652 12 21 12H3C2.73478 12 2.48043 11.8946 2.29289 11.7071C2.10536 11.5196 2 11.2652 2 11V8C2 7.73479 2.10536 7.48043 2.29289 7.2929C2.48043 7.10536 2.73478 7 3 7L6.337 7.001C5.98076 6.25268 5.90163 5.40221 6.1137 4.601C6.32577 3.7998 6.81529 3.09985 7.4951 2.62576C8.17491 2.15167 9.0009 1.9342 9.82603 2.01207C10.6512 2.08994 11.4219 2.4581 12.001 3.051C12.326 2.71753 12.7147 2.45268 13.1439 2.27215C13.5732 2.09162 14.0343 1.99908 14.5 2ZM9.5 4C9.11478 4.00019 8.74441 4.14858 8.46561 4.41441C8.18682 4.68025 8.02099 5.04315 8.00248 5.42792C7.98396 5.81269 8.11419 6.18984 8.36618 6.48121C8.61816 6.77257 8.97258 6.95583 9.356 6.993L9.5 7H11V5.5C11 5.12712 10.8611 4.76761 10.6104 4.49158C10.3597 4.21556 10.0152 4.0428 9.644 4.007L9.5 4ZM14.5 4L14.356 4.007C14.0094 4.04021 13.6851 4.19298 13.4388 4.43911C13.1925 4.68525 13.0395 5.0094 13.006 5.356L13 5.5V7H14.5L14.644 6.993C15.015 6.95703 15.3594 6.7842 15.6099 6.50819C15.8605 6.23218 15.9993 5.87277 15.9993 5.5C15.9993 5.12724 15.8605 4.76783 15.6099 4.49182C15.3594 4.21581 15.015 4.04297 14.644 4.007L14.5 4Z" fill="#05C3DE" />
														</g>
														<defs>
															<clipPath id="clip0_113_376">
																<rect width="24" height="24" fill="white" />
															</clipPath>
														</defs>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="vacansies__box-border h-100">
										<div class="vacansies__box h-100">
											<p class="vacansies__text text fw-700 fs-16 text-center">
												Сменный, гибкий график работы
											</p>
											<div class="box-border">
												<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g clip-path="url(#clip0_113_376)">
															<path d="M20 13V20C20 20.2652 19.8946 20.5196 19.7071 20.7071C19.5196 20.8946 19.2652 21 19 21H5C4.73478 21 4.48043 20.8946 4.29289 20.7071C4.10536 20.5196 4 20.2652 4 20V13H20ZM14.5 2C15.0906 1.9998 15.6717 2.14908 16.1892 2.43393C16.7066 2.71879 17.1435 3.12995 17.4592 3.62914C17.7749 4.12832 17.9592 4.69929 17.9948 5.28886C18.0305 5.87843 17.9163 6.46743 17.663 7.001L21 7C21.2652 7 21.5196 7.10536 21.7071 7.2929C21.8946 7.48043 22 7.73479 22 8V11C22 11.2652 21.8946 11.5196 21.7071 11.7071C21.5196 11.8946 21.2652 12 21 12H3C2.73478 12 2.48043 11.8946 2.29289 11.7071C2.10536 11.5196 2 11.2652 2 11V8C2 7.73479 2.10536 7.48043 2.29289 7.2929C2.48043 7.10536 2.73478 7 3 7L6.337 7.001C5.98076 6.25268 5.90163 5.40221 6.1137 4.601C6.32577 3.7998 6.81529 3.09985 7.4951 2.62576C8.17491 2.15167 9.0009 1.9342 9.82603 2.01207C10.6512 2.08994 11.4219 2.4581 12.001 3.051C12.326 2.71753 12.7147 2.45268 13.1439 2.27215C13.5732 2.09162 14.0343 1.99908 14.5 2ZM9.5 4C9.11478 4.00019 8.74441 4.14858 8.46561 4.41441C8.18682 4.68025 8.02099 5.04315 8.00248 5.42792C7.98396 5.81269 8.11419 6.18984 8.36618 6.48121C8.61816 6.77257 8.97258 6.95583 9.356 6.993L9.5 7H11V5.5C11 5.12712 10.8611 4.76761 10.6104 4.49158C10.3597 4.21556 10.0152 4.0428 9.644 4.007L9.5 4ZM14.5 4L14.356 4.007C14.0094 4.04021 13.6851 4.19298 13.4388 4.43911C13.1925 4.68525 13.0395 5.0094 13.006 5.356L13 5.5V7H14.5L14.644 6.993C15.015 6.95703 15.3594 6.7842 15.6099 6.50819C15.8605 6.23218 15.9993 5.87277 15.9993 5.5C15.9993 5.12724 15.8605 4.76783 15.6099 4.49182C15.3594 4.21581 15.015 4.04297 14.644 4.007L14.5 4Z" fill="#05C3DE" />
														</g>
														<defs>
															<clipPath id="clip0_113_376">
																<rect width="24" height="24" fill="white" />
															</clipPath>
														</defs>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="vacansies__box-border h-100">
										<div class="vacansies__box h-100">
											<p class="vacansies__text text fw-700 fs-16 text-center">
												Сменный, гибкий график работы
											</p>
											<div class="box-border">
												<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g clip-path="url(#clip0_113_376)">
															<path d="M20 13V20C20 20.2652 19.8946 20.5196 19.7071 20.7071C19.5196 20.8946 19.2652 21 19 21H5C4.73478 21 4.48043 20.8946 4.29289 20.7071C4.10536 20.5196 4 20.2652 4 20V13H20ZM14.5 2C15.0906 1.9998 15.6717 2.14908 16.1892 2.43393C16.7066 2.71879 17.1435 3.12995 17.4592 3.62914C17.7749 4.12832 17.9592 4.69929 17.9948 5.28886C18.0305 5.87843 17.9163 6.46743 17.663 7.001L21 7C21.2652 7 21.5196 7.10536 21.7071 7.2929C21.8946 7.48043 22 7.73479 22 8V11C22 11.2652 21.8946 11.5196 21.7071 11.7071C21.5196 11.8946 21.2652 12 21 12H3C2.73478 12 2.48043 11.8946 2.29289 11.7071C2.10536 11.5196 2 11.2652 2 11V8C2 7.73479 2.10536 7.48043 2.29289 7.2929C2.48043 7.10536 2.73478 7 3 7L6.337 7.001C5.98076 6.25268 5.90163 5.40221 6.1137 4.601C6.32577 3.7998 6.81529 3.09985 7.4951 2.62576C8.17491 2.15167 9.0009 1.9342 9.82603 2.01207C10.6512 2.08994 11.4219 2.4581 12.001 3.051C12.326 2.71753 12.7147 2.45268 13.1439 2.27215C13.5732 2.09162 14.0343 1.99908 14.5 2ZM9.5 4C9.11478 4.00019 8.74441 4.14858 8.46561 4.41441C8.18682 4.68025 8.02099 5.04315 8.00248 5.42792C7.98396 5.81269 8.11419 6.18984 8.36618 6.48121C8.61816 6.77257 8.97258 6.95583 9.356 6.993L9.5 7H11V5.5C11 5.12712 10.8611 4.76761 10.6104 4.49158C10.3597 4.21556 10.0152 4.0428 9.644 4.007L9.5 4ZM14.5 4L14.356 4.007C14.0094 4.04021 13.6851 4.19298 13.4388 4.43911C13.1925 4.68525 13.0395 5.0094 13.006 5.356L13 5.5V7H14.5L14.644 6.993C15.015 6.95703 15.3594 6.7842 15.6099 6.50819C15.8605 6.23218 15.9993 5.87277 15.9993 5.5C15.9993 5.12724 15.8605 4.76783 15.6099 4.49182C15.3594 4.21581 15.015 4.04297 14.644 4.007L14.5 4Z" fill="#05C3DE" />
														</g>
														<defs>
															<clipPath id="clip0_113_376">
																<rect width="24" height="24" fill="white" />
															</clipPath>
														</defs>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="vacansies__box-border h-100">
										<div class="vacansies__box h-100">
											<p class="vacansies__text text fw-700 fs-16 text-center">
												Сменный, гибкий график работы
											</p>
											<div class="box-border">
												<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g clip-path="url(#clip0_113_376)">
															<path d="M20 13V20C20 20.2652 19.8946 20.5196 19.7071 20.7071C19.5196 20.8946 19.2652 21 19 21H5C4.73478 21 4.48043 20.8946 4.29289 20.7071C4.10536 20.5196 4 20.2652 4 20V13H20ZM14.5 2C15.0906 1.9998 15.6717 2.14908 16.1892 2.43393C16.7066 2.71879 17.1435 3.12995 17.4592 3.62914C17.7749 4.12832 17.9592 4.69929 17.9948 5.28886C18.0305 5.87843 17.9163 6.46743 17.663 7.001L21 7C21.2652 7 21.5196 7.10536 21.7071 7.2929C21.8946 7.48043 22 7.73479 22 8V11C22 11.2652 21.8946 11.5196 21.7071 11.7071C21.5196 11.8946 21.2652 12 21 12H3C2.73478 12 2.48043 11.8946 2.29289 11.7071C2.10536 11.5196 2 11.2652 2 11V8C2 7.73479 2.10536 7.48043 2.29289 7.2929C2.48043 7.10536 2.73478 7 3 7L6.337 7.001C5.98076 6.25268 5.90163 5.40221 6.1137 4.601C6.32577 3.7998 6.81529 3.09985 7.4951 2.62576C8.17491 2.15167 9.0009 1.9342 9.82603 2.01207C10.6512 2.08994 11.4219 2.4581 12.001 3.051C12.326 2.71753 12.7147 2.45268 13.1439 2.27215C13.5732 2.09162 14.0343 1.99908 14.5 2ZM9.5 4C9.11478 4.00019 8.74441 4.14858 8.46561 4.41441C8.18682 4.68025 8.02099 5.04315 8.00248 5.42792C7.98396 5.81269 8.11419 6.18984 8.36618 6.48121C8.61816 6.77257 8.97258 6.95583 9.356 6.993L9.5 7H11V5.5C11 5.12712 10.8611 4.76761 10.6104 4.49158C10.3597 4.21556 10.0152 4.0428 9.644 4.007L9.5 4ZM14.5 4L14.356 4.007C14.0094 4.04021 13.6851 4.19298 13.4388 4.43911C13.1925 4.68525 13.0395 5.0094 13.006 5.356L13 5.5V7H14.5L14.644 6.993C15.015 6.95703 15.3594 6.7842 15.6099 6.50819C15.8605 6.23218 15.9993 5.87277 15.9993 5.5C15.9993 5.12724 15.8605 4.76783 15.6099 4.49182C15.3594 4.21581 15.015 4.04297 14.644 4.007L14.5 4Z" fill="#05C3DE" />
														</g>
														<defs>
															<clipPath id="clip0_113_376">
																<rect width="24" height="24" fill="white" />
															</clipPath>
														</defs>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion" id="accordionExample">
						<div class="card mb-2 me-4 me-lg-0">
							<div class="card-header ps-0" id="headingOne">
								<h2 class="mb-0">
									<button class="card__btn btn btn-link btn-block text-lg-start d-flex d-lg-inline-block text-center text-decoration-none fw-700 fs-20 py-3 ps-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<span class="text-primary vacansies__span">01</span>
										Менеджер по работе с клиентами
										<span class="vacansies__box-border box-border d-block">
											<span class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
												<span class="vacansies__arrow"></span>
											</span>
										</span>
									</button>
								</h2>
							</div>

							<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="card-body ps-0">
									<div class="row py-3 mb-5 gy-4 gy-lg-0">
										<div class="col-12 col-sm-6 col-lg-3 position-relative">
											<div class="d-flex gap-3">
												<div class="box-border">
													<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_413_929)">
																<path d="M9 13V16H15V13H22V20C22 20.2652 21.8946 20.5196 21.7071 20.7071C21.5196 20.8946 21.2652 21 21 21H3C2.73478 21 2.48043 20.8946 2.29289 20.7071C2.10536 20.5196 2 20.2652 2 20V13H9ZM11 11H13V14H11V11ZM7 5V2C7 1.73478 7.10536 1.48043 7.29289 1.29289C7.48043 1.10536 7.73478 1 8 1H16C16.2652 1 16.5196 1.10536 16.7071 1.29289C16.8946 1.48043 17 1.73478 17 2V5H21C21.2652 5 21.5196 5.10536 21.7071 5.29289C21.8946 5.48043 22 5.73478 22 6V11H15V9H9V11H2V6C2 5.73478 2.10536 5.48043 2.29289 5.29289C2.48043 5.10536 2.73478 5 3 5H7ZM9 3V5H15V3H9Z" fill="#05C3DE" />
															</g>
															<defs>
																<clipPath id="clip0_413_929">
																	<rect width="24" height="24" fill="white" />
																</clipPath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="d-flex flex-column justify-content-center">
													<span class="fs-16 fw-600">Опыт работы</span>
													<span class="fs-16">1–3 года</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-3 position-relative">
											<div class="d-flex gap-3">
												<div class="box-border">
													<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_413_933)">
																<path d="M12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM13 12V7H11V14H17V12H13Z" fill="#05C3DE" />
															</g>
															<defs>
																<clipPath id="clip0_413_933">
																	<rect width="24" height="24" fill="white" />
																</clipPath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="d-flex flex-column justify-content-center">
													<span class="fs-16 fw-600">Тип занятости</span>
													<span class="fs-16">Полный день</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-3 position-relative">
											<div class="d-flex gap-3">
												<div class="box-border">
													<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_141_326)">
																<path d="M11.9999 22.0001C10.8181 22.0001 9.64773 21.7673 8.5558 21.315C7.46387 20.8627 6.47171 20.1998 5.63599 19.364C4.80026 18.5283 4.13732 17.5362 3.68503 16.4442C3.23274 15.3523 2.99995 14.182 2.99995 13.0001C2.99995 11.8182 3.23274 10.6479 3.68503 9.55592C4.13732 8.46399 4.80026 7.47184 5.63599 6.63611C6.47171 5.80038 7.46387 5.13745 8.5558 4.68515C9.64773 4.23286 10.8181 4.00007 11.9999 4.00007C14.3869 4.00007 16.6761 4.94828 18.3639 6.63611C20.0517 8.32394 20.9999 10.6131 20.9999 13.0001C20.9999 15.387 20.0517 17.6762 18.3639 19.364C16.6761 21.0519 14.3869 22.0001 11.9999 22.0001ZM12.9999 13.0001V8.00007H10.9999V15.0001H15.9999V13.0001H12.9999ZM1.74695 6.28207L5.28195 2.74707L6.69695 4.16107L3.15995 7.69707L1.74695 6.28207ZM18.7169 2.74707L22.2529 6.28207L20.8389 7.69707L17.3029 4.16107L18.7179 2.74707H18.7169Z" fill="#05C3DE" />
															</g>
															<defs>
																<clipPath id="clip0_141_326">
																	<rect width="24" height="24" fill="white" />
																</clipPath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="d-flex flex-column justify-content-center">
													<span class="fs-16 fw-600">График работы</span>
													<span class="fs-16">Сменный, гибкий</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-3 position-relative">
											<div class="d-flex gap-3">
												<div class="box-border">
													<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_413_937)">
																<path d="M22 6H15C13.4087 6 11.8826 6.63214 10.7574 7.75736C9.63214 8.88258 9 10.4087 9 12C9 13.5913 9.63214 15.1174 10.7574 16.2426C11.8826 17.3679 13.4087 18 15 18H22V20C22 20.2652 21.8946 20.5196 21.7071 20.7071C21.5196 20.8946 21.2652 21 21 21H3C2.73478 21 2.48043 20.8946 2.29289 20.7071C2.10536 20.5196 2 20.2652 2 20V4C2 3.73478 2.10536 3.48043 2.29289 3.29289C2.48043 3.10536 2.73478 3 3 3H21C21.2652 3 21.5196 3.10536 21.7071 3.29289C21.8946 3.48043 22 3.73478 22 4V6ZM15 8H23V16H15C13.9391 16 12.9217 15.5786 12.1716 14.8284C11.4214 14.0783 11 13.0609 11 12C11 10.9391 11.4214 9.92172 12.1716 9.17157C12.9217 8.42143 13.9391 8 15 8ZM15 11V13H18V11H15Z" fill="#05C3DE" />
															</g>
															<defs>
																<clipPath id="clip0_413_937">
																	<rect width="24" height="24" fill="white" />
																</clipPath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="d-flex flex-column justify-content-center">
													<span class="fs-16 fw-600">Зарплата</span>
													<span class="fs-16">от 40 000 руб.</span>
												</div>
											</div>
										</div>
									</div>
									<h4 class="card__subtitle fs-20 fw-700 mb-3">Обязанности</h4>
									<ul class="ps-4 mb-4">
										<li class="fs-16 list-unstyled">
											проведение персональных тренировок;
										</li>
										<li class="fs-16">дежурства в тренажерном зале;</li>
										<li class="fs-16">проведение первичных инструктажей;</li>
										<li class="fs-16">
											предоставление консультаций клиентам по профильным вопросам.
										</li>
									</ul>
									<h4 class="card__subtitle fs-20 fw-700 mb-3">Требования</h4>
									<ul class="ps-4 mb-4">
										<li class="fs-16 list-unstyled">профильное образование;</li>
										<li class="fs-16">опыт тренерской деятельности от 2 -х лет;</li>
										<li class="fs-16">
											опыт проведения функциональных и кроссфит тренировок является
											преимуществом;
										</li>
										<li class="fs-16">
											подтвержденные знания в области анатомии и физиологии;
										</li>
										<li class="fs-16">
											наличие званий и достижений в силовом спорте является
											преимуществом;
										</li>
										<li class="fs-16">
											наличие знаний и опыта в области реабилитационного тренинга
											является преимуществом;
										</li>
										<li class="fs-16">
											доброжелательность, приветливость, умение работать с клиентами.
										</li>
									</ul>
									<h4 class="card__subtitle fs-20 fw-700 mb-3">Условия</h4>
									<ul class="ps-4 mb-4">
										<li class="fs-16 list-unstyled">
											оплата персональных тренировок;
										</li>
										<li class="fs-16">
											надбавка к оплате персональных тренировок за эффективность;
										</li>
										<li class="fs-16">оплата первичных инструктажей;</li>
										<li class="fs-16">почасовая ставка за сменные дежурства;</li>
										<li class="fs-16">скидки на дополнительные услуги клуба;</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card mb-2 me-4 me-lg-0">
							<div class="card-header ps-0" id="headingTwo">
								<h2 class="mb-0">
									<button class="card__btn btn btn-link btn-block text-lg-start d-flex d-lg-inline-block text-center text-decoration-none fw-700 fs-20 py-3 ps-0 text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<span class="text-primary vacansies__span">02</span>
										Инструктор тренажёрного зала
										<span class="vacansies__box-border box-border d-block">
											<span class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
												<span class="vacansies__arrow"></span>
											</span>
										</span>
									</button>
								</h2>
							</div>
							<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="card-body ps-0">
									<div class="row py-3 mb-5 gy-4 gy-lg-0">
										<div class="col-12 col-sm-6 col-lg-3 position-relative">
											<div class="d-flex gap-3">
												<div class="box-border">
													<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_413_929)">
																<path d="M9 13V16H15V13H22V20C22 20.2652 21.8946 20.5196 21.7071 20.7071C21.5196 20.8946 21.2652 21 21 21H3C2.73478 21 2.48043 20.8946 2.29289 20.7071C2.10536 20.5196 2 20.2652 2 20V13H9ZM11 11H13V14H11V11ZM7 5V2C7 1.73478 7.10536 1.48043 7.29289 1.29289C7.48043 1.10536 7.73478 1 8 1H16C16.2652 1 16.5196 1.10536 16.7071 1.29289C16.8946 1.48043 17 1.73478 17 2V5H21C21.2652 5 21.5196 5.10536 21.7071 5.29289C21.8946 5.48043 22 5.73478 22 6V11H15V9H9V11H2V6C2 5.73478 2.10536 5.48043 2.29289 5.29289C2.48043 5.10536 2.73478 5 3 5H7ZM9 3V5H15V3H9Z" fill="#05C3DE" />
															</g>
															<defs>
																<clipPath id="clip0_413_929">
																	<rect width="24" height="24" fill="white" />
																</clipPath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="d-flex flex-column justify-content-center">
													<span class="fs-16 fw-600">Опыт работы</span>
													<span class="fs-16">1–3 года</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-3 position-relative">
											<div class="d-flex gap-3">
												<div class="box-border">
													<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_413_933)">
																<path d="M12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM13 12V7H11V14H17V12H13Z" fill="#05C3DE" />
															</g>
															<defs>
																<clipPath id="clip0_413_933">
																	<rect width="24" height="24" fill="white" />
																</clipPath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="d-flex flex-column justify-content-center">
													<span class="fs-16 fw-600">Тип занятости</span>
													<span class="fs-16">Полный день</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-3 position-relative">
											<div class="d-flex gap-3">
												<div class="box-border">
													<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_141_326)">
																<path d="M11.9999 22.0001C10.8181 22.0001 9.64773 21.7673 8.5558 21.315C7.46387 20.8627 6.47171 20.1998 5.63599 19.364C4.80026 18.5283 4.13732 17.5362 3.68503 16.4442C3.23274 15.3523 2.99995 14.182 2.99995 13.0001C2.99995 11.8182 3.23274 10.6479 3.68503 9.55592C4.13732 8.46399 4.80026 7.47184 5.63599 6.63611C6.47171 5.80038 7.46387 5.13745 8.5558 4.68515C9.64773 4.23286 10.8181 4.00007 11.9999 4.00007C14.3869 4.00007 16.6761 4.94828 18.3639 6.63611C20.0517 8.32394 20.9999 10.6131 20.9999 13.0001C20.9999 15.387 20.0517 17.6762 18.3639 19.364C16.6761 21.0519 14.3869 22.0001 11.9999 22.0001ZM12.9999 13.0001V8.00007H10.9999V15.0001H15.9999V13.0001H12.9999ZM1.74695 6.28207L5.28195 2.74707L6.69695 4.16107L3.15995 7.69707L1.74695 6.28207ZM18.7169 2.74707L22.2529 6.28207L20.8389 7.69707L17.3029 4.16107L18.7179 2.74707H18.7169Z" fill="#05C3DE" />
															</g>
															<defs>
																<clipPath id="clip0_141_326">
																	<rect width="24" height="24" fill="white" />
																</clipPath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="d-flex flex-column justify-content-center">
													<span class="fs-16 fw-600">График работы</span>
													<span class="fs-16">Сменный, гибкий</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-3 position-relative">
											<div class="d-flex gap-3">
												<div class="box-border">
													<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_413_937)">
																<path d="M22 6H15C13.4087 6 11.8826 6.63214 10.7574 7.75736C9.63214 8.88258 9 10.4087 9 12C9 13.5913 9.63214 15.1174 10.7574 16.2426C11.8826 17.3679 13.4087 18 15 18H22V20C22 20.2652 21.8946 20.5196 21.7071 20.7071C21.5196 20.8946 21.2652 21 21 21H3C2.73478 21 2.48043 20.8946 2.29289 20.7071C2.10536 20.5196 2 20.2652 2 20V4C2 3.73478 2.10536 3.48043 2.29289 3.29289C2.48043 3.10536 2.73478 3 3 3H21C21.2652 3 21.5196 3.10536 21.7071 3.29289C21.8946 3.48043 22 3.73478 22 4V6ZM15 8H23V16H15C13.9391 16 12.9217 15.5786 12.1716 14.8284C11.4214 14.0783 11 13.0609 11 12C11 10.9391 11.4214 9.92172 12.1716 9.17157C12.9217 8.42143 13.9391 8 15 8ZM15 11V13H18V11H15Z" fill="#05C3DE" />
															</g>
															<defs>
																<clipPath id="clip0_413_937">
																	<rect width="24" height="24" fill="white" />
																</clipPath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="d-flex flex-column justify-content-center">
													<span class="fs-16 fw-600">Зарплата</span>
													<span class="fs-16">от 40 000 руб.</span>
												</div>
											</div>
										</div>
									</div>
									<h4 class="card__subtitle fs-20 fw-700 mb-3">Обязанности</h4>
									<ul class="ps-4 mb-4">
										<li class="fs-16 list-unstyled">
											проведение персональных тренировок;
										</li>
										<li class="fs-16">дежурства в тренажерном зале;</li>
										<li class="fs-16">проведение первичных инструктажей;</li>
										<li class="fs-16">
											предоставление консультаций клиентам по профильным вопросам.
										</li>
									</ul>
									<h4 class="card__subtitle fs-20 fw-700 mb-3">Требования</h4>
									<ul class="ps-4 mb-4">
										<li class="fs-16 list-unstyled">профильное образование;</li>
										<li class="fs-16">опыт тренерской деятельности от 2 -х лет;</li>
										<li class="fs-16">
											опыт проведения функциональных и кроссфит тренировок является
											преимуществом;
										</li>
										<li class="fs-16">
											подтвержденные знания в области анатомии и физиологии;
										</li>
										<li class="fs-16">
											наличие званий и достижений в силовом спорте является
											преимуществом;
										</li>
										<li class="fs-16">
											наличие знаний и опыта в области реабилитационного тренинга
											является преимуществом;
										</li>
										<li class="fs-16">
											доброжелательность, приветливость, умение работать с клиентами.
										</li>
									</ul>
									<h4 class="card__subtitle fs-20 fw-700 mb-3">Условия</h4>
									<ul class="ps-4 mb-4">
										<li class="fs-16 list-unstyled">
											оплата персональных тренировок;
										</li>
										<li class="fs-16">
											надбавка к оплате персональных тренировок за эффективность;
										</li>
										<li class="fs-16">оплата первичных инструктажей;</li>
										<li class="fs-16">почасовая ставка за сменные дежурства;</li>
										<li class="fs-16">скидки на дополнительные услуги клуба;</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card mb-2 me-4 me-lg-0">
							<div class="card-header ps-0" id="headingThree">
								<h2 class="mb-0">
									<button class="card__btn btn btn-link btn-block text-lg-start d-flex d-lg-inline-block text-center text-decoration-none fw-700 fs-20 py-3 ps-0 text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<span class="text-primary vacansies__span">03</span>
										Администратор-кассир
										<span class="vacansies__box-border box-border d-block">
											<span class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
												<span class="vacansies__arrow"></span>
											</span>
										</span>
									</button>
								</h2>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="card-body ps-0">
									<div class="row py-3 mb-5 gy-4 gy-lg-0">
										<div class="col-12 col-sm-6 col-lg-3 position-relative">
											<div class="d-flex gap-3">
												<div class="box-border">
													<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_413_929)">
																<path d="M9 13V16H15V13H22V20C22 20.2652 21.8946 20.5196 21.7071 20.7071C21.5196 20.8946 21.2652 21 21 21H3C2.73478 21 2.48043 20.8946 2.29289 20.7071C2.10536 20.5196 2 20.2652 2 20V13H9ZM11 11H13V14H11V11ZM7 5V2C7 1.73478 7.10536 1.48043 7.29289 1.29289C7.48043 1.10536 7.73478 1 8 1H16C16.2652 1 16.5196 1.10536 16.7071 1.29289C16.8946 1.48043 17 1.73478 17 2V5H21C21.2652 5 21.5196 5.10536 21.7071 5.29289C21.8946 5.48043 22 5.73478 22 6V11H15V9H9V11H2V6C2 5.73478 2.10536 5.48043 2.29289 5.29289C2.48043 5.10536 2.73478 5 3 5H7ZM9 3V5H15V3H9Z" fill="#05C3DE" />
															</g>
															<defs>
																<clipPath id="clip0_413_929">
																	<rect width="24" height="24" fill="white" />
																</clipPath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="d-flex flex-column justify-content-center">
													<span class="fs-16 fw-600">Опыт работы</span>
													<span class="fs-16">1–3 года</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-3 position-relative">
											<div class="d-flex gap-3">
												<div class="box-border">
													<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_413_933)">
																<path d="M12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM13 12V7H11V14H17V12H13Z" fill="#05C3DE" />
															</g>
															<defs>
																<clipPath id="clip0_413_933">
																	<rect width="24" height="24" fill="white" />
																</clipPath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="d-flex flex-column justify-content-center">
													<span class="fs-16 fw-600">Тип занятости</span>
													<span class="fs-16">Полный день</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-3 position-relative">
											<div class="d-flex gap-3">
												<div class="box-border">
													<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_141_326)">
																<path d="M11.9999 22.0001C10.8181 22.0001 9.64773 21.7673 8.5558 21.315C7.46387 20.8627 6.47171 20.1998 5.63599 19.364C4.80026 18.5283 4.13732 17.5362 3.68503 16.4442C3.23274 15.3523 2.99995 14.182 2.99995 13.0001C2.99995 11.8182 3.23274 10.6479 3.68503 9.55592C4.13732 8.46399 4.80026 7.47184 5.63599 6.63611C6.47171 5.80038 7.46387 5.13745 8.5558 4.68515C9.64773 4.23286 10.8181 4.00007 11.9999 4.00007C14.3869 4.00007 16.6761 4.94828 18.3639 6.63611C20.0517 8.32394 20.9999 10.6131 20.9999 13.0001C20.9999 15.387 20.0517 17.6762 18.3639 19.364C16.6761 21.0519 14.3869 22.0001 11.9999 22.0001ZM12.9999 13.0001V8.00007H10.9999V15.0001H15.9999V13.0001H12.9999ZM1.74695 6.28207L5.28195 2.74707L6.69695 4.16107L3.15995 7.69707L1.74695 6.28207ZM18.7169 2.74707L22.2529 6.28207L20.8389 7.69707L17.3029 4.16107L18.7179 2.74707H18.7169Z" fill="#05C3DE" />
															</g>
															<defs>
																<clipPath id="clip0_141_326">
																	<rect width="24" height="24" fill="white" />
																</clipPath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="d-flex flex-column justify-content-center">
													<span class="fs-16 fw-600">График работы</span>
													<span class="fs-16">Сменный, гибкий</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-lg-3 position-relative">
											<div class="d-flex gap-3">
												<div class="box-border">
													<div class="vacansies__box-circle box-circle d-flex justify-content-center align-items-center">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_413_937)">
																<path d="M22 6H15C13.4087 6 11.8826 6.63214 10.7574 7.75736C9.63214 8.88258 9 10.4087 9 12C9 13.5913 9.63214 15.1174 10.7574 16.2426C11.8826 17.3679 13.4087 18 15 18H22V20C22 20.2652 21.8946 20.5196 21.7071 20.7071C21.5196 20.8946 21.2652 21 21 21H3C2.73478 21 2.48043 20.8946 2.29289 20.7071C2.10536 20.5196 2 20.2652 2 20V4C2 3.73478 2.10536 3.48043 2.29289 3.29289C2.48043 3.10536 2.73478 3 3 3H21C21.2652 3 21.5196 3.10536 21.7071 3.29289C21.8946 3.48043 22 3.73478 22 4V6ZM15 8H23V16H15C13.9391 16 12.9217 15.5786 12.1716 14.8284C11.4214 14.0783 11 13.0609 11 12C11 10.9391 11.4214 9.92172 12.1716 9.17157C12.9217 8.42143 13.9391 8 15 8ZM15 11V13H18V11H15Z" fill="#05C3DE" />
															</g>
															<defs>
																<clipPath id="clip0_413_937">
																	<rect width="24" height="24" fill="white" />
																</clipPath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="d-flex flex-column justify-content-center">
													<span class="fs-16 fw-600">Зарплата</span>
													<span class="fs-16">от 40 000 руб.</span>
												</div>
											</div>
										</div>
									</div>
									<h4 class="card__subtitle fs-20 fw-700 mb-3">Обязанности</h4>
									<ul class="ps-4 mb-4">
										<li class="fs-16 list-unstyled">
											проведение персональных тренировок;
										</li>
										<li class="fs-16">дежурства в тренажерном зале;</li>
										<li class="fs-16">проведение первичных инструктажей;</li>
										<li class="fs-16">
											предоставление консультаций клиентам по профильным вопросам.
										</li>
									</ul>
									<h4 class="card__subtitle fs-20 fw-700 mb-3">Требования</h4>
									<ul class="ps-4 mb-4">
										<li class="fs-16 list-unstyled">профильное образование;</li>
										<li class="fs-16">опыт тренерской деятельности от 2 -х лет;</li>
										<li class="fs-16">
											опыт проведения функциональных и кроссфит тренировок является
											преимуществом;
										</li>
										<li class="fs-16">
											подтвержденные знания в области анатомии и физиологии;
										</li>
										<li class="fs-16">
											наличие званий и достижений в силовом спорте является
											преимуществом;
										</li>
										<li class="fs-16">
											наличие знаний и опыта в области реабилитационного тренинга
											является преимуществом;
										</li>
										<li class="fs-16">
											доброжелательность, приветливость, умение работать с клиентами.
										</li>
									</ul>
									<h4 class="card__subtitle fs-20 fw-700 mb-3">Условия</h4>
									<ul class="ps-4 mb-4">
										<li class="fs-16 list-unstyled">
											оплата персональных тренировок;
										</li>
										<li class="fs-16">
											надбавка к оплате персональных тренировок за эффективность;
										</li>
										<li class="fs-16">оплата первичных инструктажей;</li>
										<li class="fs-16">почасовая ставка за сменные дежурства;</li>
										<li class="fs-16">скидки на дополнительные услуги клуба;</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>