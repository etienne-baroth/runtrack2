<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="get" action="index.php">
        <input type="text" name ="prenom" placeholder="prenom"/>
        <input type="text" name="nom" placeholder="nom"/>
        <input type="text" name="âge" placeholder="âge"/>
        <input type="submit" value="Envoyer"/>
</form>

</body>
</html>

<?php

$i=0;

foreach ($_GET as $value) {
    if ($value != "") {
        $i++;
    }
}
echo 'Le nombre d\'argument GET envoyé est : '. $i;


?>