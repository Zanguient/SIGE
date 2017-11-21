<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Compra de Lotes de Animales</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<form id="FrComprarLotesAnimales" method="Post" role="form">
		<h1> Compra de Lotes de Animales</h1>
		<label>Numero de Factura</label><br>
		<input type="number" id="factura" name="factura"><br><br>
		<label>Vendedor</label><br>
		<input type="text" id="vendedor" name="vendedor" ><br><br>
		<label>Cantidad de animales</label><br>
		<input type="number" id="cantidad" name="cantidad" ><br><br>
		<label>Precio total</label><br>
		<input type="number" id="monto" name="monto" ><br><br>
		<label>Numero de guia</label><br>
		<input type="number" id="guia" name="guia" ><br><br>
		<label>Fecha</label><br>
		<input type="date" id="fecha" name="fecha"><br><br>

		<input type="button" value="insertar" onclick="insertarCompraLotes()">
	</form>
</body>
</html>
<script lang="JavaScript" src="../js/jsCompraLoteAnimales.js"></script>