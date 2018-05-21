<?php

/*

We have chars mapping: A => T, C => G. 
You need to create a converter for strings with the results:
"ATTGC" -> returns "TAACG", "GTAT" -> returns "CATA"
*/

$map = ['A'=>'T', 'C' => 'G'];

$str = "ATTGC";

for($x = 0; $x<strlen($str);$x++)
 foreach ($map as $key => $value)
  
  if ($str[$x] == $key)
      $str[$x] = $value;
  
  elseif($str[$x] == $value)
      $str[$x] = $key;
 
echo $str;
?>