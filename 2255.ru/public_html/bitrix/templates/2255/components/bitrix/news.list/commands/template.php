<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
// print_r($arResult);
?>
<section class="team bg-white">
	<div class="container">
		<div class="row">
			<? foreach ($arResult["ITEMS"] as $arItem) :
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				if (CModule::IncludeModule("millcom.phpthumb")) {
					$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 5);
					$arItem["PREVIEW_PICTURE"]["JPG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 6);
				}


			?>
				<div class="col-6 col-md-4 col-xl-3" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<div class="team__item">
						<div class="team__box-img mb-4">
							<picture>
								<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"]; ?>" type="image/webp">
								<img src="<?= $arItem["PREVIEW_PICTURE"]["JPG"]; ?>" alt="Команда" class="team__img rounded-2 w-100">
							</picture>
						</div>
						<span class="team__text text fs-16 fw-700 d-block text-secondary"><?= $arItem["NAME"] ?></span>
						<span class="team__text text fs-16 d-block text-secondary"><?= $arItem["PROPERTIES"]["POST"]["VALUE"] ?></span>
					</div>
				</div>

			<? endforeach; ?>

		</div>
	</div>
</section>