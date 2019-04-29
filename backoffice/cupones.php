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
       
            $id_empresa = $dato['id_empresa'];
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
                        <h2><i class="fas fa-store"></i> MIS PROMOS</h2>
                        <a href=""><div class="btn-gral btn-agregar">
                            <i class="fas fa-plus"></i> AGREGAR PROMO
                        </div></a>
                    </div>

                    <div class="col-12 sinNada cont-aviso">
                        <p>Aun no tienes promos en el sistema, por lo tanto <b>no apareceras en la app</b>, cree una promo para empezar a ser parte de la <b>red cuponz</b></p>
                    </div>
                    <?php
                    $con_descuento = "SELECT * FROM `descuentos` WHERE id_empresa=$id_empresa";


                    // 3. Ejecutar la query
                    $query_descuento = mysqli_query(
                                $conexion, $con_descuento
                                );

                    $row_cnt = mysqli_num_rows($query_descuento);
                    // 4. Verificar si funcionó
                    
                    echo "<div class='col-12 sinNada cuenta-cont-datos'>";
                    echo "<h2 class='p-tit'>Promos activas ($row_cnt)<h2>";

                    while($dato = mysqli_fetch_array($query_descuento)) {
                        $id_descuento = $dato['id_descuento'];
                        $nombreDescuento = $dato['nombre'];
                        $porcentaje = $dato['porcentaje'];
                        $sexo = $dato['sexo'];
                        $precio = $dato['precio-real'];
                        $precio_desc = $dato['precio-desc'];
                        $id_empresa = $dato['id_empresa'];
                        $categoria = $dato['categoria'];

                        
                    ?>

                        <div class='col-lg-12 sinNada'>
                            <div class='row sinNada cont-promo'>
                                <div class='col-3 sinNada cont-foto-cup' style="background: url('../img/descuentos/pizza.jpg');">

                                </div>
                                <div class='col-7 sinNada'>
                                    <div class='row sinNada cont-datos-cup'>
                                        <div class='col-4 sinNada'><b>Promo:</b></div>
                                        <div class='col-8 sinNada'><span><?php echo $nombreDescuento;?></span></div>
                                        <div class='col-4 sinNada'><b>Porcentaje:</b></div>
                                        <div class='col-8 sinNada'><span><?php echo "$porcentaje%";?></span></div>
                                        <div class='col-4 sinNada'><b>Precio:</b></div>
                                        <div class='col-8 sinNada'><span><?php echo "$$precio_desc - ";?></span><span class="pre-desc"><?php echo "$$precio";?></span></div>
                                        <div class='col-4 sinNada'><b>Categoria:</b></div>
                                        <div class='col-8 sinNada'><span><?php echo "$categoria";?></span></div>
                                        <div class='col-4 sinNada'><b>Sexo:</b></div>
                                        <div class='col-8 sinNada'><span><?php echo $sexo;?></span></div>
                                    </div>
                                </div>
                              
                                <div class='col-2 sinNada'>
                                    <div class='row sinNada'>
                                        <?php echo "<a class='btn-panel' href='editar-descuento.php?id_descuento=$id_descuento'><div class='col-12 sinNada'>EDITAR</div></a>";?>
                                        <a class='btn-panel' href='#'><div class='col-12 sinNada'>ELIMINAR</div></a>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                  /*
                        echo "<div class='col-lg-12 sinNada'>";
                        echo "<div class='row sinNada cont-promo'>";
                        echo    "<div class='col-4'><b>Promo:</b></div><div class='col-4'><span> $nombreDescuento</span></div>";
                        echo    "<div class='col-4'><b>porcentaje:</b></div><div class='col-4'><span>  $porcentaje% de descuento</span></div>";
                        
                
                        echo    "<h2><b>Categoria:</b> $categoria</h2>";
                        echo "</div>";
                        echo "</div>";*/

                    }
                    ?>
        
            
        <?php

   
    } else {
        echo "ALgo pasa con el SQL";
    }

    //traer datos


?>      
              </div>
        </div>
    </div>
</div>