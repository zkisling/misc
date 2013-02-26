<?php

/**
* Zachary Kisling
* 2013
*
* Bracket test using array functions
*
*/

$str = '()[]<>{';
$stack = array();
$length = strlen($str);
echo "$str\n";

for ($i = 0; $i < $length; $i++) {
	$p = $str[$i];

	// If string starts with open brackets then push
	switch ($str[$i]) {
		case "(":
		case "[":
		case "{":
		case "<":
			array_push($stack, $str[$i]);
			break;
	// If string contains closed parenthesis then pop
		case ")":
		case "]":
		case "}":
		case ">":
			$chr = array_pop($stack);

			if (!($chr == '[' && $p == ']') &&
				!($chr == '(' && $p == ')') &&
				!($chr == '{' && $p == '}') &&
				!($chr == '<' && $p == '>')
			) {
				echo "Wrong!\n";
				exit;
			}
			break;
	}
}
// If there is an element left in the stack, Wrong.
if (count($stack)) {
	echo "Wrong\n";
} else {
	echo "Success!\n";
}
