<?php

$texto ='fundamentos de programcion en php';




$asignacio = $texto;

$referecnia =&$texto;


echo $asignacio;
echo '<br>';
echo $referecnia;


$texto = "asignacion por referencia";

echo "<br>";

echo $referecnia;