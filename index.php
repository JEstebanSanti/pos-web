<?php 
    $error = $_GET['log']?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard POS-JBAN</h1>
    <div>
        <form action="validar.php" method="post">
            <input name = 'usuario' type="text" placeholder="usuario" require>
            <input name= 'pass' type="password" placeholder="contraseña" requiere> 
            <input type="submit" value="Entrar" >
        </form>
        
    </div>
</body>
</html>