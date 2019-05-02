<?php
    include("php/conexion.php");
    include("php/sesion.php");

    include("components/head.php");
    include("components/menu.php");


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

        ?>
            <div class="col-10 sinNada">
                <div class="row sinNada cont-cuenta">
                    <div class="col-12 sinNada cont-btns">
                        <h2><i class="fas fa-user-circle"></i> CUENTA</h2>
                        <a href=""><div class="btn-gral">
                            ACTUALIZAR DATOS
                        </div></a>
                    </div>

                    <div class="col-12 sinNada cuenta-cont-datos">

                  
        

           
        

            
        <?php
        echo "<h2 class='p-tit'>Datos de usuario<h2>";
        echo "<span><b>Correo electronico:</b></span> <span>$email</span><br>";
        echo "<span><b>Clave: </b></span> <span>$clave</span>";

        echo "<h2 class='p-tit'>Datos de tu negocio<h2>";
        echo "<span><b>Marca:</b> </span> <span>$nombre</span><br>";
        echo "<span><b>Categoria/rugro:</b> </span><span>$categoria</span><br>";
        echo "<span>localidad: </span> <span>$localidad </span><br>";
        echo "<span><b>Direccion:</b> </span> <span>$direccion </span><span>$numero / $comentario</span>";

        echo "<h2 class='p-tit'>Redes<h2>";
        echo "<span><b>Sitio web: </b> </span> <span>$sitioweb</span><br>";
        echo "<span><b>Facebook: </b> </span> <span>$facebook</span><br>";
        echo "<span><b>Instagram: </b></span> <span>$instagram</span><br>";
        echo "<span><b>Twitter: </b></span> <span>$twitter</span><br>";
        
        
   
    } else {
        echo "ALgo pasa con el SQL";
    }

    //traer datos


?>      
              </div>
        </div>
    </div>
</div>