<?php include("./template/header.php");?>
<section>
  <ul id='services'>
<?php

$fichier = './ressources/article.csv';

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl(';');

foreach($csv as $ligne)
{
    $i=0;
    foreach($ligne as $article)
    {
        if($article != "")
        {
            switch($i)
            {
                case 0:
                    $nom = $article;
                    break;

                case 1:
                    $prix = $article;
                    break;

                case 2:
                    $img = $article;
                    break;
            }
        }
        else
        {
            $i=998;
        }
        $i++;
    }
    if($i != 999)
    {
        $strnom = str_ireplace(" ", "_", $nom);
        $lien = "./article_$strnom.php";
        if(!file_exists($lien))
        {
            $newArticle = fopen($lien,'a+');
            chmod($lien, 0777);
            $infosBonnet = array("<!--Cette page à été créée automatiquement par le gestionnaire d'articles.-->",'<?php include("./template/header.php");?>',"","<img src='$img'>","<p>$nom</p>","<p>pour seulement $prix$ !</p>",'<p>Vous aussi, essayez ce bonnet qui à été porté par les plus grands !</p>',"<p><a href='./func/toPanier.php?article=$strnom&prix=$prix' style='color:black;'>Ajouter au panier.</a></p>",'<?php include("./template/footer.php");?>');
            foreach($infosBonnet as $info)
            {
                fwrite($newArticle, $info."\n");
            }
            fclose($newArticle);
        }
    ?>
        <li>
            <div><a href="<?php echo($lien)?>"><img src="<?php echo($img);?>" class="imgResp"></a></div>
            <span><?php echo($nom); ?></span>
            <span><b><?php echo($prix); ?> $</b></span>
        </li>
        <?php
        
    }
}
?>
  </ul>
</section>

</div>
<?php include("./template/footer.php");?>