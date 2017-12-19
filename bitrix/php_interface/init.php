<?AddEventHandler("iblock", "OnBeforeIBlockElementAdd", Array("SimCode", "OnBeforeElementAddHandler")); 
 
 class SimCode
 { 
  
  function OnBeforeElementAddHandler(&$arFields)
  {
     if(strlen($arFields["CODE"])<=0)
        {
              $arFields["CODE"] = SimCode::Translite($arFields["NAME"])."_".date('dmY');
                    return;
                       } 
                        
                        } 
                         
                         function Translite($str){
                            static $tbl= array(
                                  'а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ж'=>'g', 'з'=>'z',
                                        'и'=>'i', 'й'=>'y', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p',
                                              'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'ы'=>'y', 'э'=>'e', 'А'=>'A',
                                                    'Б'=>'B', 'В'=>'V', 'Г'=>'G', 'Д'=>'D', 'Е'=>'E', 'Ж'=>'G', 'З'=>'Z', 'И'=>'I',
                                                          'Й'=>'Y', 'К'=>'K', 'Л'=>'L', 'М'=>'M', 'Н'=>'N', 'О'=>'O', 'П'=>'P', 'Р'=>'R',
                                                                'С'=>'S', 'Т'=>'T', 'У'=>'U', 'Ф'=>'F', 'Ы'=>'Y', 'Э'=>'E', 'ё'=>"yo", 'х'=>"h",
                                                                      'ц'=>"ts", 'ч'=>"ch", 'ш'=>"sh", 'щ'=>"shch", 'ь'=>"", 'ъ'=>"", 'ю'=>"yu", 'я'=>"ya",
                                                                            'Ё'=>"YO", 'Х'=>"H", 'Ц'=>"TS", 'Ч'=>"CH", 'Ш'=>"SH", 'Щ'=>"SHCH", 'Ъ'=>"", 'Ь'=>"",
                                                                                  'Ю'=>"YU", 'Я'=>"YA", ' '=>"_", '№'=>"", '«'=>"<", '»'=>">", '-'=>"-"
                                                                                     );
                                                                                         return strtr($str, $tbl);
                                                                                         } 
                                                                                          
                                                                                          }
                                                                                          ?>
