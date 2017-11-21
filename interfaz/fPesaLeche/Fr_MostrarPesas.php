<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		include ("../controladora/ctrListaPesaLeche.php");
		$control = new ctrListaPesas();
		$lista = $control->obtenerPesas();
		?>
		<?php
		if($lista){
		?>
		<table border="1">
			<thead>
				<tr>
					<th>Numero Bovino</th>
					<th>Fecha Pesa</th>
					<th>Pesa</th>
					<th>Opcion 1</th>
					<th>Opcion 2</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($lista as $peso) {
				

					echo "<tr>";
								echo "<td>".$peso->getNumeroBovino()."</td>";
								echo "<td>".$peso->getFechaPesa()."</td>";
								echo "<td>".$peso->getPesa()."</td>";	
								echo "<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"mostrarFormActualizar('".$peso->getNumeroBovino()."','".$peso->getFechaPesa()."','".$peso->getPesa()."')\"><span class='glyphicon glyphicon-pencil'></span>Modificar</button></td>";
								echo "<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"confirmarOperacionPeso('".$peso->getNumeroBovino()."','".$peso->getFechaPesa()."')\"><span class='glyphicon glyphicon-pencil'></span> Eliminar</button></td>";
					echo "</tr>";
			} 
			?>
			</tbody>
		</table>
		<div id= "mensaje" style="display: none"></div>
		<div id="confirmacion" style="display: none">
			<button class="btn btn-success" type="button" id="confirmar" onclick="eliminarPeso()">
				<span class='glyphicon glyphicon-pencil'></span> Confirmar
			</button>
			<button class="btn btn-success" type="button" id="cancelar" onclick="cancelarAccion()">
				<span class='glyphicon glyphicon-pencil'></span> Cancelar
			</button>
			<input type="text" id="t_dato" style="display: none" value="">
			<input type="text" id="fecha" style="display: none" value="">
		</div>

		<div id="formPeso" style="display:none;">
			<br><br>
			<form id="ActualizarPeso" method="POST">

				<label for="numero">Numero Bovino</label>
				<input type="number" id="numero" name="numero" readonly="readonly"><br><br>
				<label for="fecha">Fecha de Pesaje</label>
				<input type="date" id="fecha1" name="fecha1" readonly="readonly" ><br><br>
				<label for="peso">Peso</label>
				<input type="number" id="peso" name="peso"><br><br>
				<input type="button" value="Actualizar" onclick="modificarPesa()">
			</form>
		</div>
		<?php
	}else{
		echo 
					'
						<div class="alert alert-warning">
							<strong>Ups!</strong> No se han encontraron pesos.
						</div>
					';
	}
		?>
	</body>
</html>
<script lang="JavaScript" src="../js/jsPesaLeche.js"></script>