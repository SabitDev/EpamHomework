<?php

/*
	Змінна $min має число від 0 до 59. Визначити в яку чверть години потрапляє число, відповідно вивести на екран одне з значень: «перша», «друга», «третя»б «четверта».
*/


$min = rand(0, 59);

switch ( intval($min/15) ) {
    case 0:
        echo "Перша";
        break;
    case 1:
        echo "Друга";
        break;
    case 2:
        echo "Третя";
        break;
    case 3:
        echo "Четверта";
        break;
}

?>