<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>IMEC</title>
		<script lang="JavaScript" src="js/jQuery.js"></script>
		<script lang="JavaScript" src="js/jquery.validate.min.js"></script>
		<script lang="JavaScript" src="js/jsCompraProductos.js"></script>
		<script lang="JavaScript" src="js/jsAcciones.js"></script>
	</head>
	<body>
		<div class="container">
			<h1><span>Compra de Productos</span></h1>

			<hr>

			<ul>
				<li><a href="#" onclick="cargarPaginaCompraP('interfaz/fCompraProductos/Fr_InsertarCompraProducto.php')">Insertar Compra de Productos</a></li>
				<li><a href="#" onclick="cargarPaginaCompraP('interfaz/fCompraProductos/Fr_MostrarCompraProductos.php')">MostrarCompra de Productos</a></li>
			</ul>

			<hr>

			<div id="contenedorCProductos">
				<script>
					window.onload = cargarPaginaCompraP('interfaz/fCompraProductos/Fr_MostrarCompraProductos.php');
				</script>
			</div>
			<div id="mensaje2">
				
			</div>
		</div>
	</body>
</html>