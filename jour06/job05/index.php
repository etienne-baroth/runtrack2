<?php

if($_GET["style"]=="style1.css") {
    ?><link rel="stylesheet" href="style1.css"><?php
    }
    
    elseif($_GET["style"]=="style2.css") {
        ?><link rel="stylesheet" href="style2.css"><?php
    }
    
    elseif($_GET["style"]=="style3.css") {
    ?><link rel="stylesheet" href="style3.css"><?php
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiko&family=Libre+Baskerville&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>
<body>

<form method="get" action="index.php">
    <div class="select">    
        <select name="style" id="style">
            <option value="style1.css">Style 1</option>
            <option value="style2.css">Style 2</option>
            <option value="style3.css">Style 3</option>
            <input type="submit" value="Envoyer"/>
        </select>
    </div>

    <div class="inputForm">
    <input type="text" placeholder="Prénom">
    <input type="text" placeholder="Nom">
    <input type="text" placeholder="Age">
    <input type="text" placeholder="Métier">
    </div>
</form>

</body>
</html>





