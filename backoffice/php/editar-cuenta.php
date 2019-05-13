<?php
// Consigo los datos del form
// 1. Conectarnos a la BD
include("conexion.php");
include("sesion.php");

$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$localidad = $_POST['localidad'];
$direccion = $_POST['direccion'];
$numero = $_POST['numero'];
$comentario = $_POST['comentario'];
$sitioweb = $_POST['sitioweb'];
$face = $_POST['face'];
$instagram = $_POST['instagram'];
$twitter = $_POST['twitter'];


// 2. Crear la query (INSERT)
$consulta = "UPDATE empresas  SET nombre = '$nombre', categoria = '$categoria', localidad = '$localidad', 
direccion = '$direccion', numero = '$numero', comentario = '$comentario',
sitioweb = '$sitioweb' , face = '$face', instagram = '$instagram', twitter = '$twitter'
WHERE id_empresa = $id_empresa;";


// 3. Ejecutar la query
$consulta_ej = mysqli_query($conexion, $consulta);

if($consulta_ej == false){
    echo "Fallto ver SQL";
}

else {
    header("Location: ../cuenta.php");
    }
