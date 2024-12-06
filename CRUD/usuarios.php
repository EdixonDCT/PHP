<?php
echo "<h1>Usuarios</h1>";

$sql = "SELECT u.id_usuario, u.nombre, u.apellido, u.correo, u.fecha_nacimiento, g.nombre_genero, c.nombre_ciudad FROM usuarios AS u 
INNER JOIN generos AS g ON u.id_genero = g.id_genero INNER JOIN ciudades AS c ON u.id_ciudad = c.id_ciudad ORDER BY u.id_usuario;";

$bandera = $conexion->prepare($sql);
$bandera->execute();
$USUARIOS = $bandera->fetchAll();

?>
<form action="editar.php" method="post">
<table border>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Fecha de Nacimiento</th>
        <th>Genero</th>
        <th>Ciudad</th>
        <th>Acciones</th>
    </tr>
    <?php   
        foreach ($USUARIOS as $key => $value) {
    ?>    
    <tr>
        <td><?=$value['nombre']?></td>
        <td><?=$value['apellido']?></td>
        <td><?=$value['correo']?></td>
        <td><?=$value['fecha_nacimiento']?></td>
        <td><?=$value['nombre_genero']?></td>
        <td><?=$value['nombre_ciudad']?></td>
        <td><a href="editar.php?id=<?=$value['id_usuario']?>">Editar</a></td>
        <td><a href="eliminar.php?id=<?=$value['id_usuario']?>">Eliminar</a></td>
    <?php } ?>
</table>
</form>
<?php
echo "<h1>Lenguajes</h1>";

$sql = "SELECT u.nombre,l.nombre_lenguaje FROM lenguaje_usuario AS lu INNER JOIN usuarios AS u ON lu.id_usuario = u.id_usuario INNER JOIN lenguajes AS l ON lu.id_lenguaje = l.id_lenguaje ORDER BY u.id_usuario;";

$banderaLenguaje = $conexion->prepare($sql);
$banderaLenguaje -> execute();
$LENGUAJE = $banderaLenguaje ->fetchAll();

?>
<table border>
    <tr>
        <th>Usuario</th>
        <th>Lenguaje</th>
    </tr>
    <?php   
        foreach ($LENGUAJE as $key => $value) {
    ?>    
        <tr>
        <td><?=$value['nombre']?></td>
        <td><?=$value['nombre_lenguaje']?></td>
    </tr>
    <?php } ?>
</table>