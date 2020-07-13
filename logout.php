<?php
    include "conexion.inc.php";
    session_start();
    session_destroy();
    header("Location: login.php"); 
?>