<?php
    include("../php/conexion.php");
   $id_cupon=$_GET['id_cupon'];
   $estado=$_GET['estado'];
   $referer=$_SERVER['HTTP_REFERER'];
// si estado viene con SI
   if( $estado == 'si' ) {
    $porSi = "UPDATE cupones SET estado='no'  WHERE id_cupon='$id_cupon';";
      // 3. Ejecutar la query
      $porSi_ej = mysqli_query(
        $conexion, $porSi
        );

} else {
	
// si estado viene con NO
    $porNo = "UPDATE cupones SET estado='si'  WHERE id_cupon='$id_cupon';";
    // 3. Ejecutar la query
    $porNo_ej = mysqli_query(
    $conexion, $porNo
    );


}

   header("Location: $referer");

?> 