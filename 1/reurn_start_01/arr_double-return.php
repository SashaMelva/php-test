<?php
function arr_double(array $arr): array
{
	return 	array_map(
		fn($n) => $n * 2,
		$arr
	);
	
}

$arr = array(1, 2, 3, 4);
$arr_result = array(2, 4, 6, 8);
assert(arr_double($arr) == $arr_result);

?>