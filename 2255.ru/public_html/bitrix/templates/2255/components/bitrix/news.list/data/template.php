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
?>
<section class="advantages pt-5 pt-lg-0">
	<div class="container">
		<div class="row mb-5 gx-2">
			<div class="col-3 col-lg-2">
				<div class="advantages__box-img">
					<?=file_get_contents($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/img/icons/2.svg');?>
				</div>
			</div>
			<div class="col-3 col-lg-2">
				<div class="advantages__box-img">
					<?=file_get_contents($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/img/icons/2.svg');?>
				</div>
			</div>
			<div class=" col-4 d-none  d-lg-flex justify-content-center align-items-center">
				<div class="advantages__box-hr w-100  d-flex justify-content-center align-items-center">
					<hr class="advantages__hr w-100">
				</div>
			</div>
			<div class="col-3 col-lg-2">
				<div class="advantages__box-img">
					<?=file_get_contents($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/img/icons/5.svg');?>
				</div>
			</div>
			<div class="col-3 col-lg-2">
				<div class="advantages__box-img">
					<?=file_get_contents($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/img/icons/5.svg');?>
				</div>
			</div>
		</div>
		<h2 class="advantages__subtitle subtitle fs-32 fw-700 text-center mx-auto">
			Энергия, молодость и красота, которую ты приобретаешь, начиная заниматьсяв
			22 и здоровье, которое ты сохраняешь и в 55.
		</h2>
		<div class="row gy-5">
<?foreach($arResult["ITEMS"] as $arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
			<div class="col-12 col-sm-6 col-lg-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="about__box-border h-100">
					<div class="about__box h-100">
						<p class="about__text text fw-700 fs-16 text-center">
							<?=$arItem["NAME"]?>
						</p>
						<div class="box-border">
							<div class="about__box-circle box-circle d-flex justify-content-center align-items-center">
								<?=file_get_contents($_SERVER['DOCUMENT_ROOT'].CFile::GetPath($arItem['PROPERTIES']['ICON']['VALUE']));?>
							</div>
						</div>
					</div>
				</div>
			</div>
<?endforeach;?>
		</div>
	</div>
</section>