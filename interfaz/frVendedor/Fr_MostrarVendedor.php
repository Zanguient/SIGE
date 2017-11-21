<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		include("../controladora/ctrMostrarVendedor.php");
		$control = new ctrMostrarVendedor;
		$lista = $control->obtenerVendedores();
		if($lista){
		?>
		<table border="1" cellpadign="1" cellspacing="1">
			<thead>
				<tr>
					<th>Nombre Vendedor</th>
					<th>Código Vendedor</th>
					<th>Telefono Vendedor</th>
					<th>Direccion</th>
					<th>Opcion 1</th>
					<th>Opcion 2</th>
					<th>Opcion 3</th>
					<th>Opcion 4</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($lista as $vendedor) {
				

					echo "<tr>";
								echo 	"<td>".$vendedor->getNombre()."</td>";
								echo 	"<td>".$vendedor->getCodigo()."</td>";
								echo 	"<td>".$vendedor->getTelefono()."</td>";
								echo 	"<td>".$vendedor->getDireccion()."</td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"cargarPaginaVendedor('interfaz/frVendedor/Fr_ActualizarVendedor.php?cvendedor=".$vendedor->getCodigo()."')\"><span class='glyphicon glyphicon-pencil'></span> Modificar</button></td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" id=\"eliminar\" onclick=\"confirmarOperacion('".$vendedor->getCodigo()."')\"><span class='glyphicon glyphicon-pencil'></span> Eliminar</button></td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"cargarPaginaVendedor('interfaz/frVendedor/Fr_AgregarCuenta.php?cvendedor=".$vendedor->getCodigo()."')\"><span class='glyphicon glyphicon-pencil'></span> Agregar Cuenta</button></td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"cargarPaginaVendedor('interfaz/frVendedor/Fr_MostrarCuentas.php?cvendedor=".$vendedor->getCodigo()."')\"><span class='glyphicon glyphicon-pencil'></span>Cuenta Bancaria</button></td>";
					echo "</tr>";
			} 
			?>
			</tbody>
		</table>
		<div id= "mensaje" style="display: none"></div>
		<div id="confirmacion" style="display: none">
			<button class="btn btn-success" type="button" id="confirmar" onclick="eliminarVendedor()">
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
							<strong>Ups!</strong> No se han encontrado vendedores registrados.
						</div>
					';
	}
		?>
	</body>
</html>
<script lang="JavaScript" src="../js/jsVendedor.js"></script>