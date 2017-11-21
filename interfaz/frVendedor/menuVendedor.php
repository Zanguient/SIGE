<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>IMEC</title>
		<script lang="JavaScript" src="js/jQuery.js"></script>
		<script lang="JavaScript" src="js/jquery.validate.min.js"></script>
		<script lang="JavaScript" src="js/jsVendedor.js"></script>
	</head>
	<body>
		<div class="container">
			<h1><span>Vendedores</span></h1>

			<hr>

			<ul>
				<li><a href="#" onclick="cargarPaginaVendedor('interfaz/frVendedor/Fr_RegistrarVendedor.php')">Insertar un Vendedor</a></li>
				<li><a href="#" onclick="cargarPaginaVendedor('interfaz/frVendedor/Fr_MostrarVendedor.php')">Mostrar Vendedores</a></li>
			</ul>

			<hr>

			<div id="contenedorVendedor">
				<script>
					window.onload = cargarPaginaVendedor ("interfaz/frVendedor/Fr_MostrarVendedor.php");
				</script>
			</div>
		</div>
	</body>
</html>