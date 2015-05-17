<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Sistema de Control de Acceso para Actos de Grado</title>
<link rel="stylesheet" href="css/normalize.css" />
<style>
body {
	font-family: "Segoe UI", "Segoe UI Web Regular", "Segoe UI Symbol", "Helvetica Neue", "BBAlpha Sans", "S60 Sans", Arial, sans-serif;
}

.login {
	margin: 7% auto 0;
	width: 450px;
	height: 450px;
	background-color: #FF8C00;
}


.login h1 {
	margin: 0;
	margin-top: 10px;
	font-weight: normal;
	text-align: center;
	color: #FFF;
}

.login h1 img {
	display: inline;
}

.login h1 .log1 {
	width: 56px;
	height: 40px;
}

.login h1 log2 {
	width: 40px;
	height: 40px;
}

.login p {
	margin: 0;
	text-align: center;
	color: #FFF;
}

.login div {
	margin: 10px auto;
	width: 250px;
}

.login input {
	margin: 0;
	padding: 0;
	font-size: .8em;
	display: block;
	font-family: inherit;
	border: 0;
}

.login input[type="text"], .login input[type="password"] {
	padding: 2px;
	width: 246px;
}

.login input[type="submit"] {
	padding: 2px;
	width: inherit;
	font-weight: bold;
	background-color: #FFF;
	color: #FF8C00;
}

.login input[type="submit"]:hover {
	background-color: #FFD199;
}

.login input[type="submit"]:active {
	color: #FFF;
	background-color: #1A0E00;
}

.login img {
	display: block;
	width: inherit;
	height: 253px;
}

</style>
</head>
<body>
	
<div class="login">
	<img src="img/graduation.png" />
	<h1><img class="log1" src="img/psm.png" /> Sicapag <img class="log2" src="img/birrete.png" /></h1>
	<p>Sistema de Control de Acceso para Actos de Grado</p>
	<form action="sesion.php">
		<div><input type="text" id="nombre" name="nombre" placeholder="Nombre de usuario" required /></div>
		<div><input type="password" id="clave" name="clave" placeholder="Contraseña" required /></div>
		<div><input type="submit" id="iniciar" name="iniciar" value="Iniciar" /></div>
	</form>
</label>
</div>

</body>
</html>