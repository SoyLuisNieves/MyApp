<?php 
 @session_start();
require_once("Mysql.php");

class Reporte extends Mysql{
	
	public function add_reporte(){
		$sql = 'INSERT INTO reportes(categoria,id_post,titulo,comentario,nombre_id,imagen) VALUES ("'.$_POST['categoria'].'",'.$_POST['id_post'].', "'.$_POST['titulo'].'","'.$_POST['comentario'].'","'.$_POST['nombre_id'].'","'.$_POST['imagen'].'")';
		return $this->query($sql);
	}
	public function get_reportes(){
		$sql = "SELECT * FROM reportes group by id_reporte desc";
		return $this->query($sql);
	}
	public function get_evento(){
            $sql = "SELECT * from eventos WHERE id_evento=".$_POST['detail_evento'];
            return $this->query($sql);
    }
}
 ?>