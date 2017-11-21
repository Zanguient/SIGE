<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>SIGE</title>
		<script lang="JavaScript" src="js/jQuery.js"></script>
		<script lang="JavaScript" src="js/jquery.validate.min.js"></script>
		<script lang="JavaScript" src="js/jsVentaProducto.js"></script>
	</head>
	<body>
		<div class="container">
			<h1><span>Venta Productos</span></h1>

			<hr>

			<ul>
				<li><a href="#" onclick="cargarPaginaVentaProducto('interfaz/fVentaProducto/Fr_InsertarVentaProducto.php')">Registrar Venta Producto</a></li>
				<li><a href="#" onclick="cargarPaginaVentaProducto('interfaz/fVentaProducto/Fr_MostrarVentaProducto.php')">Mostrar Ventas de Productos</a></li>
			</ul>

			<hr>

			<div id="contenedorVentas">
				<script>
					window.onload = cargarPaginaVentaProducto("interfaz/fVentaProducto/Fr_MostrarVentaProducto.php");
				</script>
			</div>
		</div>
	</body>
</html>