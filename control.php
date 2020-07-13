<?php
    include "conexion.inc.php";
    $color=$_POST["color"];
    $ci=$_POST["carnet"];
    if ($ci=='') {
        header("Location: login.php"); 
    }
    if (isset($_POST["password"])) {
        $ci=$_POST["carnet"];
        $password=$_POST["password"];
        $result =mysqli_query($conn,"select * from usuario where ci='".$ci."'");
        $fila=mysqli_fetch_row($result);
        if ($ci ==$fila[0] && $password == $fila[1]) {
            session_start();
            $_SESSION['ci']=$ci;
            header("Location: saludo.php");
        }
        else {
            header("Location: login.php"); 
        }
    }
    if($color!=''){
        $sql="update identificador set color_fondo='$color' where ci='$ci'";
        $result =mysqli_query($conn,$sql);
        header("Location: saludo.php");
    }
    ?>