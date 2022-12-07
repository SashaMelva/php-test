<?php

// I use md5() to create some binary data
$string = md5("Example text stuff", true);

// Trying to output pure binary data, this will contain incorrect characters
echo $string ."\n"; 

// UTF8 encoded with utf8_encode, outputs correct without blocking other output
echo utf8_encode($string); 



function is_palindrome1(string $word) 
{
	return array_sum(array_map(
		fn($i, $n) => ($i != $n) ? false : true,
		str_split(trim(mb_strtolower($word), 'UTF-8')),
		array_reverse(str_split(trim(mb_strtolower($word), 'UTF-8')))
	)) == count(array_map(
		fn($i, $n) => ($i != $n) ? false : true,
		str_split(trim(mb_strtolower($word), 'UTF-8')),
		array_reverse(str_split(trim(mb_strtolower($word), 'UTF-8')))
	)) ? true : false;
	
}

function is_palindrome(string $word) 
{
	return array_search(false, array_map(
		fn($i, $n) => ($i != $n) ? false : true,
		str_split(trim(mb_strtolower($word), 'UTF-8')),
		array_reverse(str_split(trim(mb_strtolower($word), 'UTF-8')))
	)) ? false : true;
	
}

assert(is_palindrome('qwq') == 1);
assert(is_palindrome('qwqq') == 0);

?>