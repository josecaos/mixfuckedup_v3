{{!-- This is the base layout for your project, and will be used on every page. --}}


  <?php
  echo "layout default.php";
  //include_once "{{root}}assets/php/mixheader.php";
  ?>


  {{!-- Pages you create in the src/pages/ folder are inserted here when the flattened page is created. --}}
  {{> body}}


  <?php //include_once "{{root}}assets/php/mixfooter.php"; ?>
