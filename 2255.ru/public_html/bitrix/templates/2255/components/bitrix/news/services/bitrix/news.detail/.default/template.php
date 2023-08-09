<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
if ($arResult["DETAIL_PICTURE"]["SRC"]) {
	$this->SetViewTarget('topImage');
	if (CModule::IncludeModule("millcom.phpthumb")) {
		$arResult["DETAIL_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arResult["DETAIL_PICTURE"]["SRC"], 7);
		$arResult["DETAIL_PICTURE"]["JPG"] = CMillcomPhpThumb::generateImg($arResult["DETAIL_PICTURE"]["SRC"], 8);
	}


	?>

<div class="promo__box position-relative text-center pb-5 mb-5">
	<div class="container-fluid">
		<picture>
			<source srcset="<?=$arResult["DETAIL_PICTURE"]["WEBP"];?>" type="image/webp">
			<img src="<?=$arResult["DETAIL_PICTURE"]["JPG"];?>" alt="" class="rounded-3 mw-100"/>
		</picture>
	</div>
</div>

	<?
	$this->EndViewTarget();
}


?>
<section class="trends bg-white text-dark">
	<div class="container">
		<h2 class="trends__title title text-primary fs-14 fw-500 mb-4">
			О тренировках
		</h2>
		<h3 class="trends__subtitle subtitle fw-700 text-secondary mb-5">
			<?=$arResult["NAME"];?>
		</h3>
		<div class="text">
			<?echo $arResult["DETAIL_TEXT"];?>
		</div>
	</div>
</section>