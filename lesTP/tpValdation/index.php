<!--Cette page à été créée automatiquement par le gestionnaire de TP.-->

<?php include("./template/header.php");?>
<?php
session_start();
if(!isset($_SESSION["logged"]))
{
  echo("<meta http-equiv='refresh' content='0; URL=./login.php'>");
}
if(isset($_GET["logout"]))
{
  session_destroy();
  echo("<meta http-equiv='refresh' content='0; URL=./index.php'>");
}
?>
    <section class="main" role="main">
      <div class="inner">
        <h1> Ici, vous trouverez tout à 55 $ ! </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum mollis lectus sit amet imperdiet. Quisque accumsan magna sed eros imperdiet pellentesque. Morbi tempus hendrerit justo, a dignissim arcu eleifend sed. Nullam et sollicitudin enim. Nullam lobortis eget felis sit amet aliquet. Sed justo quam, elementum eu lacinia in, euismod ornare augue. Etiam porta libero ut felis pretium mollis. Mauris consectetur feugiat eros, ultricies vestibulum enim tincidunt nec. Nunc ligula libero, varius et euismod a, consequat a ante. Maecenas molestie faucibus tellus, vitae porttitor massa adipiscing a. Curabitur vehicula ante nec purus condimentum commodo. Suspendisse potenti.</p>

        <p>Suspendisse potenti. Ut tristique feugiat dolor et dapibus. Suspendisse potenti. Donec a viverra metus. Vestibulum nibh libero, pharetra sed congue sed, adipiscing non augue. Nulla in auctor odio. Nulla facilisi. Curabitur eget ligula urna. Morbi ut neque posuere, auctor nulla eu, lacinia eros. Ut sagittis sapien non ultrices faucibus.</p>
      </div>
      <center><img src="http://bflbe.webhosting.be/wp-content/uploads/2015/06/logo_BFL_Basic.png" alt="Logo BFL" style="margin-top:30px;"/></center>
    </section>
    
  </div>
<?php include("./template/footer.php");?>
