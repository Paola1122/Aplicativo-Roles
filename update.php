<?php

	include("conexion.php");
	session_start();

	if (isset($_SESSION['login']) and isset($_SESSION['userid'])) {
		if ($_SESSION['login'] == "Ok") {
			$user = $_POST['userEditId'];
			$newrol = $_POST['rol'];

			// Consulta SQL para obtener datos de login
		    $sql = "UPDATE usuario SET id_rol=$newrol WHERE id=$user";
		    $result = $conn->query($sql);
		    if ($result) {
		    	echo "Rol actualizado Correctamente";
		    } else {
		        echo "No se pudo actualizar el rol";
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