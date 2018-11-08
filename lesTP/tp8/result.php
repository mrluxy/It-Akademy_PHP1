<?php

if(!empty($_GET))
{
    $message = $_GET["message"];
    $i=1;
    $dir = "../tp8";
    //  si le dossier pointe existe
    if (is_dir($dir)) {
        $dir = $dir."/message".$i.".php";
        while(file_exists($dir))
        {
            $i++;
            $dir = "./message".$i.".php";
        }
        $nouvellePage = fopen($dir,'a+');
        chmod($dir, 0777);
        $infosMessage = array('<!--Cette page à été créée automatiquement par le gestionnaire de pages.-->','<?php include("../../template/header.php");?>',"<p>$message</p>",'<br/>',"<p><a href='./index.php'>Retour à l'index.</a></p>",'<?php include("../../template/footer.php");?>');
        foreach($infosMessage as $info)
        {
            fwrite($nouvellePage, $info."\n");
        }
        fclose($nouvellePage);
    }
}
?>
<meta http-equiv="refresh" content="0; URL=./index.php">