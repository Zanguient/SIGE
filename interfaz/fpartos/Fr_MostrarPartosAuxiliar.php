<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php 
		include("../controladora/ctrMostrarFinca.php");
		include("../controladora/ctrListaBovino.php");
		$control = new ctrMostrarFinca();
		$fincas = $control->obtenerFincas();
		$controlBovino = new CtrListaBovinos();
	 ?>
	 <h1>Mostrar Partos</h1>
		<label>Nombre de la Finca</label>
		<select id="fincas" name="fincas" onchange="cargarGuiMostrarPartos(this.value)">
			<option value="0">Seleccione una opcion...</option>
			<?php foreach ($fincas as $finca): ?>
				<option value="<?php echo $finca->getCodigo(); ?>"><?php echo $finca->getNombre(); ?></option>
			<?php endforeach ?>
		</select>
		<br><br>
</body>
</html>
<script lang="JavaScript" src="../js/jsBovino.js"></script>
<script lang="JavaScript" src="../js/jsPartos.js"></script>