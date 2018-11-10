<?php 
  include("../../models/Gastronomias.php");
   $Gastronomia = new Gastronomia();

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
    <h2><a href="../" title="jQuery Mobile Demos home"><img src="../../assets/img/logo.png" alt="Tour Queretaro"></a></h2>
    <a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
    <a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
  </div><!-- /header -->

  <div role="main" class="ui-content jqm-content">
    <?php
        $gastronomias = $Gastronomia->get_gastronomia();
        $row = mysqli_fetch_array($gastronomias) 
      ?>
          
    <h3 align="center">- <?php echo $row['lugar']; ?> -</h3>
      <div style="margin: 0px auto; width: 500px;">
        <img style="border-radius: 50%; text-align: center;margin-left: 85px;" width="180" height="180" src="<?php echo $row['imagen'] ?>" alt="">          
      </div>
    <br>
    <ul data-role="listview">
      <li><strong>Lugar:</strong> <?php echo $row['lugar']; ?></li>
      <li><strong>Fecha:</strong> <?php echo $row['fecha']; ?></li>
    </ul>
    <br>
    <p align="justify"><strong>Descripcion:</strong> <?php echo $row['descripcion'] ?></p>

     <form method="post" action="reporte.php">
      <button type="submit" data-theme="b" data-icon="forbidden" name="detail_gastronomia" value="<?php echo $row['id_gastronomia'] ?>">Reportar Lugar</button>
    </form>


  </div><!-- /content -->

  <?php require("../menu.php"); ?>
    
    
  <div data-role="footer">
    <div data-role="navbar" data-iconpos="bottom">
      <ul>
        <li><a href="#" data-icon="back" data-rel="back">Volver</a></li>
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



