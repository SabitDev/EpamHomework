<?php
/*
	Якщо змінна $a більша нуля и менша 5-ти, то вивести 'Вірно', інакше вивести 'Невірно'. Перевірте роботу скрипта при $a, зі значеннями - 5, 0, -3, 2
*/

// First solution

function task3($a){ // We make a new function for 
  if ($a > 0 && $a < 5) echo "Вірно\n";
   else echo "Невірно\n";
}

task3(5);	// returns Невірно
task3(0);	// returns Невірно
task3(-3);	// returns Невірно
task3(2);	// returns Bірно

?>
