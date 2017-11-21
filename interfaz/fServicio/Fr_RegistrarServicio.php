<?php 

	include("../controladora/ctrListaBovino.php");
	include("../controladora/ctrListaPadrotes.php");
 	$ctrPadrote = new CtrListaPadrotes;
    $listaPadrotes = $ctrPadrote->obtenerPadrotes();
	$controlBovino = new CtrListaBovinos();
	$vacas = $controlBovino->obtenerbovinos(1);
 ?>
 <form name="frmInsertarServicio" id="frmInsertarServicio">
 	<table>
 		<tr>
 			<td><label for="">Vaca: </label></td>
 			<td><select id="vaca" name="vaca">
				<?php foreach ($vacas as $vaca): ?>
					<option value="<?php echo $vaca->getNumero(); ?>"><?php echo $vaca->getNombre(); ?></option>
				<?php endforeach ?>
			</select></td>
 		</tr>

 		<tr>
 			<td><label for="">Fecha de Servicio: </label></td>
 			<td><input type="date" name="fecha" id="fecha"></td>
 		</tr>

 		<tr>
 			<td><label for="">Padrote: </label></td>
 			<td><select id="padre" name="padre">
				<?php foreach ($listaPadrotes as $padrote): ?>
					<option value="<?php echo $padrote->getId(); ?>"><?php echo $padrote->getNombrePadrote(); ?></option>
				<?php endforeach ?>
			</select></td>
 		</tr>

 		<tr>
 			<td><label for="">Inseminador: </label></td>
 			<td><input type="text" name="inseminador" id="inseminador"></td>
 		</tr>

 		<tr>
 			<td><input type="button" name="btnAgregar" id="btnAgregar" value="Agregar" onclick="insertarServicio()"></td>
 		</tr>
 	</table>
 </form>

 <script lang="JavaScript" src="../js/jsServicio.js"></script>