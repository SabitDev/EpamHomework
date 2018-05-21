<?php

/*
	Перетворити рядок 'var_test_text' в 'varTestText'
*/
$str  = "var_test_text";
$result = explode("_", $str);

for($x = 1; $x < count($result); $x++) $result[$x] = ucfirst($result[$x]);

$result = implode($result);

echo $result;
?>