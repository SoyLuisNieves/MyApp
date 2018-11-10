<?php date_default_timezone_set("America/chicago"); ?>
<?php 
  include("../../models/Gastronomias.php");
  $Gastronomia = new Gastronomia();

  if(isset($_POST['registrarGastronomia'])){
    $gastronomias = $Gastronomia->add_gastronomia();
    print "<script>alert(\"Se publico el post.\");window.location='index.php';</script>";
  }
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
    <h3 align="center">Gastronomia</h3>
      <form enctype="multipart/form-data" method="post" data-ajax="false">
        <label for="">Titulo</label>
        <input type="text" name="titulo">
        <label for="lugar">Lugar</label>
        <input type="text" id="lugar" name="lugar">
        <label for="">Imagen</label>
        <input type="file" name="imagen" required>
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
        <input type="submit" name="registrarGastronomia" data-theme="b" data-icon="" value="Publicar">
      </form>

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



