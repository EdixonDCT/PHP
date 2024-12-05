<?php
require('conexion.php');

$db = new Conexion;
$conexion = $db -> getConexion();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
// $fecha_nacimiento = $_POST['fecha_nacimiento'];
// $id_genero = $_POST['id_genero'];
// $id_lenguaje = $_POST['id_lenguaje'];
//nota id_genero y fecha nacimiento dejalo en el else porque sino marcara error porque al no tener valor no puede darselo a otro
//lenguaje tambien

$id_ciudad = $_POST['id_ciudad'];

$sql = "SELECT * FROM ciudades";// consulta para las ciudades
$sql_generos = "SELECT * FROM generos";// consulta para los generos
$sql_lenguajes = "SELECT * FROM lenguajes"; //consulta para los lenguajes
// preparar los datos para las ciudades
$bandera = $conexion->prepare($sql);
$bandera->execute();
$ciudades = $bandera->fetchAll();
// preparar los datos para los generos
$bandera_generos = $conexion->prepare($sql_generos);
$bandera_generos->execute();
$generos = $bandera_generos->fetchAll();
// preparar los datos para los lenguajes
$bandera_lenguaje = $conexion->prepare($sql_lenguajes);
$bandera_lenguaje->execute();
$lenguaje = $bandera_lenguaje->fetchAll();

echo $nombre;
if(!preg_match("/^[a-zA-Z ]+$/", $nombre)) {
    echo " error nombre";
}
echo "<p>";
echo $apellido;
if(!preg_match("/^[a-zA-Z ]+$/", $apellido)) {
    echo " error apellido";
}
echo "<p>";
echo $correo;
if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $correo)) {
    echo " error correo";
}
echo "<p>";
// echo $_POST['fecha_nacimiento'];
if(empty($_POST['fecha_nacimiento'])) {
    echo " error fecha";
}
echo "<p>";
echo $id_ciudad;
if($id_ciudad == "null") {
    echo " error ciudad";
}
echo "<p>";
// echo $_POST['id_genero'];
if(empty($_POST['id_genero'])) {
    echo " error genero";
}
echo "<p>";
// echo $_POST['id_lenguaje'];
if(empty($_POST['id_lenguaje'])) {
    echo " error lenguaje";
}


if (
    !preg_match("/^[a-zA-Z ]+$/", $nombre) || 
    !preg_match("/^[a-zA-Z ]+$/", $apellido) ||
    !preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $correo) ||
    empty($_POST['fecha_nacimiento']) ||
    $id_ciudad == "null" ||
    empty($_POST['id_genero']) ||
    empty($_POST['id_lenguaje'])
) {}