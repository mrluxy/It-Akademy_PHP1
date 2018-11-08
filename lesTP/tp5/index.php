<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TP (Le 5)</title>

    <meta name="description" content="J'ai pas grand chose à dire" />
    <meta name="keywords" content="Mais au moins, ça fonctionne" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!--   <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />   -->
  </head>

  <body>
  <style>
  
  </style>
    <h1 style="text-align: center; margin-top: 2%;">TP5 : <a href="../../index.php">Retour au centre de contrôle</a></h1>

    <div style="padding: 15px;">

    <?php
    function afficherTextColor ($text, $color)
    {
      echo("<p style='color: $color'>$text</p>");
    }
    function afficherText ($text)
    {
      echo("<p>$text</p>");
    }
    function salutRandom ($i)
    {
      switch($i)
      {
        case 0:
        return "Salut, bien ?";

        case 1:
        return "Salut, ça va bien ?";

        case 2:
        return "Yeboi !!";

        case 3:
        return "Yeboi, ça va ?";

        case 4:
        return "Yop !";

        case 5:
        return "Yop, ça va ?!";

        case 6:
        return "Plop, ça va ?";

        case 7:
        return "Plop !";

        case 8:
        return "Pwet, ça va ?!";

        case 9:
        return "Pwet !! :D";

        case 10:
        return "Bonjour.";

        case 11:
        return "Bonjour, comment vous portez vous ?";

        case 12:
        return "Hello.";

        case 13:
        return "Hi ! :>";

        case 14:
        return "Wesh !";

        case 15:
        return "Wesh gros !";

        case 16:
        return "Wesh gros, bien ?!";

        default:
        return "Par contre, t'es qui ?..";
      }
      
      
    }
    function mod($valeur, $modulo)
      {
        return $valeur % $modulo;
      }
      function mult($i)
      {
        if(is_numeric($i))
        {
          return $i*10;
        }
        else
        {
          afficherText("La fonction mult demande un INT pour fonctionner.");
        }
      }

      function jusque($start, $end)
      {
        while ($start != $end)
        {
          if($start > $end)
          {
            $start--;;
          }
          if($start < $end)
          {
            $start++;
          }
          afficherText("$start -> $end");
        }
      }

      //le code
    afficherText(salutRandom(mod(mult(rand(0,16)),17)));
    jusque(rand(-10,10),rand(-10,10));
    ?>
    <!--<META http-equiv="refresh" content="1; URL=index.php">-->
    </div>
    <!-- JS Libraries -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>
</html>
