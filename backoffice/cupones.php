<?php
    include("php/conexion.php");
    include("php/sesion.php");

    include("components/head.php");
    include("components/menu.php");


?>
  <div class="col-10 sinNada">
        <div class="row sinNada cont-cuenta">
            <div class="col-12 sinNada cont-btns">
                <h2><i class="fas fa-ticket-alt"></i> CUPONES</h2>
                <div class="cont-doble-btn">
                    <a href=""><div class="btn-gral2  btn-agregar">
                    <i class="fas fa-sync-alt"></i> RECARGAR
                    </div></a>
                    <div class="space-20"></div>
                    <a href=""><div class="btn-gral  btn-agregar">
                        <i class="fas fa-download"></i> DESCARGAR EXCEL
                    </div></a>
                </div>
             
            </div>
            
            <div class="col-12 sinNada cuenta-cont-datos"> 
                <table class="table-datos-top">
                    <tr class="cont-table-tit">
                        <th class="table-dato-status"><i class="fas fa-toggle-on"></i></th>
                        <th class="table-dato-chico"><i class="fas fa-key"></i> Codigo</th>
                        <th class="table-dato"><i class="fas fa-gift"></i> Nombre</th>
                        <th class="table-dato-chico"><i class="fas fa-ticket-alt"></i> Desc.</th>
                        <th class="table-dato-chico"><i class="fas fa-venus-mars"></i> Sexo</th>
                        <th class="table-dato-chico"><i class="fas fa-money-bill-wave"></i> Precio</th>
                        <th class="table-dato-chico"><i class="fas fa-tag"></i> Off</th>
                        <th class="table-dato"><i class="fas fa-store"></i> Categoria</th>
                        <th class="table-dato-chico"><i class="fas fa-user"></i> Nombre</th>
                        <th class="table-dato-chico"><i class="fas fa-user-circle"></i> Apellido</th>
                        <th class="table-dato-grande"><i class="fas fa-map-marker-alt"></i> Direccion</th>
                    </tr>
                </table>

<?php
    $mostrar = "SELECT * FROM `empresas` WHERE id_empresa=$id_empresa";


    // 3. Ejecutar la query
    $mostrar_ej = mysqli_query(
                $conexion, $mostrar
                );

    // 4. Verificar si funcionó
    if($mostrar_ej == true){
        while($dato = mysqli_fetch_array($mostrar_ej)) {
            $id = $dato['id_empresa'];
            
            $mostrarCup = "SELECT * FROM `cupones` WHERE id_empresa=$id_empresa ORDER BY id_cupon DESC;";

            // 3. Ejecutar la query
            $mostrarCup_ej = mysqli_query(
                        $conexion, $mostrarCup
                        );
                        while($dato = mysqli_fetch_array($mostrarCup_ej)) {
                            $id_cupon = $dato['id_cupon'];
                            $codigo = $dato['codigo'];
                            $id_descuento = $dato['id_descuento'];
                            $id_vecino = $dato['id_vecino'];
                            $estado = $dato['estado'];


                    $mostrarDes = "SELECT * FROM `descuentos` WHERE id_descuento=$id_descuento ORDER BY id_descuento ASC";

                    // 3. Ejecutar la query
                    $mostrarDes_ej = mysqli_query(
                                $conexion, $mostrarDes
                                );
                                while($dato = mysqli_fetch_array($mostrarDes_ej)) {
            
                                    $nombre = $dato['nombre'];
                                    $porcentaje = $dato['porcentaje'];
                                    $sexo = $dato['sexo'];
                                    $precio = $dato['precioreal'];
                                    $precioOff = $dato['preciodesc'];
                                    $categoria = $dato['categoria'];


                                    $mostrarVec = "SELECT * FROM `vecinos` WHERE id=$id_vecino ORDER BY id ASC;";

                                    // 3. Ejecutar la query
                                    $mostrarVec_ej = mysqli_query(
                                                $conexion, $mostrarVec
                                                );
                                                while($dato = mysqli_fetch_array($mostrarVec_ej)) {
                            
                                                    $nombreVec = $dato['nombre'];
                                                    $ApellidoVec = $dato['apellido'];
                                                    $direccion = $dato['direccion'];
                                                    $numero = $dato['direccion'];
            
        ?>

                    <table class="table-datos">
                        <tr>
                            <?php echo "<td class='table-dato-status'><a href='php/cupones_estado.php?id_cupon=".$id_cupon."&estado=".$estado."'><img src='img/read_".$estado.".png' class='icon-status'></a></td>";?>
                            <td class="table-dato-chico"><?php echo $codigo;?></td>
                            <td class="table-dato"><?php echo $nombre;?></td>
                            <td class="table-dato-chico"><?php echo "$porcentaje%";?></td>
                            <td class="table-dato-chico"><?php echo $sexo;?></td>
                            <td class="table-dato-chico"><?php echo "$$precio";?></td>
                            <td class="table-dato-chico"><?php echo "$$precioOff";?></td>
                            <td class="table-dato"><?php echo $categoria;?></td>
                            <td class="table-dato-chico"><?php echo $nombreVec;?></td>
                            <td class="table-dato-chico"><?php echo $ApellidoVec;?></td>
                            <td class="table-dato-grande"><?php echo $direccion;?></td>
                            
                
                        </tr>
                    </table>
            
        <?php
                    }
        
                }
                        
        }
    }
    } else {
        echo "ALgo pasa con el SQL";
    }

    //traer datos


?>      
              </div>
        </div>
    </div>
</div>