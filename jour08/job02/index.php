<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="get">

<input type="submit" name="reset" value="reset">

</form>

<?php

if(!isset($_COOKIE["nbvisites"])) {
    setcookie("nbvisites", 0, time() + 3600);
}

if(isset($_COOKIE["nbvisites"])) {
    if(isset($_GET["reset"])) {
    setcookie("nbvisites", 0, time() + 3600);
    echo $_COOKIE["nbvisites"];
}

else {
    $i = $_COOKIE["nbvisites"];
    $i++;
    setcookie("nbvisites", $i, time() + 3600);
    echo $_COOKIE["nbvisites"];
}
}

?>

</body>
</html>