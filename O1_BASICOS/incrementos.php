<?php

/**
 * 
 * Operadores de incremento y decremento
 * 
 * Simbolo             Nombre
 *   ++                incremento
 *   --                decremento 
 * 
 * Ejemplo
 * 
 * ++$variable         Pre-incremento
 * --$variable         Pre-decremento
 */

 $numero = 10;

 // Incrementa el valor de la variable antes de utilizarlo(realizar la operacion)
 echo "Pre incremento ".++$numero;

 echo "<br>";
 
 // ++ es incremento unario
 // Primero realiza la operacion y luego incrementa la variable
 echo "Post incremento".$numero++;

 echo "<br>";
 echo $numero = 12;

 echo "<br>";

 // Primero resta y luego realiza la operacion
 echo "Pre decremento".--$numero;

 echo "<br>";

 // -- es decremento unario
 // Primero realiza la operacion y luego decrementa la variable
 echo "Post decremento".$numero--;

 echo "<br>";

 //10 + 1 = 11
 $resultado = ++$numero;

 //
 echo $resultado;

 echo "<br>";

 //
 $resultado = $numero++;
 echo $resultado;