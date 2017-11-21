<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<script lang="JavaScript" src="../js/jsPartos.js"></script>
	</head>
	<body>
		<?php
		include ("../controladora/ctrListaBovino.php");
		$control = new CtrListaBovinos;
		$idFinca = $_GET['idFinca'];
		$lista = $control->obtenerbovinosFinca($idFinca);
		?>
		<?php
		if($lista){
		?>
		<table border="1" cellpadign="1" cellspacing="1">
			<thead>
				<tr>
					<th>Numero Bovino</th>
					<th>Nombre Bovino</th>
					<th>Fecha Nacimiento</th>
					<th>Genero</th>
					<th>Raza</th>
					<th>Numero Padre</th>
					<th>Numero Madre</th>
					<th>Opcion 1</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($lista as $bovino) {
				

					echo "<tr>";
								echo 	"<td>".$bovino->getNumero()."</td>";
								echo 	"<td>".$bovino->getNombre()."</td>";
								echo 	"<td>".$bovino->getFechaNacimiento()."</td>";
								echo 	"<td>".$bovino->getSexo()."</td>";
								echo 	"<td>".$bovino->getRaza()."</td>";
								echo 	"<td>".$bovino->getNumeroPadre()."</td>";
								echo 	"<td>".$bovino->getNumeroMadre()."</td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"cargarPaginaPartos('interfaz/fpartos/Fr_MostrarPartos.php?numeroBovino=".$bovino->getNumero()."')\"><span class='glyphicon glyphicon-pencil'></span> Partos</button></td>";
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
							<strong>Ups!</strong> No se han encontrado bovinos registrados.
						</div>
					';
	}
		?>
	</body>
</html>