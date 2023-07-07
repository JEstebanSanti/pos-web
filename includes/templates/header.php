<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <title><?php echo $pageTitle ?></title>
</head>

<body>
    <header class="mb-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
            <div class="container">
                <a class="navbar-brand" href="./menu.php">
                    <img src="./img/the-spirited-cat-logo.png" alt="the-spirited-cat-logo" width="50" height="56">
                    The Spirited Cat
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-md-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="./productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="usuarios.php">Usuarios</a>
                         </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./ventas.php">Ventas</a>
                        </li>
                    </ul>
                </div>
                <div class="m-1">
                    <span class="p-1 m-2">
                        <?php echo 'Hola, '. $user?>
                    </span>
                    <a href="./logout.php" class="text-decoration-none btn btn-primary m-1">
                        <i class="bi bi-box-arrow-right">salir</i>
                    </a>    
                </div>
            </div>
        </nav>
    </header>
    <div class="container-lg text-center">
        <h1><?php echo $pageTitle?></h1>
    </div>