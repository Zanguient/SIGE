<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>IMEC</title>
		<script lang="JavaScript" src="js/jQuery.js"></script>
		<script lang="JavaScript" src="js/jquery.validate.min.js"></script>
		<script lang="JavaScript" src="js/jsPesoAnimal.js"></script>
		<script lang="JavaScript" src="js/jsAcciones.js"></script>
	</head>
	<body>
		<div class="container">
			<h1><span>Registro de peso</span></h1>

			<hr>

			<ul>
				<li><a href="#" onclick="cargarPaginaPeso('interfaz/fPesoAnimal/Fr_InsertarPeso.php')">Registro de peso</a></li>
				<li><a href="#" onclick="cargarPaginaPeso('interfaz/fPesoAnimal/Fr_MostrarPeso.php')">Mostrar registro de peso</a></li>
			</ul>

			<hr>

			<div id="contenedorPesoAnimal">
				<script>
					window.onload =cargarPaginaPeso('interfaz/fPesoAnimal/Fr_MostrarPeso.php');
				</script>
			</div>
			<div id="mensaje4">
				
			</div>
		</div>
	</body>
</html>