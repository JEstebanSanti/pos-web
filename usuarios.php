<?php
include './includes/functions.php';
include './includes/config/db.php';

session_start();
validarSession();

//$inserted = $_GET["inserted"] ?? null;
//$con = new mysqli('localhost','id20924423_jban77', 'Jorgeesteban$santi1', 'id20924423_pos1');
//$con = new mysqli('localhost',  'jban', '', 'pos');
$con = conDB();
if (!$con) {
    die("No Se pudo Conectar con la Base de datos" . mysqli_error($con));
}
$query = "SELECT * FROM usuarios;";
$res = mysqli_query($con, $query);
incluirTemplate('header', $_SESSION['user'][1], 'Usuarios')
?>
<?php

if (($res->num_rows) > 0) {
    echo "<table border='1'>";
    echo "<thead>
                    <tr>
                        <th colspan='6'>Usuarios</th>
                    </tr>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>RFC</th>
                        <th>Eliminar</th>
                        <th>Modificar</th>
                    </tr>
    
                </thead>";

    while ($fila = mysqli_fetch_assoc($res)) {
        echo "<tr>" . "<td>" . $fila["id_usuario"]
            . "</td>" . "<td>" .
            $fila["nombre"] .
            "</td>" . "<td>" .
            $fila["apellidos"] .
            "</td>" . "<td>" . $fila["rfc"] . "</td>" .
            "<td><a href='delete-usuarios.php?id={$fila['id_usuario']}'><img src='./img/trash_bin_icon-icons.com_67981.png'></a></td>" .
            "<td><a href='update-usuarios.php?id={$fila['id_usuario']}'><img src='./img/notes_edit_modify_icon_143729.png'></a></td>" .
            "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay USUARIOS";
}

?>

<form action="./insert-usuario.php" method="post">
    <fieldset style="width: 100px; background-color:#FEFFBE">
        <legend>Agregar Nuevo usuario</legend>
        <label for="" name="nombre">Nombre</label>
        <input type="text" name="nombre">
        <label for="" name="nombre">Apellidos</label>
        <input type="text" name="apellidos">
        <label for="" name="rfc">Contraseña</label>
        <input type="text" name="contraseña">
        <label for="" name="rfc">RFC</label>
        <input type="text" name="rfc" maxlength='13'>
    </fieldset>
    <input type="submit" value="Agregar">
</form>

<?php incluirTemplate('footer'); ?>