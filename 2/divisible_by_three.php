<?php




function divisible_by_three(int $max, int $min): array 
{
	$arr_result = [];
	
	for($i = $min; $i <= $max; $i++){
		if($i % 3 == 0){
			$arr_result[] = $i;
		}
		
		
	}

	return 	$arr_result;

}

print_r (divisible_by_three(10, 8));

?>