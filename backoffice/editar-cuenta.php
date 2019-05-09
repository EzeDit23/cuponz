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
                        <h2><a style="color:#86498c" href="cuenta.php"><i class="fas fa-store"></i> CUENTA</a> - <span> EDITAR</span></h2>
                        <a href=""><div class="btn-gral btn-agregar">
                            <i class="fas fa-chevron-left"></i> ATRAS
                        </div></a>
                    </div>

                    <?php

                    
                    echo "<div class='col-12 sinNada cuenta-cont-datos'>";


                        
                    ?>

                        <div class='col-lg-12 sinNada'>
                            <div class='row sinNada cont-promo-edit'>
                                <!--<div class='col-3 sinNada cont-foto-cup' style="background: url('../img/descuentos/pizza.jpg')no-repeat; background-size: cover;">

                                </div>-->
                                <div class='col-12 sinNada'>
                                    <form class='row sinNada cont-datos-cup' action="php/guardar-editar-descuento.php" method="POST">
                                        <div class="col-12 sinnada">
                                            <input class="oculto" name="id_descuento" type="number" value="<?php echo $id_descuento;?>">
                                            
                                            <div class="row sinNada">
                                                <h2 class='p-tit col-12 sinNada'>Datos de usuario<h2>
                                            </div><br>
                                            
                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Nombre:</b></div>
                                                <input class='col-10 sinNada in-comun' type="text" name="nombre" id="" value="<?php echo $nombre;?>" placeholder="<?php echo $nombreDescuento;?>">
                                       
                                            </div>

                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Categoria:</b></div>
                                                    <select class="merma col-5"  name="porcentaje" id="select-desc">
                                                        <option type="text" class="merma" id="option-desc-0" value="<?php echo $categoria;?>"><?php echo "$categoria  (actual)";?></option>
                                                        <option value="Bar & cerveceria">Bar & cerveceria</option>
                                                        <option value="Belleza">Belleza</option>
                                                        <option value="Bazar">Bazar</option>
                                                        <option value="Gastronomia">Gastronomia</option>                           
                                                        <option value="Indumentaria">Indumentaria</option>
                                                        <option value="Joyerías‎">Joyerías‎ </option>
                                                        <option value="Librerías">Librerías </option>
                                                        <option value="Otros">Otros</option>
                                                    </select>
                                            </div>

                                             <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Localidad:</b></div>
                                                <select class='col-5 sinNada' name="categoria" id="select-cat">
                                                    <option id="option-cat-0" value="<?php echo $localidad;?>"><?php echo "$localidad (actual)";?></option>
                                                    <option value="Martin Coronado">Martin Coronado</option>
                                                    <option value="Palomar">Palomar</option>
                                                    <option value="Bazar">Caseros</option>
                                                    <option value="Villa Bosch">Villa Bosch</option>                           
                                                </select>

                                                <div class='col-2 sinNada txt-detalle'><b>Nº:</b></div>
                                                <input class='col-3 sinNada in-comun' type="text" name="nombre" id="" value="<?php echo $numero;?>" placeholder="<?php echo $numero;?>">
                                            </div>

                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Comentario:</b></div>
                                                <input class='col-10 sinNada in-comun' type="text" name="nombre" id="" value="<?php echo $comentario;?>" placeholder="<?php echo $comentario;?>">
                                              
                                            </div><br>
                                                 
                                            <div class="row sinNada">
                                                <h2 class='p-tit col-12 sinNada'>Redes<h2>
                                            </div>


                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Sitio Web:</b></div>
                                                <input class='col-10 sinNada in-comun' type="text" name="nombre" id="" value="<?php echo $sitioweb;?>" placeholder="<?php echo $sitioweb;?>">
                                            </div>

                                            
                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Facebook:</b></div>
                                                <input class='col-10 sinNada in-comun' type="text" name="nombre" id="" value="<?php echo $facebook;?>" placeholder="<?php echo $facebook;?>">
                                            </div>
                                                                        
                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Instagram:</b></div>
                                                <input class='col-10 sinNada in-comun' type="text" name="nombre" id="" value="<?php echo $instagram;?>" placeholder="<?php echo $instagram;?>">
                                            </div>
                                       
                                            <div class="row sinNada cont-edit-sec">
                                                <div class='col-2 sinNada'><b>Twitter:</b></div>
                                                <input class='col-10 sinNada in-comun' type="text" name="nombre" id="" value="<?php echo $twitter;?>" placeholder="<?php echo $twitter;?>">
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