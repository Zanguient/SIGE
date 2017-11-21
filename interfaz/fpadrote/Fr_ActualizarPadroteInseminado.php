<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
		 include("../controladora/CtrListaPadrotes.php");
		 		$id = $_GET["id"];
			    $ctrPadrote = new CtrListaPadrotes;
				$lista = $ctrPadrote->obtenerPadrote($id);

				foreach ($lista as $padrote) {

					$id = $padrote->getId();
					$nRegistro = $padrote->getNumeroRegistro();
					$nombreP = $padrote->getNombrePadrote();
					$cComercial = $padrote->getCasaComercial();
					$raza = $padrote->getRazaPadrote();
					$nCanasta = $padrote->getNumeroCanasta();
					$fechaC = $padrote->getFechaCompra();
					$cPajillas = $padrote->getCantidadPajillas();
					$pPajilla = $padrote->getPrecioPajillaSalto();
					$pAnimal = $padrote->getPrecioAnimal();
					$identificador = $padrote->getIdentificador();
				}
		?>
		<form id="actualizarPadrote"  method="Post" role="form">
			
			<h1> Actualizar Padrote Inseminado</h1>
			<label for="registroPadrote">Numero de Registro</label><br>
			<input type="text" id="nRegistro" name="nRegistro" placeholder="Dato: <?php echo $nRegistro; ?>" value="<?php echo $nRegistro; ?>"><br><br>
			<label for="nombrePadrote">Nombre Padrote</label><br>
			<input type="text" id="nPadrote" name="nPadrote" placeholder="Dato: <?php echo $nombreP; ?>" value="<?php echo $nombreP; ?>"><br><br>
			<label for="CasaComercial">Casa Comercial</label><br>
		    <input type="text" id="cComercial" name="cComercial" placeholder="Dato: <?php echo $cComercial; ?>" value="<?php echo $cComercial; ?>"><br><br>
			<label for="razaPadrote">Raza Padrote</label><br>
		    <input type="text" id="raza" name="raza" placeholder="Dato: <?php echo $raza; ?>" value="<?php echo $raza; ?>"><br><br>
		    <label for="numeroCanasta">Numero canasta</label><br>
		    <input type="number" id="nCanasta" name="nCanasta" placeholder="Dato: <?php echo $nCanasta; ?>" value="<?php echo $nCanasta;?>"><br><br>
		    <label for="cantidadPajillas">Cantidad de pajillas</label><br>
		    <input type="number" id="cPajillas" name="cPajillas" placeholder="Dato: <?php echo $cPajillas; ?>" value="<?php echo $cPajillas;?>"><br><br>
		    <label for="fechaCompra">Fecha Compra</label><br>
		    <input type="date" id="fCompra" name="fCompra" placeholder="Dato: <?php echo $fechaC; ?>" value="<?php echo $fechaC; ?>"><br><br>
			<label for="precioSalto">Precio Salto/Pajilla</label><br>
		    <input type="number" id="pPajillas" name="pPajillas" placeholder="Dato: <?php echo $pPajilla; ?>" value="<?php echo $pPajilla; ?>"><br><br>
			
			<input type="button" value="Actualizar" onclick="actualizarPadrote('<?php echo $identificador?>','<?php echo $id ?>')">
			
		</form>
	</body>
</html>
<script lang="JavaScript" src="../js/jsPadrote.js"></script>