<?php

	session_start();

	if (isset($_SESSION['login']) and isset($_SESSION['userid'])) {
		if ($_SESSION['login'] == "Ok") {
			$userId = $_POST['idUserEdit'];
			include("conexion.php");
			$sql = "select id, nombre_rol FROM rol where id_area = (Select id_area from usuario where id = $userId)";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Administrar Roles
		</title>

		<link rel="stylesheet" type="text/css" href="styles/style.css">
	</head>
	<body>
		<header>
			<h1>
				Edicion de Roles
			</h1>
			<h3>
				<?php
					echo $_POST['nameUserEdit'];
				?>
			</h3>
		</header>
		<section>
			<form action="update.php" method="post">
				<table border="1">
					<tr>
						<td colspan="2">
							<span>
								Roles del Area
							</span>
						</td>
					</tr>
					<?php
						while ($row = $result->fetch_assoc()) {
							if ($_POST['rolUser'] == $row["id"]) {
								echo '
					            	<tr>
										<td>
											<span>
												'.$row["nombre_rol"].'
											</span>
										</td>
										<td>
											<input type="radio" name="rol" value="'.$row["id"].'" checked>
										</td>
									</tr>
					            ';
							}else{
								echo '
					            	<tr>
										<td>
											<span>
												'.$row["nombre_rol"].'
											</span>
										</td>
										<td>
											<input type="radio" name="rol" value="'.$row["id"].'">
										</td>
									</tr>
					            ';
							}
				        }

					?>
				</table>
				<input type="hidden" name="userEditId" value="<?php echo $userId ?>">
				<input type="submit" name="save" id="save" value="Guardar">
				<a href="usuarios_roles.php">Volver</a>
			</form>
			<a class="logout" href="logout.php">Salir</a>
		</section>
	</body>
</html>
<?php
		    } else {
		        echo "El usuario y/o la contraseña no son validos";
		        header('Location: http://localhost/mt_roles/');
		    }

		    // Cerrar la conexión a la base de datos
    		$conn->close();

		}else{
			echo "La sesion ha caducado";
			header('Location: http://localhost/mt_roles/');
		}
	}else{
		echo "No ha iniciado sesion";
		header('Location: http://localhost/mt_roles/');
	}

?>