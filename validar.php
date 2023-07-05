<?php 

    //$con = new mysqli('localhost','id20924423_jban77', 'Jorgeesteban$santi1', 'id20924423_pos1');
    $con = new mysqli('localhost',  'jban', '', 'pos') or die("Error Mysql Conexion");
    
    try {
        $query = "SELECT * FROM usuarios WHERE rfc = '{$_POST['usuario']}' AND pass = '{$_POST['pass']}'"; 
        //echo $query;
        
        $com = mysqli_query($con, $query);
 
        $user = $com->fetch_assoc();

        if($com->num_rows == 1){
            session_start();
            $_SESSION['user'][0] =  $user['id_usuario'];
            $_SESSION['user'][1] = $user['nombre'];
            header('Location: ./menu.php?');
        }else{
            header('Location: ./index.php?log=0');
        }
    } catch (Throwable $th) {
        echo $th;
    }


?>