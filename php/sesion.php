<?php

session_start();
    $id_vecino = $_SESSION['id_vecino'];
    if(isset($_SESSION['id_vecino']) == true ){
        /*VECINOS*/
        $mostrar = "SELECT * FROM `vecinos` WHERE id=$id_vecino";
        // 3. Ejecutar la query
        $mostrar_ej = mysqli_query(
                    $conexion, $mostrar
                    );
        // 4. Verificar si funcionó
        if($mostrar_ej == true){
            while($dato = mysqli_fetch_array($mostrar_ej)) {
                $id_vecino = $dato['id'];
                $nombre = $dato['nombre'];
                $cant_des = $dato['cant_des'];
            }
        }

        /*CUPONS*/

        $mostrar = "SELECT * FROM `cupones` WHERE id_vecino=$id_vecino";
        // 3. Ejecutar la query
        $mostrar_ej = mysqli_query(
                    $conexion, $mostrar
                    );
        // 4. Verificar si funcionó
        if($mostrar_ej == true){
            $row_cnt = mysqli_num_rows($mostrar_ej);

        }
    } else {
        header("location: index.php");
    }
    