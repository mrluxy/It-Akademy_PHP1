<?php include("../../template/header.php");?>

    <?php
    function ecrire($t)
    {
      echo("<p>".$t."</p>");
    }
    function timeUnAn()
    {
      return time()+365*24*3600;
    }
    if(empty($_COOKIE))
    {
      setcookie("cookie","valeur", timeUnAn());
      ecrire("Les cookies viennent d'être créés.");
    }
    else
    {
      ecrire($_COOKIE["cookie"]);
    }
    //unlink("../tp12/index.php");
    //rmdir("../tp12");
    ?>
    <?php include("../../template/footer.php");?>