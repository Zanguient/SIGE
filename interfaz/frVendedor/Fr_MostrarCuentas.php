<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		$codigo = $_GET['cvendedor'];
		include("../controladora/ctrMostrarVendedor.php");
		$control = new ctrMostrarVendedor;
		$lista = $control->obtenerCuentas($codigo);
		$nombre = $lista->getNombre();
		if($lista){
		?>
		<table border="1" cellpadign="1" cellspacing="1">
			<thead>
				<tr>
					<th>Nombre Vendedor</th>
					<th>Cuenta Vendedor</th>
					<th>Opcion 1</th>
					<th>Opcion 2</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($lista->getCuentasBancarias() as $cuenta) {
				

					echo "<tr>";
								echo 	"<td>".$nombre."</td>";
								echo 	"<td>".$cuenta."</td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"cargarPaginaVendedor('interfaz/frVendedor/Fr_ActualizarCuenta.php?cvendedor=".$cuenta."')\"><span class='glyphicon glyphicon-pencil'></span> Modificar</button></td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" id=\"eliminar\" onclick=\"confirmarOperacion('".$cuenta."')\"><span class='glyphicon glyphicon-pencil'></span> Eliminar</button></td>";
					echo "</tr>";
			} 
			?>
			</tbody>
		</table>
		<div id= "mensaje" style="display: none"></div>
		<div id="confirmacion" style="display: none">
			<button class="btn btn-success" type="button" id="confirmar" onclick="eliminarCuenta()">
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
							<strong>Ups!</strong> No se han encontrado Cuentas registradas.
						</div>
					';
	}
		?>
	</body>
</html>
<script lang="JavaScript" src="../js/jsVendedor.js"></script>