<?php 
@session_start();
if(!isset($_SESSION["id_usuario"]) || $_SESSION["id_usuario"]==null){
    //print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
  }     
  if(!isset($_SESSION["id_usuario"])){
        print "<script>alert(\"Acceso Denegado, Inicie Sesion por favor.\");window.location='../../index.php';</script>";
  
    }
	include("../../models/Administracion.php");
	$Administracion = new Administracion();


	$id_post = $_GET['id'];
	$id_reporte = $_GET['id_reporte'];
	$nombre_id = $_GET['nombre_id'];
	$tabla = $_GET['categoria'];


	if(isset($_POST['Eliminar'])){
		$Administracion->eliminar_post($id_post,$tabla,$nombre_id);
		$Administracion->eliminar_reporte($id_reporte);
		print "<script>alert(\"Se ha eliminado el post\");window.location='index.php';</script>";	
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
    <h3 align="center">¿Eliminar Post?</h3>
   <form method="POST" data-ajax="false">
		<input type="submit" name="Eliminar" value="Si, eliminar">
    
	</form> 
  <a href="index.php" class="ui-btn" data-ajax="false">Cancelar</a>

  </div><!-- /content -->

  <?php require("../menu.php"); ?>
    
    
  <div data-role="footer">
    <div data-role="navbar" data-iconpos="bottom">
      <ul>
        <li><a data-rel="back" data-icon="back">Cerrar Sesión</a></li>
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





