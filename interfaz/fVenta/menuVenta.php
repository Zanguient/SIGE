<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>SIGE</title>
		<script lang="JavaScript" src="js/jQuery.js"></script>
		<script lang="JavaScript" src="js/jquery.validate.min.js"></script>
		<script lang="JavaScript" src="js/jsVenta.js"></script>
	</head>
	<body>
		<div class="container">
			<h1><span>Venta</span></h1>

			<hr>

			<ul>
				<li><a href="#" onclick="cargarPaginaVenta('interfaz/fVenta/Fr_InsertarVenta.php')">Insertar una Venta</a></li>
				<li><a href="#" onclick="cargarPaginaVenta('interfaz/fVenta/Fr_MostrarVentas.php')">Mostrar Ventas</a></li>
			</ul>

			<hr>

			<div id="contenedorVentas">
				<script>
					window.onload = cargarPaginaVenta("interfaz/fVenta/Fr_MostrarVentas.php");
				</script>
			</div>
		</div>
	</body>
</html>