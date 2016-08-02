<?php


/**
 *
 */
class Modelo
{

  public static function insertarValores ($values){
    $model = new ORM ();
    $model->setProcedure('SETUSUARIOS',$values);
  }
}

?>
