<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
	$cuenta = $_GET['cvendedor'];
	?>
</head>
	<body>
		<h1>Insertar Finca</h1>
		
		<form name="inserVendedor" method="post" id="frmActualizarCuenta" role="form">
			<table border="0" cellpadding="1">
				<tr>
					<input type="text" name="cuentaOriginal" id="cuentaOriginal" value="<?php echo $cuenta; ?>"  style="display:none">
					<td><label> Cuenta </label></td>
					<td><input type="text" name="t_cuenta" id="t_cuenta" placeholder="Dato: <?php echo $cuenta; ?>" value="<?php echo $cuenta; ?>" ></td>
				</tr>

				<tr>
					<td><input type="button" name="btnInsertar" value="Actualizar" onclick="operacionesVendedor('frmActualizarCuenta',4)"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<script lang="JavaScript" src="../js/jsVendedor.js"></script>