<?php 
  include("../../models/Actividades.php");
  $Actividad = new Actividad();
  
 ?>
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
    <h2><a href="../../" title="jQuery Mobile Demos home"><img src="../../assets/img/logo.png" alt="Tour Queretaro"></a></h2>
    <a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
    <a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
  </div><!-- /header -->

  <div role="main" class="ui-content jqm-content">
    <h3 align="center">Actividades</h3>
<form method="post" action="detail.php" data-ajax="false">
<ul data-role="listview" data-inset="true" data-filter="true">
  <?php 
          $actividades = $Actividad->get_actividades();
          while($row = mysqli_fetch_array($actividades)){ ?>
          <li>
            <button type="hidden" name="detail_actividad" value="<?php echo $row['id_actividad'] ?>">
              <a onclick="document.getElementById('myForm').submit()">
              <img src="<?php echo $row['imagen'] ?>" alt="" width="200px" height="200px" style="border-radius: 10%;">
              <h2><?php echo $row['titulo'] ?></h2>
              <p><?php echo $row['descripcion'] ?></p>
              </a>
            </button>
          </li>
          <?php } ?>
</ul>
</form>
  </div><!-- /content -->

  <?php require("../menu.php"); ?>
    
    
  <div data-role="footer">
    <div data-role="navbar" data-iconpos="bottom">
      <ul>
        <li><a data-rel="back" data-icon="back" >Volver</a></li>
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




















