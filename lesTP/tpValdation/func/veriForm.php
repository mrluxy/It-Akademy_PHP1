<?php
if(!empty($_POST))
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["email"];
    $message = $_POST["message"];

    $regexMail = "/^[a-z0-9._-]+@[a-z0-9.-]{2,}[.][a-z]{2,3}$/";

?>
<?php
    if(!preg_match($regexMail, $mail))
    {
        ?>
        <meta http-equiv="refresh" content="0; URL=../contact.php?erreur=/!\ Le format de votre adresse Mail est invalide. /!\">
        <?php
    }
    else
    {
        ?>
        <meta http-equiv="refresh" content="0; URL=../contact.php?reussite=Votre message à été envoyé.">
        <?php
    }
}
?>