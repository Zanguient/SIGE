<?php 

	include ("../controladora/ctrMostrarVentas.php");
	$controlVenta = new ctrMostrarVenta;
	$lista = $controlVenta->obtenerVentasProducto();
	if($lista){}
	include ('../controladora/ctrMostrarProducto.php');
	$controlProductos = new ctrMostrarProducto();
	$productos = $controlProductos->obtenerProductos();
 ?>

 <table id="tablaVentas" border="1" cellpadding="1" cellspacing="1">
 	<thead>
 		<tr>
 			<th>Producto </th>
 			<th>Unidad Medida </th>
 			<th>Cantidad </th>
 			<th>Precio Unitario </th>
 			<th>Total </th>
 			<th>Numero Recibo </th>
 			<th>Fecha Venta </th>
 			<th>Opción 1</th>
 			<th>Opción 2</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 		$contador = 1;
 		foreach ($lista as $venta) {
 			echo "<tr>";
				echo 	"<td>".$venta->getProducto()->getNombreProducto()."</td>";
				echo 	"<td>".$venta->getProducto()->getUnidadMedida()."</td>";
				echo 	"<td>".$venta->getCantidad()."</td>";
				echo 	"<td>".$venta->getPrecioUnitario()."</td>";
				echo 	"<td>".$venta->getTotal()."</td>";
				if(!$venta->getNumeroRecibo()){
 					echo 	"<td> No hay Recibo </td>";
	 			}else{
	 				echo 	"<td>".$venta->getNumeroRecibo()."</td>";
	 			}
				echo 	"<td>".$venta->getFechaVenta()."</td>";
				echo 	"<td style=\"display: none\">".$venta->getProducto()->getIdProducto()."</td>";
				echo 	"<td style=\"display: none\">".$venta->getIdVenta()."</td>";
				echo 	"<td> <input type=\"button\" id=\"btnModificar\" value=\"Modificar\" onclick=\"recorrerTabla('".$contador."')\"> </td>";
				echo 	"<td> <input type=\"button\" id=\"btnEliminar\" value=\"Eliminar\" onclick=\"confirmarEliminar('".$venta->getIdVenta()."')\"> </td>";
			echo "</tr>";
			$contador ++;
 		} ?>
 	</tbody>
 </table> <br><br>

 <br><br>
<div id="contenedorActualizar" style="display: none">
	<form action="" name="frmActualizarVenta" id="frmActualizarVenta">
		<table>
			<tr>
				<td><label for="">Seleccione el Producto</label></td>
				<td><select name="producto" id="producto">
					<?php 
						foreach ($productos as $key => $producto) { ?>
						<option value="<?php echo $producto->getIdProducto() ; ?>"><?php echo $producto->getNombreProducto() ; ?></option>
						<?php }?>
				</select></td>
			</tr>
			<tr>
				<td><label for="">Numero Recibo Comprador</label></td>
				<td><input type="text" id="txtNumRecibo" name="txtNumRecibo" title="Este campo puede quedar en blanco si no hay recibo"></td>
			</tr>
			<tr>
				<td><label for="">Fecha venta</label></td>
				<td><input type="date" id="fecha" name="fecha"></td>
			</tr>
			<tr>
				<td><label for="">Cantidad</label></td>
				<td><input type="number" id="txtCantidad" name="txtCantidad" title="Tomara la unidad de medida con base al producto seleccionado"></td>
			</tr>
			<tr>
				<td><label for="">Precio Unitario</label></td>
				<td><input type="number" id="txtPrecio" name="txtPrecio"></td>
			</tr>
			<tr>
				<td><label for="">Total</label></td>
				<td><input type="number" id="txtTotal" name="txtTotal"></td>
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

 <script lang="JavaScript" src="../js/jsVentaProducto.js"></script>