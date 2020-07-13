<?php
session_start();
if(isset($_SESSION['ci'])){
    header("Location: saludo.php"); 
}
else{
    header("Location: login.php"); 
}
?>