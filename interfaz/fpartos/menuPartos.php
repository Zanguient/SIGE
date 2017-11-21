<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>IMEC</title>
		<script lang="JavaScript" src="js/jQuery.js"></script>
		<script lang="JavaScript" src="js/jquery.validate.min.js"></script>
		<script lang="JavaScript" src="js/jsPartos.js"></script>
	</head>
	<body>
		<div class="container">
			<h1><span>Partos</span></h1>

			<hr>

			<ul>
				<li><a href="#" onclick="cargarPaginaPartos('interfaz/fpartos/Fr_insertarParto.php')">Insertar Parto</a></li>
				<li><a href="#" onclick="cargarPaginaPartos('interfaz/fpartos/Fr_MostrarPartosAuxiliar.php')">Mostrar Partos</a></li>
			</ul>

			<hr>

			<div id="contenedorPartos">
				<script>
					window.onload = cargarPaginaPartos('interfaz/fpartos/Fr_MostrarPartosAuxiliar.php');
				</script>
			</div>
			<div id="mensaje1">
				
			</div>
		</div>
	</body>
</html>