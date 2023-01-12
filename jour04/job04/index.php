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
        <input type="text" name ="prenom" placeholder="Prénom"/>
        <input type="text" name="nom" placeholder="Nom"/>
        <input type="text" name="âge" placeholder="Age"/>
        <input type="submit" value="Envoyer"/>
</form>

</body>
</html>

<?php

echo "<table border>
    <tr>
        <th>Argument</th>
        <th>Valeur</th>
    </tr>";
    
foreach ($_POST as $key => $value) {

echo 
    "<tr>
        <td>$key</td>
        <td>$value</td>
    </tr>";
}

echo "</table>";

?>