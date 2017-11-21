<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Promedios</title>
	<script lang="JavaScript" src="js/jsPromedio.js"></script>
</head>
<body>
	<?php 

	include('../controladora/ctrListaBovino.php');
	$ctrListaBovino = new CtrListaBovinos();
	$idPropietario = 1; // aqui ira el id del usuario registrado en el sistema
	$lista = $ctrListaBovino->obtenerbovinosPrenados($idPropietario);
	
 ?>

 <?php
		if($lista){
		?>
		<h1>Lista de vacas en produccion</h1>
		<table border="1" >
			<thead>
				<tr>
					<th>Numero Bovino</th>
					<th>Nombre Bovino</th>
					<th>Estado</th>
					<th>Sexo</th>
					<th>Raza</th>
					<th>Edad</th>
					<th>Registrar Peso</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($lista as $preñada) {
				

					echo "<tr>";
								echo 	"<td>".$preñada->getNumero()."</td>";
								echo 	"<td>".$preñada->getNombre()."</td>";
								echo 	"<td>".$preñada->getEstado()."</td>";	
								echo 	"<td>".$preñada->getSexo()."</td>";
								echo 	"<td>".$preñada->getRaza()."</td>";
								echo 	"<td>".$preñada->getEdad()."</td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"mostrarformularioPromedios('".$preñada->getNumero()."','".$preñada->getNombre()."')\"><span class='glyphicon glyphicon-pencil'></span>Promedio</button></td>";

					echo "</tr>";
			} 
			?>
			</tbody>
		</table>

        <div id="formularioInsertar" style="display: none">
        	<form id="MostrarPromedio" method="POST">
        		<br><br>
        		<label for="numeroBovino">Vaca</label>
        		<input type="text" id="numeroBovino" name="numeroBovino" readonly="readonly"/><br><br>
        		<label for="numeroBovino">Nombre</label>
        		<input type="text" id="nombre" name="nombre" readonly="readonly"/><br><br>
				<label for="fecha">Fecha Inicial</label>
				<input type="date" id="fechaI" name="fechaI" /><br><br>
				<label for="peso">Fecha Final</label>
				<input type="date" id="fechaF" name="fechaF" /><br><br>

				<input type="button" value="Mostrar Promedio" onclick="mostrarPromedio()">
        	</form>
        </div>
		<div id="mostrarPromedios" style="display: none">
			
        		<label for="pIndividual">Promedio Individual</label>
        		<input type="number" id="pIndividual" name="pIndividual" readonly="readonly"/><br><br>
        		<label for="">Promedio General</label>
        		<input type="number" id="pGeneral" name="pGeneral" readonly="readonly"/><br><br>
			
        </div>
		

		<div class='dibujo-grafica'>
			<img id="imagenG" alt='grafico'/>
		</div>


		<?php
	}else{
		echo 
					'
						<div class="alert alert-warning">
							<strong>Ups!</strong> No se han encontrado Animales es estado preñado.
						</div>
					';
	}
	
		?>
</body>
</html>