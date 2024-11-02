<?php
$nombre = "Jhon";
$Sexo = "M";
function grupo($nombre,$sexo){
  if($sexo === "F" && strtoupper($nombre) < "M" ||
  $sexo === "M" && strtoupper($nombre) > "N"){
    return "Grupo A";
  }
  else{
    return "Grupo B";
  }
}
$grupo = grupo($nombre,$Sexo);
echo $grupo;