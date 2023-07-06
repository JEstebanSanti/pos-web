<?php 
    include './includes/functions.php';
    session_start();
    validarSession();    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <title>Dashboard</title>
</head>
<body>
    <?php 
    //templateHeader($_SESSION['user'][1]);
    incluirTemplate('header');
    ?>
    <footer></footer>
</body>
</html>