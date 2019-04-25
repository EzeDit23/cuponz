<?php
session_start();
    $id_empresa = $_SESSION['id_empresa'];
    if(isset($_SESSION['id_empresa']) == true ){
        echo "SESION INICIADA<br>";
    } else {
        header("location: index.php");
    }
    