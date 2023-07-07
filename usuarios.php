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
    die("No Se pudo Conectar con la Base de datos");
}
$query = "SELECT * FROM usuarios;";
$res = mysqli_query($con, $query);
incluirTemplate('header', $_SESSION['user'][1], 'Usuarios');
?>
<?php

if (($res->num_rows) > 0) {
    echo "<div class='container-lg text-center'>";
    echo "<table class='table table-hover table-dark table-striped'>";
    echo "<thead>
                    <tr>
                        <th scope= 'col'colspan='6'>Usuarios</th>
                    </tr>
                    <tr>
                        <th scope='col'>id</th>
                        <th scope='col'>Nombre</th>
                        <th scope='col'>Apellidos</th>
                        <th scope='col'>RFC</th>
                        <th scope='col'>Eliminar</th>
                        <th scope='col'>Modificar</th>
                    </tr>
    
                </thead>";

    while ($fila = mysqli_fetch_assoc($res)) {
        echo "<tr>" . "<td>" . $fila["id_usuario"]
            . "</td>" . "<td>" .
            $fila["nombre"] .
            "</td>" . "<td>" .
            $fila["apellidos"] .
            "</td>" . "<td>" . $fila["rfc"] . "</td>" .
            "<td><a href='delete-usuarios.php?id={$fila['id_usuario']}'><i class='bi bi-trash'></i></a></td>" .
            "<td><a href='update-usuarios.php?id={$fila['id_usuario']}'><i class='bi bi-pencil-square'></i></a></td>" .
            "</tr>";
    }
    echo "</table>";
    echo "</div>";
} else {
    echo "No hay USUARIOS";
}

?>
<!-- Button trigger modal -->
<div class="container">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Nuevo
    </button>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Nuevo Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="" action="./insert-usuario.php" method="post">
                    <fieldset>
                        <label class="col-form-label" for="" name="nombre">Nombre</label>
                        <input class="mb-2 form-control" type="text" name="nombre">
                        <label class="col-form-label" for="" name="nombre">Apellidos</label>
                        <input class="mb-2 form-control" type="text" name="apellidos">
                        <label class="col-form-label" for="" name="rfc">Contraseña</label>
                        <input class="mb-2 form-control" type="text" name="contraseña">
                        <label class="col-form-label" for="" name="rfc">RFC</label>
                        <input class="mb-2 form-control" type="text" name="rfc" maxlength='13'>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" value="agregar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php incluirTemplate('footer'); ?>