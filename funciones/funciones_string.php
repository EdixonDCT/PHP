<?php
// $texto = "texto de para una prueba, donde realizamos la prueba";
// $texto = "texto 25 de grupo-6-adso para una preeba, donde 2 realizamos la prueba";
// $texto = "al grupo de adso 10 no le gusta laaar leer liir loor luur";
// $texto = "Los numeros naturales son 0 1 2 3 4 5 6 7 8 9";
$texto = "ADSO DEL SENA CIMI FICHA 2894667 !";
echo $texto;
echo "<br>";
//$exp = "/PRUEBA/i"; la ia es para las mayusculas y minusculas
// $exp = "/[0-9]/";
// $exp = "/^texto/i"; //el ^ es para el inicio
// $exp = "/pr[eu]eba/i";
// $exp = "/grupo-[0-9]-adso/";
// $exp = "/le{2,4}r/";
// $exp = "/l[aeiou]{2,4}r/"; // el {2,4} detecta valores repetidos en base al anterior como doble ee
// $exp = "/[0-9]/";
// $exp = "/[A-Za-z]/";
// $exp = "/[\d]/"; //esto se refiere de los numeros del 0 al 9
// $exp = "/[\D]/"; //esto encuentra letras incluyendo los espacios
// $exp = "/[A-Z]{4,}/"; //busca mayusculas que tengan minimo 4 palabras
// $exp = "/[\d]{2}/"; //que tengan 2 numeros

$exp = "/[A-Z]{4}.[\d]{2,}.[!¡@#$%&]/"; //que tengan 4 mayusculas seguidas posea cualquier espacio tenga  2 numeros minimo y maximo infinito]/"; //que tengan 4 mayusculas seguidas posea cualquier espacio tenga  2 numeros minimo y maximo infinito

$resultado = preg_match($exp,$texto,$coincidencia,
PREG_OFFSET_CAPTURE);

// echo "<pre>";
// print_r($coincidencia);
// echo "</pre>";

echo "<br>";
echo "<br>";
echo $resultado;
echo "<br>";
echo "<br>";
?>
<div class="container">
<?php
if ($resultado) //no es necesario poner ==1 ya que al ser true/false no hay problema
{
?>
<style>
  .container{
    color: green;
    font-weight: bold;
    font-size: 30px;
  }
</style>
<?php
echo "SI tiene resultado";
} 
else {
  ?>
<style>
  .container{
    color: red;
    font-weight: bold;
    font-size: 30px;
  }
  </style>
<?php
echo "NO tiene resultado";
}
?>
</div>