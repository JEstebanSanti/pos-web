<?php 
    include './includes/functions.php';
    $id = $_GET["id"] ?? null;
    //$con = new mysqli('localhost', 'id20924423_jban77', 'Jorgeesteban$santi1', 'id20924423_pos1');
    $con = new mysqli('localhost',  'jban', '', 'pos');
    $query = "SELECT nombre,codigo ,precio FROM productos WHERE id = {$id}";
    $res = mysqli_query($con, $query);
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        try {
            $query_update = "UPDATE productos SET  nombre= '{$_POST['nombre']}', precio= '{$_POST['precio']}' WHERE id = {$id}";
            $command = mysqli_query($con, $query_update);
            if($command){
                header("Location: productos.php?update=true");
            }else{
                header("Location: productos.php?update=false");
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
    <title>productos</title>
</head>
<?php templateHeader()?>
<body style="background-color: #EBD494;">
    <h1>
        MODIFICAR Productos
    </h1>
    <form method="post">
        <?php while($row = mysqli_fetch_assoc($res)):?>
            
        <fieldset style="width: 100px; background-color:#FEFFBE">
            <legend>MODIFICAR Producto</legend>
            <label for="">CODIGO: <?php echo $row["codigo"]?> </label>
            <label for="" name="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $row["nombre"]?>">
            <label for="" name="precio">Precio</label>
            <input type="text" name="precio" value="<?php echo $row["precio"] ?>">
        </fieldset>
        <input type="submit" value="Modificar" >
        <?php endwhile; ?>
    </form>
    <button>
        <a href="./productos.php">Volver</a>

    </button>
</body>
</html>