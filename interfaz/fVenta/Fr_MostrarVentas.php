<?php 

	include ("../controladora/ctrMostrarVentas.php");
	include ("../controladora/ctrListaBovino.php");
	$controlBovino = new CtrListaBovinos;
	$listaBovinos = $controlBovino->obtenerbovinosVendidos(1);
	$controlVenta = new ctrMostrarVenta;
	$lista = $controlVenta->obtenerVentas();
	if($lista){}
 ?>

 <table id="tablaVentas" border="1" cellpadding="1" cellspacing="1">
 	<thead>
 		<tr>
 			<th>Venta Reportada </th>
 			<th>Fecha de Venta </th>
 			<th>Monto </th>
 			<th>Opción 1</th>
 			<th>Opción 2</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 		$contador = 1;
 		foreach ($lista as $venta) {
 			echo "<tr>";
 			if($venta->getVentaReportada() == 1){
 				echo 	"<td> Si </td>";
 			}else{
 				echo 	"<td> No </td>";
 			}
				echo 	"<td>".$venta->getFecha()."</td>";
				echo 	"<td>".$venta->getValorVenta()."</td>";
				echo 	"<td style=\"display: none\">".$venta->getIdVenta()."</td>";
				echo 	"<td style=\"display: none\">".$venta->getVentaReportada()."</td>";
				echo 	"<td> <input type=\"button\" id=\"btnModificar\" value=\"Modificar\" onclick=\"recorrerTabla('".$contador."')\"> </td>";
				echo 	"<td> <input type=\"button\" id=\"btnEliminar\" value=\"Eliminar\" onclick=\"confirmarEliminar('".$venta->getIdVenta()."')\"> </td>";
			echo "</tr>";
			$contador ++;
 		} ?>
 	</tbody>
 </table> <br><br>

<div id="ContenedorBovinosVendidos">
	<table border="1" cellpadign="1" cellspacing="1">
			<thead>
				<tr>
					<th>Numero Bovino</th>
					<th>Nombre Bovino</th>
					<th>Peso Bovino</th>
					<th>Precio por Kilo</th>
					<th>Precio Total</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($listaBovinos as $bovino) {

					echo "<tr>";
								echo 	"<td>".$bovino->getNumero()."</td>";
								echo 	"<td>".$bovino->getNombre()."</td>";
								echo 	"<td>".$bovino->getPeso()."</td>";
								echo 	"<td>".$bovino->getPrecioKilo()."</td>";
								echo 	"<td>".$bovino->getPrecioKilo()*$bovino->getPeso()."</td>";
					echo "</tr>";
				} 
			?>
			</tbody>
		</table>
</div>

<br><br>
<div id="contenedorActualizar" style="display: none">
	<form action="" name="frmActualizarVenta" id="frmActualizarVenta">
		<table>
		<tr>
			<td><label for="reportada">Venta Reportada</label></td>
			<td><input type="checkbox" name="reportada" id="reportada"></td>
		</tr>
		<tr>
			<td><label for="fecha">Fecha de la Venta</label></td>
			<td><input type="date" name="fecha" id="fecha"></td>
		</tr>
		<tr>
			<td><label for="precio">Valor de la Venta</label></td>
			<td><input type="number" name="ganancia" id="ganancia"></td>
		</tr>
	</table>
	<input type="hidden" id="idVenta" name="idVenta">
	<input type="button" id="btnInsertar" value="Modificar" onclick="confirmarActualizar()">
	</form>
</div>

 <div id="mensajeConfirmacion"></div>
 <div id="confirmacionEliminar" style="display: none">
 	<input type="hidden" id="idVentaEliminar" name="idVentaEliminar">
 	<input type="button" id="btnConfirmarEliminar" value="Confirmar" onclick="eliminarVenta()">
 	<input type="button" id="btnCancelarEliminar" value="Cancelar" onclick="ocultarTodos()">
 </div>
  <div id="confirmacionActualizar" style="display: none">
 	<input type="button" id="btnConfirmarActualizar" value="Confirmar" onclick="actualizarVenta()">
 	<input type="button" id="btnCancelarActualizar" value="Cancelar" onclick="ocultarTodos()">
 </div>

 <script lang="JavaScript" src="../js/jsVenta.js"></script>