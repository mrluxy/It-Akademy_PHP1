<!--Cette page à été créée automatiquement par le gestionnaire de TP.-->
<?php
if(!empty($_GET))
{
  $dir = $_GET["msgDel"];
  $dir = "./".$dir;
  unlink($dir);
  echo("<meta http-equiv='refresh' content='0; URL=./index.php'>");
}
?>
<style>
    textarea {
  margin-top: 10px;
  margin-left: 50px;
  width: 500px;
  height: 100px;
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0.07);
  border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
  border-image: none;
  border-radius: 6px 6px 6px 6px;
  border-style: none solid solid none;
  border-width: medium 1px 1px medium;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
  color: #555555;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 1em;
  line-height: 1.4em;
  padding: 5px 8px;
  transition: background-color 0.2s ease 0s;
}


textarea:focus {
    background: none repeat scroll 0 0 #FFFFFF;
    outline-width: 0;
}
</style>
<?php include("../../template/header.php");?>
<p>Créer une page supplémentaire : (cette page affichera un message)</p>
<form action="result.php" method="GET">
<textarea placeholder="Entrez votre message" rows="20" name="message" id="comment_text" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea>
<br/><input type="submit" value="Créer" style="margin-top:10px;">
</form>
<br/>
<?php
$i=0;
$dir = "../tp8";
//  si le dossier pointe existe
if (is_dir($dir)) {

    // si il contient quelque chose
    if ($dh = opendir($dir)) {
        
        // boucler tant que quelque chose est trouve
        while (($file = readdir($dh)) !== false) {
            if ($file != "." && $file != ".." && $file != "index.php" && $file != "result.php")
            {
                $collection[] = $file;
                $i++;
            }
        }
        // on ferme la connection
        closedir($dh);
        if($i > 0)
        {
            $i = 1;
            echo("<h2>Les Messages déjà envoyés :</h2>");
            sort($collection, SORT_NATURAL | SORT_FLAG_CASE);
            foreach($collection as $lien)
            {
                $msg = "message".$i;
                echo("<p><a href='./$lien' style='color:black;'>$lien</a> <a href='./index.php?msgDel=$lien' style='color: red;margin-left:10px;'>✕</a></p>");
                $i++;
            }
        }
        
    }
}
?>
<?php include("../../template/footer.php");?>
