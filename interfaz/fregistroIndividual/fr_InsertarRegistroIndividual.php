<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
	  <h1> Registro Individual</h1>
		

	<label for="">Registrar en la Finca</label>
	<input type="checkbox" name="registroFinca" id="registroFinca" onclick="desplegarCampos()"><br><br>
	<form id="FrInsertarRegistro" method="Post" role="form">
		

		<label>Vendedor</label>
		<input type="text" id="vendedor" name="vendedor" ><br><br>
		<label>Numero Subasta o Finca</label>
		<input type="number" id="numSubastaFinca" name="numSubastaFinca" ><br><br>
		<label>Descripcion</label><br>
		<textarea name="descripcion" id="descripcion" rows="10" cols="30" placeholder="Descripcion del Animal..."></textarea><br><br>
		<label>Peso</label>
		<input type="number" id="peso" name="peso" ><br><br>
		<label>Precio por Kilo</label>
		<input type="number" id="precioKilo" name="precioKilo" ><br><br>
		<label>Precio Total</label>
		<input type="number" id="precioTotal" name="precioTotal" ><br><br>

		<div id="contenedorFrmBovino" style="display:none">

			<label>Nombre de la Finca</label>
			<select id="fincas" name="fincas">
			<?php foreach ($fincas as $finca): ?>
				<option value="<?php echo $finca->getCodigo(); ?>"><?php echo $finca->getNombre(); ?></option>
			<?php endforeach ?>
			</select>
			<br><br>
			<label for="">Numero de arete: </label>
			<input type="number" name="arete" id="arete"> <br> <br>
			
			<label for="">Nombre: </label>
			<input type="text" name="nombre" id="nombre"> <br> <br>
			
			<label for="">Raza: </label>
			<input type="text" name="raza" id="raza"> <br> <br>
			
			<label for="">Padre del bovino: </label>
			<select id="padre" name="padre">
				<?php foreach ($listaPadrotes as $padrote): ?>
					<option value="<?php echo $padrote->getId(); ?>"><?php echo $padrote->getNombrePadrote(); ?></option>
				<?php endforeach ?>
			</select> <br><br>
			<label>Madre del bovino</label>
			<input type="number" id="madre" name="madre"><br> <br>
			<label for="">Fecha Nacimiento</label>
			<input type="date" id="fecha" name="fecha"><br> <br>

			<label for="">Genero</label>
			<select name="genero" id="genero">
				<option value="Macho">Macho</option>
				<option value="Hembra">Hembra</option>
			</select><br> <br>
		</div>
		
		<input type="button" value="insertar" onclick="invocarCondicion()">
	</form>
</body>
</html>
<script lang="JavaScript" src="../js/jsBovino.js"></script>
<script lang="JavaScript" src="../js/jsRegistroIndividual.js"></script>