<?php
$numero = (int)$_POST["numero"];  
$cont = 1;
$tabla = 1;
echo "_____________________________________";
echo "<p>Tabla de multiplicar del $numero";
echo "<p>_____________________________________";
while ($cont <= 10){
  $guardado = $numero * $tabla;
  echo "<p> $numero x $tabla = $guardado";
  $cont = $cont + 1;
  $tabla = $tabla + 1;
}
echo "<p>_____________________________________";