<?php

// I use md5() to create some binary data
$string = md5("Example text stuff", true);

// Trying to output pure binary data, this will contain incorrect characters
echo $string ."\n"; 

// UTF8 encoded with utf8_encode, outputs correct without blocking other output
echo utf8_encode($string); 



function is_palindrome(string $word) 
{
	

	$result = true;
	$arr_first = str_split(trim(mb_strtolower($word), 'UTF-8'));
	print_r ($arr_first);
	$arr_second = array_reverse($arr_first);
	for($i = 0; $i < count($arr_first); $i ++){
		if($arr_first[$i] != $arr_second[$i]){
			
			$result = false;
			
		}
	}
	
	return 	$result;

}


echo is_palindrome("qwq");

?>