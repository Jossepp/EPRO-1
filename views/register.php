<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="form_register">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
			<span>Iniciar Sesi&oacute;n</span>
			<hr>
			
			<div class="nombre_completo">
				<label for="user">Nombres:</label>
				<input type="text" name="user_names" id="user_names" placeholder="Nombres">
				<label for="user">Apellidos:</label>
				<input type="text" name="user_lastnames" id="user_lastnames" placeholder="Apellidos">	
			</div>
			
			<label for="user">Usuario / email:</label>
			<input type="text" name="user" id="user_login" placeholder="username / user@example.com">
			<label for="pass">Contrase&ntilde;a:</label>
			<input type="password" name="pass" id="pass_login" placeholder="**********">
			<label for="pass">Contrase&ntilde;a:</label>
			<input type="password" name="pass" id="pass_login" placeholder="**********">
			<div class="register_options">
				<div class="login">
					<span>Ya tengo cuenta.</span>
					<a href="login.php">Iniciar Sesi&oacute;n</a>
				</div>
				<input type="submit" name="acces" value="Acceder">
			</div>
		</form>
	</div>

	<footer>
		<cite>Administraci&oacute;n de proyectos tecnol&oacute;gicos.</cite>
	</footer>
</body>
</html>