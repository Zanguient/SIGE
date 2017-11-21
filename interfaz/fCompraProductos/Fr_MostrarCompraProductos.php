		<?php
		include ("../controladora/ctrListaCompraProductos.php");
		$control = new ctrListaCompraProductos();
		$lista = $control->obtenerCompraProductos();
		?>
		<?php
		if($lista){
		?>
		<h1>Productos Comprados</h1>
		<table border="1">
			<thead>
				<tr>
					<th>Numero Factura</th>
					<th>Provedor</th>
					<th>Tipo Gasto</th>
					<th>Fecha Campra</th>
					<th>Monto</th>
					<th>Opcion 1</th>
					<th>Opcion 2</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($lista as $Compra) {
				

					echo "<tr>";
								echo 	"<td>".$Compra->getNumeroFactura()."</td>";
								echo 	"<td>".$Compra->getProvedor()."</td>";
								echo 	"<td>".$Compra->getTipoGasto()."</td>";	
								echo 	"<td>".$Compra->getFechaCompra()."</td>";	
								echo 	"<td>".$Compra->getMonto()."</td>";	
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"cargarPaginaCompraP('interfaz/fCompraProductos/Fr_ActualizarCompraProducto.php?id=".$Compra->getIdGasto()."')\"><span class='glyphicon glyphicon-pencil'></span> Modificar</button></td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"confirmarOperacion('".$Compra->getIdGasto()."')\"><span class='glyphicon glyphicon-pencil'></span> Eliminar</button></td>";
					echo "</tr>";
			} 
			?>
			</tbody>
		</table>
		<div id= "mensaje" style="display: none"></div>
		<div id="confirmacion" style="display: none">
			<button class="btn btn-success" type="button" id="confirmar" onclick="eliminarCompraProducto()">
				<span class='glyphicon glyphicon-pencil'></span> Confirmar
			</button>
			<button class="btn btn-success" type="button" id="cancelar" onclick="cancelarAccion()">
				<span class='glyphicon glyphicon-pencil'></span> Cancelar
			</button>
			<input type="text" id="t_dato" style="display: none" value="">
		</div>
		<?php
	}else{
		echo 
					'
						<div class="alert alert-warning">
							<strong>Ups!</strong> No se han encontrado partos registrados.
						</div>
					';
	}
		?>
<script lang="JavaScript" src="../js/jsCompraProductos.js"></script>