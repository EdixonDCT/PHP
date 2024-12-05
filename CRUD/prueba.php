<?php
require('conexion.php');

$db = new Conexion;
$conexion = $db -> getConexion();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$id_genero = $_POST['id_genero'];
// $id_lenguaje = $_POST['id_lenguaje'];
$id_ciudad = $_POST['id_ciudad'];

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

if (
    !preg_match("/^[a-zA-Z ]+$/", $nombre) || 
    !preg_match("/^[a-zA-Z ]+$/", $apellido) ||
    !preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $correo) ||
    empty($_POST['fecha_nacimiento']) ||
    $id_ciudad == "null" ||
    empty($_POST['id_genero']) ||
    empty($_POST['id_lenguaje'])
) 
{
?>
<form action="prueba.php" method="post">
        <h1>Formulario</h1>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required value="<?=$nombre?>">
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Apellido"  required value="<?=$apellido?>">
        </div>
        <div>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" placeholder="Correo" required value="<?=$correo?>">
        </div>
        <div>
            <label for="fecha_nacimiento">Fecha Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha" required value="<?=$fecha_nacimiento?>">
        </div>

        <div>
            <label for="id_ciudad">Ciudad:</label>
            <select name="id_ciudad" id="id_ciudad">
            <option value=null selected> Seleccionar </option>
                <?php
                foreach ($ciudades as $key => $value) {
                ?>
                <option value="<?=$value['id_ciudad']?>" required <?= $id_ciudad == $value['id_ciudad'] ? "selected" : "" ?>>
                    <?= $value['nombre_ciudad']?>
                </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div>
            <label for="id_genero">Genero:</label>
            <?php
             foreach ($generos as $key => $value){
            ?>
                <div>
                    <label for="genero<?=$value['id_genero']?>"><?= $value['nombre_genero'] ?>
                        <input type="radio" name="id_genero" value="<?= $value['id_genero'] ?>" id="<?=$value['id_genero']?>"  required 
                        <?= $id_genero == $value['id_genero'] ? "checked" : "" ?>>
                    </label>
                </div>
            <?php
            }
            ?>
        </div>
        
        <div>
        <label for="id_lenguaje">Lenguaje:</label>
        <?php 
        if (empty($_POST['id_lenguaje'])){
        ?>
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
        <?php }
        else{
            $id_lenguaje = $_POST['id_lenguaje'];
             foreach ($lenguaje as $key => $value){
            ?>
             <label for="lenguaje<?=$value['id_lenguaje']?>"><?= $value['nombre_lenguaje'] ?>
             <input type="checkbox" name="id_lenguaje[]" value="<?= $value['id_lenguaje'] ?>" id="<?=$value['id_lenguaje']?>"
             <?php 
             foreach ($id_lenguaje as $key => $value2)
             {
                if ($value['id_lenguaje'] == $value2) {
                    ?>
                    checked
                    <?php
                }
             }
             ?>
            >
             </input>
             <?php
                }
            ?>
        </div>
        <?php } ?>
        <input type="submit" value="Enviar"></input>   
</form> 
<?php
}
?>