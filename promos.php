<?php

include("php/conexion.php");
include("php/sesion.php");
include("components/head.php");
?>

<body>

<?php
    include("components/menu.php");
?>

<?php

 $id_select = 1;

     
 /*USUARIOS*/
 $selectUser = "SELECT * FROM vecinos WHERE id = $id_vecino";
 $selectUser_query = mysqli_query($conexion, $selectUser);

 while($dato = mysqli_fetch_array($selectUser_query)) {
    $nombre = $dato['nombre'];
    $apellido = $dato['apellido'];
    }
    
/*AVISOS*/
 $select = "SELECT * FROM avisos WHERE id_aviso = $id_select";
 $select_query = mysqli_query($conexion, $select);

 while($dato = mysqli_fetch_array($select_query)) {
    $id_aviso = $dato['id_aviso'];
    $empresa = $dato['empresa'];
    $categoria = $dato['categoria'];
    $link = $dato['link'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recrea</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>


</head>
<body>

    <div class="container-fluid promo sinNada">
        <div class="row sinNada main-promo">
            <video id="video" width="100%" height="auto">
                <source src="video/video.mp4" type="video/mp4">
            </video>
            <script>
                $("#video").on('ended', function(){
                    $("#btn-espera").css("display","none");
                    $("#btn-verPromo").css("display","flex");
                });
                $("#video").on('play', function(){
                    $("a").css("display","red");    
                });
            </script>
            <div class="col-md-12 sinNada promo-cont-box">   
                <?php
                echo"<h2>$nombre veni a <strong>ROPA JOVEN</strong> y encontra lo mejor de la moda para este otoño!</h2>";
                echo"<a href='https://goo.gl/maps/RDpMB1BCVu12' target='_blank'><p class='main-geo'><i class='fas fa-map-marker-alt'></i> Villa Bosch</p></a>";
                ?>
            </div>
            <div class="col-md-12 sinNada cont-btn-gral">
                <div style="display: none;" id="btn-espera" class="btn-gral-alt">
                    <a href="#none">ESPERE...</a>
                </div>
                
                <a href="php/descuento_ver.php" class="btn-gral" id="btn-verPromo" style="display: none;">
                    <div>CONTINUAR</div>
                </a>
                
                
                <script type="text/javascript">
                window.reproducir = function() {
                    document.getElementById("video").play();
                    $("#btn-espera").css("display","flex");    
                    $("#btn-play").css("display","none");    
                };

                </script>
                <div class="btn-gral" id="btn-play" onclick="reproducir()">
                    <button>VER PUBLICIDAD</button>
                </div>
                
            </div>
           
        </div>
    </div>
 
    <!--Scripts-->
    <?php
        include("components/scripts.php");
    ?>
</body>
</html>