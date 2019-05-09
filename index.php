<?php
include("components/head.php");


?>
<body>
<?php
    include("components/menu.php");
?>
    <div class="container-fluid registro sinNada">
        <div class="row sinNada cont-reg">
            <div class="col-md-12 sinNada reg-tit">
                <h1>Registrate y genera tu cupon de descuento</h1>
            </div>
            
            <div class="col-md-12 sinNada cont-form-reg">
                <form class="row sinNada" action="php/registro_vec.php" method="POST">

                    <div class="col-12 sinNada cont-inp-form">
                        <div class="cont-i-form"><i class="fas fa-envelope"></i></div>
                        <input class="inp-comun" type="email" value="" name="email" placeholder="Correo electronico"><br>
                    </div>

                    <div class="col-12 sinNada cont-inp-form">
                        <div class="cont-i-form"><i class="fas fa-unlock"></i></div>
                        <input class="inp-comun" type="password" value="" name="clave" placeholder="Contraseña"><br>
                    </div>

                    <div class="col-12 sinNada cont-inp-form">
                        <div class="cont-i-form"><i class="far fa-user"></i></div>
                        <input class="inp-comun" type="text" value="" name="nombre" placeholder="Nombre"><br>
                    </div>

                    <div class="col-12 sinNada cont-inp-form">
                        <div class="cont-i-form"><i class="far fa-user-circle"></i></div>
                        <input class="inp-comun " type="text" value="" name="apellido" placeholder="Apellido"><br>
                    </div>
  
                    <div class="col-12 sinNada cont-sexo-reg">
                        <label>Sexo</label>
                        <label class="radio">Hombre
                            <input type="radio" checked="checked" name="radio">
                            <span class="check"></span>
                        </label>
                        <label class="radio">Mujer
                            <input type="radio" name="radio">
                            <span class="check"></span>
                        </label>
                    </div>
     
                    <div class="col-12 sinNada cont-inp-form">
                        <div class="cont-i-form"><i class="fas fa-map-marker-alt"></i></div>
                        <input class="col-5 sinNada inp-comun" type="text" name="direccion" id="" placeholder="Direccion">
                        <div class="col-1 sinNada"></div>
                    <input class="col-4 sinNada inp-comun" type="number" name="numero" id="" placeholder="N°"><br>
                    </div>
            </div>
            

            <div class="col-md-12 sinNada">
                <input type="submit" name=""id="btn-login-reg" value="REGISTRARSE">
                </form>
            </div>
        </div>
    </div>


    <!--Scripts-->
    <?php
        include("components/scripts.php");
    ?>
</body>
</html>


