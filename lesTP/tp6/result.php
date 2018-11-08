<?php
function leet($text)
{
  if(is_string($text))
  {
    $text = str_ireplace("a","4",$text);
    $text = str_ireplace("b","8",$text);
    $text = str_ireplace("c","©",$text);
    $text = str_ireplace("d","[)",$text);
    $text = str_ireplace("e","3",$text);
    $text = str_ireplace("f","ƒ",$text);
    $text = str_ireplace("g","6",$text);
    $text = str_ireplace("h","#",$text);
    $text = str_ireplace("i","|",$text);
    $text = str_ireplace("j","_/",$text);
    $text = str_ireplace("k","|<",$text);
    $text = str_ireplace("l","1",$text);
    $text = str_ireplace("m","{V}",$text);
    $text = str_ireplace("n","{\}",$text);
    $text = str_ireplace("o","()",$text);
    $text = str_ireplace("p","|°",$text);
    $text = str_ireplace("q","()_",$text);
    $text = str_ireplace("r","2",$text);
    $text = str_ireplace("s","5",$text);
    $text = str_ireplace("t","7",$text);
    $text = str_ireplace("u","(_)",$text);
    $text = str_ireplace("v","\/",$text);
    $text = str_ireplace("w","\^/",$text);
    $text = str_ireplace("x","><",$text);
    $text = str_ireplace("y","¥",$text);
    $text = str_ireplace("z","≥",$text);
  }
  return $text;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Use title if it's in the page YAML frontmatter -->
    <title><?php echo(leet("TP (Le 6)"));?></title>

    <meta name="description" content="J'ai pas grand chose à dire" />
    <meta name="keywords" content="Mais au moins, ça fonctionne" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!--   <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />   -->
  </head>

  <body>
  <style>
  body {
  font-family: 'Lato', sans-serif;
  background: #e2dedb;
  color: #918a85;
}
a
{
  color: #918a85;
}
header {
  position: relative;
  margin: 100px 0 25px 0;
  font-size: 2.3em;
  text-align: center;
  letter-spacing: 7px;
}
  </style>
  
<header><?php echo(leet("CONTACT"));?> : <a href="./index.php"><?php echo(leet("Retour au formulaire."));?></a></header>
  <div style="padding: 15px;">
  <?php

  


  $raison = $_GET["raison"];
  switch($raison)
  {
    case "inter":
      $raison=leet("une intervention par un technicien directement chez vous");
      break;

    case "rensei":
      $raison=leet("un renseignement par notre équipe de conseillers");
      break;

    case "PEM":
      $raison=leet("une intervention directement sur votre poste informatique grâce à une prise en main distante");
      break;

    default:
      $raison="une raison qui nous est obscure..";
      break;
  }
  $conv=$_GET["conv"];
  $nom=leet($_GET["nom"]);
  $prenom=leet($_GET["prenom"]);
  $mail=leet($_GET["email"]);
  $tel=leet($_GET["tel"]);
  $adr1=leet($_GET["adr"]);
  $adr2=leet($_GET["cplAdr"]);
  $message=leet($_GET["message"]);
  $anon=$_GET["anon"];

  if($anon == 1)
  {
    echo("<p>Vous avez décidé de rester Anonyme pour ce test.");
  }
  else
  {
    echo("<p>Bonjour <b>$prenom $nom</b> et merci de nous avoir contacté.</p>");
    echo("<p>Nos informations semblent indiquer que vous vivez au <b>$adr1 $adr2</b> et que votre numéro de téléphone est le <b>$tel</b>.</p>");
  }
  echo("<p>Voici le message que nos équipes vont recevoir : </p><p style='color: #706a67; font-size: 19px;'><i>$message</i></p>");
  echo("<p>Vous nous avez contacté pour <b>$raison</b>.</p>");
  echo("<p>Votre demande concerne directement les conventions suivante :</p><br/>");
  foreach ($conv as $uneConv) 
  {
    leet($uneConv);
    echo("<p>$uneConv</p>");
  }
  echo("<br/>");
  if($anon == 1)
  {
    echo("<p>Merci de nous avoir contacté, vous ne recevrez pas de mail de réponse puisque vous êtes Anonyme.</p>");
  }
  else
  {
    echo("<p> Merci de nous avoir contacté <b>$prenom</b>, vous recevrez un mail de réponse à votre message au mail suivant : <b><i>$mail</i></b>.");
  }
  ?>
  </div>
    <!-- JS Libraries -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>
</html>
