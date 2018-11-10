<?php 
  @session_start();
  if(!isset($_SESSION["id_usuario"]) || $_SESSION["id_usuario"]==null){
    //print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
  }     
  if(!isset($_SESSION["id_usuario"])){
        print "<script>alert(\"Acceso Denegado, Inicie Sesion por favor.\");window.location='../../index.php';</script>";
  
    } 
  include("../../models/Reportes.php");
  $Reporte = new Reporte();

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
    <h3 align="center">Bienvenido: <?php echo $_SESSION['usuario']; ?></h3>
    
  
<form>
    <input id="filterTable-input" data-type="search">
</form>
<table data-role="table" id="movie-table" data-filter="true" data-input="#filterTable-input" data-mode="columntoggle" class="ui-responsive table-stroke">
    <thead>
        <tr>
            <th data-priority="1"># Post</th>
            <th data-priority="persist">Titulo</th>
            <th data-priority="4">Acciones</th>
        </tr>
        </thead>
        <a href="#" class="ui-btn ui-icon-delete ui-shadow ui-corner-all ui-btn-inline ui-btn-icon-notext">comment</a>
        <tbody>
            
            <?php 
              $reportes = $Reporte->get_reportes();
              while($row = mysqli_fetch_array($reportes)){ ?> 
            <tr>
                <th><?php echo $row['id_reporte']; ?></th>
                <td><a href="detail.php?id=<?php echo $row['id_post'] ?>&categoria=<?php echo $row['categoria'] ?>" data-rel="external" data-ajax="false"><?php echo $row['titulo']; ?></a></td>
                <td>
                  <a href="eliminar.php?id=<?php echo $row['id_post'] ?>&categoria=<?php echo $row['categoria'] ?>&nombre_id=<?php echo $row['nombre_id'] ?>&id_reporte=<?php echo $row['id_reporte'] ?>&tabla=<?php echo $row['categoria']; ?>" data-ajax="false"><img style="color: #f60;" src="../../assets/icons/delete-black.png" alt=""></a>
                  |
                  <a href="restaurar.php?id=<?php echo $row['id_reporte'] ?>" data-ajax="false"><img class="" src="../../assets/icons/action-black.png" alt=""></a>
                </td>
            </tr>
            
            <?php } ?>
        </tbody>
    </table>
  </div><!-- /content -->

  <?php require("../menu.php"); ?>
    
    
  <div data-role="footer">
    <div data-role="navbar" data-iconpos="bottom">
      <ul>
        <li><a href="logout.php" class="ui-btn" data-ajax="false">Cerrar Sesión</a></li>
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



