<?php

$string='Etienne';
$integer=30;
$float=30.5;
$boolean=true;

?>

<style>

table, th, td {
    border: 1px solid black;
    border-spacing: 0;
    text-align: center;
}

th {
    background-color: blue;
    color: white;
}

</style>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </tr>

    <tr>
        <td><?php echo 'chaîne de caractères'; ?></td>
        <td><?php echo '$string'; ?></td>
        <td><?php echo $string; ?></td>
    </tr>

    <tr>
        <td><?php echo 'entier'; ?></td>
        <td><?php echo '$integer'; ?></td>
        <td><?php echo $integer; ?></td>
    </tr>

    <tr>
        <td><?php echo 'nombre à virgule flottante'; ?></td>
        <td><?php echo '$float'; ?></td>
        <td><?php echo $float; ?></td>
    </tr>

    <tr>
        <td><?php echo 'boolean'; ?></td>
        <td><?php echo '$boolean'; ?></td>
        <td><?php echo $boolean; ?></td>
    </tr>

</table>



</body>
</html>




