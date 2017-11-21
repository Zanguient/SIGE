<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
	$cCodigo = $_GET['cvendedor'];
	?>
</head>
	<body>
		<h1>Insertar Finca</h1>
		
		<form name="inserCuenta" method="post" id="frmInsertarCuenta" role="form">
			<table border="0" cellpadding="1">
				<tr>
					<td><label> Codigo del Vendedor</label></td>
					<td><input type="text" name="t_codigo" id="t_codigo" placeholder="Dato: <?php echo $cCodigo; ?>" value="<?php echo $cCodigo; ?>" readonly></td>
				</tr>
				
				<tr>
				<td><label> Numero de cuenta</label></td>
				<td><input type="text" name="t_cuenta" id="t_cuenta"></td>
				</tr>
				
				<tr>
					<td><input type="button" name="btnInsertar" value="Insertar" onclick="operacionesVendedor('frmInsertarCuenta',3)"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<script lang="JavaScript" src="../js/jsVendedor.js"></script>