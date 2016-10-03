<?php
//proyecto ID
// $titulo=["Mixfuckedup","josecaos","LiveCodeNetEnsamble", "Tiniebla"];
$secc=0;//mxfkdp=0;josecaos=1;lcne=2;tiniebla=3;
// include_once "{{root}}assets/php/mixheader.php";

include_once "{{root}}assets/php/mixmenu.php";
?>
<!---->
<section class="columns h-100 p-0 ovH" >

  <canvas id="fondo-mix" class="columns h_100 p-0 z1" onclick="rompe()"></canvas>

  <!-- <img id="logoMain" class="logoMain" src="{{root}}assets/img/1.png" style="display: none" alt=""> -->
  <div id="cont-fondo" class="columns p-0 h-100-v abs imgLiquid imgLiquidFill" >
    <img id="logoMain" class="columns p-0 h-100" src="{{root}}assets/img/1.png" alt="">
  </div>

  <div id="index" class="columns p-0 h_100 fixed top left">
    <!-- conenido ajax -->
    <div class="columns h-95 p-0 contenedorSeccion">
      <?php
      require '{{root}}assets/ventanas/info.php';
      require '{{root}}assets/ventanas/twitter.php';
      #require '{{root}}assets/ventanas/contacto.php';

      ?>
    </div>
    <!---->
  </div>
</section>


<?php
// echo "shit container";
include_once "{{root}}assets/php/mixfooter.php";
?>
