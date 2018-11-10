<?php 
 @session_start();
require_once("Mysql.php");

class Actividad extends Mysql{
	
	public function add_actividad(){
		$nombreimg = $_FILES['imagen']['name'];
		$archivo = $_FILES['imagen']['tmp_name'];
		$ruta = "images";
		$ruta = $ruta."/".$nombreimg;
		move_uploaded_file($archivo, $ruta);
		$sql = 'INSERT INTO actividades(titulo,lugar,fecha,descripcion,categoria,nombre_id,imagen) VALUES ("'.$_POST['titulo'].'","'.$_POST['lugar'].'", "'.date("Y-m-d").'", "'.$_POST['descripcion'].'","actividades", "id_actividad","'.$ruta.'")';
		return $this->query($sql);
	}
	public function get_actividades(){
		$sql = "SELECT * FROM actividades group by id_actividad desc";
		return $this->query($sql);
	}
	public function get_actividad(){
            $sql = "SELECT * from actividades WHERE id_actividad=".$_POST['detail_actividad'];
            return $this->query($sql);
    }
}
 ?>