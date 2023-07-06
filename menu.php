<?php 
    include './includes/functions.php';
    session_start();
    validarSession();
    
    //templateHeader($_SESSION['user'][1]);
    incluirTemplate('header', $_SESSION['user'][1], 'DashBoard');
?>

<main class="container">

</main>
    
<?php 
    incluirTemplate('footer');
?>
