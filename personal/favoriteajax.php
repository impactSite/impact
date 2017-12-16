<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Персональный раздел");
?>
<? global $USER;
  if (CModule::IncludeModule ( "iblock" )) {
      $elId = intval ( $_REQUEST ["elid"] );
      $userId = $USER->GetID (); 
      $dbEl = CIBlockElement::GetList ( Array (), Array ("ID" => $elId, "IBLOCK_ID" => "2" ) );
  
      if ($obEl = $dbEl->GetNextElement () AND !empty($userId)) {
          $props = $obEl->GetProperties ();
          $UserList = array_unique($props["F_USER"]["VALUE"]); 
              if(!in_array($userId, $UserList)) {
                  $UserList[] = $userId;
                  CIBlockElement::SetPropertyValueCode ($elId, "F_USER", $UserList);
                  echo "done";
              }
              else {
                  $key = array_search($userId, $UserList);
                  unset($UserList[$key]);
                  CIBlockElement::SetPropertyValueCode ($elId, "F_USER", $UserList);
                  echo "deleted";
              }
      }
      else {
          echo "fail";
      }
  }
  exit;
?>	  
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
