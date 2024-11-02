<?php
$nombre = $_POST["nombre"]; 
$nombre = strtoupper($nombre);
  $vocales = str_replace(
  array("A", "E", "I", "O", "U"),
  array("", "", "", "", ""),
  $nombre
);
echo "<h1>Nombre Acortado</h1>";
echo "_____________________________________";
echo "<p>$vocales";
echo "<p>_____________________________________";