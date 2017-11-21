<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
	$cfinca = $_GET['cvendedor'];
	include ("../controladora/ctrMostrarVendedor.php");
	$control = new ctrMostrarVendedor;
	$lista = $control->obtenerVendedor($cfinca);
	foreach($lista as $vendedor){
			
			$nombre = $vendedor->getNombre();
			$codigo = $vendedor->getCodigo();
			$telefono = $vendedor->getTelefono();
			$direccion = $vendedor->getDireccion();
		}
	?>
</head>
	<body>
		<h1>Insertar Finca</h1>
		
		<form name="inserVendedor" method="post" id="frmActualizarVendedor" role="form">
			<table border="0" cellpadding="1">
				<tr>
					<td><label> Codigo del Vendedor</label></td>
					<td><input type="text" name="t_codigo" id="t_codigo" placeholder="Dato: <?php echo $codigo; ?>" value="<?php echo $codigo; ?>" readonly></td>
				</tr>
				
				<tr>
				<td><label> Nombre del Vendedor</label></td>
				<td><input type="text" name="t_nombre" id="t_nombre" placeholder="Dato: <?php echo $nombre; ?>" value="<?php echo $nombre; ?>"></td>
				</tr>
				
				<tr>	
				<td><label> Telefono del Vendedor</label></td>
				<td><input type="text" name="t_telefono" id="t_telefono" placeholder="Dato: <?php echo $telefono; ?>" value="<?php echo $telefono; ?>"></td>
				</tr>

				<tr>
				<td><label> Direccion del Vendedor</label></td>
				<td><textarea rows="4" name="t_direccion" id="t_direccion" placeholder="Dato: <?php echo $direccion; ?>" value="<?php echo $direccion; ?>"></textarea> </td>
				</tr>
				<tr>
					<td><input type="button" name="btnInsertar" value="Actualizar" onclick="operacionesVendedor('frmActualizarVendedor',2)"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<script lang="JavaScript" src="../js/jsVendedor.js"></script>