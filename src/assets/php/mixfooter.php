<footer class="columns fixed bottom left mixfooter shadow-light">

  <div class="columns small-12 medium-4 p1 contHabla">
    <input id="habla" name="habla" type="text" class="columns p-0 p-l-1 h-100 black hablaWidget font-sm-M font-md-M font-lg-L" onchange="hablaWidget()" placeholder="Say something">
  </div>
  <div class="columns small-12 h-100 medium-4 p1 linkRedes">
    <ul class="columns p-0 h-100">
      <li class="columns small-2 text-center h-100"><a href="http://www.github.com/josecaos" target="_blank" class="columns h-100 font-sm-L font-md-M font-lg-M" ><i class="vcenter fa fa-github-alt"></a></i></li>
      <!-- <li class="columns small-2 text-center h-100"><a href="http://www.bitbucket.com/josecaos" target="_blank" class="columns h-100 font-sm-L font-md-M font-lg-M" ><i class="vcenter fa fa-bitbucket"></a></i></li> -->
      <li class="columns small-2 text-center h-100"><a href="http://www.soundcloud.com/mixfuckedup" target="_blank" class="columns h-100 font-sm-L font-md-M font-lg-M" ><i class="vcenter fa fa-soundcloud"></a></i></li>
      <li class="columns small-2 text-center h-100"><a href="http://www.instagram.com/josecaos" target="_blank" class="columns h-100 font-sm-L font-md-M font-lg-M" ><i class="vcenter fa fa-instagram"></a></i></li>
      <li class="columns small-2 text-center h-100"><a href="http://www.twitter.com/mixfuckedup" target="_blank" class="columns h-100 font-sm-L font-md-M font-lg-M" ><i class="vcenter fa fa-twitter"></a></i></li>
      <li class="columns small-2 text-center h-100"><a href="http://www.youtube.com/mixfuckedupmac" target="_blank" class="columns h-100 font-sm-L font-md-M font-lg-M" ><i class="vcenter fa fa-youtube-play"></a></i></li>
      <li class="columns small-2 text-center h-100"><a href="http://www.vimeo.com/mixfuckedup" target="_blank" class="columns h-100 font-sm-L font-md-M font-lg-M" ><i class="vcenter fa fa-vimeo"></a></i></li>
    </ul>
  </div>
  <div class="columns small-10 medium-3 p1 copyright text-center">
    <h5 class="small-12 vcenter font-sm-L font-md-M font-lg-M"> <i class="fa fa-creative-commons"></i> Mixfuckedup 2016 </h5>
  </div>
  <div class="columns small-2 medium-1 p0 donaciones text-center" onclick="popup()">
    <p class="small-12 vcenter white font-sm-M font-md-M font-lg-M">
      <span>&nbsp;Donate </span><i class="fa fa-bitcoin"></i>
    </p>
  </div>
  <div id="popupDonaciones" class="columns small-12 medium-3 large-2 h-50" style="display:none;" >

    <div class="columns p-0 h-40 imgLiquid imgLiquidNoFill">

      <img src="assets/img/qr-donaciones.png">

    </div>

    <input class="columns h-20 p-0" type="text" name="walletBTC" value="17DiERCLX65hm8M9JJ13LBCABbJyhPjLPe" readonly="true">
    <p class="columns vcenter black bold font-sm-M font-md-M font-lg-M">
      <small>Since all these are a DIY projects, you can support them by donating some Bitcoins or Satoshis. Thanks in advance.</small>
    </p>
    <p class="cierraDonacion"><i class="fa fa-times" onclick="closepop()"></i> </p>
  </div>
</footer>
