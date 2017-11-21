<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		
		<form name="frmRegistrarVendedor" id="frmRegistrarVendedor" method="post" role="form">
			<table border="0" cellpadding="1">

				<tr>
					<td><label for="l_nombre">Nombre del Vendedor</label></td>
					<td><input type="text" name="t_nombre" id="t_nombre"></td>
				</tr>

				<tr>
					<td><label for="l_codigo">Codigo del Vendedor</label></td>
					<td><input type="text" name="t_codigo" id="t_codigo"></td>
				</tr>

				<tr>
					<td><label for="l_telefono">Telefono del Vendedor</label></td>
					<td><input type="text" name="t_telefono" id="t_telefono"></td>
				</tr>

				<tr>
					<td><label for="l_direccion">Direccion del Vendedor</label></td>
					<td><textarea rows="4" name="t_direccion" id="t_direccion"></textarea></td>
				</tr>

				<tr>
					<td><input type="button" name="btn_insertar" id="btn_insertar" onclick="operacionesVendedor('frmRegistrarVendedor',1)" value="Insertar"></td>
				</tr>

			</table>
		</form>

	</body>
</html>
<script lang="JavaScript" src="../js/jsVendedor.js"></script>