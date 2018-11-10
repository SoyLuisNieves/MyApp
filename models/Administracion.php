<?php 
 @session_start();
require_once("Mysql.php");

class Administracion extends Mysql{
	
	public function add_actividad(){
		$sql = 'INSERT INTO actividades(titulo,lugar,fecha,descripcion,categoria) VALUES ("'.$_POST['titulo'].'","'.$_POST['lugar'].'", "'.date("d-m-Y").'", "'.$_POST['descripcion'].'","actividades")';
		return $this->query($sql);
	}
	public function eliminar_post($id_post,$tabla,$nombre_id){
		$sql = "DELETE FROM ".$tabla." WHERE ".$nombre_id." = ".$id_post."";
		return $this->query($sql);

	}

	public function eliminar_reporte($id_reporte){
		$sql ="DELETE FROM reportes where id_reporte=".$id_reporte."";
		return $this->query($sql);
	}

	public function get_post($id_post,$tabla){
		$sql = "SELECT * FROM reportes WHERE id_post=".$id_post." and categoria ='".$tabla."' ";
		return $this->query($sql);
	}
}
/* delete from actividades where id_actividad = 1; */
 ?>