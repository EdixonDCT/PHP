
<?php
// $estudiantes1 = array(
//     array("Juan", 25, "Programador"),
//     array("María", 30, "Diseñadora"),
//     array("Pedro", 20, "Analista")
// );

$estudiantes = array [ 'carlos','jose','maria','luis']

echo "</pre>"; // Imprime: María

// var_dump($estudiantes);
print_r($estudiantes);


echo '</pre>';
echo $estudiantes[2];

$instrutor = [
  'nombre' =>  'Jhon',
  'apellido'=>'becerrar',
  'edad'=> 38,
  'deudas' => '3.700.000.00'
]


echo"</pre>";
print_r($instrutor);
echo"</pre>";



$tutor = [
  'nombre' =>  'Jhon',
  'apellido'=>'becerrar',
  'edad'=> 38,
  'direcion' => [
    'ciudad' => 'bucaramanga',
    'barrio' => 'San francisco',
    'nomclatura' => 65556
  ]
  'habilidades' => [
    'git','html','css','js','php','phyton','sql'
  ]

]


echo "</pre>";
print_r($tutor,['direcion']);
echo "</pre>";



echo "</pre>";
print_r($tutor,['direcion']['nomeclatura']);
echo "</pre>";



echo "</pre>";
print_r($tutor,['habilidades'][4]);
echo "</pre>";


$tutor['habilidades'][3] = 'javascript';

$tutor['direccion']['departamento'] = 'santander'
?>

