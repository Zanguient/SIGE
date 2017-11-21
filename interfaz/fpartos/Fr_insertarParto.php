<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php 
		include("../controladora/ctrMostrarFinca.php");
		include("../controladora/ctrListaBovino.php");
		include("../controladora/ctrListaPadrotes.php");
	 	$ctrPadrote = new CtrListaPadrotes;
	    $listaPadrotes = $ctrPadrote->obtenerPadrotes();
		$control = new ctrMostrarFinca();
		$fincas = $control->obtenerFincas();
		$controlBovino = new CtrListaBovinos();
		// desde aqui debemos enviar el id del usurio que esta logueado, esto para traer sus animales
		$idUsuario = 1;
		$vacas = $controlBovino->obtenerbovinos($idUsuario);

		foreach ($vacas as $vaca) {

			$Array[] = array("nombre" => $vaca->getNombre(),"codigofinca" =>$vaca->getCodigo(),"numeroBovino" =>$vaca->getNumero());

		}
		$ArrayJson = json_encode($Array);
	 ?>
	 <h1> Registrar Parto</h1>
		
		<script>
		function llenarSelect2(valor){
			var bovinos = eval(<?php echo $ArrayJson ?>);
			for (var i = 0; i < bovinos.length; i++) {
			//document.write("nombre: "+bovinos[i].nombre+"</br>");
			}

			if(valor == 0){
				 document.getElementById("vacas").disabled=true;
				 
			}else{
				// se limpia el select de vacas
				document.getElementById("vacas").options.length=0;
				// se añaden los nuevos valores al select de vacas
				document.getElementById("vacas").options[0]=new Option("Selecciona un animal", "0");
				 for(i=0;i<bovinos.length;i++){
           
           			 if(bovinos[i].codigofinca == valor){
           			 	// el primer parametro es lo que se va a mostrar como opcion y el segundo es el value.
                		document.getElementById("vacas").options[document.getElementById("vacas").options.length]=new Option(bovinos[i].nombre,bovinos[i].numeroBovino);
           			}
           			document.getElementById("vacas").disabled=false;
       			 }
			}
			
		}

	
		</script>
		
	<label for="">Registrar en la Finca</label>
	<input type="checkbox" name="registroFinca" id="registroFinca" onclick="desplegarCampos()"><br><br>
	<form id="FrInsertarParto" method="Post" role="form">
		<label>Nombre de la Finca</label>
		<select id="fincas" name="fincas" onchange="llenarSelect2(this.value)">
			<option value="0">Seleccione una opcion...</option>
			<?php foreach ($fincas as $finca): ?>
				<option value="<?php echo $finca->getCodigo(); ?>"><?php echo $finca->getNombre(); ?></option>
			<?php endforeach ?>
		</select>
		<br><br>

		<label>Seleccione la Vaca</label>
		<select id="vacas" name="vacas">
			
		</select>
		<br><br>
		<label>Fecha del Parto</label>
		<input type="date" id="fecha" name="fecha" ><br><br>
		<label>Genero del becerro</label>
		<select id="genero" name="genero">
			<option value="Macho">Macho</option>
			<option value="Hembra">Hembra</option>
        </select>
		<br><br>
		<label>Descripcion del parto</label><br>
		<textarea name="descripcion" id="descripcion" rows="10" cols="30" placeholder="Descripcion del parto..."></textarea><br><br>

		<div id="contenedorFrmBovino" style="display:none">
			<label for="">Numero de arete: </label>
			<input type="number" name="arete" id="arete"> <br> <br>
			
			<label for="">Nombre: </label>
			<input type="text" name="nombre" id="nombre"> <br> <br>
			
			<label for="">Raza: </label>
			<input type="text" name="raza" id="raza"> <br> <br>
			
			<label for="">Padre del bovino: </label>
			<select id="padre" name="padre">
				<?php foreach ($listaPadrotes as $padrote): ?>
					<option value="<?php echo $padrote->getId(); ?>"><?php echo $padrote->getNombrePadrote(); ?></option>
				<?php endforeach ?>
			</select> <br><br>
		</div>
		
		<input type="button" value="insertar" onclick="invocarMetodo()">
	</form>
</body>
</html>
<script lang="JavaScript" src="../js/jsBovino.js"></script>
<script lang="JavaScript" src="../js/jsPartos.js"></script>