<?php

function sum($str){
  if($str == 'NULL' || $str == '') return 0;
  
  for($x = 0; $x < strlen($str); $x++)
    $result += ord($str[$x]);
  
  return $result;
}

$str1 = strtoupper("hello WOrLD!"); // input string
$str2 = strtoupper("HEllo WORLD!"); // input string

echo sum($str1) == sum($str2) ? 'equal': 'no equal'; 

?>