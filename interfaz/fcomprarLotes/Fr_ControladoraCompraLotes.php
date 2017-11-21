<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<div class="container">
		<h1><span>IMEC de Compra por Lote</span></h1>

		<hr>

		<ul>
			<li><a href="#" onclick="cargarPagina('../interfaz/fcomprarLotes/Fr_CompraLotesAnimales.php')"> Insertar Compra</a></li>
			<li><a href="#" onclick="cargarPagina('../interfaz/fcomprarLotes/Fr_MostrarCompraLotes.php')"> Mostrar Compras</a></li>
			
		</ul>

		<hr>
		
		<div id="contenedor">
			<script>
			window.onload = cargarPagina ("../../interfaz/fcomprarLotes/Fr_MostrarCompraLotes.php");
			</script>
		</div>
	
	</div>
</body>
</html>
<script lang="JavaScript" src="../js/jsCompraLoteAnimales.js"></script>