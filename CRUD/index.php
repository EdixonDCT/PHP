<?php
require('conexion.php');

$db = new Conexion;
$conexion = $db -> getConexion();
include('usuarios.php');

?>