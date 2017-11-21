<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>SIGE</title>
		<script lang="JavaScript" src="js/jQuery.js"></script>
		<script lang="JavaScript" src="js/jquery.validate.min.js"></script>
		<script lang="JavaScript" src="js/jsBovino.js"></script>
	</head>
	<body>
		<div class="container">
			<h1><span>Bovino</span></h1>

			<hr>

			<ul>
				<li><a href="#" onclick="cargarPaginaBovino('interfaz/fBovinos/Fr_InsertarBovino.php')">Insertar un Bovino</a></li>
				<li><a href="#" onclick="cargarPaginaBovino('interfaz/fBovinos/Fr_MostrarBovinosPropietario.php')">Mostrar Bovinos</a></li>
			</ul>

			<hr>

			<div id="contenedorBovinos">
				<script>
					window.onload = cargarPaginaBovino ("interfaz/fBovinos/Fr_MostrarBovinosPropietario.php");
				</script>
			</div>
		</div>
	</body>
</html>