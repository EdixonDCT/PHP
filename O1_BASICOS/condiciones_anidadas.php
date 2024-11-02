<?php

/**
 * 
 * Estructura
 * if(?)
 * if(?)
 * codigo a ejecutar
 * }else{
 *  codigo a ejectura}
 * }
 * }
 */

 $a = 10;
 $b = 10;
 $c = 10;
//  if($a > $b)
//  {
//      if($a > $c)
//      {
//          echo "a es mayor que b y c";
//      }else
//      {
//          echo "a es mayor que b y menor que c";
//      }
//  }
//  else if($b > $a)
//  {
//       if($b > $c)
//       {
//           echo "b es mayor que a y c";
//       }
//       else
//       {
//           echo "b es mayor que a y menor que c";
//       }
//  }

echo "<br>";
 if ($a > $b && $a > $c){
  echo "el numero mayor es $a";
 }
 else if ($b > $a && $b > $c){
  echo "el numero mayor es $b";
 }
 else if ($c > $a && $c > $b){
  echo "el numero mayor es $c";
 }
 else if ($a == $b || $a == $c || $b == $c){
   echo "hay dos numeros que son iguales";
 }
 else{
   echo "los numeros tres numeros son iguales";
}
 echo "<br>";
 echo "<br>";
 $dia = 6;
 
 if($dia == 1)
 {echo "Hoy es lunes";}
 else if($dia == 2)
 {echo "Hoy es martes";}
 else if($dia == 3)
 {echo "Hoy es miercoles";}
 else if($dia == 4)
 {echo "Hoy es jueves";}
 else if($dia == 5)
 {echo "Hoy es viernes";}
 else if($dia == 6)
 {echo "Hoy es sabado";}
 else if($dia == 7)
 {echo "Hoy es domingo";}
 else
 {echo "DIA INVALIDO";}