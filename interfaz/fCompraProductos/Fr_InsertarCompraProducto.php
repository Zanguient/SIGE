<?php 
	include ('../controladora/ctrListaProvedores.php');
	include ('../controladora/ctrListaTiposGasto.php');
	$ctrListaProvedores = new ctrListaProvedores();
	$provedores = $ctrListaProvedores->obtenerProvedores();
	$ctrListaTiposGasto = new ctrListaTiposGasto();
	$gastos = $ctrListaTiposGasto->obtenerGastos();

 ?>
<h1>Insertar Compra Productos</h1>

<form id="insertarCompraP" method="POST" action="">

	<label>Gasto Real</label>
	<input type="checkbox" name="opcion1" id="opcion1" onclick="mostrarCFactura()"><br><br>
	<div id="cFactura" style="display:none" >
		<label>Numero Factura</label>
		<input type="number" id="numeroFactura" name="numeroFactura"><br><br>
	</div>
	<label>Gasto Tributable</label>
	<input type="checkbox" name="opcion2" id="opcion2"><br><br>

	<label>Provedor</label>
	<select name="provedor" id="provedor">
		<?php foreach ($provedores as $provedor ): ?>
			<option value="<?php echo $provedor->getIdProvedor() ; ?>"><?php echo $provedor->getNombre() ; ?></option>
		<?php endforeach ?>
	</select><br><br>

	<label>Tipo de Gasto</label>
	<select name="tGasto" id="tGasto">
		<?php foreach ($gastos as $Gasto ): ?>
			<option value="<?php echo $Gasto->getId() ; ?>"><?php echo $Gasto->getNombreGasto() ; ?></option>
		<?php endforeach ?>
	</select><br><br>

	<label>Fecha Compra</label>
	<input type="date" id="fCompra" name="fCompra"><br><br>

	<label>Monto</label>
	<input type="number" id="monto" name="monto"><br><br>

	<input type="button" value="Insertar" onclick="insertarCompraProducto()">
	
</form>
<script lang="JavaScript" src="../js/jsCompraProductos.js"></script>