<?php

/**
 *
 */
class ORM
{
  /**
   * Procedimiento almacenado para insertar datos
   */
   public function setProcedure($procedure, $values = null){
     $query = 'CALL ' . $procedure ;
     $conexion = Conexion::getConexion();
     $param = '';
     if (!is_null($values)) {
       for ($i=0; $i < count($values); $i++) {
         $param .= ':' . $i . ',';
       }
      $param = trim($param,',');
      $param = '(' . $param . ')';
      $query .= $param;
    }else{
      $query .= '()';
    }
    //echo $query;

    $statement = $conexion->prepare($query);
    for ($i=0; $i <count($values) ; $i++) {
      $statement->bindParam(':' . $i, $values[$i]);
      //echo $values[$i];
    }
    $statement->execute();
   }

   public function getAllProcedure($procedure){
     $query = 'CALL ' . $procedure . '()';
     $conexion = Conexion::getConexion();
     //echo $query;
     $statement = $conexion->prepare($query);
     $statement->execute();
     while ($result = $statement->fetch()) {
       $rows[] = $result;
     }
     return $rows;
   }
}



?>
