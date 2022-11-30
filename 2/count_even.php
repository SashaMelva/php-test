<?php

function count_even(array $arr): int 
{
	$arr_result = [];
	
	foreach($arr as &$i){
		if($i % 3 == 0){
			$arr_result[] = $i;
		}
		
	}

	return count($arr_result);

}
$arr = array(1, 23, 6, 10);
print_r (count_even($arr));

?>