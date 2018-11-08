<?php include("./template/header.php");?>
<?php
if(isset($_GET['erreur']))
{
  $err = $_GET["erreur"];
  ?>
  <h1 style="color: white; background-color: lightcoral;"><?php echo($err); ?></h1>
  <?php
}
if(isset($_GET['reussite']))
{
  $reu = $_GET["reussite"];
  ?>
  <h1 style="color: white; background-color: lightgreen;"><?php echo($reu); ?></h1>
  <?php
}
?>
<div class="container">
  <form action="./func/veriForm.php" method="POST">

    <label for="nom">Nom</label><br/>
    <input type="text" id="nom" name="nom" placeholder="Votre nom"><br/>

    <label for="prenom">Prénom</label><br/>
    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom"><br/>

    <label for="country">Email</label><br/>
    <input type="text" id="email" name="email" placeholder="truc@machin.chépaquoi"><br/>

    <label for="message">Message</label><br/>
    <textarea id="message" name="message" placeholder="??" style="height:200px"></textarea>
    <br/>
    <input type="submit" value="Envoyer">

  </form>
</div> 
<?php include("./template/footer.php");?>