<?php

function even_to_zero(int $number)
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
	echo $result;

}


even_to_zero(1234567);

?>