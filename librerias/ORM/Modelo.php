<?php


/**
 *
 */
class Modelo
{

  public static function insertarValores ($storeProcedure , $values){
    $model = new ORM ()
    $model->setProcedure($storeProcedure,$values);
  }
}

?>
