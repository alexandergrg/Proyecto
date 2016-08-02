<?php

class Conexion
{

  public static function getConexion(){
    try {
      $conexion = new PDO('mysql:host='. HOST . ';dbname=' .DB ,USER ,PASS);
      return $conexion;
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

}

 ?>
