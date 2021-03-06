<?php 
  include("../../models/Eventos.php");
  $Evento = new Evento();

  if(isset($_POST['registrarEvento'])){
      $eventos = $Evento->add_Evento();
      print "<script>alert(\"Se publico el post\");window.location='index.php';</script>"; 


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
<div data-role="page" class="jqm-demos jqm-panel-page" data-quicklinks="true" >

  <div data-role="header" class="jqm-header">
    <h2><a href="../../" title="jQuery Mobile Demos home"><img src="../../assets/img/logo.png" alt="Tour Queretaro"></a></h2>
    <a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
    <a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
  </div><!-- /header -->

  <div role="main" class="ui-content jqm-content">
    <h3 align="center">Publicar Evento</h3>
    <form method="post" data-ajax="false" enctype="multipart/form-data">
      <label for="">Titulo</label>
      <input type="text" name="titulo">
      <label for="">Lugar</label>
      <input type="text" name="lugar">
      <label for="">Fecha</label>
      <input type="date" name="fecha">
      <label for="">Imagen</label>
      <input type="file" name="imagen" required>
      <label for="">Descripcion</label>
      <textarea name="descripcion" cols="30" rows="10"></textarea>
      <input data-theme="b" type="submit" name="registrarEvento" data-icon="check" value="Publicar Evento">
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



