<?php echo "hola quease peachepeando o que ahce en pages/?" ?>

<?php
//proyecto ID
$secc=0;//mxfkdp=0;josecaos=1;lcne=2;tiniebla=3;
// require_once "php/mixheader.php";
// require "php/mixmenu.php";

echo "pages/index";
?>
<!---->
<div class="fondo-cont" >
  <canvas id="lienzo" onclick="rompe()"></canvas>
  <img id="logoMain" class="logoMain" src="img/1.png" style="display: none" alt="">
  <div id="index" class="fondo">
    <!-- conenido ajax -->
    <div class="contenedorSeccion">
      <?php require 'ventanas/info.php';
      require 'ventanas/twitter.php';
      #require 'ventanas/contacto.php';
      ?>
    </div>
    <!---->
  </div>
</div>
<!--  footer -->
<?php require "mixfooter.php"; ?>
