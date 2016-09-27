<?php
//proyecto ID
$secc=0;//mxfkdp=0;josecaos=1;lcne=2;tiniebla=3;
// include_once "{{root}}assets/php/mixheader.php";

include_once "{{root}}assets/php/mixmenu.php";
?>
<!---->
<div class="fondo-cont" >
  <canvas id="lienzo" class="columns h-100 hide-on-small" onclick="rompe()"></canvas>
  <img id="logoMain" class="logoMain" src="{{root}}assets/img/1.png" style="display: none" alt="">
  <div id="index" class="fondo">
    <!-- conenido ajax -->
    <div class="contenedorSeccion">
      <?php
      require '{{root}}assets/ventanas/info.php';
      require '{{root}}assets/ventanas/twitter.php';
      #require '{{root}}assets/ventanas/contacto.php';

      ?>
    </div>
    <!---->
  </div>
</div>


<?php
// echo "shit container";
include_once "{{root}}assets/php/mixfooter.php";
?>
