<?php

session_start();

if(!isset($_SESSION["nbvisites"])) {
    $_SESSION ["nbvisites"] = 0;
}

else {
    $_SESSION ["nbvisites"] = $_SESSION ["nbvisites"] +1;
    echo $_SESSION ["nbvisites"];
}