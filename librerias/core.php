<?php
#CONSTANTES DEL PROYECTO CARPETAS.

define('LIBRERIAS', RUTA_BASE . 'librerias/');
define('APP', RUTA_BASE . 'app/');
define('APP_MODELO', APP . 'model/')

#configuración de conexion de la DB.
include_once LIBRERIAS . 'conexion/accesos.php';
include_once LIBRERIAS . 'conexion/Conexion.php';
include_once LIBRERIAS . 'ORM/ORM.php';
include_once LIBRERIAS . 'ORM/Modelo.php';

#Metodos APP.
  #MODELO
  include_once APP_MODELO . 'Usuario.php'


?>
