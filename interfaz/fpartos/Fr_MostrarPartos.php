<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		include ("../controladora/ctrMostrarParto.php");
		$control = new ctrMostrarParto;
		$numeroBovino = $_GET['numeroBovino'];
		$lista = $control->obtenerPartos($numeroBovino);
		?>
		<?php
		if($lista){
		?>
		<table border="1" cellpadign="1" cellspacing="1">
			<thead>
				<tr>
					<th>Fecha del parto</th>
					<th>Genero del becerro</th>
					<th>Descripción del parto</th>
					<th>Opcion 1</th>
					<th>Opcion 2</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($lista as $parto) {
				

					echo "<tr>";
								echo 	"<td>".$parto->getFechaParto()."</td>";
								echo 	"<td>".$parto->getGeneroBecerro()."</td>";
								echo 	"<td>".$parto->getDescripcionParto()."</td>";	
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"cargarPaginaPartos('interfaz/fpartos/Fr_ActualizarParto.php?id=".$parto->getIdParto()."')\"><span class='glyphicon glyphicon-pencil'></span> Modificar</button></td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"confirmarOperacion('".$parto->getIdParto()."')\"><span class='glyphicon glyphicon-pencil'></span> Eliminar</button></td>";
					echo "</tr>";
			} 
			?>
			</tbody>
		</table>
		<div id= "mensaje" style="display: none"></div>
		<div id="confirmacion" style="display: none">
			<button class="btn btn-success" type="button" id="confirmar" onclick="eliminarParto()">
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
	</body>
</html>

<script lang="JavaScript" src="../js/jsPartos.js"></script>