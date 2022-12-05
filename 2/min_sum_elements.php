<?php

function min_sum_elements(array $arr): array 
{
	for($i = 0; $i < count($arr) - 1; $i ++){
        
        $arr_result[] = array($arr[$i] + $arr[$i + 1] => array($arr[$i] , $arr[$i + 1]));
    }
    
    $main_result = min($arr_result);
    $arr_result = [];
    
    foreach ($main_result as $main_result => $items)
    {
        foreach ($items as $key => $value)
        {
            $arr_result[] = $value;
        }
    }

	return $arr_result;

}
$arr = array(1, 23, 6, 10);
print_r (min_sum_elements($arr));

?>