<?php

/**
 * Estructura condicional simple
 * 
 * Evaluar una expresion y permitir ejercucion de un fragmento de codigo condicional simple
 * 
 * if(expresion){
 *  Codigo a ejecutar
 * }
 * 
 * if(expresion):
 *  Codigo a ejecutar
 * endif;
 */


if($edad >= 18){
     echo "Hola persona";
 }
 $edad = 17;

 if($edad >= 18){
     echo "Hola persona";
 }
 ?>

<div>
  <?php if ($edad >= 18): ?>
    <h1>
      <?= $saludo ?>
    </h1>
  <?php endif; ?>
</div>

<?php 
//1.Realize un programa donde se elijia un nuevo si el numero es par indique que el numero es par
 echo "<br>";
  $numero = 1;
  echo "<br>";
  if($numero % 2 === 0){
      echo "El numero es par";
  }
  echo "<br>";
//2.En un almacen se le hacen un 20% de descuento a los clientes cuya compra supere los 100 dolares cual sera la cantidad que pagara una persona por su compra
  $compra = 100;
  echo "<br>";
  if($compra > 100)
  {
    echo $compra = $compra - ($compra * 0.20);
  }
  echo "El total a pagar es ${compra}"
  ?>

