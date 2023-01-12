<?php

$str = 'Les choses que l\'on possède finissent pas nous posséder.';

$i=-1;

while (isset($str[$i])==true) {
    echo $str[$i];
    $i--;
}

?>