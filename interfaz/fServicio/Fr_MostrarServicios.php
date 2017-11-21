<?php 

	include ("../controladora/ctrMostrarServicio.php");
	include("../controladora/ctrListaPadrotes.php");
 	$ctrPadrote = new CtrListaPadrotes;
    $listaPadrotes = $ctrPadrote->obtenerPadrotes();
	$control = new ctrMostrarServicio;
	$lista = $control->obtenerServicios();
 ?>

 <table id="tablaServicios" border="1" cellpadding="1" cellspacing="1">
 	<thead>
 		<tr>
 			<th>Vaca </th>
 			<th>Fecha Servicio </th>
 			<th>Padrote </th>
 			<th>Inseminador </th>
 			<th>Indice de Repitenca </th>
 			<th>Opción 1</th>
 			<th>Opción 2</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 		$contador = 1;
 		foreach ($lista as $servicio) {
 			echo "<tr>";
					echo 	"<td>".$servicio->getVaca()."</td>";
					echo 	"<td>".$servicio->getFecha()."</td>";
					echo 	"<td>".$servicio->getPadrote()."</td>";
					echo 	"<td>".$servicio->getInseminador()."</td>";
					echo 	"<td>".$servicio->getCantidadRepeticiones()."</td>";
					echo 	"<td style=\"display: none\">".$servicio->getId()."</td>";
					echo 	"<td style=\"display: none\">".$servicio->getIdPadrote()."</td>";
					echo 	"<td> <input type=\"button\" id=\"btnModificar\" value=\"Modificar\" onclick=\"recorrerTabla('".$contador."')\"> </td>";
					echo 	"<td> <input type=\"button\" id=\"btnEliminar\" value=\"Eliminar\" onclick=\"confirmarEliminar('".$servicio->getId()."')\"> </td>";
			echo "</tr>";
			$contador ++;
 		} ?>
 	</tbody>
 </table>
<br><br>
<div id="contenedorActualizar" style="display: none">
	<form action="" name="frmActualizarServicio" id="frmActualizarServicio">
		<table>
 		<tr>
 			<td><label for="">Vaca: </label></td>
 			<td><input type="text" id="vaca" readonly></td>
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
 			<td><label for="">Cantidad Repeticiones: </label></td>
 			<td><input type="text" name="repeticiones" id="repeticiones"></td>
 		</tr>

 		<tr>
 			<td><input type="button" name="btnAgregar" id="btnAgregar" value="Modificar" onclick="confirmarActualizar()"></td>
 		</tr>
 	</table>
 	<input type="hidden" id="idServicio" name="idServicio">
	</form>
</div>

 <div id="mensajeConfirmacion"></div>
 <div id="confirmacionEliminar" style="display: none">
 	<input type="hidden" id="idServicio" name="idServicio">
 	<input type="button" id="btnConfirmarEliminar" value="Confirmar" onclick="eliminarServicio()">
 	<input type="button" id="btnCancelarEliminar" value="Cancelar" onclick="ocultarTodos()">
 </div>
  <div id="confirmacionActualizar" style="display: none">
 	<input type="hidden" id="idServicio" name="idServicio">
 	<input type="button" id="btnConfirmarActualizar" value="Confirmar" onclick="actualizarServicio()">
 	<input type="button" id="btnCancelarActualizar" value="Cancelar" onclick="ocultarTodos()">
 </div>

 <script lang="JavaScript" src="../js/jsServicio.js"></script>