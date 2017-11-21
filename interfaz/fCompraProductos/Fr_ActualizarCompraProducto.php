<?php 
	
	include('../controladora/ctrListaCompraProductos.php');
	include('../controladora/ctrListaProvedores.php');
	include('../controladora/ctrListaTiposGasto.php');

	$idGasto = $_GET['id'];
	$ctrCProductos = new ctrListaCompraProductos();
	$compraProducto = $ctrCProductos->obtenerCompraP($idGasto);
	$ctrListaProvedores = new ctrListaProvedores();
	$provedores = $ctrListaProvedores->obtenerProvedores();
	$ctrListaTiposGasto = new ctrListaTiposGasto();
	$tiposGastos = $ctrListaTiposGasto->obtenerGastos();
	
 ?>

<h1>Actualizar Compra Producto</h1>

<form id="ActualizarCompraP" method="POST" action="">
	<input type="hidden" id="temp" name="temp" value="<?php echo $compraProducto->getGastoReal() ; ?>">
	<input type="hidden" id="temp2" name="temp2" value="<?php echo $compraProducto->getGastoTributable(); ?>">
	<script>
		window.onload = seleccionarCheckBox();
	</script>
	<label>Gasto Real</label>
	<input type="checkbox" name="opcion1" id="opcion1" onclick="mostrarCFactura()"><br><br>
	<div id="cFactura" style="display:none" >
		<label>Numero Factura</label>
		<input type="number" id="numeroFactura" name="numeroFactura" value="<?php echo $compraProducto->getNumeroFactura() ; ?>" placeholder="<?php echo $compraProducto->getNumeroFactura() ; ?>"><br><br>
	</div>

	<label>Gasto Tributable</label>
	<input type="checkbox" name="opcion2" id="opcion2"><br><br>
	
	<label>Provedor</label>
	<select name="provedor" id="provedor">
		<?php foreach ($provedores as $provedor ): ?>
		   <?php  if ($provedor->getIdProvedor() == $compraProducto->getIdProvedor() ){?>
			<option value="<?php echo $provedor->getIdProvedor() ; ?>" selected><?php echo $provedor->getNombre() ; ?></option>
		<?php }else{?>
			<option value="<?php echo $provedor->getIdProvedor() ; ?>"><?php echo $provedor->getNombre() ; ?></option>
		<?php }  ?>
		<?php endforeach ?>
	</select><br><br>

	<label>Tipo de Gasto</label>
	<select name="tGasto" id="tGasto">
		<?php foreach ($tiposGastos as $Gasto ): ?>
			<?php  if ($Gasto->getId() == $compraProducto->getIdTipoGasto() ){?>
			<option value="<?php echo $Gasto->getId() ; ?>" selected><?php echo $Gasto->getNombreGasto() ; ?></option>
		<?php }else{?>
			<option value="<?php echo $Gasto->getId() ; ?>"><?php echo $Gasto->getNombreGasto() ; ?></option>
		<?php }  ?>
		<?php endforeach ?>
	</select><br><br>

	<label>Fecha Compra</label>
	<input type="date" id="fCompra" name="fCompra" value="<?php echo $compraProducto->getFechaCompra();?>"><br><br>

	<label>Monto</label>
	<input type="number" id="monto" name="monto" value="<?php echo $compraProducto->getMonto();?>" placeholder="<?php echo $compraProducto->getMonto();?>"><br><br>

	<input type="hidden" name="idGasto" value="<?php echo $compraProducto->getIdGasto(); ?>"><br>
	<input type="button" value="Actualizar" onclick="actualizarCompraProductos()">
	
</form>

<script lang="JavaScript" src="../js/jsCompraProductos.js"></script>

