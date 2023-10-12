<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul class="header__list d-flex h-100 flex-column align-items-center align-content-lg-start flex-lg-row justify-content-center justify-content-lg-between text-nowrap">
<?
$previousLevel = 0;
foreach($arResult as $arItem):
?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
			<li class="header__item header__item--parent">
				<a href="<?=$arItem["LINK"]?>" class="header__link header__link--after pe-lg-3"><?=$arItem["TEXT"]?></a>
				<ul class="header__list-child">

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>
				<li class="header__item">
					<a href="<?=$arItem["LINK"]?>" class="header__link"><?=$arItem["TEXT"]?></a>
				</li>
		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>

<?endif?>