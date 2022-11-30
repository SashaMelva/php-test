<?php
function arr_double(array $arr): array
{
	return 	(count($arr) >= 0)? $arr[count($arr)] * 2: $arr;
	
}

$arr = array(1, 2, 3, 4);
print_r (arr_double($arr));

?>