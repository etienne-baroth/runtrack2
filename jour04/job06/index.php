<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="get" action="index.php">
    <input type="text" name="nombre" placeholder="nombre">
    <input type="submit" value="submit">
</form>

</body>
</html>

<?php

if (isset($_GET['nombre'])) {
    if ($_GET['nombre']%2==0) {
        echo 'Nombre pair';
    }
    else {
        echo 'Nombre impair';
    }
}

?>