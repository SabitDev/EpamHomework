<?php

/*
 Є рядок з 6-ти чисел (наприклад: 385934). 
 Перевірте, чи сума перших трьох чисел дорівнює сумі других трьох чисел. 
 Якщо це так – виведіть 'так' інакше – 'ні'.
*/

$numbers = "385934"; // given numbers

$half = strlen($numbers)/2; // how many digits of part

$arr = str_split($numbers); 

for ($x = 0; $x < $half; $x++) { 
    $firstPart  += $arr[$x]; 
    $secondPart += $arr[$x+$half];
}

echo $firstPart == $secondPart? 'Так':'Ні';
?>