
<?php
include ("../controladora/ctrListaBovino.php");
$control = new CtrListaBovinos;
$lista = $control->obtenerbovinosVenta(1);	
?>

<?php if($lista){ ?>
<h2>Bovinos para agregar a la Venta</h2>
<table id="tbBovinosAgregar" border="1" cellpadding="1" cellspacing="1">
	<thead>
		<tr>
			<th>Nombre Bovino</th>
			<th>Arete Bovino</th>
			<th>Opcion 1</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$contador = 1;
		foreach ($lista as $bovino) {
			echo "<tr>";
				echo 	"<td>".$bovino->getNumero()."</td>";
				echo 	"<td>".$bovino->getNombre()."</td>";
				echo 	"<td> <input type=\"button\" id=\"".$contador."\" value=\"Agregar\" onclick=\"add(this, '".$contador."')\" </td>";
			echo "</tr>";
			$contador ++;
		} 

	 	?>
	</tbody>
</table>
<br>
<h2>Bovinos agregados a la venta</h2>
<table id="tbBovinosAgregados" border="1" cellpadding="1" cellspacing="1">
	<thead>
		<tr>
			<th>Nombre Bovino</th>
			<th>Arete Bovino</th>
			<th>Peso Bovino</th>
			<th>Precio Bovino</th>
			<th>Opción 1</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>

<form name="frmInsertarVenta" id="frmInsertarVenta">
	<table>
		<tr>
			<td><label for="reportada">Venta Reportada</label></td>
			<td><input type="checkbox" name="reportada" id="reportada"></td>
		</tr>
		<tr>
			<td><label for="fecha">Fecha de la Venta</label></td>
			<td><input type="date" name="fecha" id="fecha"></td>
		</tr>
		<tr>
			<td><label for="precio">Valor de la Venta</label></td>
			<td><input type="number" name="ganancia" id="ganancia"></td>
		</tr>
	</table>
	<input type="button" id="btnInsertar" value="Registrar" onclick="insertarVenta()">
</form>
<br>

<?php	}else{ ?>
	<h2>Lo sentimos no hay bovinos para registrar en la venta</h2>
<?php	} ?>

<script lang="JavaScript" src="../js/jsVenta.js"></script>






