<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<?php
    
    include("conexion.php");
    include("sesion.php");

    $select="SELECT * FROM vecinos WHERE id=$id_vecino";

    $select_query = mysqli_query($conexion, $select);
    
    while($dato = mysqli_fetch_array($select_query)) {
        $cant_des = $dato['cant_des'];
    }
    if ($cant_des == 0){
        echo "no tenes mas promos";
    } else {
        $alpha = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $code = "";
        $longitud=6;

        for($i=0;$i<$longitud;$i++){
            $code .= $alpha[rand(0, strlen($alpha)-1)];
        }

        $cant_desRest = $cant_des -1;
        $restar = "UPDATE vecinos SET cant_des=$cant_desRest WHERE id=$id_vecino"; 
        $restar_query = mysqli_query($conexion, $restar);

        if($restar_query == true){
            echo "SE RESTO";
        } else {
            echo "ALgo pasa con el SQL";
        }
        $numganador=rand(1,3);
        
        /*GUARDAR CUPON*/
       
        
        $selectDes="SELECT * FROM descuentos WHERE id_descuento=$numganador";
        $select_queryDes = mysqli_query($conexion, $selectDes);

        while($dato = mysqli_fetch_array($select_queryDes)) {
            $id_descuento = $dato['id_descuento'];

        }

       
<<<<<<< HEAD
        $insertCup="INSERT INTO `cupones` (`id_cupon`, `codigo`, `id_vecino`, `id_descuento`, `estado`) 
        VALUES (null, '$code', '$id_vecino', '$id_descuento','si');";
=======
        $insertCup="INSERT INTO `cupones` (`id_cupon`, `estado`,`codigo`, `id_vecino`, `id_descuento`) 
        VALUES (null, 'si', '$code', '$id_vecino', '$id_descuento');";
>>>>>>> emepzando backoffice

        $query_insertCup = mysqli_query($conexion, $insertCup);

        if($query_insertCup == true){
            echo "se guardo el cupon de 10";
        } else {
            echo "ALgo pasa con el SQL";
        }

       
       header("Location: ../ganador.php?numganador=$numganador&code=$code");
    }
?>