<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<form id="insertarPadrote"  method="Post" role="form">
		<h1> Registro de Padrote Propio</h1>
		<input type="text" id="nRegistro" name="nRegistro" placeholder="Numero de Registro">
		<input type="text" id="nPadrote" name="nPadrote" placeholder="Nombre Padrote">
		<input type="text" id="raza" name="raza" placeholder="Raza Padrote">
		<input type="date" id="fCompra" name="fCompra">
		<input type="number" id="pAnimal" name="pAnimal" placeholder="Presio del Animal">
		<input type="button" value="insertar" onclick="insertarPadrote('1')">
	</form>
</body>
</html>