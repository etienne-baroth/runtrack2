<?php

function occurences($str, $char) {

    return substr_count($str, $char);
}

$résultat = occurences("Bonjour", "o");

echo $résultat;
