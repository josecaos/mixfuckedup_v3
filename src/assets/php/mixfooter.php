<footer class="columns fixed bottom left mixfooter shadow-light">

  <div class="columns small-12 medium-3 p1 h-100 h-sm-5vh contHabla">
    <input id="habla" name="habla" type="text" class="columns p-0 p-l-1 h-100 black hablaWidget font-sm-M font-md-M font-lg-M" onchange="hablaWidget()" placeholder="Say something">
  </div>
  <div class="columns small-12 h-100 h-sm-5vh medium-4 p1 linkRedes">
    <ul class="columns p-0 h-100">
      <li class="columns small-2 text-center h-100"><a href="http://www.github.com/josecaos" target="_blank" class="columns h-100 font-sm-M font-md-M font-lg-M" ><i class="vcenter fa fa-github-alt"></a></i></li>
      <!-- <li class="columns small-2 text-center h-100"><a href="http://www.bitbucket.com/josecaos" target="_blank" class="columns h-100 font-sm-M font-md-M font-lg-M" ><i class="vcenter fa fa-bitbucket"></a></i></li> -->
      <li class="columns small-2 text-center h-100"><a href="http://www.soundcloud.com/mixfuckedup" target="_blank" class="columns h-100 font-sm-M font-md-M font-lg-M" ><i class="vcenter fa fa-soundcloud"></a></i></li>
      <li class="columns small-2 text-center h-100"><a href="http://www.instagram.com/josecaos" target="_blank" class="columns h-100 font-sm-M font-md-M font-lg-M" ><i class="vcenter fa fa-instagram"></a></i></li>
      <li class="columns small-2 text-center h-100"><a href="http://www.twitter.com/mixfuckedup" target="_blank" class="columns h-100 font-sm-M font-md-M font-lg-M" ><i class="vcenter fa fa-twitter"></a></i></li>
      <li class="columns small-2 text-center h-100"><a href="http://www.youtube.com/mixfuckedupmac" target="_blank" class="columns h-100 font-sm-M font-md-M font-lg-M" ><i class="vcenter fa fa-youtube-play"></a></i></li>
      <li class="columns small-2 text-center h-100"><a href="http://www.vimeo.com/mixfuckedup" target="_blank" class="columns h-100 font-sm-M font-md-M font-lg-M" ><i class="vcenter fa fa-vimeo"></a></i></li>
    </ul>
  </div>
  <div class="columns small-9 medium-3 h-100 h-sm-5vh p1 copyright text-center small-left">
    <h5 class="small-12 vcenter font-sm-M font-md-M font-lg-M"> <i class="fa fa-creative-commons"></i> Mixfuckedup 2016 </h5>
  </div>
  <div class="columns small-3 medium-2 p0 h-100 h-sm-5vh donaciones text-center" onclick="popup()">

      <div class="columns p-0 vcenter h-a white font-sm-S font-md-S font-lg-M">&nbsp;Donate <i class="fa fa-bitcoin"></i></div>

  </div>
  <div id="popupDonaciones" class="columns small-12 medium-6 large-5 h-50 h-md-60 h-lg-60 shadow-light" style="display:none;" >

    <div class="columns p-0 h-50 m-b-1 imgLiquid imgLiquidNoFill">

      <img src="assets/img/qr-donaciones.png">

    </div>

    <input class="columns h-15 p-0 text-center font-sm-M font-md-M font-lg-L wallet-number" type="text" name="walletBTC" value="17DiERCLX65hm8M9JJ13LBCABbJyhPjLPe" readonly="true">
    <p class="columns vcenter black bold font-sm-M font-md-S font-lg-M">
      <small>Since all these are DIY projects, you can support them by donating some Bitcoins or Satoshis, thanks.</small>
    </p>
    <p class="cierraDonacion"><i class="fa fa-times" onclick="closepop()"></i> </p>
  </div>
</footer>
