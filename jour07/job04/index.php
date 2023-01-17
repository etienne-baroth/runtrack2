<?php

function calcule($a, $operation, $b) {
    if ($operation === "+") {
        $resultat = ($a+$b);
        return $resultat;
    }
    elseif ($operation === "-") {
        $resultat = ($a-$b);
        return $resultat;
    }
    elseif ($operation === "/") {
        $resultat = ($a/$b);
        return $resultat;
    }
    elseif ($operation === "*") {
        $resultat = ($a*$b);
        return $resultat;
    }
}

$result = calcule(2, "/", 3);

echo $result;