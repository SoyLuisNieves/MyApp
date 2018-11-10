<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>App - QuereTour</title>
    <?php require("../head.php"); ?>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-panel-page" data-quicklinks="true">

  <div data-role="header" class="jqm-header">
    <h2><a href="../" title="jQuery Mobile Demos home"><img src="../../assets/img/logo.png" alt="Tour Queretaro"></a></h2>
    <a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
    <a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
  </div><!-- /header -->

  <div role="main" class="ui-content jqm-content">
        
<ul data-role="listview" data-inset="true">
    <li><a href="#">
        <img src="../../assets/img/img1.jpg">
    <h2>Centro Historico</h2>
    <p>Queretaro, Queretaro</p></a>
    </li>
    <li><a href="#">
        <img src="../../assets/img/img2.jpg">
    <h2>Los Arcos, Acueducto</h2>
    <p>Queretaro, Queretaro</p></a>
    </li>
    <li><a href="#">
        <img src="../../assets/img/img3.jpg">
    <h2>Centro Historico</h2>
    <p>Queretaro, Queretaro</p></a>
    </li>
    <li><a href="#">
        <img src="../../assets/img/img1.jpg">
    <h2>Centro Historico</h2>
    <p>Queretaro, Queretaro</p></a>
    </li>
</ul>
  </div><!-- /content -->

  <?php require("../menu.php"); ?>
    
    
  <div data-role="footer">
    <div data-role="navbar" data-iconpos="bottom">
      <ul>
        <li><a href="#" data-icon="back">Volver</a></li>
        <li><a href="../../index.php" data-icon="home">Inicio</a></li>
      </ul>
    </div><!-- /navbar -->
  </div><!-- /footer -->
  


  <!-- TODO: This should become an external panel so we can add input to markup (unique ID) -->
    <div data-role="panel" class="jqm-search-panel" data-position="right" data-display="overlay" data-theme="a">
    <div class="jqm-search">
      <ul class="jqm-list" data-filter-placeholder="Buscar..." data-filter-reveal="true"></ul>
    </div>

 
</div><!-- /page -->


</div>
</body>
</html>



