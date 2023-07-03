<?php 
    include './includes/functions.php';

    session_start();
    validarSession();

    $id = $_GET["id"] ?? null;
    
    //$con = new mysqli('localhost', 'id20924423_jban77', 'Jorgeesteban$santi1', 'id20924423_pos1');
    $con = new mysqli('localhost',  'jban', '', 'pos');
    $query = "SELECT * FROM usuarios WHERE id_usuario = $id";
    $res = mysqli_query($con, $query);
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        try {
            $query_update = "UPDATE usuarios SET  nombre= '{$_POST['nombre']}', apellidos= '{$_POST['apellidos']}', pass= '{$_POST["pass"]}' WHERE id_usuario = {$id}";
            $command = mysqli_query($con, $query_update);
            if($command){
                header("Location: usuarios.php?update=true");
            }
        }catch (Exception $th) {
            echo "Acceso No autorizado Se A Reportado a las Autoridades Correspondientes";
            echo "<a href='./posjban/insert-producto.php'></a>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuarios</title>
</head>
<?php templateHeader($_SESSION['user'][1])?>
<body style="background-color: #EBD494;">
    <h1>
        MODIFICAR USUARIOS
    </h1>
    <form method="post">
        <?php while($row = mysqli_fetch_assoc($res)):?>
            
        <fieldset style="width: 100px; background-color:#FEFFBE">
            <legend>MODIFICAR Usuario</legend>
            <label for="">id: <?php echo $row["id_usuario"]?> </label>
            <label for="" name="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $row["nombre"]?>">
            <label for="" name="precio">apellidos</label>
            <input type="text" name="apellidos" value="<?php echo $row["apellidos"] ?>">
            <label for="" name="precio">contraseña</label>
            <input type="text" name="pass" value="<?php echo $row["pass"] ?>">
        
        </fieldset>
        <input type="submit" value="Modificar" >
        <?php endwhile; ?>
    </form>
    <button>
        <a href="./productos.php">Volver</a>

    </button>
</body>
</html>