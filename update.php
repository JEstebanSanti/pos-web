<?php
include './includes/functions.php';
include './includes/config/db.php';
session_start();
validarSession();

$id = $_GET["id"] ?? null;
//$con = new mysqli('localhost', 'id20924423_jban77', 'Jorgeesteban$santi1', 'id20924423_pos1');
//$con = new mysqli('localhost',  'jban', '', 'pos');
$con = conDB();
$query = "SELECT nombre,codigo ,precio FROM productos WHERE id = {$id}";
$res = mysqli_query($con, $query);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $query_update = "UPDATE productos SET  nombre= '{$_POST['nombre']}', precio= '{$_POST['precio']}' WHERE id = {$id}";
        $command = mysqli_query($con, $query_update);
        if ($command) {
            header("Location: productos.php?update=true");
        } else {
            header("Location: productos.php?update=false");
        }
    } catch (Exception $th) {
        echo "Acceso No autorizado Se A Reportado a las Autoridades Correspondientes";
        echo "<a href='./posjban/insert-producto.php'></a>";
    }
}
incluirTemplate('header', $_SESSION['user'][1], 'Modificar Productos')
?>
<div class="container text-start mt-5">
    <form method="post">
        <?php while ($row = mysqli_fetch_assoc($res)) : ?>
                <div class="row mb-3 justify-content-center">
                    <div class="col-lg-6 col-sm-12">
                        <label class="form-label " for="">CODIGO: <?php echo $row["codigo"] ?> </label>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-lg-6 col-sm-12">
                        <label class="form-label" for="" name="nombre">Nombre</label>
                        <input class="mb-2 form-control" type="text" name="nombre" value="<?php echo $row["nombre"] ?>">
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-lg-6 col-sm-12">
                        <label class="form-label" for="" name="precio">Precio</label>
                        <input class="mb-3 form-control" type="text" name="precio" value="<?php echo $row["precio"] ?>">
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-lg-6 col-sm-12">
                        <input class="btn btn-success" type="submit" value="Modificar">
                    </div>
                </div>
        <?php endwhile; ?>
    </form>
</div>

<?php incluirTemplate('footer'); ?>