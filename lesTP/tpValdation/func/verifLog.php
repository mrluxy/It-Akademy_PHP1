<?php
session_start();
if(!empty($_POST))
{
    $_SESSION["prix"] = 0;
    $user = $_POST["user"];
    $mdp = $_POST["mdp"];

    if($user == "admin" && $mdp == "password")
    {
        $_SESSION["logged"] = "Lucas";
        echo("<meta http-equiv='refresh' content='0; URL=../index.php'>");
    }
    else
    {
        echo("<meta http-equiv='refresh' content='0; URL=../login.php?err=Nom ou mdp incorrect...'>");
    }
}

?>