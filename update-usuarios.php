<?php
include './includes/functions.php';
include './includes/config/db.php';

session_start();
validarSession();

$id = $_GET["id"] ?? null;
$con = conDB();
$query = "SELECT * FROM usuarios WHERE id_usuario = $id";
$res = mysqli_query($con, $query);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $query_update = "UPDATE usuarios SET  nombre= '{$_POST['nombre']}', apellidos= '{$_POST['apellidos']}', pass= '{$_POST["pass"]}' WHERE id_usuario = {$id}";
        $command = mysqli_query($con, $query_update);
        if ($command) {
            header("Location: usuarios.php?update=true");
        }
    } catch (Exception $th) {
        echo "Acceso No autorizado Se A Reportado a las Autoridades Correspondientes";
        echo "<a href='./posjban/insert-producto.php'></a>";
    }
}
incluirTemplate('header', $_SESSION['user'][1], 'Modificar Usuario');
?>

<div class="container text-start mt-5">
    <form method="post">
        <?php while ($row = mysqli_fetch_assoc($res)) : ?>
                <div class="row mb-3 justify-content-center">
                    <div class="col-6  col-md-12 text-center">
                        <label class="form-label" for="">ID Usuario: <?php echo $row["id_usuario"] ?> </label>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <label class="form-label" for="" name="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" value="<?php echo $row["nombre"] ?>">
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <label class="col-3 form-label" for="" name="precio">apellidos</label>
                        <input class="col-3 form-control" type="text" name="apellidos" value="<?php echo $row["apellidos"] ?>">
                    </div>

                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <label class="col-lg-5 form-label" for="" name="precio">contraseña</label>
                        <input class="col-lg-5 form-control" type="text" name="pass" value="<?php echo $row["pass"] ?>">
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <input class="btn btn-success" type="submit" value="Modificar">
                    </div>
                </div>
        <?php endwhile; ?>
    </form>
</div>

<?php incluirTemplate('footer') ?>