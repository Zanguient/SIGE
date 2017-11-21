<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<form id="insertarPadrote"  method="Post" role="form">
		<h1> Registro de Padrote Alquilado</h1>
		<input type="text" id="nRegistro" name="nRegistro" placeholder="Numero de Registro">
		<input type="text" id="nPadrote" name="nPadrote" placeholder="Nombre Padrote">
		<input type="text" id="raza" name="raza" placeholder="Raza Padrote">
		<input type="number" id="pSalto" name="pSalto" placeholder="Presio Salto">
		<input type="button" value="insertar" onclick="insertarPadrote('2')">
	</form>
</body>
</html>