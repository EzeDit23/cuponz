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
                        <h2><a style="color:#86498c" href="mispromos.php"><i class="fas fa-store"></i> MIS PROMOS</a> - <span> EDITAR</span></h2>
                        <a href=""><div class="btn-gral btn-agregar">
                            <i class="fas fa-chevron-left"></i> ATRAS
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
                        $precio = $dato['precioreal'];
                        $precio_desc = $dato['preciodesc'];
                        $comision = $dato['comision'];
                        $id_empresa = $dato['id_empresa'];
                        $categoria = $dato['categoria'];

                        
                    ?>

                        <div class='col-lg-12 sinNada'>
                            <div class='row sinNada cont-promo-edit'>
                                <!--<div class='col-3 sinNada cont-foto-cup' style="background: url('../img/descuentos/pizza.jpg')no-repeat; background-size: cover;">

                                </div>-->
                                <div class='col-12 sinNada'>
                                    <form class='row sinNada cont-datos-cup' action="php/guardar-editar-descuento.php" method="POST">
                                        <div class="col-12 sinnada">
                                            <input class="ocutlo" name="id_descuento" type="number" value="<?php echo $id_descuento;?>">
                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Promo:</b></div>
                                                <input class='col-4 sinNada' type="text" name="nombre" id="" value="<?php echo $nombreDescuento;?>" placeholder="<?php echo $nombreDescuento;?>">
                                                <div class="col-6 sinNada  txt-detalle"><span>Titulo principal que se visiualizara como referencia</span></div>
                                            </div>

                                            <div class="producto row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Precio:</b></div>
                                                <input class="col-2 sinNada pesoBruto" name="precioReal" type="number" value="<?php echo $precio;?>">
                                                <div class="col-2 sinNada  txt-detalle"><span>Minimo ($200)</span></div>
                                                <div class='col-2 sinNada txt-detalle'><b>Descuento:</b></div>
                                                <select class="merma col-3"  name="porcentaje" id="">
                                                    <option type="number" class="merma" value="<?php echo $porcentaje;?>"><?php echo "$porcentaje% de descuento <strong>(actual)</strong>";?></option>
                                                    <option type="number" class="merma" value="15">15% de descuento</option>
                                                    <option type="number" class="merma" value="20">20% de descuento</option>
                                                    <option type="number" class="merma" value="25">25% de descuento</option>
                                                </select>
                                                <!--
                                                <input type="number" class="merma" value="<?php /*echo $porcentaje;*/?>">
                    -->                    

                                                
                                                <div class='col-2 sinNada mt-10'><b>Valor:</b></div>
                                                <input class="val_dsc col-2 sinNada mt-10" name="precioDesc" value="<?php echo $precio_desc;?>" type="text" readonly="readonly" >
                                                <div class="col-2 sinNada txt-detalle mt-10"><span>Pago del cliente</span></div>
                                                <div class='col-2 sinNada txt-detalle mt-10'><b>Comision:</b></div>
                                                <input class="neto col-2 sinNada mt-10" name="comision" value="<?php echo $comision;?>" type="text" readonly="readonly" >
                                            </div>



                         
                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Categoria:</b></div>
                                                <select class='col-4 sinNada' name="categoria" id="">
                                                    <option value="<?php echo $categoria;?>"><?php echo "$categoria (actual)";?></option>
                                                    <option value="Bar & cerveceria">Bar & cerveceria</option>
                                                    <option value="Belleza">Belleza</option>
                                                    <option value="Bazar">Bazar</option>
                                                    <option value="Gastronomia">Gastronomia</option>                           
                                                    <option value="Indumentaria">Indumentaria</option>
                                                    <option value="Joyerías‎">Joyerías‎ </option>
                                                    <option value="Librerías">Librerías </option>
                                                    <option value="Otros">Otros</option>
                                                </select>
                                                <div class="col-6 sinNada txt-detalle"><span>Segmentacion de tipo de producto.</span></div>
                                            </div>
                                            
                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Sexo:</b></div>
                                                <select class='col-4 sinNada' name="sexo" id="">
                                                    <option value="Unisex">Unisex</option>
                                                    <option value="Hombre">Hombre</option>
                                                    <option value="Mujer">Mujer</option>
                                                </select>
                                                <div class="col-6 sinNada txt-detalle"><span>Orientacion de uso de este producto.</span></div>
                                            </div>


                                            <div class="row sinNada cont-btns-edit">
                                                <input style="font-family:Arial, FontAwesome" class="btn-gral-input" type="submit" value="&#xf045; APLICAR CAMBIOS">          
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

    <?php
        include("components/scripts.php");
    ?>
</body>