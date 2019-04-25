<?php
    $status = "si";
    $estado = "en proceso";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $clave = $_POST["clave"];
    $categoria = $_POST["categoria"];
    $localidad = $_POST["localidad"];
    $direccion = $_POST["direccion"];
    $numero = $_POST["numero"];
    $comentario = $_POST["comentario"];
    $sitioweb = $_POST["sitioweb"];
    $facebook = $_POST["facebook"];
    $instagram = $_POST["instagram"];
    $twitter = $_POST["twitter"];

    include("conexion.php");



    echo "ESTAMSO EN EL ARCHIVO";



   $insertar = "INSERT INTO empresas
    (id_empresa,nombre,categoria,status,estado,email,clave,localidad,direccion,numero,comentario,sitioweb,face,instagram,twitter)
    VALUES
    (null,'$nombre','$categoria','$status','$estado','$email','$clave','$localidad','$direccion','$numero','$comentario','$sitioweb','$facebook','$instagram','$twitter')";


    // 3. Ejecutar la query
    $insertar_ej = mysqli_query(
                $conexion, $insertar
                );

    // 4. Verificar si funcionó
    if($insertar_ej == true){
        echo "bien!";
    } else {
        echo "ALgo pasa con el SQL";
    }
?>
