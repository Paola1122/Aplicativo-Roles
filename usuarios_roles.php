<?php

	session_start();

	if (isset($_SESSION['login']) and isset($_SESSION['userid'])) {
		if ($_SESSION['login'] == "Ok") {
			include("conexion.php");
			$sql = "select u.id as idusuario, u.nombre_usuario, r.nombre_rol, r.id as idrol
					from usuario as u
					INNER JOIN rol as r ON u.id_rol = r.id
					where u.id_area = (select id_area from usuario where id = ".$_SESSION['userid'].")";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Usuarios : Roles
		</title>

		<link rel="stylesheet" type="text/css" href="styles/style.css">
	</head>
	<body>
		<header>
			<h1>
				Usuarios : Roles
			</h1>
		</header>
		<section>
			<div class="tableUserRols">
				<table>
					<tr>
						<td>
							<span>
								Usuario
							</span>
						</td>
						<td>
							<span>
								Rol
							</span>
						</td>
						<td>
							<span>
								Accion
							</span>
						</td>
					</tr>
					<?php

						while ($row = $result->fetch_assoc()) {
				            echo '
				            	<tr>
									<td>
										<span>
											'.$row["nombre_usuario"].'
										</span>
									</td>
									<td>
										<span>
											<ul>
												<li>
													'.$row["nombre_rol"].'
												</li>
											</ul>
										</span>
									</td>
									<td>
										<form action="adminRol.php" method="post">
											<input type="hidden" name="idUserEdit" value="'.$row["idusuario"].'">
											<input type="hidden" name="nameUserEdit" value="'.$row["nombre_usuario"].'">
											<input type="hidden" name="rolUser" value="'.$row["idrol"].'">
											<input type="submit" name="editRol" id="editRol" value="Editar Roles">
										</form>
									</td>
								</tr>
				            ';
				        }

					?>
				</table>
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