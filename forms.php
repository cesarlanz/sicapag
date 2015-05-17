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

header {
	background-color: #FF8C00;
	height: 6.5em;
}
header h1 {
	margin: 0;
	padding: .5em 0;
	width: 60%;
	color: #FFF;
	text-align: center;
	overflow: hidden;
}
header div {
	background-color: #FFF;
	width: 15%;
	height: 100%;
}

.left {
	float: left;
}

.right {
	float: right;
}

.clear {
	clear: both;
}

.login {
	margin: 100px auto 0;
	padding-top: 40px;
	width: 450px;
	height: 210px;
	background-color: #FF8C00;
}


.login h2 {
	text-align: center;
	color: #FFF;
}

.login div {
	margin: 10px auto;
	width: 250px;
}

.login input {
	width: 100%;
	display: block;
	font-family: inherit;
	border: 1px solid #D3D3D3;
	padding: 2px;
}

.login input:focus {
	border: 1px solid #000;

}

.login input.iniciar {
	width: 100%;
	display: block;
	font-family: inherit;
	font-weight: bold;
	border: 0;
	background-color: #FFF;
	color: #FF8C00;
	padding: 2px;
}

.login input.iniciar:hover {
	background-color: #FFD199;
}

</style>
</head>
	
<body>


<header>
	<div class="left"><img src="#" /></div>
	<h1 class="left">SISTEMA DE CONTROL DE ACCESO PARA ACTOS DE GRADO</h1>
	<div class="left"><img src="#" /></div>
	<div class="clear"></div>
</header>

<section>
	
	<div class="login">
		<h2>Iniciar sesión</h2>
		<div><input type="text" id="nombre" name="nombre" placeholder="Nombre de usuario" required /></div>
		<div><input type="password" id="clave" name="clave" placeholder="Contraseña" required /></div>
		<div><input class="iniciar" type="submit" id="iniciar" name="iniciar" value="Iniciar" /></div>
	</label>
	</div>

<!-- UNIVERSIDAD -->
<form>
	<label>
		Nombre:
		<input type="text" id="nombre" name="nombre" maxlength="30" value="IUP Santiago Mariño" placeholder="Instituto" required />
	</label>
	<label>
		Extensión:
		<input type="text" id="extension" name="extension" maxlength="30" value="Puerto Ordaz" placeholder="Ciudad" required />
	</label>
	<label>
		Rif:
		<input type="text" id="rif" name="rif" maxlength="12" value="J-08034166-0" size="12" placeholder="J-08034166-0" required />
	</label>
	<label>
		Teléfono:
		<input type="tel" id="telefono" name="telefono" maxlength="12" value="02869236989" size="11" placeholder="02869236989" required />
	</label>
</form>
<br /><br /><br />

<!-- CARRERA -->
<form>
	<label>
		Código de carrera:
		<input type="text" id="codigo" name="codigo" maxlength="4" size="2" placeholder="##" required />
	</label>
	<label>
		Nombre:
		<input type="text" id="nombre" name="nombre" maxlength="50" placeholder="Carrera" required />
	</label>
	<label>
		Universidad:
		<select id="universidad" required>
			<option value="1">Acto de grado</option>
			<option value="1">Fiesta de grado</option>
			<option value="1">Pasapalos y bebidas</option>
		</select>
	</label>
</form>
<br /><br /><br />

<!-- ACTO DE GRADO-->
<form>
	<label>
		Promoción:
		<input type="text" id="promocion" name="promocion" maxlength="50" placeholder="Nombre de la promoción" required />
	</label>
	<label>
		Título:
		<input type="text" id="titulo" name="titulo" maxlength="50" value="Ticket de entrada para el acto solemne" placeholder="Título del ticket de entrada" required />
	</label>
	<label>
		Lugar:
		<input type="text" id="lugar" name="lugar" maxlength="50" placeholder="Sitio del acto" required />
	</label>
	<label>
		Fecha:
		<input type="date" id="fecha" name="fecha" required />
	</label>
	<label>
		Hora:
		<input type="time" id="hora" name="hora" value="09:00:00" required />
	</label>
	<label>
		Atuendo:
		<input type="text" id="atuendo" name="atuendo" maxlength="25" value="Formal" placeholder="Vestimenta para el evento" required />
	</label>
	<label>
		Cantidad de invitados por graduando:
		<input type="number" id="invitados" name="invitados" value="3" min="1" max="10" size="1" required />
	</label>
</form>
<br /><br /><br />

<!-- FIESTA DE GRADO-->
<form>
	<label>
		Título:
		<input type="text" id="titulo" name="titulo" maxlength="50" value="Ticket de entrada para la fiesta de grado" placeholder="Título del ticket de entrada" required />
	</label>
	<label>
		Lugar:
		<input type="text" id="lugar" name="lugar" maxlength="50" placeholder="Sitio de la celebración" required />
	</label>
	<label>
		Fecha:
		<input type="date" id="fecha" name="fecha" required />
	</label>
	<label>
		Hora:
		<input type="time" id="hora" name="hora" value="21:00:00" required />
	</label>
	<label>
		Atuendo:
		<input type="text" id="atuendo" name="atuendo" maxlength="25" value="Formal" placeholder="Vestimenta para el evento" required />
	</label>
	<label>
		Cantidad de invitados por graduando:
		<input type="number" id="invitados" name="invitados" value="3" min="1" max="10" size="1" required />
	</label>
</form>
<br /><br /><br />



<!-- PUERTA -->
<form>
	<label>
		Numero de ticket:
		<input type="number" id="pase" name="pase" required />
	</label>
</form>
<br /><br /><br />




<!-- IMPRIMIR TICKETS POR CEDULA -->
<form>
	<label>
		Cédula de identidad:
		<input type="number" id="cedula" name="cedula" maxlength="9" size="8" required />
	</label>
	<label>
		Evento:
		<select id="evento" name="evento" required>
			<option value="1">Acto de grado</option>
			<option value="1">Fiesta de grado</option>
			<option value="1">Pasapalos y bebidas</option>
		</select>
	</label>
</form>
<br /><br /><br />



<!-- GRADUANDO -->
<form>
	<label>
		Cédula:
		<input type="number" id="cedula" name="cedula" maxlength="9" size="8" placeholder="12345678" required />
	</label>
	<label>
		Nombre:
		<input type="text" id="nombre" name="nombre" maxlength="25" placeholder="Primer nombre" required />
	</label>
	<label>
		Apellido:
		<input type="text" id="apellido" name="apellido" maxlength="25" placeholder="Primer apellido" required />
	</label>
	<label>
		Universidad:
		<select id="universidad" placeholder="Primer apellido" required>
			<option value="1">Acto de grado</option>
			<option value="1">Fiesta de grado</option>
			<option value="1">Pasapalos y bebidas</option>
		</select>
	</label>
	<label>
		Carrera:
		<select id="carrera" required>
			<option value="1">Acto de grado</option>
			<option value="1">Fiesta de grado</option>
			<option value="1">Pasapalos y bebidas</option>
		</select>
	</label>
	<label>
		Posición de grado:
		<input type="number" id="posicion" name="posicion" min="1" max="1000" size="3" required />
	</label>
	<label>
		Número de mesa:
		<input type="number" id="mesa" name="mesa" min="1" max="1000" size="3" required />
	</label>
	<label>
		Número de puesto:
		<input type="number" id="puesto" name="puesto" min="1" max="1000" size="3" required />
	</label>
</form>

</section>

<footer>	
</footer>






</body>
</html>