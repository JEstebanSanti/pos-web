<?php 

    //$con = new mysqli('localhost','id20924423_jban77', 'Jorgeesteban$santi1', 'id20924423_pos1');
    $con = new mysqli('localhost',  'jban', '', 'pos') or die("Error Mysql Conexion");
    
    try {
        $query = "SELECT * FROM usuarios WHERE rfc = '{$_POST['usuario']}' AND pass = '{$_POST['pass']}'"; 
        echo $query;
        $com = mysqli_query($con, $query);
        if($com->num_rows == 1){
            header('Location: ./menu.php?log=1');
        }else{
            header('Location: ./index.php?log=0');
        }
    } catch (Throwable $th) {
        echo $th;
    }


?>