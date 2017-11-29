<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
<!Doctype HTML>
<html>
<head>
<title><? $APPLICATION->ShowTitle(false); ?></title>
<?$APPLICATION->ShowHead();?>
<link href="<?=SITE_TEMPLATE_PATH?>/styles.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<header>
	<div class="top-line">
		<div class="ino">
			<div>
				<span class="callback" title="заказать обратный звонок"></span>
				<a class="contact" href="/about/contacts/">Контакты</a>
			</div>
			<div class="img_search"><img src="/bitrix/templates/bitprofi/images/search_red.png" alt="поиск" class="mobile-search-img" /></div>
			<div>
			<?$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"flat1", 
	array(
		"PAGE" => "#SITE_DIR#search/index.php",
		"USE_SUGGEST" => "N",
		"COMPONENT_TEMPLATE" => "flat1"
	),
	false
);?>
			</div>
			<a href="/personal/cart/" class="basket-mobile"></a>
		</div>
	</div>			
	<div class="top_menu">
		<div class="menu-1">
			<?$APPLICATION->IncludeComponent(
			"bitrix:menu", 
			"bitprofi-top", 
			array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "left-top",
				"DELAY" => "N",
				"MAX_LEVEL" => "1",
				"MENU_CACHE_GET_VARS" => array(
				),
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"ROOT_MENU_TYPE" => "left-top",
				"USE_EXT" => "N",
				"COMPONENT_TEMPLATE" => "bitprofi-top"
			),
			false
			);?>
		</div>		
		<div class="menu-2">
			<?$APPLICATION->IncludeComponent(
			"bitrix:menu", 
			"bitprofi-top", 
			array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "right-top",
				"DELAY" => "N",
				"MAX_LEVEL" => "1",
				"MENU_CACHE_GET_VARS" => array(
				),
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"ROOT_MENU_TYPE" => "right-top",
				"USE_EXT" => "N",
				"COMPONENT_TEMPLATE" => "bitprofi-top"
			),
			false
			);?>		
		</div>
	</div>
 	<div id="callback">
		<div class="callback">
			<a href="#close" title="Закрыть" class="close">X</a>
			<div class="callback-form">
				<div class="impact_callback">
					<div class="main-blocks-form">
						<h2><span>позвонить нам</span><br />8(495)744-00-50</h2>
						<span>звонки по России бесплатно</span>
						<p>call-центр работает</p>
						<p>ежедневно с 9.00 до 18.00</p>
					</div>
					<div class="main-blocks-form">
						<h2><span>Заказать обратный звонок</span></h2>
						<?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"template1", 
	array(
		"EMAIL_TO" => "danilovmaster2110@gmail.com",
		"EVENT_MESSAGE_ID" => array(
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NONE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "template1"
	),
	false
);?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="mobile_menu">&nbsp;</div>
		<? if ($APPLICATION->GetCurPage(false) === '/'): ?> 
		<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="логотип компании" class="logo" title="лучшая посуда - Импакт" />
		<? else : ?>
		<a href="/" class="logo" title="На главную"></a>
		<? endif; ?>		
		<div class="menu">
		<img src="<?=SITE_TEMPLATE_PATH?>/images/logo_picture.png" alt="logo" class="impact_back_to_top" title="наверх" />
		<?$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"bitprofi-main", 
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "top",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "top",
					"USE_EXT" => "N",
					"COMPONENT_TEMPLATE" => "bitprofi-main"
				),
				false
		);?>
		</div>
	</div>
</header>
<? if ($APPLICATION->GetCurPage(false) !== '/' && !CSite::InDir('/about/') ): ?> 
<div class="main_content">
<? endif; ?> 
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "template1", Array(
	"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
		"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "-",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
	),
	false
);?>