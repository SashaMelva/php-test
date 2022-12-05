<?php

function count_even1(array $arr): int 
{
	$arr_result = [];

	foreach($arr as &$i){
		if($i % 2 == 0){
			$arr_result[] = $i;
		}
	}
	return count($arr_result);
}

function count_even(array $arr): int 
{
	$n = 0;

	foreach($arr as &$i){
		if($i % 2 == 0){
			$n ++;
		}
	}

	return $n;
}


$arr = array(1, 23, 6, 10);
assert(count_even($arr) == 2);

?>