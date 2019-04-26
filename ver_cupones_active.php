<?php

$sw_estado = "si";

include("php/conexion.php");
include("php/sesion.php");
include("components/head.php");
?>


<body>

<?php
include("components/menu.php");
?>

<?php
    /*datos de cupon*/
    $mostrar = "SELECT * FROM `cupones` WHERE id_vecino=$id_vecino and estado='si' ORDER BY id_cupon desc";
    // 3. Ejecutar la query
    $mostrar_ej = mysqli_query(
                $conexion, $mostrar
                );
    ?>
     <div class="container-fluid sinNada fondoVerCupon">
         <div class="row sinNada cont-switch-vc" id="btn-active">
            <div class="col-6 sinNada">
                <a href="ver_cupones_active.php"><div class="btn-swich active">
                    <h2>Activas</h2>
                </div></a>
            </div>
            <div class="col-6 sinNada">
                <a href="ver_cupones_inactive.php"><div class="btn-swich inactive" id="btn-inactive">
                    <h2>Inactivas</h2>
                </div></a>
            </div>
         </div>

         <div class="cont-vercupones">
            <div class="row sinNada">
    
    <?php

        while($dato = mysqli_fetch_array($mostrar_ej)) {
            $id_cupon = $dato['id_cupon'];
            $id_vecino = $dato['id_vecino'];
            $id_descuento = $dato['id_descuento'];
            $estado = $dato['estado'];

            $estadoCss = "";

            if($estado = "si"){

                echo "<a href='cupon.php?id_cupon=$id_cupon' class='sinNada classMostrar cont-cupon'>";
               
                ?>
                <div style="background: url('img/descuentos/pizza.jpg');
                    background-size: cover;" class='img-Cupon-list'></div>
                <?php
 
                echo "<div class='cupon-item'>";
         
                $mostrarCup = "SELECT * FROM `cupones` WHERE id_cupon=$id_cupon";
                // 3. Ejecutar la query
                $query_mostrarCup = mysqli_query(
                            $conexion, $mostrarCup
                            );
                
                // 4. Verificar si funcionó
                if($query_mostrarCup == true){
                    while($dato = mysqli_fetch_array($query_mostrarCup)) {
                        $id_cupon = $dato['id_descuento'];
                        $codigo = $dato['codigo'];
                      
                    }
                }
    
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
                        $empresa = $dato['id_empresa'];

                        $mostrarEmp = "SELECT * FROM `empresas` WHERE id_empresa=$empresa";
                        // 3. Ejecutar la query
                        $query_mostrarEmp = mysqli_query(
                            $conexion, $mostrarEmp
                        );

                            while($dato = mysqli_fetch_array($query_mostrarEmp)) {
                                $nombreEmp = $dato['nombre'];
    
                            echo "<span class='tit-codigo'><b>CODIGO: $codigo</b></span>";
                            echo "<div class='linea-cupon'></div>";
                            echo "<span class='nombre-cupon'>$nombre<br>$nombreEmp</span><br>";
                            echo "<p class='porcentaje-cupon'>$porcentaje% de descuento</p>";
                            echo "</div>";
                            echo "</a>";
                        }
                    }
                }
            
            }
    }

    //datos de descuento

?>
        </div>
     </div>
    </div>

    <!--Scripts-->
    <?php
        include("components/scripts.php");
    ?>
  </body>