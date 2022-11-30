<?php
function only_odd($arr) 
{
	$arr_result = [];
	foreach($arr as $i){
		if($i % 2 != 0){
			$arr_result[] = $i;
		}
	}

	return 	$arr_result;

}

$arr = array(1, 2, 3, 4);
print_r (only_odd($arr));

?>