<link rel="stylesheet" href="./css/login.css">
<?php
if(isset($_GET['err']))
{
  $err = $_GET["err"];
  ?>
  <center>
  <h1 style="color: white; background-color: lightcoral;"><?php echo($err); ?></h1>
</center>
  <?php
}
?>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="./func/verifLog.php" method="POST">
      <input type="text" name="user" placeholder="Nom de l'utiisateur"/>
      <input type="password" name="mdp" placeholder="mot de passe"/>
      <button>login</button>
    </form>
  </div>
</div>
