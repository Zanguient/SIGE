<?php 
	include ('../controladora/ctrMostrarProducto.php');
	$controlProductos = new ctrMostrarProducto();
	$productos = $controlProductos->obtenerProductos();

 ?>
<h1>Insertar Venta Productos</h1>

<form id="frmVentaProducto" method="POST" action="">

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
	<input type="button" id="btnAgregar" value="Registrar Venta" onclick="insertarVentaProducto()">
</form>
 <script lang="JavaScript" src="../js/jsVentaProducto.js"></script>