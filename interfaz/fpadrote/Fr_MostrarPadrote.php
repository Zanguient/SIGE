<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
	 <?php
	 	include("../controladora/ctrListaPadrotes.php");
	 	$ctrPadrote = new CtrListaPadrotes;
	    $lista = $ctrPadrote->obtenerPadrotes();
	 ?>
	 <?php
	 	if($lista){
	 ?>
	 <h1>Informacion sobre los padrotes</h1>
	 <div class="table-responsive" id="div1">
		<table border="1">
			<thead>
				<tr>
					<th>Numero Registro</th>
					<th>Nombre Padrote</th>
					<th>Casa Comercial</th>
					<th>Raza</th>
					<th>Precio del animal</th>
					<th>Numero de Canasta</th>
					<th>Fecha de compra</th>
					<th>Cantidad de pajilla</th>
					<th>Precio Pajilla/salto</th>
					<th>Opcion 1</th>
					<th>Opcion 2</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($lista as $padrote ) {
						echo "<tr>";
									echo "<td>".$padrote->getNumeroRegistro()."</td>";
									echo "<td>".$padrote->getNombrePadrote()."</td>";
									echo "<td>".$padrote->getCasaComercial()."</td>";
									echo "<td>".$padrote->getRazaPadrote()."</td>";
									echo "<td>".$padrote->getPrecioAnimal()."</td>";
									echo "<td>".$padrote->getNumeroCanasta()."</td>";
									echo "<td>".$padrote->getFechaCompra()."</td>";
									echo "<td>".$padrote->getCantidadPajillas()."</td>";
									echo "<td>".$padrote->getPrecioPajillaSalto()."</td>";
									echo "<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"paginaModificarPadrote('".$padrote->getId()."','".$padrote->getIdentificador()."')\"><span class='glyphicon glyphicon-pencil'></span> Modificar</button></td>";
									echo "<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" id=\"eliminar\" onclick=\"confirmarOperacion('".$padrote->getId()."')\"><span class='glyphicon glyphicon-pencil'></span> Eliminar</button></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
		<div id= "mensaje" style="display: none"></div>
		<div id="confirmacion" style="display: none">
			<button class="btn btn-success" type="button" id="confirmar" onclick="eliminarPadrote()">
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
							<strong>Ups!</strong> No se han encontrado Generos registrados.
						</div>
					';
        }
		?>
		
	</body>

</html>

<script lang="JavaScript" src="../js/jsPadrote.js"></script>