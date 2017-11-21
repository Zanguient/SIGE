<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>IMEC</title>
		<script lang="JavaScript" src="js/jQuery.js"></script>
		<script lang="JavaScript" src="js/jquery.validate.min.js"></script>
		<script lang="JavaScript" src="js/jsServicio.js"></script>
	</head>
	<body>
		<div class="container">
			<h1><span>Saltos e Inseminación</span></h1>

			<hr>

			<ul>
				<li><a href="#" onclick="cargarPaginaServicio('interfaz/fServicio/Fr_RegistrarServicio.php')">Insertar un Servicio</a></li>
				<li><a href="#" onclick="cargarPaginaServicio('interfaz/fServicio/Fr_MostrarServicios.php')">Mostrar Servicios</a></li>
			</ul>

			<hr>

			<div id="contenedorServicio">
				<script>
					window.onload = cargarPaginaServicio ("interfaz/fServicio/Fr_MostrarServicios.php");
				</script>
			</div>
		</div>
	</body>
</html>