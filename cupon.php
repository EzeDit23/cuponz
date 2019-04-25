<?php

include("php/conexion.php");
include("php/sesion.php");
include("components/head.php");
?>


<?php include("components/menu.php");?>

</body>
<div class="container-fluid sinNada fondoGanador">
        <div class="row sinNada">
            <div class="col-12">

<?php


    $id_cupon=($_GET['id_cupon']);
    /*datos de cupon*/
    $mostrar = "SELECT * FROM `cupones` WHERE id_cupon=$id_cupon";
    $selectVec="SELECT * FROM vecinos WHERE id=$id_vecino;";

    
    $select_queryVec = mysqli_query($conexion, $selectVec);

    echo "ESTAS EN EL CUPON CON ID: $id_cupon";
    // 3. Ejecutar la query
    $mostrar_ej = mysqli_query(
                $conexion, $mostrar
                );

    // 4. Verificar si funcionó
    if($mostrar_ej == true){
        while($dato = mysqli_fetch_array($mostrar_ej)) {
            $id_cupon = $dato['id_cupon'];
            $id_vecino = $dato['id_vecino'];
            $id_descuento = $dato['id_descuento'];
            $codigo = $dato['codigo'];

            $mostrarDes = "SELECT * FROM `descuentos` WHERE id_descuento=$id_descuento";


            // 3. Ejecutar la query
            $query_mostrarDes = mysqli_query(
                        $conexion, $mostrarDes
                        );
        
            // 4. Verificar si funcionó
            if($query_mostrarDes == true){
                while($dato = mysqli_fetch_array($query_mostrarDes)) {
                    $id_descuento = $dato['id_descuento'];
                    $nombre = $dato['nombre'];
                    $porcentaje = $dato['porcentaje'];
                    $empresa = $dato['empresa'];
                    
                    echo "<div class='row sinNada cont-tarjeta'>";
                    echo "<div class='col-12 contenedor sinNada'>";
                    echo    "<div class='toda-tarjeta'>";
                    echo        "<div class='main-cupon'>";
                    echo            "<span>CUPON</span><span style='font-weight:normal;'><?php echo $codigo;?></span>";
                    echo       "</div>";
                    echo       "<div class='toda-tarjeta'>";
                    echo            "<div class='tarjeta'>";
                    echo              "<div class='contenido-cupon'>";

                    echo                "<h1 class='tit-cupon'>$nombre </h1>";   
                    echo                "<h2 class='porc-cupon'>$porcentaje% de descuento</h2>";
                    echo                  "<h1 class='code-cupon'>$codigo </h1>";
                    echo                   "<h2 class='prom-empresa'>$empresa </h2>";

                }

                while($dato = mysqli_fetch_array($select_queryVec)) {
                    $nombreVec = $dato['nombre'];
                    $apellido = $dato['apellido'];
                    $cant_des = $dato['cant_des'];
                    if ($cant_des == 0){
                        $teQuedan = "<span class='txt-quedan'>No te quedan mas descuentos este mes</span>";
                    } 
                    else {
                        $teQuedan = "<span class='txt-quedan'>te quedan $cant_des descuentos mas este mes</span>";
                    }
                ?>
                </div>
                
                <div class="cont-datos">
                    <div class="items-datos">
                        <span class="item-tit-datos">Nombre</span>
                        <span><?php echo $nombreVec;?></span>
                    </div>
                    <div class="items-datos">
                        <span class="item-tit-datos">Apellido</span>
                        <span><?php echo $apellido;?></span>
                    </div>
                    <div class="items-datos">
                        <span class="item-tit-datos">DNI</span>
                        <span><?php echo $nombreVec;?></span>
                    </div>
                </div>
                <?php
                }
              
            }
                
        }   
    } else {
        echo "ALgo pasa con el SQL";
    }

    //datos de descuento





?>

</div>
            </div>
        </div>
        <?php
        echo $teQuedan;
        ?>
    </div> 
  
</div>

        <div class="col-md-12 sinNada cont-btn-gral">
            <a href="ver_cupones_active.php" class="btn-gral">
                <div>MIS CUPONES</div>
            </a>
        </div>
 
   
</div>

    <!--Scripts-->
    <?php
        include("components/scripts.php");
    ?>
</body>
</html>