<?php
    $email = $_POST["email"];
    $clave = $_POST["clave"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $numero = $_POST["numero"];

    include("conexion.php");
    
	$insertar = "INSERT INTO vecinos
	(id,email,clave,nombre,apellido,direccion,numero) 
	VALUES
	(NULL,'$email','$clave','$nombre','$apellido','$direccion','$numero')";
	
	// 3. Ejecutar la query
	$insertar_ej = mysqli_query(
				$conexion, $insertar
				);
	
	// 4. Verificar si funcionó
	if($insertar_ej == true){
        header('Location: ../promos.php');
	} else {
		echo "ALgo pasa con el SQL";
	}
?>