<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Actualizar Padrote</title>
		<script lang="JavaScript" src="../../js/jsPadrote.js"></script>
	</head>
	<body>
		<?php
			
			$id = $_GET["id"];
			$identificador = $_GET["identificador"];
		?>
     

	<div id="formularios">
		<script>
	 		window.onload = InterfazActualizarPadrote("<?php echo $identificador ?>","<?php echo $id?>");
	 	</script>
	</div>

	</body>
</html>

<script lang="JavaScript" src="../js/jsPadrote.js"></script>