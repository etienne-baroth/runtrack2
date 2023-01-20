<?php

$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if($mysqli -> connect_errno) {
    echo 'Failed to connect MySQL: '. $mysqli -> connect_error;
    exit();
}

$request = $mysqli->query('SELECT nom, capacite FROM salles');
$results = $request->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border>
    <thead>
        <tr>
            <?php foreach ($results[0] as $key => $value): ?>
                <th><?= $key ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0; $i < sizeof($results); $i++):?>
            <tr>
                <td><?= $results[$i]["nom"] ?></td>
                <td><?= $results[$i]["capacite"] ?></td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>

</body>
</html>