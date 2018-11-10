<?php

if(!empty($_POST)){
	if(isset($_POST["usuario"]) &&isset($_POST["password"])){
		if($_POST["usuario"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			$valido=true;
			$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
		   	for ($i=0; $i<strlen($_POST['password']); $i++){ 
		      	if (strpos($permitidos, substr($_POST['password'],$i,1))===false){ 
		         	//echo $_POST['password'] . " no es válido<br>";
		         	print "<script>alert(\"Acceso invalido uso de caracteres especiales.\");window.location='../index.php';</script>"; 
		         	$valido=false;
		      	}
		   	} 
			if ($valido==true) {
				$id_usuario=null;

				$sql1= "select * from usuarios where usuario = ('".$_POST['usuario']."') and password = '".$_POST['password']."'";

				$query = $con->query($sql1);
				while ($r=$query->fetch_array()) {
					$password=$r['password'];
					if ($_POST['password']==$password) {
						$id_usuario=$r["id_usuario"];
					break;
					}
					
				}
				if($id_usuario==null){
					print "<script>alert(\"Acceso invalido.\");window.location='login.php';</script>";
				}else{
					/*Utilizar la funcion last_id para insertar el id en la tabla user_profiles, agregar el campo id_empresa o usuario*/

					session_start();
					$_SESSION["id_usuario"]=$id_usuario;
					$_SESSION["usuario"] = $r["usuario"];
					print "<script>alert(\"Bienvenido.\");window.location='index.php';</script>";	
				}
			}
		}
	}
}
if (empty($_POST['usuario']) or empty($_POST['password'])) {
	print "<script>alert(\"Acceso invalido.\");window.location='../index.php';</script>";
}
