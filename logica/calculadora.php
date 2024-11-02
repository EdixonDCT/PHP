<?php
$a = 25;
$b = 5;
function calculadora($a,$b)
{
  try{
    // dividir
    if($b == 0)
    {
    throw new Exception("Error : Division por 0");
    }
    if (is_string($a) || is_string($b))
    {
      throw new Exception("Error : Uno de los valores es texto(STRING)");
    }
 $respuesta = array(
  "sumar" => $a+$b,
  "restar" => $a-$b,
  "multiplicar" => $a*$b,
  "dividir" => $a/$b
 );
  return $respuesta;
  }
  catch(Exception $e){
    return $e->getMessage();
  }

}
$resultado = calculadora($a,$b);
echo "<pre>";
print_r($resultado);
echo "</pre>";
