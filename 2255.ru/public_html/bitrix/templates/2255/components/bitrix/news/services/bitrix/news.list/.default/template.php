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
if ($arResult['SECTION']['PATH'][0]['DETAIL_PICTURE']) {
	$this->SetViewTarget('topImage');
	$arResult['SECTION']['PATH'][0]['DETAIL_PICTURE_SRC'] = CFile::GetPath($arResult['SECTION']['PATH'][0]['DETAIL_PICTURE']);

	if (CModule::IncludeModule("millcom.phpthumb")) {
		$arResult['SECTION']['PATH'][0]['DETAIL_PICTURE_WEBP'] = CMillcomPhpThumb::generateImg($arResult['SECTION']['PATH'][0]['DETAIL_PICTURE_SRC'], 7);
		$arResult['SECTION']['PATH'][0]['DETAIL_PICTURE_JPG'] = CMillcomPhpThumb::generateImg($arResult['SECTION']['PATH'][0]['DETAIL_PICTURE_SRC'], 8);
	}


?>

	<div class="promo__box position-relative text-center pb-5 mb-5">
		<div class="container-fluid">
			<picture>
				<source srcset="<?= $arResult['SECTION']['PATH'][0]['DETAIL_PICTURE_WEBP']; ?>" type="image/webp">
				<img src="<?= $arResult['SECTION']['PATH'][0]['DETAIL_PICTURE_JPG']; ?>" alt="" class="rounded-3 mw-100" />
			</picture>
		</div>
	</div>

<?
	$this->EndViewTarget();
}

?>

<section class="programs">
	<div class="container">
		<h2 class="programs__title title text-primary fs-14 fw-500 mb-4">
			О тренировках
		</h2>
		<h3 class="programs__subtitle subtitle fw-700"><?= $arResult['SECTION']['PATH'][0]['NAME'] ?></h3>
		<div class="row g-5 gx-lg-4  gy-lg-0">
			<div class="col-12 col-lg-6">
				<div class="programs__box-text">
					<p class="programs__text text fs-16">
						<?= $arResult['SECTION']['PATH'][0]['DESCRIPTION'] ?>
					</p>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 ">
				<div class="programs__box-border h-100">
					<div class="programs__box h-100">
						<p class="programs__text text fw-700 fs-16 text-center">
							2000 кв.м современного фитнес пространства
						</p>
						<div class="box-border">
							<div class="programs__box-circle box-circle d-flex justify-content-center align-items-center">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_113_376)">
										<path d="M20 13V20C20 20.2652 19.8946 20.5196 19.7071 20.7071C19.5196 20.8946 19.2652 21 19 21H5C4.73478 21 4.48043 20.8946 4.29289 20.7071C4.10536 20.5196 4 20.2652 4 20V13H20ZM14.5 2C15.0906 1.9998 15.6717 2.14908 16.1892 2.43393C16.7066 2.71879 17.1435 3.12995 17.4592 3.62914C17.7749 4.12832 17.9592 4.69929 17.9948 5.28886C18.0305 5.87843 17.9163 6.46743 17.663 7.001L21 7C21.2652 7 21.5196 7.10536 21.7071 7.2929C21.8946 7.48043 22 7.73479 22 8V11C22 11.2652 21.8946 11.5196 21.7071 11.7071C21.5196 11.8946 21.2652 12 21 12H3C2.73478 12 2.48043 11.8946 2.29289 11.7071C2.10536 11.5196 2 11.2652 2 11V8C2 7.73479 2.10536 7.48043 2.29289 7.2929C2.48043 7.10536 2.73478 7 3 7L6.337 7.001C5.98076 6.25268 5.90163 5.40221 6.1137 4.601C6.32577 3.7998 6.81529 3.09985 7.4951 2.62576C8.17491 2.15167 9.0009 1.9342 9.82603 2.01207C10.6512 2.08994 11.4219 2.4581 12.001 3.051C12.326 2.71753 12.7147 2.45268 13.1439 2.27215C13.5732 2.09162 14.0343 1.99908 14.5 2ZM9.5 4C9.11478 4.00019 8.74441 4.14858 8.46561 4.41441C8.18682 4.68025 8.02099 5.04315 8.00248 5.42792C7.98396 5.81269 8.11419 6.18984 8.36618 6.48121C8.61816 6.77257 8.97258 6.95583 9.356 6.993L9.5 7H11V5.5C11 5.12712 10.8611 4.76761 10.6104 4.49158C10.3597 4.21556 10.0152 4.0428 9.644 4.007L9.5 4ZM14.5 4L14.356 4.007C14.0094 4.04021 13.6851 4.19298 13.4388 4.43911C13.1925 4.68525 13.0395 5.0094 13.006 5.356L13 5.5V7H14.5L14.644 6.993C15.015 6.95703 15.3594 6.7842 15.6099 6.50819C15.8605 6.23218 15.9993 5.87277 15.9993 5.5C15.9993 5.12724 15.8605 4.76783 15.6099 4.49182C15.3594 4.21581 15.015 4.04297 14.644 4.007L14.5 4Z" fill="#05C3DE"></path>
									</g>
									<defs>
										<clipPath id="clip0_113_376">
											<rect width="24" height="24" fill="white"></rect>
										</clipPath>
									</defs>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="programs__box-border h-100">
					<div class="programs__box h-100">
						<p class="programs__text text fw-700 fs-16 text-center">
							Более 15 направлений групповых программ
						</p>
						<div class="box-border">
							<div class="programs__box-circle box-circle d-flex justify-content-center align-items-center">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_113_376)">
										<path d="M20 13V20C20 20.2652 19.8946 20.5196 19.7071 20.7071C19.5196 20.8946 19.2652 21 19 21H5C4.73478 21 4.48043 20.8946 4.29289 20.7071C4.10536 20.5196 4 20.2652 4 20V13H20ZM14.5 2C15.0906 1.9998 15.6717 2.14908 16.1892 2.43393C16.7066 2.71879 17.1435 3.12995 17.4592 3.62914C17.7749 4.12832 17.9592 4.69929 17.9948 5.28886C18.0305 5.87843 17.9163 6.46743 17.663 7.001L21 7C21.2652 7 21.5196 7.10536 21.7071 7.2929C21.8946 7.48043 22 7.73479 22 8V11C22 11.2652 21.8946 11.5196 21.7071 11.7071C21.5196 11.8946 21.2652 12 21 12H3C2.73478 12 2.48043 11.8946 2.29289 11.7071C2.10536 11.5196 2 11.2652 2 11V8C2 7.73479 2.10536 7.48043 2.29289 7.2929C2.48043 7.10536 2.73478 7 3 7L6.337 7.001C5.98076 6.25268 5.90163 5.40221 6.1137 4.601C6.32577 3.7998 6.81529 3.09985 7.4951 2.62576C8.17491 2.15167 9.0009 1.9342 9.82603 2.01207C10.6512 2.08994 11.4219 2.4581 12.001 3.051C12.326 2.71753 12.7147 2.45268 13.1439 2.27215C13.5732 2.09162 14.0343 1.99908 14.5 2ZM9.5 4C9.11478 4.00019 8.74441 4.14858 8.46561 4.41441C8.18682 4.68025 8.02099 5.04315 8.00248 5.42792C7.98396 5.81269 8.11419 6.18984 8.36618 6.48121C8.61816 6.77257 8.97258 6.95583 9.356 6.993L9.5 7H11V5.5C11 5.12712 10.8611 4.76761 10.6104 4.49158C10.3597 4.21556 10.0152 4.0428 9.644 4.007L9.5 4ZM14.5 4L14.356 4.007C14.0094 4.04021 13.6851 4.19298 13.4388 4.43911C13.1925 4.68525 13.0395 5.0094 13.006 5.356L13 5.5V7H14.5L14.644 6.993C15.015 6.95703 15.3594 6.7842 15.6099 6.50819C15.8605 6.23218 15.9993 5.87277 15.9993 5.5C15.9993 5.12724 15.8605 4.76783 15.6099 4.49182C15.3594 4.21581 15.015 4.04297 14.644 4.007L14.5 4Z" fill="#05C3DE"></path>
									</g>
									<defs>
										<clipPath id="clip0_113_376">
											<rect width="24" height="24" fill="white"></rect>
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
</section>
<? if ($arResult["ITEMS"]) : ?>


	<section class="trends bg-white">
		<div class="container">
			<h2 class="trends__title title text-primary fs-14 fw-500 mb-4">
				Направления
			</h2>
			<h3 class="trends__subtitle subtitle fw-700 text-secondary mb-5">
				Выбирай направление по душе
			</h3>
			<div class="trends__content">
				<div class="row g-0">

					<? foreach ($arResult["ITEMS"] as $arItem) :
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
						<div class="col-12 col-md-6 col-lg-4 border-bottom" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
							<div class="trends__item p-4 h-100">
								<h3 class="trends__description text-secondary fs-20 fw-700 mb-2 mt-4">
									<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a>
								</h3>
								<div class="trends__box-text">
									<p class="trends__text text text-secondary fs-16">
										<?= $arItem['PREVIEW_TEXT'] ?>
									</p>
								</div>
							</div>
						</div>
						<? if ($arItem['PREVIEW_PICTURE']['SRC']) :

							if (CModule::IncludeModule("millcom.phpthumb")) {
								$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 9);
								$arItem["PREVIEW_PICTURE"]["JPG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 10);
							}

						?>
							<div class="col-md-6 col-lg-4 d-none d-md-block border-bottom">
								<div class="trends__item p-4 h-100">
									<div class="trends__box-img">
										<picture>
											<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp">
											<img src="<?= $arItem["PREVIEW_PICTURE"]["JPG"] ?>" alt="trends" class="trends__img rounded-2">
										</picture>
									</div>
								</div>
							</div>
						<? endif; ?>
					<? endforeach; ?>
				</div>
			</div>
		</div>
	</section>
<? endif; ?>

<? return false; ?>


<div class="news-list">

	<? foreach ($arResult["ITEMS"] as $arItem) : ?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<p class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) : ?>
				<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) : ?>
					<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img class="preview_picture" border="0" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>" height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" style="float:left" /></a>
				<? else : ?>
					<img class="preview_picture" border="0" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>" height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" style="float:left" />
				<? endif; ?>
			<? endif ?>
			<? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]) : ?>
				<span class="news-date-time"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
			<? endif ?>
			<? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]) : ?>
				<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) : ?>
					<a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><b><? echo $arItem["NAME"] ?></b></a><br />
				<? else : ?>
					<b><? echo $arItem["NAME"] ?></b><br />
				<? endif; ?>
			<? endif; ?>
			<? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]) : ?>
				<? echo $arItem["PREVIEW_TEXT"]; ?>
			<? endif; ?>
			<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) : ?>
		<div style="clear:both"></div>
	<? endif ?>
	<? foreach ($arItem["FIELDS"] as $code => $value) : ?>
		<small>
			<?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?>
		</small><br />
	<? endforeach; ?>
	<? foreach ($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty) : ?>
		<small>
			<?= $arProperty["NAME"] ?>:&nbsp;
			<? if (is_array($arProperty["DISPLAY_VALUE"])) : ?>
				<?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
			<? else : ?>
				<?= $arProperty["DISPLAY_VALUE"]; ?>
			<? endif ?>
		</small><br />
	<? endforeach; ?>
	</p>
<? endforeach; ?>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
	<br /><?= $arResult["NAV_STRING"] ?>
<? endif; ?>
</div>