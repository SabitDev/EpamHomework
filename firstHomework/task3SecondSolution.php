<?php
/*
	Якщо змінна $a більша нуля и менша 5-ти, то вивести 'Вірно', інакше вивести 'Невірно'. Перевірте роботу скрипта при $a, зі значеннями - 5, 0, -3, 2
*/

// Second solution

$test = [5,0,-3,2]; // set of value that must be tested

foreach ($test as $a)
  echo $a > 0 && $a < 5? 'Вірно' : 'Невірно' . "\n";

?>