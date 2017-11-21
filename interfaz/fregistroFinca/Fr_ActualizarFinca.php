<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
	$cfinca = $_GET['cfinca'];
	include ("../controladora/ctrMostrarFinca.php");
	$control = new ctrMostrarFinca;
	$lista = $control->obtenerFinca($cfinca);
	foreach($lista as $finca){
			
			$nombre = $finca->getNombre();
			$codigo = $finca->getCodigo();
			$extension = $finca->getExtension();
			$apartos = $finca->getCantidadApartos();
			$animalesAparto = $finca->getAnimalesAparto();
			$rotacion = $finca->getDiasPastoreo();
			$tipoPasto = $finca->getTipoPasto();
			$direccion = $finca->getDireccion();
		}
	?>
</head>
	<body>
		<h1>Insertar Finca</h1>
		
		<form name="inserFinca" method="post" id="frmActualizarFinca" role="form">
			<table border="0" cellpadding="1">
				<tr>
					<td><label> Codigo de la finca </label></td>
					<td><input type="text" name="codFinca" id="codFinca" placeholder="Dato: <?php echo $codigo; ?>" value="<?php echo $codigo; ?>" readonly></td>
				</tr>
				
				<tr>
				<td><label> Nombre de la finca </label></td>
				<td><input type="text" name="nomFinca" id="nomFinca" placeholder="Dato: <?php echo $nombre; ?>" value="<?php echo $nombre; ?>"></td>
				</tr>
				
				<tr>	
				<td><label> Tamaño de la finca </label></td>
				<td><input type="text" name="tamFinca" id="tamFinca" placeholder="Dato: <?php echo $extension; ?>" value="<?php echo $extension; ?>"></td>
				</tr>

				<tr>
				<td><label> Cantidad de apartos de la finca </label></td>
				<td><input type="text" name="canApartos" id="canApartos" placeholder="Dato: <?php echo $apartos; ?>" value="<?php echo $apartos; ?>"></td>
				</tr>
				
				<tr>
				<td><label> Cantidad de animales por aparto </label></td>
				<td><input type="text" name="canAnimales" id="canAnimales" placeholder="Dato: <?php echo $animalesAparto; ?>" value="<?php echo $animalesAparto; ?>"></td>
				</tr>
	
				<tr>
				<td><label> Dias de pastoreo </label></td>
				<td><input type="text" name="canDias" id="canDias" placeholder="Dato: <?php echo $rotacion; ?>" value="<?php echo $rotacion; ?>"></td>
				</tr>

				<tr>
				<td><label> Tipo de pasto </label></td>
				<td><input type="text" name="tipoPasto" id="tipoPasto" placeholder="Dato: <?php echo $tipoPasto; ?>" value="<?php echo $tipoPasto; ?>"></td>
				</tr>

				<tr>
				<td><label> Direccion de la finca </label></td>
				<td><input type="text" name="dirFinca" id="dirFinca" placeholder="Dato: <?php echo $direccion; ?>" value="<?php echo $direccion; ?>"></td>
				</tr>
				<tr>
					<td><input type="button" name="btnInsertar" value="Actualizar" onclick="operacionesFinca('frmActualizarFinca',2)"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<script lang="JavaScript" src="../js/jsRegistroFinca.js"></script>