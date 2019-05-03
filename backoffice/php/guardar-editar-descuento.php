<?php
// Consigo los datos del form
// 1. Conectarnos a la BD
include("conexion.php");
include("sesion.php");

$id_descuento = $_POST["id_descuento"];

$nombre = $_POST['nombre'];
$precioReal = $_POST['precioReal'];
$porcentaje = $_POST['porcentaje'];
$precioDesc = $_POST['precioDesc'];
$comision = $_POST['comision'];
$categoria = $_POST['categoria'];
$sexo = $_POST['sexo'];


// 2. Crear la query (INSERT)
$consulta = "UPDATE descuentos SET nombre = '$nombre', precioreal = '$precioReal', porcentaje = '$porcentaje', preciodesc = '$precioDesc', comision = '$comision', categoria = '$categoria', sexo = '$sexo' WHERE id_empresa = $id_empresa AND id_descuento = $id_descuento;";

// 3. Ejecutar la query
$consulta_ej = mysqli_query($conexion, $consulta);

if($consulta_ej == false){
    echo "Fallto ver SQL";
}

else {
    header("Location: ../php/ver-guardar.php");
    }
