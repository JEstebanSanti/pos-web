<?php
include './includes/functions.php';
include './includes/config/db.php';
session_start();
validarSession();

$con = conDB();
if (!$con) {
    die("No Se pudo Conectar con la Base de datos");
}
$query = "SELECT * FROM productos;";
$res = mysqli_query($con, $query);

incluirTemplate('header', $_SESSION['user'][1], 'Productos');

?>

<?php
$eliminado = $_GET["mensaje"] ?? null;
$inserted = $_GET["inserted"] ?? null;

if ($eliminado == '1') {
    echo "<p>Eliminado correctamente</p>";
}
if ($inserted == '1') {
    echo "<p class=''>producto Agregado Correctamente</p>";
}
if (($res->num_rows) > 0) {
    echo "<div class='container text-center '>";
    echo "<table class='table table-hover table-dark table-striped'>";
    echo "<thead>
                    <tr>
                        <th scope='col' colspan='5'>Productos</th>
                    </tr>
                    <tr>
                        <th scope='col'>Codigo</th>
                        <th scope='col'>Nombre</th>
                        <th scope='col'>Precio</th>
                        <th scope='col'>Eliminar</th>
                        <th scope='col'>Modificar</th>
                    </tr>
    
                </thead>";

    while ($fila = mysqli_fetch_assoc($res)) {
        echo "<tr>" . "<td>" . $fila["codigo"]
            . "</td>" . "<td>" .
            $fila["nombre"] .
            "</td>" . "<td>" .
            $fila["precio"] .
            "</td>" .
            "<td><a href='delete.php?id={$fila['id']}'><i class='bi bi-trash'></i></a></td>" .
            "<td><a href='update.php?id={$fila['id']}'><i class='bi bi-pencil-square'></a></td>" .
            "</tr>";
    }
    echo "</table>";
    echo "</div>";
} else {
    echo "No hay Productos";
}
?>

<div class="container">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Nuevo
    </button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./insert-producto.php" method="post">
                    <fieldset>
                        <label class="col-form-label" name="codigo">Codigo</label>
                        <input class="mb-2 form-control" type="text" name="codigo">
                        <label class="col-form-label" for="" name="nombre">Nombre</label>
                        <input class="mb-2 form-control" type="text" name="nombre">
                        <label class="col-form-label" for="" name="precio">Precio</label>
                        <input class="mb-2 form-control" type="text" name="precio">
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="agregar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php incluirTemplate('footer'); ?>