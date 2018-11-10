<?php 
 @session_start();
require_once("Mysql.php");

class Evento extends Mysql{
	
	public function add_evento(){
		$nombreimg = $_FILES['imagen']['name'];
		$archivo = $_FILES['imagen']['tmp_name'];
		$ruta = "images";
		$ruta = $ruta."/".$nombreimg;
		move_uploaded_file($archivo, $ruta);
		$sql = 'INSERT INTO eventos(titulo,lugar,fecha,descripcion,categoria,nombre_id,imagen) VALUES ("'.$_POST['titulo'].'","'.$_POST['lugar'].'", "'.$_POST['fecha'].'", "'.$_POST['descripcion'].'","eventos","id_evento","'.$ruta.'")';
		return $this->query($sql);
	}
	public function get_eventos(){
		$sql = "SELECT * FROM eventos group by id_evento desc";
		return $this->query($sql);
	}
	public function get_evento(){
            $sql = "SELECT * from eventos WHERE id_evento=".$_POST['detail_evento'];
            return $this->query($sql);
    }
}
 ?>