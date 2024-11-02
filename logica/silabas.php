<?php
$nombre = $_POST["nombre"]; 
$nombre = strtoupper($nombre);
  $silabas = str_replace(
  array("AE","AI","AO","AU","EA","EI","EO","EU","IA","IE","IO","IU","OA","OE","OI","OU","UA","UE","UI","UO","AY","EY","OY","UY"),
  array("A","A","A","A","E","E","E","E","I","I","I","I","O","O","O","O","U","U","U","U","A","E","O","U"),
  $nombre);
  $vocales = str_replace(
  array("B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "X", "Y", "Z"),
  array("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""),
  $silabas);
$cantidad = strlen($vocales);
echo "<h1>Cantidad de Silabas de $nombre</h1>";
echo "_____________________________________";
echo "<h1>$cantidad</h1>";
echo "<p>_____________________________________";