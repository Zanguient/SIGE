<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
	      include("../controladora/ctrListaCompraLotes.php");
	      $control = new ctrListaCompraLotes;
	      $Lista = $control->obtenerCompraslotes();
		?>
		<?php 
			if($Lista){
		?>
		<table border="1">
			<thead>
				<tr>
					<th>Número Factura</th>
					<th>Vendedor</th>
					<th>Cantidad Animales</th>
					<th>Monto</th>
					<th>Numero Guia</th>
					<th>Fecha</th>
					<th>Opcion 1</th>
					<th>Opcion 2</th>
					<th>Opcion 3</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($Lista as $compra) {
					

						echo "<tr>";
									echo 	"<td>".$compra->getNumeroFactura()."</td>";
									echo 	"<td>".$compra->getVendedor()."</td>";
									echo 	"<td>".$compra->getNumeroAnimales()."</td>";
									echo 	"<td>".$compra->getMonto()."</td>";
									echo 	"<td>".$compra->getNumeroGuia()."</td>";
									echo 	"<td>".$compra->getFecha()."</td>";
									echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"paginaModificarCompraLote('".$compra->getIdFactura()."')\"><span class='glyphicon glyphicon-pencil'></span> Modificar</button></td>";
									echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" id=\"eliminar\" onclick=\"confirmarOperacion('".$compra->getIdFactura()."')\"><span class='glyphicon glyphicon-pencil'></span> Eliminar</button></td>";
									echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"cargarPaginaCompra('../../interfaz/fregistroIndividual/fr_MostrarRegistros.php?IdFactura=".$compra->getIdFactura()."')\"><span class='glyphicon glyphicon-pencil'></span> Registro Individual</button></td>";
						echo "</tr>";
				} 
				?>
			</tbody>
		</table>
		<div id= "mensaje" style="display: none"></div>
			<div id="confirmacion" style="display: none">
				<button class="btn btn-success" type="button" id="confirmar" onclick="eliminarCompraLote()">
					<span class='glyphicon glyphicon-pencil'></span> Confirmar
				</button>
				<button class="btn btn-success" type="button" id="cancelar" onclick="cancelarAccion()">
					<span class='glyphicon glyphicon-pencil'></span> Cancelar
				</button>
				<input type="text" id="t_dato" style="display: none" value="">
			</div>
		<?php 

	     } else {
	     	echo 
						'
							<div class="alert alert-warning">
								<strong>Ups!</strong> No se han encontrado Generos registrados.
							</div>
						';
	            }
		?>


		
	</body>
</html>

<script lang="JavaScript" src="../js/jsCompraLoteAnimales.js"></script>