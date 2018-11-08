<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>TP (Le 1)</title>

    <meta name="description" content="J'ai pas grand chose à dire" />
    <meta name="keywords" content="Mais au moins, ça fonctionne" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!--   <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />   -->
  </head>

  <body>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);.table-title h3,body{font-weight:400;font-family:Roboto,helvetica,arial,sans-serif}.table-fill,div.table-title{margin:auto;max-width:600px;padding:5px;width:100%}td,th{vertical-align:middle;text-align:left}.table-title h3,td{text-shadow:-1px -1px 1px rgba(0,0,0,.1)}td,th,th.text-left{text-align:left}body{font-size:16px;text-rendering:optimizeLegibility}div.table-title{display:block}.table-title h3{color:#fafafa;font-size:30px;font-style:normal;text-transform:uppercase}.table-fill{background:#fff;border-radius:3px;border-collapse:collapse;height:320px;box-shadow:0 5px 10px rgba(0,0,0,.1);animation:float 5s infinite}tr:hover td,tr:nth-child(odd):hover td{background:#4E5066}th{color:#D5DDE5;background:#1b1e24;border-bottom:4px solid #9ea7af;border-right:1px solid #343a45;font-size:23px;font-weight:100;padding:24px;text-shadow:0 1px 1px rgba(0,0,0,.1)}th:first-child{border-top-left-radius:3px}th:last-child{border-top-right-radius:3px;border-right:none}tr{border-top:1px solid #C1C3D1;border-bottom-:1px solid #C1C3D1;color:#666B85;font-size:16px;font-weight:400;text-shadow:0 1px 1px rgba(256,256,256,.1)}tr:hover td{color:#FFF;border-top:1px solid #22262e}tr:first-child{border-top:none}tr:last-child{border-bottom:none}tr:nth-child(odd) td{background:#EBEBEB}tr:last-child td:first-child{border-bottom-left-radius:3px}tr:last-child td:last-child{border-bottom-right-radius:3px}td{background:#FFF;padding:20px;font-weight:300;font-size:18px;border-right:1px solid #C1C3D1}td:last-child{border-right:0}th.text-center{text-align:center}th.text-right{text-align:right}td.text-left{text-align:left}td.text-center{text-align:center}td.text-right{text-align:right}
  </style>
    <h1 style="text-align: center; margin-top: 2%;">TP1 : <a href="../../index.php">Retour au centre de contrôle</a></h1>

    <div style="padding: 15px;">

    <?php
    //variable classique
    $var = array(":)", 15, "Bob", 25.55);
    foreach ($var as $element) {
      if(is_string($element))
      {
        echo("<p>La variable ".$element." est une variable de type string</p>");
      }
      else
      {
        echo("<p>$element est autre chose qu'un string, c'est une variable de type ". gettype($element)."</p>");
      }
    }
    echo("<br/>");
    //array simple
    $arr = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
    for ($i=0; $i < count($arr); $i++) { 
      $t = $i+1;
      echo("<p>La valeur n°$t qui a pour clé la valeur $i contient le mot ".$arr[$i].".</p>");
    }
    echo("<br/>");
    //tableau associatif
    $arrasso = [
      "nom" => "Rob",
      "prenom" => "Bor",
      "statut" => "Apprenti"
    ];
    foreach ($arrasso as $key => $value) {
      echo("<p>Le $key du personnage est $value</p>");
    }
    echo("<br/>");
    //on fais les if
    $i = 1;
    $test = 2;
    $max = 10;
    while($i <= $max)
    {
      if($i > $test)
      {
        echo("<p style='color: blue;'>$i est supérieur à $test</p>");
      }
      if($i == $test)
      {
        echo("<p style='color: orange;'>$i est égal à $test</p>");
      }
      if($i < $test)
      {
        echo("<p style='color: red;'>$i est inférieur à $test</p>");
      }
      if($i >= ($test*$test)/2)
      {
        $test = $test*$test;
      }
      $i++;
    }

    echo("<br/>");
    //viens le moment du tableau
    $table = array(
      0 => array(
        "nom",
        "prénom",
        "taille",
        "prime"),
      1=> array(
        "Dalton",
        "Joe",
        "1.40 m",
        "5 000 $"),
      2=> array(
        "Daton",
        "William",
        "1.67 m",
        "4 000 $"),
      3=> array(
        "Daton",
        "Jack",
        "1.93 m",
        "3 000 $"),
      4=> array(
        "Daton",
        "Avrel",
        "2.13 m",
        "2 $")
    );
    
    $i=0;
    echo("<table>");
    foreach ($table as $elements) {

      echo("<tr>");

      foreach ($elements as $element) {
        if($i==0)
        {
          echo("<th>$element</th>");
        }
        else
        {
          echo("<td>$element</td>");
        }
      }

      echo("</tr>");
      $i++;
    }
    echo("</table>");
    ?>

    </div>
    <!-- JS Libraries -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>
</html>
