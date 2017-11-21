<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php 
		$IdFactura = $_GET['IdFactura'];
		include("../controladora/ctrListaCompraLotes.php");
		include("../controladora/crtMostrarRegistrosIndividuales.php");
		$cont = new ctrListaCompraLotes;
		$conRegistro = new crtMostrarRegistrosIndividuales;
		$ListaFacturas = $cont->obtenerCompraLote($IdFactura);
		$listaRegistros = $conRegistro->obtenerRegistros($IdFactura);
		foreach($ListaFacturas as $compra){
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
	<h2>Nombre del Vendedor: <?php echo "".$vendedor; ?></h2>
	<h2>Fecha de la factura: <?php echo "".$fecha; ?></h2>
	<h2>Cantidad de animales comprados: <?php echo "".$nAnimales; ?></h2>
	<?php 
	if ($listaRegistros) {
	 ?>
	 <form action="" id="frAgregarRegistros1" method="Post" role="form">
		 <table border="1" cellpadign="1" cellspacing="1">
		 	<thead>
		 		<tr>
		 			<th>Numero de Subasta o Finca</th>
		 			<th>Descripcion del Animal</th>
		 			<th>Peso del Animal</th>
		 			<th>Precio Por Kilo</th>
		 			<th>Precio Total</th>
		 			<th>Opcion 1</th>
		 			<th>Opcion 2</th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 	<?php 
		 	$contador = 0;
		 	foreach ($listaRegistros as $registro) {
		 		echo "<tr>";
		 			echo "<td>".$registro->getNumSubastaFinca()."</td>";
		 			echo "<td>".$registro->getPeso()."</td>";
		 			echo "<td>".$registro->getDescripcion()."</td>";
		 			echo "<td>".$registro->getPrecioKilo()."</td>";
		 			echo "<td>".$registro->getPrecioTotal()."</td>";
		 			echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"cargarPaginaFinca('../interfaz/fregistroFinca/Fr_ActualizarFinca.php?cfinca=".$registro->getIdRegistro()."')\"><span class='glyphicon glyphicon-pencil'></span> Modificar</button></td>";
					echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" id=\"eliminar\" onclick=\"confirmarOperacion('".$registro->getIdRegistro()."')\"><span class='glyphicon glyphicon-pencil'></span> Eliminar</button></td>";
		 		echo "</tr>";
		 		$contador ++;
		 	}
		 	if($contador < $nAnimales){
		 	 ?>
		 		<tr>
		 			<td><input type="text" id="numSubastaFinca" name="numSubastaFinca" placeholder="Numero de subasta o finca"></td>
     				<td><input type="text" id="descripcion" name="descripcion" placeholder="descripcion"></td>
     				<td><input type="text" id="peso" name="peso" placeholder="peso"></td>
     				<td><input type="text" id="precioKilo" name="precioKilo" placeholder="precio por kilo"></td>
     				<td><input type="text" id="precioTotal" name="precioTotal" placeholder="precio total"></td>
     				<td style="display: none"><input type="text" name="idFactura" id="idFactura" value="<?php echo $idFactura; ?>"></td>
     				<td><input type="button" value="insertar" onclick="insertarRegistro('frAgregarRegistros1')"></td>
		 		</tr>
		 		<?php } ?>
		 	</tbody>
		 </table>
	 </form>

	<?php 
	}else{
	 ?>
	 <form action="" id="frAgregarRegistros2" method="Post" role="form">
		 <table border="1" cellpadign="1" cellspacing="1">
		 	<thead>
		 		<tr>
		 			<th>Numero de Subasta o Finca</th>
		 			<th>Descripcion del Animal</th>
		 			<th>Peso del Animal</th>
		 			<th>Precio Por Kilo</th>
		 			<th>Precio Total</th>
		 			<th>Opcion 1</th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		<tr>
		 			<td><input type="text" id="numSubastaFinca" name="numSubastaFinca" placeholder="Numero de subasta o finca"></td>
     				<td><input type="text" id="descripcion" name="descripcion" placeholder="descripcion"></td>
     				<td><input type="text" id="peso" name="peso" placeholder="peso"></td>
     				<td><input type="text" id="precioKilo" name="precioKilo" placeholder="precio por kilo"></td>
     				<td><input type="text" id="precioTotal" name="precioTotal" placeholder="precio total"></td>
     				<td style="display: none"><input type="text" name="idFactura" id="idFactura" value="<?php echo $idFactura; ?>"></td>
     				<td><input type="button" value="insertar" onclick="insertarRegistro('frAgregarRegistros2')"></td>
		 		</tr>
		 	</tbody>
		 </table>
	 </form>
	 <?php } ?>
</body>
</html>
<script lang="JavaScript" src="../js/jsRegistroIndividual.js"></script>