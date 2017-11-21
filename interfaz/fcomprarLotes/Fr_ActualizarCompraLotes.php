<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Actualizar Compra Lotes</title>
		<?php
			$IdFactura = $_GET['IdFactura'];
			include("../controladora/ctrListaCompraLotes.php");
			$cont = new ctrListaCompraLotes;
			$Lista = $cont->obtenerCompraLote($IdFactura);

			foreach($Lista as $compra){
				
				$idFactura = $compra->getIdFactura();
				$numeroFactura = $compra->getNumeroFactura();
				$gastoReal = $compra->getGastoReal();
				$vendedor= $compra->getVendedor();
				$nAnimales = $compra->getNumeroAnimales();
				$monto = $compra->getMonto();
				$nGuia = $compra->getNumeroGuia();
				$fecha = $compra->getFecha();
			}
		 ?>
	</head>
	<body>
		<form id="FrActualizarLotesAnimales" method="Post" role="form">
			<h1> Actulaizar Compra de Lotes de Animales</h1>
			<label for="numeroFactura">Numero Factura</label><br>
			<input type="text" id="nFactura" name="nFactura" placeholder="Dato: <?php echo $numeroFactura; ?>" value="<?php echo $numeroFactura; ?>"><br><br>
			<label for="lvendedor">Vendedor</label><br>
			<input type="text" id="vendedor" name="vendedor" placeholder="Dato: <?php echo $vendedor; ?>" value="<?php echo $vendedor; ?>"><br><br>
			<label for="lcantidad">Cantidad Animales</label><br>
			<input type="number" id="cantidad" name="cantidad" placeholder="Dato: <?php echo $nAnimales; ?>" value="<?php echo $nAnimales; ?>"><br><br>
			<label for="lmonto">Monto</label><br>
			<input type="number" id="monto" name="monto" placeholder="Dato: <?php echo $monto; ?>" value="<?php echo $monto; ?>"><br><br>
			<label for="lGuia">Numero Guia</label><br>
			<input type="number" id="guia" name="guia" placeholder="Dato: <?php echo $nGuia; ?>" value="<?php echo $nGuia; ?>"><br><br>
			<label for="lFecha">Fecha</label><br>
			<input type="date" id="fecha" name="fecha" placeholder="Dato: <?php echo $fecha; ?>" value="<?php echo $fecha; ?>"><br><br>
			<input type="hidden" name="idFactura" value="<?php echo $idFactura; ?>"><br>
			<input type="button" value="Actualizar" onclick="ActualizarCompraLotes()">
		</form>
		
	</body>
</html>
<script lang="JavaScript" src="../js/jsCompraLoteAnimales.js"></script>