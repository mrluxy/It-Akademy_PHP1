<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>TP (Le 6)</title>

    <meta name="description" content="J'ai pas grand chose à dire" />
    <meta name="keywords" content="Mais au moins, ça fonctionne" />

    <!--   <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />   -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <body>
  <style>
  @import url(https://fonts.googleapis.com/css?family=Lato:100,300,400);

input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  color: #aca49c;
  font-size: 0.875em;
}

input:focus::-webkit-input-placeholder, textarea:focus::-webkit-input-placeholder {
  color: #bbb5af;
}

input::-moz-placeholder, textarea::-moz-placeholder {
  color: #aca49c;
  font-size: 0.875em;
}

input:focus::-moz-placeholder, textarea:focus::-moz-placeholder {
  color: #bbb5af;
}

input::placeholder, textarea::placeholder {
  color: #aca49c;
  font-size: 0.875em;
}

input:focus::placeholder, textarea::focus:placeholder {
  color: #bbb5af;
}

input::-ms-placeholder, textarea::-ms-placeholder {
  color: #aca49c;
  font-size: 0.875em;
}

input:focus::-ms-placeholder, textarea:focus::-ms-placeholder {
  color: #bbb5af;
}

/* on hover placeholder */

input:hover::-webkit-input-placeholder, textarea:hover::-webkit-input-placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-webkit-input-placeholder, textarea:hover:focus::-webkit-input-placeholder {
  color: #cbc6c1;
}

input:hover::-moz-placeholder, textarea:hover::-moz-placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-moz-placeholder, textarea:hover:focus::-moz-placeholder {
  color: #cbc6c1;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::placeholder, textarea:hover:focus::placeholder {
  color: #cbc6c1;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-ms-placeholder, textarea:hover::focus:-ms-placeholder {
  color: #cbc6c1;
}

body {
  font-family: 'Lato', sans-serif;
  background: #e2dedb;
  color: #b3aca7;
}
a
{
  color: #918a85;
  text-decoration: none;
}
header {
  position: relative;
  margin: 100px 0 25px 0;
  font-size: 2.3em;
  text-align: center;
  letter-spacing: 7px;
}

#form {
  position: relative;
  width: 500px;
  margin: 50px auto 100px auto;
}
#text
{
  width: 470px;
  height: 50px;
}
input {
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  padding: 0px 15px 0px 15px;
  
  background: transparent;
  outline: none;
  color: #726659;
  
  border: solid 1px #b3aca7;
  border-bottom: none;
  
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

input:hover {
  background: #b3aca7;
  color: #e2dedb;
}

textarea {
  width: 470px;
  max-width: 470px;
  height: 110px;
  max-height: 110px;
  padding: 15px;
  
  background: transparent;
  outline: none;
  
  color: #726659;
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  
  border: solid 1px #b3aca7;
  
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

textarea:hover {
  background: #b3aca7;
  color: #e2dedb;
}

#submit {
  width: 502px;
  height: 50px;
  
  padding-top: 0px;
  margin: 15px 0px 0px 0px;
  
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  color: #b3aca7;
  
  outline:none;
  cursor: pointer;
  
  border: solid 1px #b3aca7;
}

#submit:hover {
  color: #e2dedb;
}
  </style>
    <header>TP4 : <a href="../../index.php">Retour au centre de contrôle</a></header>

<form id="form" action="result.php" method="GET" class="topBefore">
    <label>Raison de votre contact :</label>
    <select name="raison" >
      <option value="inter">Vous avez besoin d'un intervention sur site</option>
      <option value="rensei">Vous avez besoin d'un renseignement</option>
      <option value="PEM">Vous avez besoin d'une prise en main à distance de votre poste</option>
    </select>
    <br/><br/>
    <label>Conventions auxquelles vous êtes affilié :</label><br/>
    <input name="conv[]" value="1AEBEA1" id="1AEBEA1" type="checkbox">
    <label for="1AEBEA1">1AEBEA1</label>
    <input name="conv[]" value="2RTGTR2" id="2RTGTR2" type="checkbox" checked disabled>
    <label for="1AEBEA1">2RTGTR2</label>
    <input name="conv[]" value="3LKSKL3" id="3LKSKL3" type="checkbox" disabled>
    <label for="1AEBEA1">3LKSKL3</label><br/>
    <input name="conv[]" value="4MNANM4" id="4MNANM4" type="checkbox">
    <label for="1AEBEA1">4MNANM4</label>
    <input name="conv[]" value="5OIRIO5" id="5OIRIO5" type="checkbox">
    <label for="1AEBEA1">5OIRIO5</label>
    <input name="conv[]" value="6TRURT6" id="6TRURT6" type="checkbox" checked>
    <label for="6TRURT6">6TRURT6</label><br/>
    <input name="conv[]" value="7ERTRE7" id="7ERTRE7" type="checkbox">
    <label for="1AEBEA1">7ERTRE7</label>
    <input name="conv[]" value="8DFGFD8" id="8DFGFD8" type="checkbox">
    <label for="1AEBEA1">8DFGFD8</label>
    <input name="conv[]" value="9SNFNS9" id="9SNFNS9" type="checkbox">
    <label for="1AEBEA1">9SNFNS9</label><br/>
    <input id="text" name="nom" type="text" placeholder="Nom">
    <input id="text" name="prenom" type="text" placeholder="Prénom">
    <input id="text" name="email" type="email" placeholder="Adresse Mail">
    <input id="text" name="tel" type="tel" placeholder="Numéro de téléphone">
    <input id="text" name="adr" type="text" placeholder="Adresse">
    <input id="text" name="cplAdr" type="text" placeholder="Complément d'adresse*">
    <textarea id="text" name="message" type="text" placeholder="Message à l'administration."></textarea>
    <label>Souhaitez vous rester anonymes pour ce test ?</label>
    <input id="anonOui" name="anon" value=1 type="radio">
    <label for="anonOui">Oui.</label>
    <input id="anonNon" name="anon" value=0 type="radio" checked>
    <label for="anonNon">Non.</label>
  <input id="submit" type="submit" value="Envoyer">
  
</form>
    <!-- JS Libraries -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>
</html>
