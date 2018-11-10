<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>App - QuereTour</title>
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" href="assets/css/jquery.mobile-1.4.5.min.css">
  <link rel="stylesheet" href="assets/css/jqm-demos.css">
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/index.js"></script>
  <script src="assets/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-panel-page" data-quicklinks="true">

  <div data-role="header" class="jqm-header">
    <h2><img src="assets/img/logo.png" class="imagenlogin" alt="Tour Queretaro"></h2>
    <a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
  </div><

  <div role="main" class="ui-content jqm-content">
    <img src="assets/img/estado.jpg" class="imagenlogin" alt="" style="margin-left: 35px" width="230px" height="200px">
    <br>
    <h3 style="margin-left: 65px">Tour Queretaro</h3>
  </div>

  <?php require("_shared/menu.php"); ?>


  <div data-role="panel" class="jqm-search-panel" data-position="right" data-display="overlay" data-theme="a">
  <div class="jqm-search">
    <ul class="jqm-list " data-filter-placeholder="Buscar" data-filter-reveal="true"></ul>
  </div>

</div>
</div>

<script>
  $(document).ready(function(){
    var cont = 0;
    $(".imagenlogin").click(function(){
      cont = cont + 1;
      if(cont == 5){
        window.location='modules/Admin/login.php';
      }

    });
  });
</script>
</body>
</html>

