<?php
$numero=6;
switch ($numero)
{
  case 1:
    echo "Lunes";
    break;
  case 2:
    echo "Martes";
    break;
  case 3:
    echo "Miercoles";
    break;
  case 4:
    echo "Jueves";
    break;
  case 5:
    echo "Viernes";
    break;
  case 6:
    echo "Sabado";
    break;
  case 7:
    echo "Domingo";
    break;
  default:
    echo "Ese dia no existe en el calendario";
    break;
}