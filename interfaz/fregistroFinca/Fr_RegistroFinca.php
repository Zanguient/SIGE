<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
	<body>
		<h1>Insertar Finca</h1>
		
		<form name="inserFinca" method="post" id="frmInsertarFinca" role="form">
			<table border="0" cellpadding="1">
				<tr>
					<td><label> Codigo de la finca </label></td>
					<td><input type="text" name="codFinca" id="codFinca"></td>
				</tr>
				
				<tr>
				<td><label> Nombre de la finca </label></td>
				<td><input type="text" name="nomFinca" id="nomFinca"></td>
				</tr>
				
				<tr>	
				<td><label> Tamaño de la finca </label></td>
				<td><input type="text" name="tamFinca" id="tamFinca"></td>
				</tr>

				<tr>
				<td><label> Cantidad de apartos de la finca </label></td>
				<td><input type="text" name="canApartos" id="canApartos"></td>
				</tr>
				
				<tr>
				<td><label> Cantidad de animales por aparto </label></td>
				<td><input type="text" name="canAnimales" id="canAnimales"></td>
				</tr>
	
				<tr>
				<td><label> Dias de pastoreo </label></td>
				<td><input type="text" name="canDias" id="canDias"></td>
				</tr>

				<tr>
				<td><label> Tipo de pasto </label></td>
				<td><input type="text" name="tipoPasto" id="tipoPasto"></td>
				</tr>

				<tr>
				<td><label> Direccion de la finca </label></td>
				<td><input type="text" name="dirFinca" id="dirFinca"></td>
				</tr>
				<tr>
					<td><input type="button" name="btnInsertar" value="Insertar" onclick="operacionesFinca('frmInsertarFinca',1)"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<script lang="JavaScript" src="../js/jsRegistroFinca.js"></script>