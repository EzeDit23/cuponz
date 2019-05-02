<?php
session_start();
    $id_empresa = $_SESSION['id_empresa'];
    if(isset($_SESSION['id_empresa']) == true ){
       
    } else {
        header("location: index.php");
    }
    