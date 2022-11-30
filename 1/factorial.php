<?php

function factorial($n)
{
	$result = 1;
	for($i = $n; $i > 0; $i --)
	{
		$result = $result * $i;
	}
	 if($n == 0){
	 	$result = 0;
	 }
	 
	return $result;

}
assert(factorial(0) == 1);
assert(factorial(1) == 1);
assert(factorial(4) == 24);

?>