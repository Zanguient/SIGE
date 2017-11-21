<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>IMEC</title>
		<script lang="JavaScript" src="js/jQuery.js"></script>
		<script lang="JavaScript" src="js/jquery.validate.min.js"></script>
		<script lang="JavaScript" src="js/jsRegistroFinca.js"></script>
	</head>
	<body>
		<div class="container">
			<h1><span>Fincas</span></h1>

			<hr>

			<ul>
				<li><a href="#" onclick="cargarPaginaFinca('interfaz/fregistroFinca/Fr_RegistroFinca.php')">Insertar una Finca</a></li>
				<li><a href="#" onclick="cargarPaginaFinca('interfaz/fregistroFinca/Fr_MostrarFinca.php')">Mostrar Fincas</a></li>
			</ul>

			<hr>

			<div id="contenedorFinca">
				<script>
					window.onload = cargarPaginaFinca ("interfaz/fregistroFinca/Fr_MostrarFinca.php");
				</script>
			</div>
		</div>
	</body>
</html>