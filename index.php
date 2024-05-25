<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Login - MT_roles
		</title>

		<link rel="stylesheet" type="text/css" href="styles/style.css">

	</head>
	<body>
		<header>
			<h1>
				ASIGNACION DE PERMISOS
			</h1>
		</header>
		<section>
			<div class="formLogin">
				<form action="login.php" method="post">
					<h3>
						Login
					</h3>
					<label>
						Usuario
					</label>
					<input type="text" name="loginUser" id="loginUser">
					<label>
						Contraseña
					</label>
					<input type="password" name="loginPass" id="loginPass">
					<input type="submit" name="btnLogin" id="btnLogin" value="Entrar">
				</form>
			</div>
		</section>
	</body>
</html>