<?php

function min_even(array $arr): int 
{
	
	return min(array_filter(
		$arr,
		fn($n) => $n % 2 == 0 ? $n = $n : false,
	));
}

$arr = array(1, 23, 6, 10);
assert(min_even($arr) == 6);

?>