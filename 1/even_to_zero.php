<?php

function even_to_zero1(int $number)
{
	$str_numder = (string)$number;
	$count_number = strlen($str_numder);
	$arr_result = [];
	for($i = 10 ** ($count_number - 1); $i  >= 1 ;  $i = 10 ** ($count_number - 1)){
		
		if(strlen($str_numder) % 2 == 0 ){
			if(($count_number) % 2 == 0 ){
				$arr_result[] = floor($number / $i);
				$arr_result[] = 0;
			}
		}else{
			if(($count_number) % 2 > 0){
				$arr_result[] = floor($number / $i);
				if($i != 1){
					$arr_result[] = 0;
				}
			
			}
		}
		
		$number = (int)$number - (floor($number / $i) * $i);
		$count_number = $count_number - 1;
	}
	$result = implode("", $arr_result);
	return $result;
}
function even_to_zero(int $number)
{
	$str_numder = (string)$number;
	
	$arr_number = str_split($str_numder);
	$arr_result = [];
	
	for($i = 0; $i < count($arr_number); $i ++){
			if($i % 2 == 0){
				$arr_result[] = $arr_number[$i];
				
			}else{
				$arr_result[] = 0;
			}
		}
		
	$result = implode("", $arr_result);
	return $result;
}


assert(even_to_zero(1234567) == 1030507);
assert(even_to_zero(123456) == 103050);

?>