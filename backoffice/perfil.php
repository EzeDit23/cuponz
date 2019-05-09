<?php
    include("php/conexion.php");
    include("php/sesion.php");


    $mostrar = "SELECT * FROM `empresas` WHERE id_empresa=$id_empresa";


    // 3. Ejecutar la query
    $mostrar_ej = mysqli_query(
                $conexion, $mostrar
                );

    // 4. Verificar si funcionó
    if($mostrar_ej == true){
        while($dato = mysqli_fetch_array($mostrar_ej)) {
       
            $id = $dato['id_empresa'];
            $nombre = $dato['nombre'];
            $categoria = $dato['categoria'];
            $email = $dato['email'];
            $clave = $dato['clave'];
            $localidad = $dato['localidad'];
            $direccion = $dato['direccion'];
            $numero = $dato['numero'];   
            $comentario = $dato['comentario'];     
            $sitioweb = $dato['sitioweb'];     
            $facebook = $dato['face'];     
            $instagram = $dato['instagram'];     
            $twitter = $dato['twitter'];     
        }

        echo "<h2>DATOS DE USUARIO<h2>";
        echo "<span>Correo electronico:</span> <span>$email</span><br>";
        echo "<span>Clave:</span> <span>$clave</span>";

        echo "<h2>DATOS DE EMPRESA<h2>";
        echo "<span>Marca:</span> <span>$nombre</span><br>";
        echo "<span>Categoria/rugro: </span><span>$categoria</span><br>";
        echo "<span>localidad:</span> <span>$localidad </span><br>";
        echo "<span>Direccion:</span> <span>$direccion </span><span>$numero / $comentario</span>";

        echo "<h2>REDES SOCIALES<h2>";
        echo "<span>Sitio web:</span> <span>$sitioweb</span><br>";
        echo "<span>Facebook:</span> <span>$facebook</span><br>";
        echo "<span>Instagram: </span> <span>$instagram</span><br>";
        echo "<span>Twitter: </span> <span>$twitter</span><br>";
        
        
   
    } else {
        echo "ALgo pasa con el SQL";
    }

    //traer datos


?>
