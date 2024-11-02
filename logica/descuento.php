<?php
$precio = (int)$_POST["precio"];  
echo "<h1>Farmacia</h1>";
echo "_____________________________________";
echo "<p>Medicamento :".$precio;
echo "<p>descuento : 10%";
echo "<p>_____________________________________";
echo "<p>total : ";
echo $total = $precio - ($precio * 0.10);