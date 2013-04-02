<?php

function quicksort($stack) {
    if(!count($stack)) {
    	return $stack;
    }
    // sets the pivot (not a good idea to pick 0th element(see wiki qsort))
    $pivot = $stack[0];
    $low = array();
    $high = array();
    $length = count($stack);
    for($i=1; $i < $length; $i++) {
        if($stack[$i] <= $pivot) {
           $low[] = $stack[$i];
        } else {
           $high[] = $stack[$i];
        }
    }
    return array_merge(quicksort($low), array($pivot), quicksort($high));
}

$s = fscanf(STDIN, "%d", $m);
$ar = explode(' ', trim(fgets(STDIN)));

$output = quicksort($ar);
foreach ($output as &$value) {
	echo $value . ' ';
}
echo PHP_EOL . memory_get_peak_usage();