<?php

session_start();

if (!isset($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"] = 0;
}

if(isset($_SESSION["nbvisites"])) {
    if (isset($_GET["reset"])) {
        $_SESSION["nbvisites"] = 0;
        echo $_SESSION["nbvisites"];
        session_destroy();
    }

else {
    echo $_SESSION["nbvisites"];
    $_SESSION["nbvisites"]++; }
}

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

<form action="index.php" method="get">

<input type="submit" name="reset" value="reset">

</form>

</body>
</html>

