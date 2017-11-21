<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		include ("../controladora/ctrMostrarFinca.php");
		$control = new ctrMostrarFinca;
		$lista = $control->obtenerFincas();
		?>
		<?php
		if($lista){
		?>
		<table border="1" cellpadign="1" cellspacing="1">
			<thead>
				<tr>
					<th>Nombre Finca</th>
					<th>Código Finca</th>
					<th>Cantidad Hectareas</th>
					<th>Cantidad Apartos</th>
					<th>Cantidad Animales por Aparto</th>
					<th>Dias Pastoreo</th>
					<th>Tipo de Pasto</th>
					<th>Direccion</th>
					<th>Opcion 1</th>
					<th>Opcion 2</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($lista as $finca) {
				

					echo "<tr>";
								echo 	"<td>".$finca->getNombre()."</td>";
								echo 	"<td>".$finca->getCodigo()."</td>";
								echo 	"<td>".$finca->getExtension()."</td>";
								echo 	"<td>".$finca->getCantidadApartos()."</td>";
								echo 	"<td>".$finca->getAnimalesAparto()."</td>";
								echo 	"<td>".$finca->getDiasPastoreo()."</td>";
								echo 	"<td>".$finca->getTipoPasto()."</td>";
								echo 	"<td>".$finca->getDireccion()."</td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"cargarPaginaFinca('interfaz/fregistroFinca/Fr_ActualizarFinca.php?cfinca=".$finca->getCodigo()."')\"><span class='glyphicon glyphicon-pencil'></span> Modificar</button></td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" id=\"eliminar\" onclick=\"confirmarOperacion('".$finca->getCodigo()."')\"><span class='glyphicon glyphicon-pencil'></span> Eliminar</button></td>";
					echo "</tr>";
			} 
			?>
			</tbody>
		</table>
		<div id= "mensaje" style="display: none"></div>
		<div id="confirmacion" style="display: none">
			<button class="btn btn-success" type="button" id="confirmar" onclick="eliminarFinca()">
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
							<strong>Ups!</strong> No se han encontrado fincas registradas.
						</div>
					';
	}
		?>
	</body>
</html>
<script lang="JavaScript" src="../js/jsRegistroFinca.js"></script>