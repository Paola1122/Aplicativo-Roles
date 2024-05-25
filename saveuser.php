<?php

	include("conexion.php");
	session_start();

	if (isset($_SESSION['login']) and isset($_SESSION['userid'])) {
		if ($_SESSION['login'] == "Ok") {
			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$usuario = $_POST['usuario'];
			$pass = $_POST['pass'];
			$idarea = $_POST['area'];
			$jefe = $_POST['jefe'];

			// Consulta SQL para obtener datos de login
		    $sql = "INSERT INTO usuario VALUES ($id,'".$nombre."','".$usuario."','".$pass."',".$idarea.",1,".$jefe.")";
		    $result = $conn->query($sql);
		    if ($result) {
		    	echo "Usuario actualizado Correctamente";
		    } else {
		        echo "No se pudo actualizar el usuario";
		        echo $sql;
		    }
		    header('Location: http://localhost/mt_roles/usuarios_roles.php');
		}else{
			echo "La sesion ha caducado";
			header('Location: http://localhost/mt_roles/');
		}
	}else{
		echo "No ha iniciado sesion";
		header('Location: http://localhost/mt_roles/');
	}

    // Cerrar la conexión a la base de datos
    $conn->close();

?>