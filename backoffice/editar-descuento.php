<?php
    $id_descuento = $_GET['id_descuento'];
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
                             ATRAS
                        </div></a>
                    </div>

                    <?php
                    $con_descuento = "SELECT * FROM `descuentos` WHERE id_descuento=$id_descuento";

                    // 3. Ejecutar la query
                    $query_descuento = mysqli_query(
                                $conexion, $con_descuento
                                );

                    $row_cnt = mysqli_num_rows($query_descuento);
                    // 4. Verificar si funcionó
                    
                    echo "<div class='col-12 sinNada cuenta-cont-datos'>";


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
                            <div class='row sinNada cont-promo-edit'>
                                <!--<div class='col-3 sinNada cont-foto-cup' style="background: url('../img/descuentos/pizza.jpg')no-repeat; background-size: cover;">

                                </div>-->
                                <div class='col-12 sinNada'>
                                    <form class='row sinNada cont-datos-cup'>
                                        <div class="col-12 sinnada">
                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Promo:</b></div>
                                                <input class='col-4 sinNada' type="text" name="" id="" placeholder="<?php echo $nombreDescuento;?>">
                                                <div class="col-6 sinNada  txt-detalle"><span>Titulo principal que se visiualizara como referencia</span></div>
                                            </div>

                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Descuento:</b></div>
                                                <select class='col-4 sinNada' name="" id="">
                                                    <option value="15">15% de descuento</option>
                                                    <option value="20">20% de descuento</option>
                                                    <option value="25">25% de descuento</option>
                                                </select>
                                                <div class="col-6 sinNada txt-detalle"><span>A mayor % de decuento, mas chances!</span></div>
                                            </div>

                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Precio:</b></div>
                                                $<input class='col-2 sinNada' type="number" min="200" max="5000" name="" id="" placeholder="<?php echo $precio;?>">
                                                <div class="col-2 sinNada txt-detalle"><span>(minimo $200).</span></div>
                                                <div class="col-2 sinNada txt-detalle"><b>Precio c.desc: </b></div>
                                                <span class="col-3 sinNada "> $170 </span>
                                            </div>

                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Categoria:</b></div>
                                                <select class='col-4 sinNada' name="" id="">
                                                    <option value="15">Comida</option>
                                                    <option value="20">Belleza</option>
                                                    <option value="25">Indumentaria</option>
                                                </select>
                                                <div class="col-6 sinNada txt-detalle"><span>Segmentacion de tipo de producto.</span></div>
                                            </div>
                                            
                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Sexo:</b></div>
                                                <select class='col-4 sinNada' name="" id="">
                                                    <option value="15">Unisex</option>
                                                    <option value="20">Hombre</option>
                                                    <option value="25">Mujer</option>
                                                </select>
                                                <div class="col-6 sinNada txt-detalle"><span>Orientacion de uso de este producto.</span></div>
                                            </div>

                                            <div class="row sinNada cont-btns-edit">
                                                <input class="btn-gral-input" type="submit" value="&#xf045; APLICAR CAMBIOS">          
                                            </div>
                                        </div>
                                    </form>
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