<?php 
class Mysql{
  private $_conexion;

  public function __construct(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "qro";
    $this->_conexion = mysqli_connect(
      $host,
      $user,
      $pass,
      $bd);
  }
  public function query($sql){
    $result = mysqli_query($this->_conexion, $sql);
    return $result;
  }
}
?>
