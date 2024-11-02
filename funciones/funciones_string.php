<?php
// $texto = "texto de para una prueba, donde realizamos la prueba";
// $texto = "texto 25 de grupo-6-adso para una preeba, donde 2 realizamos la prueba";
$texto = "al grupo de adso 10 no le gusta laaar leer liir loor luur";
//$exp = "/PRUEBA/i"; la ia es para las mayusculas y minusculas
// $exp = "/[0-9]/";
// $exp = "/^texto/i";
// $exp = "/pr[eu]eba/i";
// $exp = "/grupo-[0-9]-adso/";
// $exp = "/le{2,4}r/";
$exp = "/l[aeiou]{2,4}r/"; // el {2,4} detecta valores repetidos en base al anterior como doble ee
$resultado = preg_match_all($exp,$texto,$coincidencia,
PREG_OFFSET_CAPTURE);

echo "<pre>";
print_r($coincidencia);
echo "</pre>";