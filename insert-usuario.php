<?php
    include './includes/functions.php';
    include './includes/config/db.php';

    session_start();
    validarSession();
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $contraseña = $_POST["contraseña"];
    $rfc = $_POST["rfc"];

try {
    //$con = new mysqli('localhost', 'id20924423_jban77', 'Jorgeesteban$santi1', 'id20924423_pos1');
    //$con = new mysqli('localhost',  'jban', '', 'pos') or die("no se establecio conexion");
    $con = conDB();
    $query = "INSERT INTO usuarios(nombre, apellidos, pass, rfc) VALUES ('$nombre', '$apellidos', '$contraseña', '$rfc');";
    echo $query;
    $command = mysqli_query($con, $query);
    if($command){
        header("Location: ./usuarios.php");
    }else{
        header("Location: ./usuarios.php");
    }
    
}catch (Exception $th) {
    //echo "Acceso No autorizado Se A Reportado a las Autoridades Correspondientes";
    //echo "<a href='./usuarios.php'>VOLVER</a>";
        echo $th;
}
