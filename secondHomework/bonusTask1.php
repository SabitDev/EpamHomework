<?php

/*
	My friend wants a new band name for her band. She likes bands that use the formula: 'The' + a noun with first letter capitalized. However, when a noun STARTS and ENDS with the same letter, she likes to repeat the noun twice and connect them together with the first and last letter, combined into one word like so (WITHOUT a 'The' in front):

	dolphin -> The Dolphin
	alaska -> Alaskalaska
	europe -> Europeurope

*/
	
function newBand ($str){
 if($str[0]===$str[strlen($str)-1]) echo ucfirst($str) . substr($str, 1 ) . "\n";
  else echo 'The ' . ucfirst($str) . "\n";
}

newBand("dolphin");
newBand("alaska");
newBand("europe");

?>