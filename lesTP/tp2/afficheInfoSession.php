<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>TP (Le 2)</title>

    <meta name="description" content="J'ai pas grand chose à dire" />
    <meta name="keywords" content="Mais au moins, ça fonctionne" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!--   <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />   -->
  </head>

  <body>
  <style>
  
  </style>
    <h1 style="text-align: center; margin-top: 2%;">AFFICHAGE D'INFORMATIONS : <a href="./index.php">Retour à l'index.</a></h1>

    <div style="padding: 15px;">

    <?php
    //ouverture d'une session
    session_start();
    //Affichage de données depuis une session
    if(!isset($_SESSION['username']))
    {
      echo("<p style='color: red'>Aucun username n'a été trouvé</p>");
    }
    else
    {
      echo("<p>Bonjour, ".$_SESSION['username'].".</p>");
      echo("<a href='./logout.php'>Se déconnecter.</a>");
    }
    
    ?>
    
    </div>
    <!-- JS Libraries -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>
</html>
