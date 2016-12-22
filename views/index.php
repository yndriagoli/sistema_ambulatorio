<!DOCTYPE html>
<html lang="es"> 
<head>
	<meta charset="utf-8">
	<title>SIG</title> 
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/components.css">
</head>
<body>
	<form action="../controllers/validar.php" method="post" id="form-login">
		<p>
			Iniciar sesión
		</p>
		<label>
			Usuario 
			<input type="text" name="log" class="login-user" onKeyPress="capLock(event)" onKeyPress="return solo_letras(event)" placeholder="Usuario"  maxlength="30" autofocus autocomplete="off" required>
		</label>
		<label>
			Clave
			<a href="#">Recuperar clave</a>
			<input type="password" name="clave" class="login-user" maxlength="16" minlength="8" onKeyPress="capLock(event)" onKeyPress="return solo_alfa(event)" placeholder="Clave" autocomplete="off" required>
		</label>
		<label>
		<input type="submit" value="Entrar" class="form-submit">
		</label>
	</form>
	<script type="text/javascript" src="js/efectosForm.js"></script>
	<script type="text/javascript" src="js/validar.js"></script>
	</body>
</html>