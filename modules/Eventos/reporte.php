<?php 
  include("../../models/Eventos.php");
  include("../../models/Reportes.php");
   $Evento = new Evento();
   $Reporte = new Reporte();


   if(isset($_POST['registrarReporte'])){
    $reportes = $Reporte->add_reporte();
      print "<script>alert(\"Se ha reportado el post.\");window.location='index.php';</script>";        
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
<div data-role="page" class="jqm-demos jqm-panel-page" data-quicklinks="true" data-ajax="false">

  <div data-role="header" class="jqm-header">
    <h2><a href="../" title="jQuery Mobile Demos home"><img src="../../assets/img/logo.png" alt="Tour Queretaro"></a></h2>
    <a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
    <a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
  </div><!-- /header -->

  <div role="main" class="ui-content jqm-content">
    <?php
        $eventos = $Evento->get_evento();
        $row = mysqli_fetch_array($eventos) 
      ?>
          
    <h3 align="center">Desea reportar el evento: <?php echo $row['titulo']; ?> -</h3>
      <form method="post" action="reporte.php" data-ajax="false">
        <input style="display: none;" type="text" name="categoria" value="<?php echo $row['categoria'] ?>">
        <input style="display: none;" type="text" name="titulo" value="<?php echo $row['titulo'] ?>">
        <input style="display: none;" type="number" name="id_post" value="<?php echo $row['id_evento'] ?>">
        <input style="display: none" type="text" name="nombre_id" value="<?php echo $row['nombre_id'] ?>">
        <input style="display: none" type="text" name="imagen" value="<?php echo $row['imagen'] ?>">
        <label>Comentario</label>
        <textarea name="comentario" placeholder="Escribe un comentario..." cols="30" rows="10"></textarea>
        <input data-icon="forbidden" data-theme="b" name="registrarReporte" type="submit" value="Si, Reportar">
      </form>
      <form action="index.php" data-ajax="false">
        <button data-icon="delete" data-theme="b" type="submit">Cancelar</button>        
      </form>
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