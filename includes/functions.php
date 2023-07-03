<?php

function templateHeader($user) {
    echo "
        <header>
            <nav>
                <a href='./menu.php'>Menu</a>
                <a href='./productos.php'>Productos</a>
                <a href='./usuarios.php'>Usuarios</a>
            </nav>
            <div>
                <p>Hola, <span>$user</span></p>
                <a href='./logout.php'>Salir</a>
            </div>
        </header>";
}
function validarSession() { 
    if(!isset($_SESSION['user'])){
        header('Location: index.php?err=true');
    }
}

function logout(){
   session_start();
   session_destroy();
   header('Location: ./index.php');
}