 <?php 
 @session_start();
 if(!isset($_SESSION["id_usuario"]) || $_SESSION["id_usuario"]==null){
    //print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
  }     
  if(!isset($_SESSION["id_usuario"])){
        print "<script>alert(\"Acceso Denegado, Inicie Sesion por favor.\");window.location='../../index.php';</script>";
  
    }
  include("../../models/Administracion.php");
  $id_reporte = $_GET['id'];
  $Administracion = new Administracion();
  if(isset($_POST['Restaurar'])){
  	$Administracion->eliminar_reporte($id_reporte);
  	print "<script>alert(\"Se descarto el post\");window.location='index.php';</script>";
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
    <h3 align="center">¿Descartar Reporte?</h3>
    <form method="post" data-ajax="false">
    	<input type="submit" name="Restaurar" value="Descartar" data-theme="b" data-icon="action">
    </form> 
    <a href="index.php" data-theme="b" data-icon="delete" class="ui-btn">Cancelar</a> 

  </div><!-- /content -->

  <?php require("../menu.php"); ?>
    
    
  <div data-role="footer">
    <div data-role="navbar" data-iconpos="bottom">
      <ul>
        <li><a data-rel="back" data-icon="back">Volver</a></li>
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



