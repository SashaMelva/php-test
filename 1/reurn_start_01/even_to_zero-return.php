<?php

function even_to_zero(int $number)
{
	return implode(array_map(
		fn($n) => (array_search($n, str_split((string)$number)) % 2 == 0) ? $n  : $n = "0",
		str_split((string)$number)
	));

}


assert(even_to_zero(1234567) == 1030507);
assert(even_to_zero(123456) == 103050);

?>