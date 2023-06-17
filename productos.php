<?php
    //$mensaje = $_GET["inserted"] ?? null;
    $con = new mysqli('localhost','id20924423_jban77', 'Jorgeesteban$santi1', 'id20924423_pos1');
    if(!$con){
        die("No Se pudo Conectar con la Base de datos" . mysqli_error($con));
    }
    $query = "SELECT * FROM productos;";
    $res = mysqli_query($con, $query);
    if(($res->num_rows) > 0){

        echo($res->num_rows);
        echo "<table border='1'>";
        echo "<thead>
                <tr>
                    <th colspan='5'>Productos</th>
                </tr>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Eliminar</th>
                    <th>Modificar</th>
                </tr>

            </thead>";

        while ($fila = mysqli_fetch_assoc($res)) {
            /*echo "<pre>";
            var_dump($fila);
            echo "</pre >";*/
            
            echo "<tr>" . "<td>". $fila["codigo"] . "</td>". "<td>". $fila["nombre"] . "</td>"."<td>". $fila["precio"] . "</td>". "<td><img src='./img/trash_bin_icon-icons.com_67981.png'></td>". "<td><img src='./img/notes_edit_modify_icon_143729.png'></td>". "</tr>";
        }
        echo "</table>";

    }
    else{
        echo "No hay Productos";
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
<body style="background-color: #EBD494;">
    <h1>
        Administracion de Productos
    </h1>
    <?php 
        /*if($mensaje === null);
        if($mensaje){
            echo "Producto Insertado con exito";
        }
        if(!$mensaje){
            echo "ERROR Producto NO Insertado";
        }*/
    ?>
    <form action="./insert-producto.php" method="post">
        <fieldset style="width: 100px; background-color:#FEFFBE">
            <legend>Agregar Nuevo Producto</legend>
            <label for="" name="codigo">Codigo</label>
            <input type="text" name="codigo">
            <label for="" name="nombre">Nombre</label>
            <input type="text" name="nombre">
            <label for="" name="precio">Precio</label>
            <input type="text" name="precio">
        </fieldset>
        <input type="submit" value="Agregar" >
    </form>
    
</body>
</html>