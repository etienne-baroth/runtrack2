<?php

$str = 'On n’est pas le meilleur quand on le croit mais quand on le sait.';

$dic = [
    'consonnes' => 'bcdfghjklmnpqrstvwxz',
    'voyelles' => 'aeiOouy'
];

$voyelle=0;
$consonne=0;

for ($a=0; isset($str[$a]); $a++) {
    for ($i=0; isset($dic['voyelles'][$i]); $i++) {
        if ($str[$a]==$dic['voyelles'][$i]) {
            $voyelle++;
        }
    }
    for ($j=0; isset($dic['consonnes'][$j]); $j++) {
        if ($str[$a]==$dic['consonnes'][$j]) {
            $consonne++;
        }
    }
}

echo "<table border>
    <tr>
        <th>consonnes</th>
        <th>voyelles</th>
    </tr>
    <tr>
        <td>$consonne</td>
        <td>$voyelle</td>
    </tr>
    </table>";

?>