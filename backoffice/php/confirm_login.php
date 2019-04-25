<?php
	// login_pr.php
	
	// 1° Consigo los datos
	$email = $_POST['email'];
	// Comparo encriptado con encriptado
	$clave   = ($_POST['clave']);
	
	// 2° Me conecto a la BD
	include("conexion.php");
	
	// 3° Creo la query (SELECT)
	$buscar = "SELECT * FROM empresas
			   WHERE
               email = '$email'
				AND
				clave   = '$clave'
			  ";
	
	// 4° Ejecutar la query
	$buscar_ej = mysqli_query(
				$conexion, $buscar
				);
	
	// 5° Preguntar si NO funcionó
	if($buscar_ej == false){
		echo "Error en SQL $buscar";
	} else {
		// echo "Vas bien! :D $buscar";
		
		// Pregunto si tengo resultados
		$cant = mysqli_num_rows($buscar_ej);
		if($cant === 1){
			//echo "Datos correctos!";
			
	// Conseguir el ID del usuario
	$reg = mysqli_fetch_array($buscar_ej);
	// ID $reg['id_usuario']
			
	// Crear una var de sesión con ese ID
	session_start();
	$_SESSION['id_empresa'] = $reg['id_empresa'];
			
	// Llevarlo a la sección "privada"
	// echo "El ID del usuario es ";
	// echo $_SESSION['id'];
	// Redirección
	header("location: ../perfil.php");
	
		} else {
			header("location: ../errorlogin.php");
		}
	} // DANGER ZONE
	
?>



