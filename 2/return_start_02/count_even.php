<?php

function count_even(array $arr): int 
{
	return count(array_filter(
		$arr,
		fn($n) => $n % 2 == 0 ? $n = $n : false,
	));

}

$arr = array(1, 23, 6, 10);
assert(count_even($arr) == 2);

?>