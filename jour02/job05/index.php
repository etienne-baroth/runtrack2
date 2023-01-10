<?php

$nombre=1000;

for ($i=2; $i<=$nombre; $i++) {

    $nbPremier = true;

    for ($j=2; $j<($i/2); $j++) {
        if ($i%$j==0) {
            $nbPremier = false;
        }
    }
if ($nbPremier==true) {
    echo $i.'<br>';
}
}

?>