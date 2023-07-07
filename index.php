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

<body class="container">
    <h1 class="text-center">Dashboard POS-JBAN</h1>
    <?php
    if (isset($errorLogin)) {
        echo "<p>ACCESO DENEGADO</p>";
    }
    if (isset($error)) {
        echo "<p>Credenciales Incorrectas</p>";
    }
    ?>

    <form action="validar.php" method="post" class="container g-3">
        <div class="row justify-content-center m-3">
            <div class="col-lg-4 col-md-8 col-sm-12">
                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="usuario">
            </div>
        </div>
        <div class="row justify-content-center m-3">
            <div class="col-lg-4 col-md-8 col-sm-12">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
            </div>
        </div>
        <div class="row justify-content-center m-3">
            <button type="submit" class="btn btn-primary col-lg-3 col-md-5 col-sm-12">Entrar</button>
        </div>
    </form>




    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>