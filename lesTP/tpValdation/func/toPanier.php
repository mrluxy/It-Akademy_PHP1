<?php
session_start();
if(!empty($_GET))
{
    $test = $_SESSION["panier"];
    $_SESSION["prix"] = $_SESSION["prix"] + $_GET["prix"];
    $test[] = "./article_".$_GET["article"].".php";
    $_SESSION["panier"] = $test;
}
?>
<meta http-equiv="refresh" content="0; URL=../liste.php">