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
<section class="about" id="about">
	<div class="container">
		<h2 class="about__title title text-primary fs-14 fw-500 mb-4">О клубе</h2>
		<h3 class="about__subtitle subtitle fw-700">Будем знакомы</h3>
		<div class="row gy-5 gy-lg-0">
			<div class="col-12 col-lg-6 mb-5 mb-lg-0">
				<div class="about__box-text fs-16">
					<?$APPLICATION->IncludeFile(
						$templateFolder."/include/top.php",
						array(),
						array(
							'MODE' => 'html'
						)
					);?>
				</div>
				<div class="about__box-img text-center">
					<picture>
						
						<img src="<?=SITE_TEMPLATE_PATH;?>/img/about-foto-1.png" alt="about" class="about__img" />
					</picture>
					<div class="about__content-border">
						<div class="about__content">
							<p class="about__text text fw-700 fs-16 text-center mb-2">
								<?$APPLICATION->IncludeFile(
									$templateFolder."/include/name.php",
									array(),
									array(
										'NAME' => 'имя',
										'MODE' => 'text'
									)
								);?>
							</p>
							<p class="about__text text fs-16 text-center mb-0">
								<?$APPLICATION->IncludeFile(
									$templateFolder."/include/title.php",
									array(),
									array(
										'NAME' => 'звание',
										'MODE' => 'text'
									)
								);?>
							</p>
						</div>
					</div>
					<div class="about__box-border--big ">
						<div class="about__box-circle--big"></div>
					</div>
					<div class="about__box-border--center ">
						<div class="about__box-circle--center"></div>
					</div>
					<div class="about__box-border--small"></div>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="about__box-content row gy-5">
<?foreach($arResult["ITEMS"] as $arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
					<div class="col-12 col-sm-6 py-0" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
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
				<div class="about__box-text fs-16">
					<?$APPLICATION->IncludeFile(
						$templateFolder."/include/bottom.php",
						array(),
						array(
							'MODE' => 'html'
						)
					);?>
				</div>
				<blockquote class="blockquote about__blockquote fs-16">
					<?$APPLICATION->IncludeFile(
						$templateFolder."/include/quote.php",
						array(),
						array(
							'MODE' => 'html'
						)
					);?>
				</blockquote>
			</div>
		</div>
	</div>
</section>