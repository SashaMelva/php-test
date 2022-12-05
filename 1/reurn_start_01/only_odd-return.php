<?php

function only_odd($arr) 
{
	return array_filter(
		$arr,
		fn($i) => ($i % 2 == 0) ? false : $i);
	
}
$arr = array(1, 2, 3, 4);
print_r (only_odd($arr));

?>