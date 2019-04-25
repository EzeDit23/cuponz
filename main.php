<?php
    include("components/head.php");
?>
<body>
<?php
include("components/menu.php");
?>
    <div class="container-fluid main sinNada">
        <div class="row sinNada main-login">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">   
                        <div class="carousel-item active">
                            <img src="img/main/main-degrade.png" class="main-degrade" alt="">
                            <img src="img/main/1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-md-block">
                                <div class="main-categ"><p>Comida</p></div>
                                <p class="main-tit">VENI A DISFRUTAR!</p>
                                <a href="https://goo.gl/maps/RDpMB1BCVu12" target="_blank"><p class="main-geo"><i class="fas fa-map-marker-alt"></i> Villa Bosch</p></a>
                                <p class="main-copy">Veni a pasar la noche, cerveza artesanal, comida, buena musica y promos</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/main/main-degrade.png" class="main-degrade" alt="">
                            <img src="img/main/2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-md-block">
                                <div class="main-categ"><p>Belleza</p></div>
                                <p class="main-tit">CORTE DE PELO!</p>
                                <a href="https://goo.gl/maps/RDpMB1BCVu12" target="_blank"><p class="main-geo"><i class="fas fa-map-marker-alt"></i> Villa Bosch</p></a>
                                <p class="main-copy">Actualiza tu look con el mejor estilo, hoy mismo!</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="col-md-12 sinNada cont-gral">
                <h1 class="main-bien">BIENVENIDO A CUPONZ</h1>
                <p class="main-bien-copy">Empieza ahora y ganate un cupon de los locales aderidos</p>
            </div>

            <div class="col-md-12 sinNada cont-btn-gral">
                <a href="promos.php" class="btn-gral btn-padd-b">
                    <div>GENERAR CUPON</div>
                </a>
                <a class="link-gral" href="ver_cupones_active.php" id="btn-miscupones">MIS CUPONES</a>
            </div>

        </div>


    </div>

    <!--Scripts-->
    <?php
        include("components/scripts.php");
    ?>
</body>
</html>