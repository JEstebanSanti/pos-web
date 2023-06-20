<?php
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
 
try {
    //$con = new mysqli('localhost', 'id20924423_jban77', 'Jorgeesteban$santi1', 'id20924423_pos1');
    //$con = new mysqli('localhost',  'jban', '', 'pos');
    $query = "INSERT INTO productos(id, codigo, nombre, precio) VALUES (null, '$codigo', '$nombre', $precio);";
    $command = mysqli_query($con, $query);
    if($command){
        header("Location: productos.php?inserted=true");
    }else{
        header("Location: productos.php?inserted=false");
    }
}catch (Exception $th) {
    echo "Acceso No autorizado Se A Reportado a las Autoridades Correspondientes";
    echo "<a href='./posjban/insert-producto.php'></a>";
}
