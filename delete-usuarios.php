<?php
    $id = $_GET["id"];  
    $con = new mysqli('localhost',  'jban', '', 'pos');

    echo "El producto que se va a eliminar es el ". $id;

    $query = "DELETE from usuarios WHERE id_usuario={$id}";

    $res = mysqli_query($con, $query);

    if($res){
        header('Location: ./usarios.php?mensaje=1');
    }
    

?>