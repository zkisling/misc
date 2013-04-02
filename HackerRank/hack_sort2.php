<?php

function insertionSort($stack)
{
    $s = count($stack);
    for ($z = 2; $z <= $s; $z++) {
        $x = $stack[$z - 1];
        for ($i = $z - 1; $i >= 0; $i--) {
            if (($i > 0) && ($stack[$i - 1] > $x)) {
                $stack[$i] = $stack[$i - 1];
            } else {
                $stack[$i] = $x;
            }
            if ($stack[$i] <= $x) {
                break;
            }
        }
		for ($j = 0; $j < $s; $j++) {
            echo $stack[$j];
            if ($j + 1 < $s) {
            	echo " ";
        	} else {
            	echo "\n";
        	}
        }
    }
}

$s = fscanf(STDIN, "%d", $m);
$ar = explode(' ', trim(fgets(STDIN)));

insertionSort($ar);