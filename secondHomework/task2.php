<?php

/*
	Є рядок наступного вигляду: 4 літери, потім пробіл, потім ще 4 літери. Наприклад, такий рядок 'ФЫВА олдж'. Треба перетворити на наступний рядок 'АВЫФ ждло'. !!!! UTF-8
*/
	
function utf8_strrev($str){
    preg_match_all('/./u', $str, $ar);
    return join('',array_reverse($ar[0]));
}

$str  = "ФЫВА олдж";
$result = explode(" ", $str);

for($x = 0; $x < count($result); $x++) 
  $result[$x] = utf8_strrev($result[$x]);

$result = implode(" ",$result);

echo $result;
?>