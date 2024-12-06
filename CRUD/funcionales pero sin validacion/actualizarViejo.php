<?php
require('conexion.php');

$db = new Conexion;
$conexion = $db -> getConexion();
$ID = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$id_genero = $_POST['id_genero'];
$id_ciudad = $_POST['id_ciudad'];
$id_lenguaje = $_POST['id_lenguaje'];

$sql = "UPDATE usuarios SET nombre=:nombre,apellido=:apellido,correo=:correo,fecha_nacimiento=:fecha_nacimiento,id_genero=:id_genero,id_ciudad=:id_ciudad WHERE id_usuario=:id_usuario";
$stm = $conexion->prepare(($sql));
$stm->bindParam(":nombre",$nombre);
$stm->bindParam(":apellido",$apellido);
$stm->bindParam(":correo",$correo);
$stm->bindParam(":fecha_nacimiento",$fecha_nacimiento);
$stm->bindParam(":id_genero",$id_genero);
$stm->bindParam(":id_ciudad",$id_ciudad); 
$stm->bindParam(":id_usuario",$ID);

$stm->execute();

$sql2 = "DELETE FROM lenguaje_usuario WHERE id_usuario = :id_usuario";
$stm2 = $conexion->prepare(($sql2));
$stm2->bindParam(":id_usuario",$ID);
$stm2->execute();

foreach ($id_lenguaje as $key => $value)
{
$sql3 = "INSERT INTO lenguaje_usuario(id_usuario,id_lenguaje) VALUES (:id_usuario,:id_lenguaje)";
$stm3 = $conexion->prepare($sql3);
$stm3->bindParam(":id_usuario",$ID);
$stm3->bindParam(":id_lenguaje",$value);
$stm3->execute();
}

echo "<h1>ACTUALIZACION COMPLETA</h1>";
include('usuarios.php');