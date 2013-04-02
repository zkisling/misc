<?php

function quickSort($stack)
{
    $s = count($stack);
    $p = $stack[0];
    $ar1 = array();
    $ar2 = array();

    for ($i = 0; $i < $s; $i++) {
        if ($stack[$i] < $p) {
            array_push($ar1, $stack[$i]);
        } elseif ($stack[$i] > $p) {
            array_push($ar2, $stack[$i]);
        }
    }
    array_push($ar1, $p);
    $output = array_merge($ar1, $ar2);
    for ($j = 0; $j < $s; $j++) {
        echo $output[$j];
        if ($j + 1 < $s) {
            echo " ";
        }
    }
}

$s = fscanf(STDIN, "%d", $m);
$ar = explode(' ', trim(fgets(STDIN)));

quickSort($ar);