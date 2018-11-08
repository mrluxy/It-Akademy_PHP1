<?php include("./template/header.php");?>
<?php
session_start();
function afficherPanier()
{
    if(!empty($_SESSION))
    {
        if(isset($_SESSION["panier"]))
        {
            $test = $_SESSION["panier"];
            foreach( $test as $article)
            {
                echo("<p style='margin-top:-20px;'><a href='$article' style='color: black;'>$article</a> <a href='./panier.php?artDel=$article' style='color: red;margin-left:10px;'>✕</a></p>");
            }
            
        }
        else
        {
            echo("Oups, il semblerait que votre panier soit vide !");
        }
    }
    
}
function delArt()
{
    $_SESSION["prix"] = $_SESSION["prix"] - 55;
    $dir = $_GET["artDel"];
    //unlink($dir);
    $i = 0;
    $test = $_SESSION["panier"];
    unset($test[array_search($dir, $test)]);
    $_SESSION["panier"] = $test;
    echo("<meta http-equiv='refresh' content='0; URL=./panier.php'>");
}
?>
<h1>Panier de <?php echo($_SESSION["logged"])?>.<?php echo(" (".$_SESSION["prix"]." $)");?></h1>
<?php
if(!empty($_GET))
{
    delArt();
}
afficherPanier();
?>
<?php include("./template/footer.php");?>