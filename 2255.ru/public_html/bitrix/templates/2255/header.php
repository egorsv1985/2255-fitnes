<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

if (!defined("PAGE"))
	define("PAGE", "TEXT");

use \Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

$asset->addJs(SITE_TEMPLATE_PATH . '/libs/jquery/jquery-3.6.0.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/libs/bootstrap/bootstrap.js');
$asset->addCss(SITE_TEMPLATE_PATH . '/libs/bootstrap/bootstrap.css');


$asset->addCss('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
$asset->addJs('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');







//$asset->addCss('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
//$asset->addJs('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');

//$asset->addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css');



//$asset->addJs('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');




//$asset->addJs('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');


/*
	$asset->addJs(SITE_TEMPLATE_PATH.'/libs/jquery/jquery-3.6.0.js');
	$asset->addCss(SITE_TEMPLATE_PATH.'/libs/bootstrap/bootstrap.css');
	$asset->addJs(SITE_TEMPLATE_PATH.'/libs/bootstrap/popper.js');
	$asset->addJs(SITE_TEMPLATE_PATH.'/libs/bootstrap/bootstrap.js');

	$asset->addCss(SITE_TEMPLATE_PATH.'/fonts/GrtskPeta/stylesheet.css');
	$asset->addCss(SITE_TEMPLATE_PATH.'/fonts/GrtskExa/stylesheet.css');
	*/
$asset->addJs(SITE_TEMPLATE_PATH . '/script.js');


?>
<!DOCTYPE html>
<html>

<head>
	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="icon" type="image/svg+xml" href="<?= SITE_TEMPLATE_PATH; ?>/favicon/favicon.svg">
	<link rel="icon" type="image/png" href="<?= SITE_TEMPLATE_PATH; ?>/favicon/favicon.png">

</head>

<body>
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>
	<div class="wrapper">
		<header class="header">
			<div class="container">
				<div class="header__wrapper py-3 px-xl-0 row h-100 text-nowrap justify-content-between align-items-center gy-4 gx-3 gx-lg-0">
					<div class="col-4 col-md-3 col-lg-3">
						<a href="/" class="header__logo logo">
							<img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/logo.svg" alt="2255 Fitness" class="mw-100 logo__img" />
						</a>
					</div>
					<div class="col-5 col-md-3 col-lg-2">
						<a href="https://yandex.by/profile/222162440489 " class="header__box header__box--map fs-14 fw-400 position-relative">
							<span class="header__span d-block">Тушинская, 17 </span>
							<span class="header__span d-block">ТЦ Праздник 5 этаж</span>
						</a>
					</div>
					<div class="col-2 ps-4 d-none d-lg-block">
						<div class="header__box header__box--metro fs-14 fw-400 position-relative">
							<span class="header__span d-block">2 минуты от </span>
							<span class="header__span d-block">м. «Тушинская»</span>
						</div>
					</div>
					<div class="col-2 d-none d-lg-block">
						<div class="header__box header__box--time fs-14 fw-400 position-relative">
							<span class="header__span d-block">Пн-Пт 6:30-24:00 </span>
							<span class="header__span d-block">Сб-Вс 8:30-22:00</span>
						</div>
					</div>
					<div class="col-2 col-lg-2 d-none d-md-block">
						<div class="header__box header__box--tel fs-14 fw-400 position-relative">
							<a href="tel:+74992830153" class="d-block">
								<span class="header__span">+7 (499) 283-01-53 </span>
							</a>
							<a href="tel:+74992834431" class="d-block">
								<span class="header__span">+7 (499) 283-44-31 </span>
							</a>
						</div>
					</div>
					<div class="col-1">
						<a href="#" role="button" class="header__btn header__btn--enter btn fs-14 fw-600 btn-primary btn-sm py-2 d-none d-md-block"><span>Вход</span></a>
					</div>

					<nav class="header__menu col-12 col-lg-9 pe-lg-5">
						<? $APPLICATION->IncludeComponent(
							"bitrix:menu",
							"tree",
							array(
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "left",
								"DELAY" => "N",
								"MAX_LEVEL" => "3",
								"MENU_CACHE_GET_VARS" => array(""),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "top",
								"USE_EXT" => "Y"
							)
						); ?>
					</nav>
					<!-- <ul class="header__social-list d-none d-md-flex align-items-center mb-0 gap-1 justify-content-between col-2 col-lg-1">
						<li class="header__social-item rounded-circle d-flex justify-content-center align-items-center">
							<a href="https://instagram.com/fitness_2255?igshid=NTc4MTIwNjQ2YQ== " class="header__social-link" target="_blank">
								<svg width="15" height="15" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M7.73638 5.4999C7.73638 6.73498 6.73519 7.73616 5.50012 7.73616C4.26504 7.73616 3.26385 6.73498 3.26385 5.4999C3.26385 4.26482 4.26504 3.26364 5.50012 3.26364C6.73519 3.26364 7.73638 4.26482 7.73638 5.4999Z" fill="white" />
									<path d="M10.7299 1.54331C10.6224 1.25201 10.4509 0.988347 10.2281 0.771924C10.0117 0.549082 9.74817 0.377583 9.45669 0.270084C9.2203 0.178273 8.86518 0.0689918 8.21109 0.0392201C7.50353 0.00695267 7.29138 0 5.50009 0C3.70862 0 3.49648 0.0067744 2.78909 0.0390419C2.135 0.0689918 1.7797 0.178273 1.54349 0.270084C1.25201 0.377583 0.988347 0.549082 0.772102 0.771924C0.54926 0.988347 0.377761 1.25184 0.270084 1.54331C0.178273 1.7797 0.0689918 2.135 0.0392201 2.78909C0.00695267 3.49648 0 3.70862 0 5.50009C0 7.29138 0.00695267 7.50353 0.0392201 8.21109C0.0689918 8.86518 0.178273 9.2203 0.270084 9.45669C0.377761 9.74817 0.549082 10.0117 0.771924 10.2281C0.988347 10.4509 1.25184 10.6224 1.54331 10.7299C1.7797 10.8219 2.135 10.9312 2.78909 10.961C3.49648 10.9932 3.70844 11 5.49991 11C7.29156 11 7.5037 10.9932 8.21091 10.961C8.865 10.9312 9.2203 10.8219 9.45669 10.7299C10.0418 10.5042 10.5042 10.0418 10.7299 9.45669C10.8217 9.2203 10.931 8.86518 10.961 8.21109C10.9932 7.50353 11 7.29138 11 5.50009C11 3.70862 10.9932 3.49648 10.961 2.78909C10.9312 2.135 10.8219 1.7797 10.7299 1.54331ZM5.50009 8.94487C3.59738 8.94487 2.05496 7.40262 2.05496 5.49991C2.05496 3.5972 3.59738 2.05496 5.50009 2.05496C7.40262 2.05496 8.94504 3.5972 8.94504 5.49991C8.94504 7.40262 7.40262 8.94487 5.50009 8.94487ZM9.08124 2.72384C8.63663 2.72384 8.27616 2.36337 8.27616 1.91876C8.27616 1.47414 8.63663 1.11367 9.08124 1.11367C9.52586 1.11367 9.88633 1.47414 9.88633 1.91876C9.88615 2.36337 9.52586 2.72384 9.08124 2.72384Z" fill="white" />
								</svg>

							</a>
						</li>
						<li class="header__social-item rounded-circle d-flex justify-content-center align-items-center">
							<a href="https://vk.com/club220348627 " class="header__social-link" target="_blank">

								<svg width="15" height="15" viewBox="0 0 1000 1000" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 1000 1000">
									<path d="M500 1000C223.9 1000 0 776.1 0 500S223.9 0 500 0s500 223.9 500 500-223.9 500-500 500z" fill="#ffffff" class="fill-000000"></path>
									<path d="M819 344.5c4.6-15.5 0-26.8-22.1-26.8H724c-18.5 0-27.1 9.8-31.7 20.6 0 0-37.1 90.4-89.6 149.1-17 17-24.7 22.4-34 22.4-4.6 0-11.3-5.4-11.3-20.9V344.5c0-18.5-5.4-26.8-20.8-26.8H422c-11.6 0-18.6 8.6-18.6 16.8 0 17.6 26.3 21.6 29 71.1V513c0 23.5-4.3 27.8-13.5 27.8-24.7 0-84.8-90.8-120.5-194.7-7-20.2-14-28.3-32.6-28.3h-72.9c-20.8 0-25 9.8-25 20.6 0 19.3 24.7 115.1 115.1 241.8 60.3 86.5 145.1 133.4 222.4 133.4 46.3 0 52.1-10.4 52.1-28.4v-65.4c0-20.8 4.4-25 19.1-25 10.8 0 29.4 5.4 72.6 47.1 49.4 49.4 57.6 71.6 85.4 71.6h72.9c20.8 0 31.2-10.4 25.2-31-6.6-20.5-30.2-50.2-61.5-85.5-17-20.1-42.5-41.7-50.2-52.5-10.8-13.9-7.7-20.1 0-32.4-.1 0 88.7-125.1 98-167.6z" fill="#000000" class="fill-ffffff"></path>
								</svg>
							</a>
						</li>
						<li class="header__social-item rounded-circle d-flex justify-content-center align-items-center">
							<a href="https://dzen.ru/id/64814548d7291f01e915c18b  " class="header__social-link" target="_blank">

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
						<li class="header__social-item rounded-circle d-flex justify-content-center align-items-center">
							<a href="https://pin.it/26DGIqe " class="header__social-link" target="_blank">

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
						<li class="header__social-item rounded-circle d-flex justify-content-center align-items-center">
							<a href="https://ok.ru/group/70000002740738 " class="header__social-link" target="_blank">

								<svg width="15" height="15" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<style type="text/css">
										.st0 {
											fill: #4267B2;
										}

										.st1 {
											fill: url(#SVGID_1_);
										}

										.st2 {
											fill: #FFFFFF;
										}

										.st3 {
											fill: #C2191E;
										}

										.st4 {
											fill: #1DA1F3;
										}

										.st5 {
											fill: #FEFE00;
										}

										.st6 {
											fill: #25D366;
											stroke: #FFFFFF;
											stroke-width: 5;
											stroke-miterlimit: 10;
										}

										.st7 {
											fill: #CB2027;
										}

										.st8 {
											fill: #0077B5;
										}

										.st9 {
											fill: url(#SVGID_2_);
										}

										.st10 {
											fill: url(#SVGID_3_);
										}

										.st11 {
											fill: #FF004F;
										}

										.st12 {
											fill: #00F7EF;
										}

										.st13 {
											fill: #5181B8;
										}

										.st14 {
											fill: #395976;
										}

										.st15 {
											fill: #F58220;
										}

										.st16 {
											fill: #E6162D;
										}

										.st17 {
											fill: #FF9933;
										}
									</style>
									<g id="guidlines" />
									<g id="FB" />
									<g id="ig" />
									<g id="yt" />
									<g id="twitter" />
									<g id="snapchat" />
									<g id="WA" />
									<g id="Pinterrest" />
									<g id="Layer_9" />
									<g id="Layer_10" />
									<g id="Layer_11">
										<g>
											<g>
												<path class="st15" d="M32,2c-7.4,0-13.5,6-13.5,13.5c0,7.4,6,13.5,13.5,13.5s13.5-6,13.5-13.5C45.5,8,39.4,2,32,2z M32,20     c-2.5,0-4.5-2-4.5-4.5c0-2.5,2-4.5,4.5-4.5c2.5,0,4.5,2,4.5,4.5C36.5,18,34.5,20,32,20z" />
											</g>
											<g>
												<path class="st15" d="M48.6,38.1c-3.4,1.9-7.1,3.2-10.8,3.8l10.5,12.9c1.2,1.5,1.5,3.6,0.4,5.2c-1.7,2.6-5.3,2.7-7.1,0.4     l-9.7-11.9l-9.6,11.9c-0.9,1.1-2.1,1.6-3.4,1.6c-1.3,0-2.6-0.6-3.5-1.8c-1.1-1.5-1-4,0.2-5.5l10.4-13c-3.7-0.7-7.4-1.9-10.7-3.8     c-2.1-1.2-2.8-3.8-1.6-6c1.2-2.1,3.9-2.8,6-1.6c7.6,4.3,17.1,4.3,24.8,0.1c2.1-1.2,4.8-0.4,5.9,1.7     C51.5,34.3,50.7,36.9,48.6,38.1z" />
											</g>
										</g>
									</g>
									<g id="Layer_12" />
									<g id="Layer_13" />
									<g id="Layer_14" />
									<g id="Layer_15" />
									<g id="Layer_16" />
									<g id="Layer_17" />
								</svg>
							</a>
						</li>
						<li class="header__social-item rounded-circle d-flex justify-content-center align-items-center">
							<a href="https://tenchat.ru/2167581" class="header__social-link" target="_blank">


								<svg width="15" height="15" version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

									<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="none">
										<path d="M177 5106 c-66 -24 -111 -61 -142 -117 l-30 -54 0 -2375 0 -2375 31 -55 c35 -61 106 -113 171 -124 65 -10 4684 -7 4723 4 65 18 123 63 155 121 l30 54 0 2375 0 2375 -31 55 c-35 61 -106 113 -171 124 -21 3 -1086 6 -2368 5 -1934 0 -2336 -2 -2368 -13z m2754 -646 c368 -29 880 -123 1042 -192 220 -94 386 -276 455 -500 25 -79 66 -342 83 -518 6 -69 11 -226 11 -350 0 -339 -43 -717 -101 -887 -85 -249 -278 -433 -533 -507 -114 -33 -117 -35 -133 -67 -12 -23 -15 -88 -15 -357 0 -340 -1 -352 -41 -352 -10 0 -168 127 -351 282 -183 155 -353 290 -378 302 -42 19 -60 20 -310 18 -398 -5 -723 24 -1080 94 -362 71 -488 116 -622 222 -156 124 -244 274 -288 486 -50 247 -64 414 -64 771 0 359 12 512 64 765 54 266 201 460 438 579 142 72 625 170 982 201 69 5 141 12 160 14 87 8 559 5 681 -4z" />
										<path d="M1712 3725 c-55 -24 -62 -57 -62 -280 0 -199 8 -250 41 -271 8 -5 119 -11 247 -14 l234 -5 34 -37 34 -38 0 -535 c0 -573 0 -578 49 -605 27 -14 502 -13 534 1 53 24 52 12 57 605 5 524 6 553 24 573 31 34 80 41 294 41 l204 0 29 29 29 29 0 222 c0 246 -5 269 -61 289 -22 8 -274 11 -843 11 -680 -1 -816 -3 -844 -15z" />
									</g>
								</svg>

							</a>
						</li>
					</ul> -->

					<div class="header__btn header__btn--mail fs-16 fw-500 btn text-white col-2 px-0 d-none d-lg-block">
						<a data-popup="#callback" href="#callback" role="button" title="Написать нам">Написать нам</a>
					</div>
					<button type="button" class="col-2 col-sm-1 col-open d-block d-lg-none header__burger burger button">
						<span class="burger__inner">
							<span></span>
						</span>
					</button>
				</div>
			</div>
		</header>
		<main>
			<? if (PAGE == 'TEXT' || PAGE == 'CONTAINER') : ?>
				<section class="promo promo__bg">
					<div class="container">
						<div class="promo__content">
							<? $APPLICATION->IncludeComponent(
								"bitrix:breadcrumb",
								".default",
								array(
									"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
									"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
									"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
								),
								false
							); ?>
							<div class="row">
								<div class="col-12 col-lg-6 col-xl-6">
									<h1 class="promo-shedule__title promo__title title fw-900 my-4">
										<? $APPLICATION->ShowTitle(true); ?>
									</h1>
									<h2 class="promo-shedule__subtitle promo__subtitle subtitle fw-400 fs-24">
										<? $APPLICATION->ShowProperty("SLOGAN") ?>
									</h2>
									<div class="promo-shedule__btn promo__btn btn col-5 col-md-4 fs-16 fw-600 px-2 py-3 btn-primary btn-sm text-uppercase">
										<a data-popup="#callback" href="#callback" role="button" title="Записаться">Записаться</a>
									</div>
								</div>
								<div class="col-6 offset-2 col-xl-4 d-none d-lg-block">
									<div class="promo__box-img position-absolute">
										<img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/2255-pages.svg" alt="2255" class="promo-shedule__img promo__img">
									</div>
								</div>
							</div>
						</div>
						<div class="promo-shedule__ellipse1 promo__ellipse1"></div>
						<div class="promo-shedule__ellipse2 promo__ellipse2"></div>
					</div>
				</section>
				<? $APPLICATION->ShowViewContent('topImage'); ?>
				<?
				$APPLICATION->IncludeFile($APPLICATION->GetCurPage() . "/top.php", array(), array(
					'NAME' => 'блок',
					'MODE' => 'php'
				));
				?>
			<? endif; ?>
			<? if (PAGE == 'TEXT') : ?>
				<section class="bg-white text-dark py-5 color">
					<div class="container py-5">
					<? endif; ?>