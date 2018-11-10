<?php 
 @session_start();
require_once("Mysql.php");

class Gastronomia extends Mysql{
	
	public function add_gastronomia(){
		$nombre_img = $_FILES['imagen']['name'];
		$tipo = $_FILES['imagen']['type'];
		$tamano = $_FILES['imagen']['size'];

		if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000)) 
		{
		   //indicamos los formatos que permitimos subir a nuestro servidor
		   if (($_FILES["imagen"]["type"] == "image/gif")
		   || ($_FILES["imagen"]["type"] == "image/jpeg")
		   || ($_FILES["imagen"]["type"] == "image/jpg")
		   || ($_FILES["imagen"]["type"] == "image/png"))
		   {
		      // Ruta donde se guardarán las imágenes que subamos
		      $directorio = '/';
		      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
		      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
		    } 
		    else 
		    {
		       //si no cumple con el formato
		       echo "No se puede subir una imagen con ese formato ";
		    }
		} 
		else 
		{
		   //si existe la variable pero se pasa del tamaño permitido
		   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
		}
		echo $sql = 'INSERT INTO gastronomias(lugar,fecha,descripcion,imagen) VALUES ("'.$_POST['lugar'].'", '.date("Y-m-d").', "'.$_POST['descripcion'].'","'.$nombre_img.'")';
		return $this->query($sql);
	}	
	public function delete_usuario(){
		$sql = "DELETE FROM  `RHM2`.`usuarios` WHERE `usuarios`.`id_usuario` = ".$_POST['del_usuario']."";
		return $this->query($sql);
	}
	public function upt_usuario(){
		$sql = "UPDATE `RHM2`.`usuarios` SET `email` = '".$_POST['email']."',`password` = '".$_POST['password']."',`tipo` = '".$_POST['tipo']."' WHERE `usuarios`.`id_usuario` = ".$_POST['id_usuario'];
            return $this->query($sql);
	}
	public function get_usuario(){
            $sql = "SELECT * from usuarios WHERE id_usuario=".$_POST['act_usuario'];
            return $this->query($sql);
        }
    public function get_usuarios(){
    	$sql = "SELECT * FROM usuarios";
        return $this->query($sql);
    }
    public function get_nums_u(){
    	$sql = "SELECT COUNT(*) from usuarios";
        return $this->query($sql);
    }

    public function bitacora(){
    	$sql = "SELECT privilegios.nombre_privilegio as privilegio, tablas.nombre_tabla as tabla,bitacora.fecha as fecha from bitacora
inner join privilegios
on bitacora.id_privilegio = privilegios.id_privilegio
inner join tablas
on bitacora.id_tabla = tablas.id_tabla";
        return $this->query($sql);
    }
}
 ?>