<?php
require('conexion.php');

$ID = $_GET['id'];
$db = new Conexion;
$conexion = $db -> getConexion();

$sql2 = "DELETE FROM lenguaje_usuario WHERE id_usuario = :id_usuario";
$stm2 = $conexion->prepare(($sql2));
$stm2->bindParam(":id_usuario",$ID);
$stm2->execute();

$sql = "DELETE FROM usuarios WHERE id_usuario = :id_usuario";
$stm = $conexion->prepare(($sql));
$stm->bindParam(":id_usuario",$ID);
$stm->execute();

echo "<h1>ACTUALIZACION COMPLETA</h1>";
include('usuarios.php');