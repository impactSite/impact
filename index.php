<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Импакт\"");
?>
<?$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");?>
<div class="gray">
<?$APPLICATION->IncludeComponent("bitprofi:banner", "slider1", Array(
	"TYPE" => "1",	// Тип баннера
		"CACHE_TYPE" => "N",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_NOTES" => ""
	),
	false
);?>
<div class="main_center">
	<div>
		<img src="<?=SITE_TEMPLATE_PATH?>/images/img1.jpg" alt="Фарфоровые сервизы" class="responsive"><a class="buttom sm-top" href="/catalog/">Каталог</a>
		<h3>Фарфоровые сервизы</h3>
		<p>Платиновая роза и тончайший черепок фарфора. Хит продаж!</p>	
	</div>
	<div>
		<img src="<?=SITE_TEMPLATE_PATH?>/images/img2.jpg" alt="Профессиональный фарфор" class="responsive"><a class="buttom sm-top" href="/catalog/">Каталог</a>
		<h3>Профессиональный фарфор</h3>
		<p>Качество фарфора отвечает всем повышенным требованиям профессиональной посуды, но цены значительно ниже английских и немецких аналогов.</p>		
	</div>
	<div>
		<img src="<?=SITE_TEMPLATE_PATH?>/images/img3.jpg" alt="Красная неделя" class="responsive"><a class="buttom sm-top" href="/catalog/">Каталог</a>
		<h3>Красная неделя</h3>
		<p>Каждую неделю Вас ждут удивительные скидки на самые потрясающие и великолепные наборы из фарфора, хрусталя и выдувного стелка!</p>	
	</div>
</div>
  <h3 class="lifest">LIFESTYLE</h3> 
 <?$APPLICATION->IncludeComponent("bitprofi:banner", "slider-4", Array(
	"TYPE" => "2",	// Тип баннера
		"CACHE_TYPE" => "N",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_NOTES" => ""
	),
	false
);?>
<div class="clear"></div>
 <h3 class="lifest">ЧТО НОВОГО</h3>
 <?$APPLICATION->IncludeComponent("bitprofi:banner", "slider-5", Array(
	"TYPE" => "4",	// Тип баннера
		"CACHE_TYPE" => "N",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_NOTES" => ""
	),
	false
);?>
<h3 class="chech">Lilien <br />Чешская Республика</h3>
<a href="/catalog/" class="buttom">КАТАЛОГ</a>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>