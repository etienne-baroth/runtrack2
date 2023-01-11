<?php

$str = "Im sorry Dave I'm afraid I can't do that.";

$voyelle = ['a', 'e', 'I', 'i', 'o', 'u', 'y'];

$i=0;

while (isset($str[$i])) {
    foreach ($voyelle as $voyelles) {
    if ($str[$i]==$voyelles) {
            echo $str[$i];
        }
    }

    $i++;
}

?>