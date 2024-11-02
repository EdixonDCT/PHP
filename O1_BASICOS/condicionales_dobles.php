<?php

/**
 * Estrucctura condicional doble (if else)
 * 
 * 
 * if (expresion){
 * Codigo a ejecutar si la expresion es verdadera
 * }
 * else{
 * codigo si es falsa
 * }
 * if(expresion):
 * si es verdadera
 * else:
 * si es falsa
 * endif;
 * */

 if(1 > 7){
 echo "Condicion evalua a verdadear";
 }else{
  echo "Condicion evalua a false";
 }
echo "<br>";
 if(9 == 12):
  echo "Condicion evalua a verdadera";
 else:
  echo "Condicion evalua a falso";
 endif;
echo "<br>";
 echo "<br>";
 //CALCULAR EL TOTAL DE UNA PERSONA DEBE PARGAR EN UN MONTA LLANTAS EL PRECIO DE CADA LLANTA ES DE 800 SI SE COMPRA MENOS DE 5 LLANAS Y 700 SI SE COMPRA 5 O MAS LLANTAS
 $llantas = 10;
 echo "llantas compradas $llantas";
 if($llantas <= 5){
  $pagar = $llantas * 800;
 }else{
  $pagar = $llantas * 700;
 }
 echo "<br>";
 echo "el total a pagar es $pagar";
 echo "<br>";
//CALCULAR SI UN ALMUNO APRUEBA O REPRUEBA EL CURSO SABIENDO QUE APROBARA SI SU PROMEDIO DE 3 CALIFICACIONES DE 3 ES IGUAL O MAYOR A 3.0 CASO CONTRARIO REPRUEBA
 echo "<br>";
$nota1 = 3;
echo "PRIMERA nota es $nota1";
echo "<br>";
$nota2 = 5;
echo "SEGUNDA nota es $nota2";
echo "<br>";
$nota3 = 1;
echo "TERCERA nota es $nota3";
echo "<br>";
$notafinal = ($nota1 + $nota2 + $nota3) / 3;
echo "La nota FINAL es $notafinal";
echo "<br>";
if($notafinal >= 3.0){
  echo "El alumno aprobo el curso";
}else{
  echo "USTED A DESAPROBADO EL CURSO";
}

echo "<br>";

//(8 >= 10) ? echo "verdadero" : echo "falso";  

/**
 * Operador ternario
 * operador ? true : false;
 */

echo "<br>";
$resultado = (8 > 9) ? 8 * 9 : 8 / 9;
echo $resultado;
echo "<br>";

$primero = 5;
$segundo = 2;
$resultado = 0;
echo "<br>";
echo $resultado = ($primero > $segundo) ? $primero*$segundo : $primero/$segundo;