<?php
$i=0;
$dir = "../lesTP";
//  si le dossier pointe existe
if (is_dir($dir)) {

   // si il contient quelque chose
   if ($dh = opendir($dir)) {

       // boucler tant que quelque chose est trouve
       while (($file = readdir($dh)) !== false) {
         if ($file != "." && $file != "..")
         {
           // incrémente
           $i++;
         }
       }
       // on ferme la connection
       closedir($dh);
   }
    
}

$dir="../lesTP/tp".($i+1);
mkdir($dir,0777);
$tp = $dir."/index.php";
$leTP = fopen($tp,'a+');
chmod($dir,0777);
chmod($tp, 0777);
$infosPHP = array('<!--Cette page à été créée automatiquement par le gestionnaire de TP.-->','','<?php include("../../template/header.php");?>', '<?php','','','','?>','<?php include("../../template/footer.php");?>');
foreach($infosPHP as $info)
{
    fwrite($leTP, $info."\n");
}
fclose($leTP);
?>
<h1 style="text-align: center; margin-top: 1%;">Création du TP en cours.</h1>
<h2  style="text-align: center;">Redirection imminente...</h2>
<meta http-equiv="refresh" content="0; URL=../index.php">