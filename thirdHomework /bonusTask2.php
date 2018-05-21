<?php

/*

	You need to find out a unique value in array, you are given arrays:
	- [ 1, 1, 1, 2, 1, 1 ] => 2
	- [ 0, 0, 0.55, 0, 0 ] => 0.55
	- [3,1,5,3,7,4,1,5,7] => 4
*/


function getUnique($arr){
    $unique = array_unique($arr);
    sort($unique);
    $result = [];
    
    for($el = 0; $el < count($unique); $el++){
        $element = array_keys($arr, $unique[$el]);
        if(count($element) == 1) $result[] = $unique[$el];
    }
    var_dump($result);
}

getUnique([ 1, 1, 1, 2, 1, 1 ]); // returns 2
getUnique([ 0, 0, 0.55, 0, 0 ]); // returns 0.55
getUnique([3,1,5,3,7,4,1,5,7]); // returns 4

?>