<?php

function divisible_by_three(int $max, int $min): array 
{
	$arr_result = [];
	
	for($i = $min; $i <= $max; $i ++){
		if($i % 3 == 0){
			$arr_result[] = $i;
		}
	}
	return 	$arr_result;

}

$arr = array(12, 9, 6, 3);
assert(divisible_by_three(12, 1) == $arr);

?>