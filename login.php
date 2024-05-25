<?php

	include("conexion.php");
	session_start();

	$user = $_POST['loginUser'];
	$pass = $_POST['loginPass'];

	// Consulta SQL para obtener datos de login
    $sql = "SELECT id FROM usuario WHERE usuario = '$user' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    	 while ($row = $result->fetch_assoc()) {
            $_SESSION['login'] = "Ok";
	        $_SESSION['userid'] = $row["id"];
	        echo $_SESSION['userid'];
	        header('Location: http://localhost/mt_roles/usuarios_roles.php');
        }
    } else {
        echo "El usuario y/o la contraseña no son validos";
        header('Location: http://localhost/mt_roles/');
    }

    // Cerrar la conexión a la base de datos
    $conn->close();

?>