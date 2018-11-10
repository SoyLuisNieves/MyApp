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
$tabla = $_GET['categoria'];


 ?>
¡
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
        $administracion = $Administracion->get_post($id_post,$tabla);
        $row = mysqli_fetch_array($administracion) 
      ?>
          
    <h3 align="center">- <?php echo $row['titulo']; ?> -</h3>
      <div style="margin: 0px auto; width: 500px;">
      	<?php if($row['categoria'] == 'actividades'){ ?>
        <img style="border-radius: 50%; text-align: center;margin-left: 85px;" width="180" height="180" src="../../modules/Actividades/<?php echo $row['imagen'] ?>" alt="">          
      	<?php }elseif($row['categoria'] == 'eventos'){ ?>
        <img style="border-radius: 50%; text-align: center;margin-left: 85px;" width="180" height="180" src="../../modules/Eventos/<?php echo $row['imagen'] ?>" alt="">          
      	<?php }elseif($row['categoria'] == 'gastronomias'){ ?>
        <img style="border-radius: 50%; text-align: center;margin-left: 85px;" width="180" height="180" src="../../modules/Gastronomia/<?php echo $row['imagen'] ?>" alt="">          

      	<?php } ?>       
      </div>
    <br>
    <ul data-role="listview">
      <li><strong>Comentario:</strong> </li>
      <p><?php echo $row['comentario']; ?></p>
    </ul>
    <br>
    


  </div><!-- /content -->

  <?php require("../menu.php"); ?>
    
    
  <div data-role="footer">
    <div data-role="navbar" data-iconpos="bottom">
      <ul>
        <li><a href="#" data-icon="back" data-rel="back">Volver</a></li>
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



