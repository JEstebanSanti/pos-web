<?php 
require 'config.php';

function conDB () {
    $con = mysqli_connect(LOCAL_HOST,LOCAL_USER,LOCAL_PDW,LOCAL_DB);
    return $con;
}