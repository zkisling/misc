<?php

function insertionSort($stack)
{
    $s = count($stack);
    $count = 0;
    for ($z = 2; $z <= $s; $z++) {
        $x = $stack[$z - 1];
        for ($i = $z - 1; $i >= 0; $i--) {
            if (($i > 0) && ($stack[$i - 1] > $x)) {
                $stack[$i] = $stack[$i - 1];
                $count++;
            } else {
                $stack[$i] = $x;
            }
            if ($stack[$i] <= $x) {
                break;
            }
        }
    }
    echo $count;
}

$s = fscanf(STDIN, "%d", $m);
$ar = explode(' ', trim(fgets(STDIN)));

insertionSort($ar);