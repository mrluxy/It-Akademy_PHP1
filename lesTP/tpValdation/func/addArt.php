<?php
$dir = ("../ressources/article.csv");
$art = fopen($dir,"a+");
fwrite($art,"\n".$_POST["nom"].";");
fwrite($art,"55;");
fwrite($art,$_POST["img"]);
fclose($art);
echo("<meta http-equiv='refresh' content='0; URL=../liste.php'>");
?>