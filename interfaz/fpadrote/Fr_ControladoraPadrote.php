<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>IMEC</title>
	<script lang="JavaScript" src="../../js/jQuery.js"></script>
	<script lang="JavaScript" src="../../js/jsAcciones.js"></script>
	<script lang="JavaScript" src="../../js/jquery.validate.min.js"></script>
	<script lang="JavaScript" src="../../js/jsPadrote.js"></script>
	<script lang="JavaScript" src="../../js/jquery1.js"></script>

  	
</head>
<body>
	<div class=" general">
	      <hr>

			<ul>
				<li><a href="#" onclick="cargarPagina('../../interfaz/fpadrote/Fr_InsertarPadrote.php')">Insertar Padrote</a></li>
				<li><a href="#" onclick="cargarPagina('../../interfaz/fpadrote/Fr_MostrarPadrote.php')">Mostrar Padrotes</a></li>
			</ul>

			<hr>

		<div id="contenedor">
			<script>
				window.onload = cargarPagina ("../../interfaz/fpadrote/Fr_MostrarPadrote.php");
			</script>
		</div>
		<div id="mensaje">
			
		</div>

	
	</div>

</body>
</html>