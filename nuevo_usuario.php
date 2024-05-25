<?php

	session_start();

	if (isset($_SESSION['login']) and isset($_SESSION['userid'])) {
		if ($_SESSION['login'] == "Ok") {
			include("conexion.php");
			$sql = "select *
					from area";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Insert : User
		</title>

		<link rel="stylesheet" type="text/css" href="styles/style.css">
	</head>
	<body>
		<header>
			<h1>
				Insert : User
			</h1>
		</header>
		<section class="FormNewUser">
			<form action="saveuser.php" method="post">
				<input type="number" name="id" placeholder="Numnero de identificacion">
				<input type="text" name="nombre" placeholder="Nombre">
				<input type="text" name="usuario" placeholder="Usuario">
				<input type="password" name="pass" placeholder="Contraseña">
				<select id="area" name="area">
					<option value="">Seleccione el area</option>
					<?php

						while ($row = $result->fetch_assoc()) {
							echo "<option value=".$row["Id"].">".$row["nombre_area"]."</option>";
						}

					?>
				</select>
				<select id="jefe" name="jefe">
					<option value="">Seleccione si es Jefe</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
				<input type="submit" name="save" value="Guardar">
				<a href="usuarios_roles.php">Volver</a>
			</form>
		</section>
		<section>
			<div class="tableUserRols">
				<a class="logout" href="logout.php">Salir</a>
			</div>
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