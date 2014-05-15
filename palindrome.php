<?php
function solution($S) {
    $unique = array();
	foreach (count_chars($S, 1) as $c => $occurrences) { //Count the number of occurrences of each character
		if ($occurrences % 2 != 0) { $unique[] += chr($c); } 
	}
	if(count($unique) == 1 && strlen($S) % 2) { return 1; }  //If there is only 1 unique character then it is a palindrome as long as the string is odd in length
	elseif(count($unique) == 0 && strlen($S) % 2 == 0) { return 1; } //If all the characters have an even count and the anagram has an even length
	else { return 0; }
}
?>