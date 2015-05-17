<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Sistema de Control de Acceso para Actos de Grado</title>
<link rel="stylesheet" href="css/normalize.css" />
<style>

/*******************************************************************************/

html, body, header, nav, ul, li, aside, section, footer {
	margin: 0;
	padding: 0;
}

/*******************************************************************************/

body {
	font-family: sans-serif;
}

/*******************************************************************************/

header {
	color: #fff;
	background-color: #ff8c00;
	width: 100%;
	height: 50px;
	clear: both;
}
header .logo {
	width: 50px;
	height: inherit;
	display: flex;
	align-items: center;
	justify-content: center;
	border-right: 1px solid #ffe8cc;
	vertical-align: middle;
	float: left;
}
header .logo img {
	width: 30px;
	height: 30px;
}
header h1 {
	margin: 0;
	padding: 0;
	display: flex;
	align-items: center;
	justify-content: center;
	width: 163px;
	height: inherit;
	font-weight: normal;
	vertical-align: middle;
	font-size: 30px;
	float: left;
}
header ul.menuh {
	margin: 0;
	padding: 0;
	width: 600px;
	list-style-type: none;
	display: block;
	float: left;
}
header ul.menuh li {
	margin: 0;
	padding: 0;
	float: left;
}
header ul.menuh li a {
	margin: 0;
	padding: 0;
	width: 100px;
	height: 50px;
	display: flex;
	align-items: center;
	justify-content: center;
	text-decoration: none;
	color: #fff;
	outline: 0 !important;
}
header ul.menuh li a:hover {
	background-color: #b26200;
}
header .usuario {
	margin: 0;
	padding: 0;
	width: 200px;
	height: 50px;
	display: flex;
	align-items: center;
	justify-content: center;
	float: right;
	font-size: .9em;
}
header .usuario .cerrar {
	display: inline;
	color: inherit;
	outline: 0 !important;
}

/*******************************************************************************/

aside {
	float: left;
	width: 200px;
	height: calc(100vh - 80px);
	background-color: #ffe8cc;
}
aside .buscar {
	margin: 0;
	padding: 10px;
}
aside .buscar .borde {
	padding: 5px;
	border: 1px solid #ccbaa3;
	background-color: #fff;
	display: flex;
	align-items: center;
	justify-content: left;
}
aside .buscar .borde:hover {
	border: 1px solid #665d52;
}
aside .buscar .borde .ctbuscar {
	height: inherit;
	display: inline;
	border: 0;
	/*
	 -webkit-appearance: none !important;
	 -webkit-border-radius: 0px 0px 0px 0px !important;
	 */
	 outline: 0 !important;
}
aside .buscar .borde .cbbuscar {
	display: inline;
	border: 0;
	background-color: #fff;
	 /*
	 -webkit-appearance: none !important;
	 -webkit-border-radius: 0px 0px 0px 0px !important;
	 */
	 outline: 0 !important;
	/* FALTA LA LUPA */
}
aside ul.menua {
	margin: 0;
	padding: 0;
	list-style-type: none;
}
aside ul.menua li {
	margin: 0;
	padding: 0;
}
aside ul.menua li a {
	margin: 0;
	padding: 0;
	padding-left: 10px;
	height: 35px;
	display: flex;
	align-items: center;
	justify-content: left;
	text-decoration: none;
	color: #000;
	outline: 0 !important;
}
aside ul.menua li a:hover {
	background-color: #ccbaa3;
}
aside ul.menua li a.activo {
	font-weight: bold;
	background-color: #B2A28F;
}



/*******************************************************************************/


section {
	float: left;
	width: calc(100% - 200px);
	height: calc(100vh - 80px);
	background-color: #3399ff;
}
footer {
	clear: both;
	width: 100%;
	height: 30px;
	background-color: #ff8c00;
}


/*******************************************************************************/


footer p {
	display: block;
	margin: 0;
	padding: 0;
	padding-top: 7px;
	width: 100%;
	font-size: .8em;
	color: #fff;
	text-align: center;
}


/*******************************************************************************/


</style>
</head>
	
<body>


<header>
	<div class="logo">
		<img src="img/birrete.png">
	</div>
	<h1 class="titulo">Sicapag</h1>
	<ul class="menuh">
		<li><a href="#">Nuevo</a></li>
		<li><a href="#">Editar</a></li>
		<li><a href="#">Eliminar</a></li>
	</ul>
	<div class="usuario">Usuario (<a class="cerrar" href="#">cerrar sesión</a>)</div>
</header>
<aside>
	<div class="buscar">
		<div class="borde">
			<input type="text" name="buscar" id="itbuscar" class="ctbuscar" placeholder="Buscar" required />
			<input type="button" name="buscar" id="ibbuscar" class="cbbuscar" />
		</div>
	</div>
	<ul class="menua">
		<li><a class="activo" href="#">Asistente</a></li>
		<li><a href="#">Acto de Grado</a></li>
		<li><a href="#">Estadísticas</a></li>
		<li><a href="#">Tickets</a></li>
		<li><a href="#">Bebidas</a></li>
		<li><a href="#">Administrar</a></li>

	</ul>
</aside>

<section>
	khghghjhgjhgjg
</section>

<footer>
	<p>- Sistema de Control de Acceso para Actos de Grado, Complejo Antonio José de Sucre 2015 -</p>	
</footer>


</body>
</html>