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
		<h3 align="center">Registrar Nuevo Evento</h3>
		<hr>
		<form action="" data-ajax="false">
			<label for="">Lugar</label>
			<input type="text" placeholder="Lugar">
			<label for="">Fecha</label>
			<input type="date" name="date" id="date" value="">
			<label for="">Descripcion</label>
			<textarea name="textarea" id="text" cols="40" rows="8"></textarea>
			<label for="">Fotografia</label>
			<input type="file">
	
    <input data-theme="b" data-icon="calendar" value="Registrar Evento" type="submit">
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
