<?php
$error = $_GET['log'] ?? null;
$errorLogin = $_GET['err'] ?? null;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <title>Dashboard</title>
</head>

<body>
    <h1>Dashboard POS-JBAN</h1>
    <?php
    if (isset($errorLogin)) {
        echo "<p>ACCESO DENEGADO</p>";
    }
    if (isset($error)) {
        echo "<p>Credenciales Incorrectas</p>";
    }
    ?>
    <form action="validar.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="usuario">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>