

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--ICONOS P0ARA INPUT--><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!--ICON AWESOME--><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--BOOTSTRAP--><link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/query.css">

    <title>CPZ </title>
</head>

<body>
    <div class="container-fluid sinNada">
 
            <div class="col-12 sinNada main-reg">
                <div class="cont-main">
                    <h1>Completa tus datos</h1>
                    <p>Y empeza a incrementa las ventas de tu negocio</p>
                </div>
             
            </div>



            <div class="col-12 sinNada cont-form">

      
            <form action="php/reg_empresa.php" method="POST" class="cont-reg row">
                <label class="col-12 sinNada tit-form" for="">Datos Personales</label><br>
                <input class="col-lg-5 sinNada" type="text" name="email" id="" placeholder="Email"><br>
                <div class="col-lg-2"></div>
                <input class="col-lg-5 sinNada" type="password" name="clave" id="" placeholder="Clave"><br>

                <br><br>

                <label class="col-12 sinNada tit-form" for="">Datos Empresa</label><br>
                <input class="col-lg-5 sinNada" type="text" name="nombre" id="" placeholder="Nombre"><br>
                <div class="col-lg-2 sinNada"></div>
                <div class="col-lg-5 sinNada">
                    <div class="row sinNada">
                        <label class="col-lg-4 sinNada soloLabel" for="">Categoria </label> 
                        <select class="col-lg-8 sinNada"  name="categoria" id="">
                            <option value="Comida">Comida</option>
                            <option value="Indumentaria">Indumentaria</option>
                            <option value="Belleza">Belleza</option>
                            <option value="Otros">Otros</option>
                        </select><br>
                    </div>

                </div>
                
                <label class="col-lg-2 sinNada soloLabel" for="">Localidad </label>
                <select class="col-lg-3 sinNada"  name="localidad" id="">
                    <option value="">Villa Bosch</option>
                    <option value="">Martin Coroando</option>
                    <option value="">Caseros</option>
                    <option value="">Ciudad Jardin</option>
                </select><br>
                <div class="col-lg-2"></div>
                <input class="col-lg-3 sinNada"  type="text" name="direccion" id="" placeholder="Direccion">
                <div class="col-lg-1"></div>
                <input class="col-lg-1 sinNada"  type="number" name="numero" id="" placeholder="nº"><br>
                
                <textarea class="col-lg-12" type="boxar" name="comentario" id="" placeholder="Descricpion"></textarea><br><br>

                <label class="col-12 sinNada tit-form" for="">Redes</label><br>
                <input class="col-lg-5 sinNada" type="text" name="sitioweb" id="" placeholder="Sitio web"><br>
                <div class="col-lg-2"></div>
                <input class="col-lg-5 sinNada" type="text" name="facebook" id="" placeholder="Facebook"><br>
                <input class="col-lg-5 sinNada" type="text" name="instagram" id="" placeholder="Instagram"><br>
                <div class="col-lg-2"></div>
                <input class="col-lg-5 sinNada" type="text" name="twitter" id="" placeholder="Twitter"><br><br>

                <label class="col-lg-12 sinNada" for="imagen">Logo de tu comercio:</label>
                <input id="imagen" name="imagen" size="30" type="file" /><br><br>

                <input class="col-lg-5 sinNada legales-form btn-reg" type="submit" value="Registrarse" />
                <div class="col-lg-1 sinNada"></div>
                <div class="col-lg-4 sinNada legales-form">
                    <p>Al crear una cuenta, declaro que soy mayor de edad y
                    acepto los <span>Términos y condiciones</span> y las <span>Políticas de privacidad</span>
                    de <span>Cuponz.</span></p>

                </div>
                <div class="col-lg-2"></div>
                    
            </form>
        </div>

        
    
    </div>

    


    <script src="js/jquery-3.3.1.slim.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


<?php
