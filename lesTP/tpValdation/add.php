<?php include("./template/header.php");?>

<form action="./func/addArt.php" method="POST">
<label for="nom">Nom du bonnet</label><br/>
<input type="text" id="nom" name="nom" placeholder="BROOKLYNE NINE"><br/>

<label for="img">URL du bonnet</label><br/>
<input type="text" id="img" name="img" placeholder="http;//..."><br/>

<input type="submit" value="Envoyer">
</form>

<?php include("./template/footer.php");?>