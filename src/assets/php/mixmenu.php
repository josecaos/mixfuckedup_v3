<?php

$titulo=["Mixfuckedup","josecaos","LiveCodeNetEnsamble", "Tiniebla"];

?>


<header class="columns p-0 fixed top left z1k1 mixmenu shadow-light">
  <!-- <div class="columns p-0 fixed top left z1k1 mixmenu"> -->
  <div id="audio" class="fixed z-1"></div>
  <nav class="columns p-0 h-100 hide-for-small-only">
    <ul class="columns p-0 menuProyectos text-left" >

      <li id="mixfuckedup" class="columns small-12 medium-2 text-left p-0 h-100">
        <a class="columns h-100 linkProyectos " href="index.php" >
          <div class="small-12 vcenter"> Mixfuckedup</div>
        </a>
      </li>
      <li id="joseCaos" class="columns small-12 medium-2 text-left p-0 h-100">
        <a class="columns h-100 linkProyectos " href="josecaos.php" >
          <div class="small-12 vcenter"> JoseCaos</div>
        </a>
      </li>
      <li id="liveCodeNetEnsamble" class="columns small-12 medium-2 text-left p-0 h-100">
        <a class="columns h-100 linkProyectos " href="livecodenet_ensamble.php" >
          <div class="small-12 vcenter"> LCNE</div>
        </a>
      </li>
      <li id="tiniebla" class="columns small-12 medium-2 text-left p-0 h-100" >
        <a class="columns h-100 linkProyectos " href="tiniebla.php" >
          <div class="small-12 vcenter"> Tiniebla</div>
        </a>
      </li>

      <li id="webLab" class="columns small-12 medium-2 text-left p-0 h-100"> <!-- weblab() -->
        <a class="columns h-100 linkProyectos " href="http://github.com/kernspaltung" target="_blank">
          <div class="small-12 vcenter"> WebLab</div>
        </a> <!-- http://weblab.mixfuckedup.net-->
      </li>

      <li id="audioLab" class="columns small-12 medium-2 text-left p-0 h-100" onclick="alert('proximamente')"> <!-- audiolab() -->
        <a class="columns h-100 linkProyectos " href="#">
          <div class="small-12 vcenter"> AudioLab</div>
        </a> <!-- http://audiolab.mixfuckedup.net-->
      </li>


    </ul>
  </nav>
  <!-- titulo medium/large suelto -->
  <div id="tituloheader" class="text-center z1k1 abs white tituloheader hide-for-small-only" onclick="tituloHeader()">
    <h1 id="tituloprincipal" class="small-12 m-b-0 font-sm-XL font-md-XXL font-lg-XXXL verder-lima mixlogoheader"></h1>
  </div>

<!-- titulo small -->
  <div id="tituloheader-movil" class="columns small-9 text-left z1k1 h-100 tituloheader-movil show-for-small hide-for-medium-only hide-for-large-only" onclick="tituloHeader()">
    <h1 id="tituloprincipal" class="small-12 m-b-0 font-sm-XL vcenter verder-lima mixlogoheader-movil"></h1>
  </div>

  <!-- movil -->
  <div id="boton-movil" class="columns small-3 text-right pointer show-for-small hide-for-medium-only hide-for-large-only verde-lima">
    <i class="small-12 fa fa-bars font-sm-XL vcenter"></i>
  </div>

</header>
