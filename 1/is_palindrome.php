<?php
mb_internal_encoding ("utf-8");

function is_palindrome(string $word) 
{
	$word = trim($word);
	$word_second = strrev($word);
	if(strcmp($word, $word_second) == 0){
		return true;
	}else{
		return false;
	}
}

assert(is_palindrome('qwq') == 1);
assert(is_palindrome('qwqq') == 0);
?>