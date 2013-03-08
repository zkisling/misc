<?php

function insertionSort($stack)
{
	$s = count($stack);
	$v = end($stack);
	for ($i = $s-1; $i >= 0; $i--) {
		if (($i > 0) && ($stack[$i-1] > $v))
		{
			$stack[$i] = $stack[$i-1];
		} else {
			$stack[$i] = $v;
		}
		for ($j = 0; $j < $s; $j++) {
			echo $stack[$j];
				if ($j + 1 < $s) {
					echo " ";
				} else {
					echo "\n";
				}
		}
		if ($stack[$i] <= $v) {
		 	break;
		}
	}
}

$s = fscanf(STDIN, "%d", $m);
$ar = explode(' ', trim(fgets(STDIN)));

insertionSort($ar);