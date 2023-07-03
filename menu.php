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
    <title>Dashboard</title>
</head>
<body>
    <?php templateHeader($_SESSION['user'][1]);?>
    <footer></footer>
</body>
</html>