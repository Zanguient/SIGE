<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<form id="insertarPadrote"  method="Post" role="form">
		<h1> Registro de Padrote para Inseminacion</h1>
		<input type="number" id="nRegistro" name="nRegistro" placeholder="Numero de Registro">
		<input type="text" id="nPadrote" name="nPadrote" placeholder="Nombre Padrote">
		<input type="text" id="cComercial" name="cComercial" placeholder="Casa Comercial Padrote">
		<input type="text" id="raza" name="raza" placeholder="Raza Padrote">
		<input type="number" id="nCanasta" name="nCanasta" placeholder="Numero de Canasta">
		<input type="number" id="cPajillas" name="cPajillas" placeholder="Cantidad de Pajillas">
		<input type="date" id="fCompra" name="fCompra">
		<input type="number" id="pPajillas" name="pPajillas" placeholder="Presio Pajilla/Salto">
		<input type="button" value="insertar" onclick="insertarPadrote('3')">
	</form>
</body>
</html>