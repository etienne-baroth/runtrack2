<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="index.php">
        <input type="text" name ="prenom" placeholder="prenom"/>
        <input type="text" name="nom" placeholder="nom"/>
        <input type="text" name="âge" placeholder="âge"/>
        <input type="submit" value="Envoyer"/>
</form>

</body>
</html>

<?php

if (isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["âge"])) {

$prenom = htmlspecialchars($_POST["prenom"]);
$nom = htmlspecialchars($_POST["nom"]);
$age = htmlspecialchars($_POST["âge"]);

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