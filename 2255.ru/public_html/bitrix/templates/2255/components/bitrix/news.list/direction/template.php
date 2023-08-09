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
<section class="services" id="services">
	<div class="container">
		<h2 class="services__title title text-primary fs-14 fw-500 mb-4">Услуги</h2>
		<div class="row">
			<div class="col-12 col-lg-6">
				<h3 class="services__subtitle subtitle fw-700 col-8">
					Выбирай направление<br> по душе
				</h3>
				<div class="services__box col-lg-10 col-12 d-flex flex-column justify-content-center ">
					<h3 class="services__description fs-32 fw-700 position-relative">Гостевой визит</h3>
					<p class="services__text text fs-16 position-relative mb-5">Запишись прямо сейчас!</p>
					<div class="d-flex pt-2 mb-4 justify-content-center">
						<p class="services__text text services__text--pseudo fs-16 px-2">
							Тренажерный зал
						</p>
						<p class="services__text text services__text--pseudo fs-16 px-2">
							Групповые программы
						</p>
						<p class="services__text text services__text--pseudo fs-16 px-2">
							Финская сауна
						</p>
					</div>
					<div class="services__btn btn col-12 col-sm-5 fs-16 fw-600 px-2 py-3 btn-primary btn-sm d-block mx-auto my-0 position-relative">
						<a data-bs-popup="#callback" href="#callback" role="button" title="Оформить">Записаться</a>
					</div>
					<div class="services__ellipse"></div>
				</div>
			</div>


			<div class="col-12 col-lg-6">
				<div class="accordion " id="accordionDirection">
<?foreach($arResult["ITEMS"] as $key => $arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
					<div class="card mb-2 me-4 me-lg-0" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="card-header ps-0" id="direction_<?=$arItem['ID'];?>">
							<h2 class="mb-0">
								<button class="card__btn btn btn-link btn-block text-lg-start d-flex d-lg-inline-block text-center text-decoration-none fw-700 fs-20 py-3 ps-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?=$arItem['ID'];?>" aria-expanded="<?=$key ? 'false' : 'true'?>" aria-controls="collapseOne">
									<span class="text-primary services__span">0<?=$key+1?></span>
									<?=$arItem['NAME'];?>
									<span class="services__box-border box-border d-block">
										<span class="services__box-circle box-circle d-flex justify-content-center align-items-center">
											<span class="services__arrow"></span>
										</span>
									</span>
								</button>
							</h2>
						</div>

						<div id="collapse_<?=$arItem['ID'];?>" class="collapse<?=$key ? '' : ' show'?>" aria-labelledby="direction_<?=$arItem['ID'];?>" data-bs-parent="#accordionDirection">
							<div class="card-body">
								<?=$arItem["PREVIEW_TEXT"]?>
							</div>
						</div>
					</div>

<?endforeach;?>
				</div>
			</div>
		</div>
	</div>
</section>