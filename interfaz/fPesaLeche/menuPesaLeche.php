<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>IMEC</title>
		<script lang="JavaScript" src="js/jQuery.js"></script>
		<script lang="JavaScript" src="js/jquery.validate.min.js"></script>
		<script lang="JavaScript" src="js/jsPesaLeche.js"></script>
		<script lang="JavaScript" src="js/jsAcciones.js"></script>
	</head>
	<body>
		<div class="container">
			<h1><span>Registro de pesas</span></h1>

			<hr>

			<ul>
				<li><a href="#" onclick="cargarPaginaPesos('interfaz/fPesaLeche/Fr_InsertarPesa.php')">Registro de pesas</a></li>
				<li><a href="#" onclick="cargarPaginaPesos('interfaz/fPesaLeche/Fr_MostrarPesas.php')">Mostrar registro de pesas</a></li>
			</ul>

			<hr>

			<div id="contenedorPesos">
				<script>
					window.onload =cargarPaginaPesos('interfaz/fPesaLeche/Fr_MostrarPesas.php');
				</script>
			</div>
			<div id="mensaje3">
				
			</div>
		</div>
	</body>
</html>