<?php

include("php/conexion.php");
include("php/sesion.php");
include("components/head.php");

?>

<body>
<?php
include("components/menu.php");


$numganador=($_GET['numganador']);
$code=($_GET['code']);




/*CONSULTAMOS LA BASE DE DATOS*/
$selectDes="SELECT * FROM descuentos WHERE id_descuento=$numganador";
$selectVec="SELECT * FROM vecinos WHERE id=$id_vecino;";

$select_queryDes = mysqli_query($conexion, $selectDes);
$select_queryVec = mysqli_query($conexion, $selectVec);
?>
    <div class="container-fluid sinNada fondoGanador">
        <div class="row sinNada">
            <div class="col-12">
                <h2 class="tit-feliz"><i class="fas fa-gift"></i> FELICITACIONES</h2>
            </div>
        </div>

        <div class="row sinNada cont-tarjeta">
            <div class="col-12 contenedor sinNada">
                <div class="toda-tarjeta">
                    <div class="main-cupon">
                        <span>CUPON</span><span style="font-weight:normal;"><?php echo $code;?></span>
                    </div>
                    <div class="toda-tarjeta">
                        <div class="tarjeta">
                            <div class="contenido-cupon">

    
<?php
while($dato = mysqli_fetch_array($select_queryDes)) {
    $id_descuento = $dato['id_descuento'];
    $porcentaje = $dato['porcentaje'];
    $nombre = $dato['nombre'];
    $empresa = $dato['id_empresa'];
    $categoria = $dato['categoria'];

    $mostrarEmp = "SELECT * FROM `empresas` WHERE id_empresa=$empresa";
    // 3. Ejecutar la query
    $query_mostrarEmp = mysqli_query(
        $conexion, $mostrarEmp
    );

        while($dato = mysqli_fetch_array($query_mostrarEmp)) {
            $nombreEmp = $dato['nombre'];
        

    echo "<h1 class='tit-cupon'>$nombre </h1>";   
    echo "<h2 class='porc-cupon'>$porcentaje% de descuento</h2>";
    echo "<h1 class='code-cupon'>$code </h1>";
    echo "<h2 class='prom-empresa'>$nombreEmp </h2>";
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