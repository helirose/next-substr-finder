<?php

/* Created by Charlotte Rees */
/* 30/10/2019 */

//find next quoted sub string in a given string e.g. getNext('"Hello" the stuff, some more stuff "Goodbye."', '"Hello"', '"') would return Goodbye.
//assumes that delimeter will surround value e.g. () {} %% $$

function getNext($stringToSearch, $stringToFind, $delimeter) { //include quotes or delimeter in stringToFind, e.g. '"internalcode"'
	$a = stripos($stringToSearch, $stringToFind) + strlen($stringToFind);
	$b = stripos($stringToSearch, $delimeter, $a) +1;
	$c = stripos($stringToSearch, $delimeter, $b);
	$length = $c - $b;
	$substr = substr($stringToSearch, $b, $length);
	
	return $substr;
}

?>
