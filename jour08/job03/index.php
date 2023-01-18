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

<input type="text" name="prenom">
<button type="submit" value="envoyer" name="envoyer">Envoyer</button>
<input type="submit" value="reset" name="reset">

</form>

<?php

session_start();

if(isset($_GET["envoyer"])) {
    $_SESSION["prenom"][] = $_GET["prenom"];
    if (isset($_SESSION["prenom"])) {
    foreach($_SESSION["prenom"] as $value) {
        echo $value;
    }
    }
}

if (isset($_GET["reset"])) {
    unset($_SESSION["prenom"]);
    session_destroy();
}

?>

</body>
</html>