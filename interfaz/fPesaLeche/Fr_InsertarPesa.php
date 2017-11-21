<?php 

	include('../controladora/ctrListaBovino.php');
	$ctrListaBovino = new CtrListaBovinos();
	$idPropietario = 1; // aqui ira el id del usuario registrado en el sistema
	$lista = $ctrListaBovino->obtenerbovinosPrenados($idPropietario);
	
 ?>

 <?php
		if($lista){
		?>
		<h1>Lista de Preñadas</h1>
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
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"mostrarformulario(".$preñada->getNumero().")\"><span class='glyphicon glyphicon-pencil'></span> Registrar Pesa</button></td>";

					echo "</tr>";
			} 
			?>
			</tbody>
		</table>

        <div id="formularioInsertar" style="display: none">
        	<form id="insertarPesos" method="POST">
        		<br><br>
        		<label for="numeroBovino">Vaca</label>
        		<input type="text" id="numeroBovino" name="numeroBovino" readonly="readonly"/><br><br>
				<label for="fecha">Fecha de Pesaje</label>
				<input type="date" id="fecha" name="fecha" /><br><br>
				<label for="peso">Pesa de Leche</label>
				<input type="number" id="peso" name="peso" /><br><br>
				<input type="button" value="Insertar" onclick="insertarPeso()">
        	</form>
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

<script lang="JavaScript" src="../js/jsPesaLeche.js"></script>