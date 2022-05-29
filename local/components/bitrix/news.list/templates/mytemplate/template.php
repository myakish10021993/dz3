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
<div class="news-list">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<div style="background-color: rgba(0,255,0,0.3); margin: 30px; padding: 15px;">
		<p>ФИО: <?=$arItem["PROPERTIES"]["FIO"]["VALUE"]?></p>
		<p>Телефон: <?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?></p>
		<p>Город: <?=$arItem["PROPERTIES"]["ADDRESS"]["PROPERTIES"]["CITY"]["VALUE"]?></p>
		<p>Улица: <?=$arItem["PROPERTIES"]["ADDRESS"]["PROPERTIES"]["STREET"]["VALUE"]?></p>
		<p>Номер дома: <?=$arItem["PROPERTIES"]["ADDRESS"]["PROPERTIES"]["HOUSE"]["VALUE"]?></p>
		<p>Квартира: <?=$arItem["PROPERTIES"]["ADDRESS"]["PROPERTIES"]["APPARTMENT"]["VALUE"]?></p>
	</div>
<?endforeach;?>
</div>
