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

if (isset($_GET["prenom"]) && isset($_GET["nom"]) && isset($_GET["âge"])) {

$prenom = htmlspecialchars($_GET["prenom"]);
$nom = htmlspecialchars ($_GET["nom"]);
$age = htmlspecialchars($_GET["âge"]);

}

echo "<table border>
    <tr>
        <th>Argument</th>
        <th>Valeur</th>
    </tr>
    <tr>
        <td>prenom</td>
        <td>$prenom</td>
    </tr>
    <tr>
        <td>nom</td>
        <td>$nom</td>
    </tr>
    <tr>
        <td>âge</td>
        <td>$age</td>
    </tr>
    </table>";

?>