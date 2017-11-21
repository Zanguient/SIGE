<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script lang="JavaScript" src="../js/jsBovino.js"></script>
	<title>SIGE</title>
</head>
<body>
	<?php 
		include("../controladora/ctrMostrarFinca.php");
		include("../controladora/ctrListaPadrotes.php");
	 	$ctrPadrote = new CtrListaPadrotes;
	    $listaPadrotes = $ctrPadrote->obtenerPadrotes();
		$control = new ctrMostrarFinca();
		$fincas = $control->obtenerFincas();
	 ?>
	 <form name="insertarBovino" id="frmInsertarBovino" role="form">
	 	<label for="">Finca a la que pertenece el bovino</label>
	 	<select id="fincas" name="fincas">
			<?php foreach ($fincas as $finca): ?>
				<option value="<?php echo $finca->getCodigo(); ?>"><?php echo $finca->getNombre(); ?></option>
			<?php endforeach ?>
		</select> <br><br>
		<label for="">Numero de arete: </label>
		<input type="number" name="arete" id="arete"> <br> <br>

		<label for="">Nombre: </label>
		<input type="text" name="nombre" id="nombre"> <br> <br>

		<label for="">Fecha Nacimiento: </label>
		<input type="date" name="fecha" id="fecha"> <br> <br>

		<label for="">Sexo: </label>
		<select name="sexo" id="sexo">
			<option value="Macho">Macho</option>
			<option value="Hembra">Hembra</option>
		</select><br><br>

		<label for="">Raza: </label>
		<input type="text" name="raza" id="raza"> <br> <br>

		<label for="">Edad en meses: </label>
		<input type="number" name="edad" id="edad"> <br> <br>

		<label for="">Numero de arete de la madre: </label>
		<input type="number" name="madre" id="madre"> <br> <br>

		<label for="">Padre del bovino: </label>
		<select id="padre" name="padre">
			<?php foreach ($listaPadrotes as $padrote): ?>
				<option value="<?php echo $padrote->getId(); ?>"><?php echo $padrote->getNombrePadrote(); ?></option>
			<?php endforeach ?>
		</select> <br><br>

		<input type="button" name="btnAgregar" value="Agregar" onclick="agregarBovino()">
	 </form>
</body>
</html>

