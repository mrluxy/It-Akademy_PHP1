<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>TP (Le 3)</title>

    <meta name="description" content="J'ai pas grand chose à dire" />
    <meta name="keywords" content="Mais au moins, ça fonctionne" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!--   <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />   -->
  </head>

  <body>
  <style>
  @import url(bourbon);body{background:#eee!important}.wrapper{margin-top:80px;margin-bottom:80px}.form-signin{max-width:380px;padding:15px 35px 45px;margin:0 auto;background-color:#fff;border:1px solid rgba(0,0,0,.1)}.padbot{margin-bottom:15px;}
  </style>
  <div class="wrapper">
    <form class="form-signin" action="result.php" method="POST">       
      <h2 class="form-signin-heading padbot">TP3 : <a href="../../index.php">Retour au centre de contrôle</a></h2>
      <input type="text" class="form-control padbot" name="user" placeholder="Nom d'utilisateur" required="" autofocus="" />
      <input type="password" class="form-control padbot" name="mdp" placeholder="Mot de passe" required=""/>      
      <!--<label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>-->
      <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>   
    </form>
  </div>
    <!-- JS Libraries -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  </body>
</html>
