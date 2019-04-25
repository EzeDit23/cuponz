<?php
include("components/head.php");


?>
<body>
<?php
    include("components/menu.php");
?>
    <div class="container-fluid Login sinNada">
        <div class="row sinNada cont-login">
            <div class="col-md-12 sinNada">
                <h1>VECINOS</h1>
            </div>
            
            <form class="col-md-12 sinNada login-form" action="php/confirm_login.php" method="POST">
                <input type="text" name="email" id="in-login-email" placeholder="&#xf007; Email" style="font-family:Arial, FontAwesome"><br>
                <input type="password" name="clave"  id="in-login-pass" placeholder="&#xf13e; Password" style="font-family:Arial, FontAwesome"><br>
                <input type="submit" name="enviar" id="btn-login-entrar" value="ENTRAR">
            </form>

            <div class="col-md-12 sinNada">
                <span>No tienes cuenta? <a class="btns-links" href="">REGISTRATE</a></span>
            </div>
        </div>
    </div>


    <!--Scripts-->
    <?php
        include("components/scripts.php");
    ?>
</body>
</html>