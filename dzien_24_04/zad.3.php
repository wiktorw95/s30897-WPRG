<?php

function generateArray($a, $b, $c, $d) {
    $result = array_fill(0,$b, 0 );
    for($i = $a; $i < $b; $i++) {
        $tablica[] = $c;
        $c++;
    }
    array_splice($result, $a, $b-$a, $tablica);

    return $result;
}

$a = 0;
$b = 6;
$c = 10;
$d = 19;

$array = generateArray($a, $b, $c, $d);
print_r($array);

?>