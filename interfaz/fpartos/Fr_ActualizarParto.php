<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
	$id = $_GET['id'];
	include ("../controladora/ctrMostrarParto.php");
	$control = new ctrMostrarParto;
	$lista = $control->obtenerParto($id);
	foreach($lista as $parto){
			
			$numeroBovino = $parto->getNumeroBovino();
			$fecha = $parto->getFechaParto();
			$generoBecerro = $parto->getGeneroBecerro();
			$descripcionParto = $parto->getDescripcionParto();
		}
	?>
</head>
	<body>
		<h1>Modificar Parto</h1>
		
		<form name="inserFinca" method="post" id="FrModificarParto" role="form">
			<table border="0" cellpadding="1">
				<tr>
					<td><label> Numero del bovino </label></td>
					<td><input type="text" name="numBovino" id="numBovino" placeholder="Dato: <?php echo $numeroBovino; ?>" value="<?php echo $numeroBovino; ?>" readonly></td>
				</tr>
				
				<tr>
				<td><label> Fecha del parto </label></td>
				<td><input type="date" name="fecha" id="fecha" placeholder="Dato: <?php echo $fecha; ?>" value="<?php echo $fecha; ?>"></td>
				</tr>
				
				<tr>	
				<td><label> Genero del becerro </label></td>
				<td>
					<select id="genero" name="genero">
					<?php if($generoBecerro == "Macho"){ ?>
						<option value="1">Macho</option>
						<option value="2">Hembra</option>
					<?php }else{ ?>
						<option value="2">Hembra</option>
						<option value="1">Macho</option>
					<?php } ?>
						
					</select>
					</td>
				</tr>

				<tr>
				<td><label> Descripción del parto </label></td>
				<td><textarea name="descripcion" id="descripcion"> <?php echo $descripcionParto; ?> </textarea></td>
				</tr>
				
				<td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
				
				<tr>
					<td><input type="button" name="btnActualizar" value="Actualizar" onclick="modificarParto()"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<script lang="JavaScript" src="../js/jsPartos.js"></script>