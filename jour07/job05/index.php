<?php

function occurences($str, $char) {

$i= 0;
$j = 0;

while (isset($str[$i])) {
    if ($char == $str[$i]) {
    $j++;
    }
$i++;
}
return $j;
}

$résultat = occurences("Bonjour", "o");

echo $résultat;