<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Ici XAMPP</title>

    <meta name="description" content="J'ai pas grand chose à dire" />
    <meta name="keywords" content="Mais au moins, ça fonctionne" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!--   <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />   -->
  </head>

  <body>

    <h1 style="text-align: center; margin-top: 1%;">Centre de contrôle du TP</h1>
    <h2  style="text-align: center;"><a href="./php/newTP.php">Ajouter un TP</a></h2>

    <!--<h2 style="margin-left: 2%">Le TP1 : Variables, Tableaux et autres boucles.</h2>
    <p style="margin-left: 5%"> - <a href="./lesTP/tp1/index.php">Le lien du site.</a></p>
    <br/>
    <h2 style="margin-left: 2%">Le TP2 : Utilisation des Sessions</h2>
    <p style="margin-left: 5%"> - <a href="./lesTP/tp2/index.php">Le lien du site.</a></p>
    <br/>
    <h2 style="margin-left: 2%">Le TP3 : Utilisation des Formulaires</h2>
    <p style="margin-left: 5%"> - <a href="./lesTP/tp3/index.php">Le lien du site.</a></p>
    <br/>
    <h2 style="margin-left: 2%">Le TP4 : Application TP3</h2>
    <p style="margin-left: 5%"> - <a href="./lesTP/tp4/index.php">Le lien du site.</a></p>
    <br/>
    <h2 style="margin-left: 2%">Le TP5 : Fonctions</h2>
    <p style="margin-left: 5%"> - <a href="./lesTP/tp5/index.php">Le lien du site.</a></p>
    <br/>
    <h2 style="margin-left: 2%">Le TP6 : Application du TP5 + manipulation des strings</h2>
    <p style="margin-left: 5%"> - <a href="./lesTP/tp6/index.php">Le lien du site.</a></p>
    <br/>
    <h2 style="margin-left: 2%">Le TP7 : Les Cookies</h2>
    <p style="margin-left: 5%"> - <a href="./lesTP/tp7/index.php">Le lien du site.</a></p>-->

<?php
  if(!empty($_GET))
  {
    $dir = $_GET["tpDel"];
    $dir = "./lesTP/".$dir;
    //unlink("../tp12/index.php");
    //rmdir("../tp12");
    if (is_dir($dir))
    {
      if($dh = opendir($dir))
      {
        while(($file = readdir($dh)) !== false)
        {
          if($file != "." && $file != "..")
          {
            unlink($dir."/".$file);
          }
        }
      }
      rmdir($dir);
    }
    echo("<meta http-equiv='refresh' content='0; URL=./index.php'>");
  }
  $dir = "./lesTP";
  //  si le dossier pointe existe
  if (is_dir($dir)) {

    // si il contient quelque chose
    if ($dh = opendir($dir)) {

      // boucler tant que quelque chose est trouve
      while (($file = readdir($dh)) !== false) {
        if ($file != "." && $file != "..")
        {
          $test[] = $file;
        }
      }
      // on ferme la connection
      closedir($dh);
      sort($test, SORT_NATURAL | SORT_FLAG_CASE);
      foreach($test as $tp)
      {
        echo("<h2 style='margin-left: 15px'>Le ".strtoupper($tp).".</h2>");
        echo("<p style='margin-left: 20px'> - <a href='./lesTP/$tp/index.php'>Le lien du site.</a></p>");
        echo("<p style='margin-left: 20px; margin-top: -20px;'> - <a href='./index.php?tpDel=$tp'>Supprimer le TP</a></p>");
      }
    }
  }
?>

    <!-- JS Libraries -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>
</html>
