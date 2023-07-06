<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <title><?php echo $pageTitle ?></title>
</head>

<body>
    <header class="stiky-top mb-5">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./menu.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./productos.php">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./usuarios.php">Usuarios</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-inline-block">
                    <a class="navbar-brand " href="./menu.php">
                        <img src="./img/the-spirited-cat-logo.png" alt="Logo" width="100" height="100" class="">
                    </a>
                    <h1>The Spirited Cat</h1>
                    <h2><?php echo $pageTitle?></h2>
                </div>
                
                <span class="navbar-brand mb-0 h1">Hola, <?php echo $user?></span>
                <a href="./logout.php" class="btn btn-secondary">Salir</a>
            </div>
        </nav>
    </header>