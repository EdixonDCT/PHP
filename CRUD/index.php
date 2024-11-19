<?php


require('conexion.php');

$db ="";
$conexion ="";

$db = new Conexion();
$conexion = $db->getConexion();

$sql = "SELECT * FROM ciudades";// consulta para las ciudades
$sql_generos = "SELECT * FROM generos";// consulta para los generos
$sql_lenguajes = "SELECT * FROM lenguajes"; //consulta para los lenguajes
// preparar los datos para las ciudades
$bandera = $conexion->prepare($sql);
$bandera->execute();
$ciudades = $bandera->fetchAll();
// preparar los datos para los generos
$bandera_generos = $conexion->prepare($sql_generos);
$bandera_generos->execute();
$generos = $bandera_generos->fetchAll();
// preparar los datos para los lenguajes
$bandera_lenguaje = $conexion->prepare($sql_lenguajes);
$bandera_lenguaje->execute();
$lenguaje = $bandera_lenguaje->fetchAll();
 
// echo "<pre>";
// print_r($ciudades);
// echo "</pre>";

// echo "<pre>";
// print_r($generos);
// echo "</pre>";

// echo "<pre>";
// print_r($lenguaje);
// echo "<pre>";

?>
<form action="controlador.php" method="post">
        <h1>Formulario</h1>
        <div>
            <label for="nombre">Nombres</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>
        <div>
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" placeholder="Apellido"  required>
        </div>
        <div>
            <label for="correo">Correo</label>
            <input type="text" id="correo" name="correo" placeholder="Correo"  required>
        </div>
        <div>
            <label for="fecha_nacimiento">Fecha Nacimiento</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha" required>
        </div>

        <div>
            <label for="id_ciudad">Ciudades</label>
            <select name="id_ciudad" id="id_ciudad">
                <?php
                foreach ($ciudades as $key => $value) {
                ?>
                <option value="<?=$value['id_ciudad']?>" required>
                    <?= $value['nombre_ciudad'] ?>
                </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div>
            <label for="id_genero">Generos:</label>
            <?php
             foreach ($generos as $key => $value){
            ?>
                <div>
                    <label for="genero<?=$value['id_genero']?>"><?= $value['nombre_genero'] ?>
                        <input type="radio" name="id_genero" value="<?= $value['id_genero'] ?>" id="<?=$value['id_genero']?>"  required>
                    </label>
                </div>
            <?php
            }
            ?>
        </div>
        
        <div>
        <label for="id_lenguaje">Lenguaje:</label>
        <?php
             foreach ($lenguaje as $key => $value){
            ?>
             <label for="lenguaje<?=$value['id_lenguaje']?>"><?= $value['nombre_lenguaje'] ?>
             <input type="checkbox" name="id_lenguaje[]" value="<?= $value['id_lenguaje'] ?>" id="<?=$value['id_lenguaje']?>"> 
             </input>
             <?php
                }
            ?>
        </div>

        <div>
        <input type="submit"></input>
</form>