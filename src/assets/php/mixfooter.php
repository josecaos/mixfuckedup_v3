    <footer class="mixfooter">
        <div class="contHabla">
            <input id="habla" name="habla" type="text" class="hablaWidget" maxlength="50" onchange="hablaWidget()" placeholder="Speak">
        </div>
        <div class="linkRedes">
          <ul>
            <li><a href="http://www.github.com/josecaos" target="_blank" ><i class="fa fa-github-alt"></a></i></li>
            <li><a href="http://www.bitbucket.com/josecaos" target="_blank" ><i class="fa fa-bitbucket"></a></i></li>
            <li><a href="http://www.soundcloud.com/mixfuckedup" target="_blank" ><i class="fa fa-soundcloud"></a></i></li>
            <li><a href="http://www.instagram.com/josecaos" target="_blank" ><i class="fa fa-instagram"></a></i></li>
            <li><a href="http://www.twitter.com/mixfuckedup" target="_blank" ><i class="fa fa-twitter"></a></i></li>
            <li><a href="http://www.youtube.com/mixfuckedupmac" target="_blank" ><i class="fa fa-youtube-play"></a></i></li>
            <li><a href="http://www.vimeo.com/mixfuckedup" target="_blank" ><i class="fa fa-vimeo"></a></i></li>
          </ul>
        </div>
        <div class="copyright">
          <h5> Mixfuckedup | Copyright 2016 </h5>
        </div>
        <div class="donaciones" onclick="popup()">
          <p>
            <i class="fa fa-bitcoin"><small>&nbsp;Donations</small></i>
          </p>
        </div>
        <div id="popupDonaciones" style="display:none;" >
          <img src="img/qr-donaciones.png">
          <input type="text" name="walletBTC" value="17DiERCLX65hm8M9JJ13LBCABbJyhPjLPe" readonly="true">
          <p>
            <small>Since all these are a DIY projects, you can support them by donating some Bitcoins or Satoshis. Thanks in advance.</small>
          </p>
          <p class="cierraDonacion"><i class="fa fa-times" onclick="closepop()"></i> </p>
        </div>
    </footer>


    <script>
    var secc = <?php echo $secc ?>;
    </script>
    <script src="{{root}}assets/js/app.js"></script>
    <!-- <script type="text/javascript" src="js/jquery.udraggable.js"></script>
    <script type="text/javascript" src="js/jquery.event.ue.js"></script>
    <script type="text/javascript" src="js/speak/speakClient.js"></script>
    <script type="text/javascript" src="bower_components/paper/dist/paper-full.js"></script>
    <script type="text/paperscript" src="js/papel.js" canvas="lienzo"></script>
    <script type="text/javascript" src="js/mixspeakedup.js"></script>
    <script type="text/javascript" src="js/mixfuckedup.js"></script> -->
  </body>
  </html>
