<?php 
 @session_start();
require_once("Mysql.php");

class Gastronomia extends Mysql{
	
	public function add_gastronomia(){
		$nombreimg = $_FILES['imagen']['name'];
		$archivo = $_FILES['imagen']['tmp_name'];
		$ruta = "images";
		$ruta = $ruta."/".$nombreimg;
		move_uploaded_file($archivo, $ruta);
		$sql = 'INSERT INTO gastronomias(titulo,lugar,fecha,descripcion,categoria,nombre_id,imagen) VALUES ("'.$_POST['titulo'].'","'.$_POST['lugar'].'", "'.date("Y-m-d").'", "'.$_POST['descripcion'].'","gastronomias","id_gastronomia","'.$ruta.'")';
		return $this->query($sql);
	}
	public function get_gastronomias(){
		$sql = "SELECT * FROM gastronomias group by id_gastronomia desc";
		return $this->query($sql);
	}
	public function get_gastronomia(){
            $sql = "SELECT * from gastronomias WHERE id_gastronomia=".$_POST['detail_gastronomia'];
            return $this->query($sql);
    }
}
 ?>