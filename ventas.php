<?php 
include './includes/functions.php';
include './includes/config/db.php';

session_start();
validarSession();
incluirTemplate('header', $_SESSION['user'][1], 'Ventas');
incluirTemplate('404');

?>



<?php incluirTemplate('footer')?>