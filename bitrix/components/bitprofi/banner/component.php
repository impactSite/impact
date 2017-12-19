<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
  die();

//Params
$arParams["TYPE"] = (isset($arParams["TYPE"]) ? trim($arParams["TYPE"]) : "");

if ($arParams["CACHE_TYPE"] == "Y" || ($arParams["CACHE_TYPE"] == "A" && COption::GetOptionString("main", "component_cache_on", "Y") == "Y"))
  $arParams["CACHE_TIME"] = intval($arParams["CACHE_TIME"]);
else
  $arParams["CACHE_TIME"] = 0;

//Result
$arResult = Array();

$obCache = new CPHPCache;
$cache_id = SITE_ID."|banner|".serialize($arParams)."|".$USER->GetGroups();
$cache_path = "/".SITE_ID.$this->GetRelativePath();

if ($obCache->StartDataCache($arParams["CACHE_TIME"], $cache_id, $cache_path))
{
  if(!CModule::IncludeModule("fileman"))
    return;

  CMedialib::Init();

  $arResult["BANNERS"] = CMedialibItem::GetList(array("arCollections" => Array($arParams["TYPE"])));

  $this->IncludeComponentTemplate();

  $templateCachedData = $this->GetTemplateCachedData();

  $obCache->EndDataCache(
    Array(
      "arResult" => $arResult,
      "templateCachedData" => $templateCachedData
    )
  );
}
else
{
  $arVars = $obCache->GetVars();
  $arResult = $arVars["arResult"];
  $this->SetTemplateCachedData($arVars["templateCachedData"]);
}
?>