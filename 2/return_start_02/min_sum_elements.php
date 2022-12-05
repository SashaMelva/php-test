<?php

function min_sum_elements(array $arr): array 
{
	return array_map(
        fn($value, $key) => $value + $key + 1,
        $arr,
        array_keys($arr),
        //range(0, count($arr) - 1)
    );
}

$arr = array(1, 23, 6, 10);
print_r (min_sum_elements($arr));

?>