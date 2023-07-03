<?php
    include './includes/functions.php';

    session_start();
    validarSession();
    $id = $_GET["id"];  
    //$con = new mysqli('localhost',  'jban', '', 'pos');
    $con = new mysqli('localhost', 'id20924423_jban77', 'Jorgeesteban$santi1', 'id20924423_pos1');

    $query = "DELETE from usuarios WHERE id_usuario={$id}";

    $res = mysqli_query($con, $query);

    if($res){
        header('Location: ./usuarios.php');
    }
    

?>