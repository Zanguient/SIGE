<?php 

	class ctrInsertarRegistroIndivicual{

		function ctrInsertarRegistroIndivicual(){}

		function insertarRegistro(){
			include_once("../dominio/dRegistroIndividual.php");
			include_once("../dominio/dCompraLoteAnimales.php");
			include("../data/dtRegistroIndividual.php");
			$registro = new dRegistroIndividual;
			$valor = $_POST['valor'];
			$registro->setNumSubastaFinca($_POST['numSubastaFinca']);
	      	$registro->setDescripcion($_POST['descripcion']);
	      	$registro->setPeso($_POST['peso']);
	      	$registro->setPrecioKilo($_POST['precioKilo']);
	      	$registro->setPrecioTotal($_POST['precioTotal']);
	      	
	      	if($valor == 1){
	      	 $compraLote = new dCompraLoteAnimales();
	      	 $compraLote->setGastoReal(0);
	      	 $compraLote->setNumeroFactura(null);
	      	 $compraLote->setVendedor($_POST['vendedor']);
	      	 $compraLote->setNumeroAnimales(1);
	      	 $compraLote->setMonto($_POST['precioTotal']);
	      	 $fecha =  date("Y-m-d"); 
	      	 $compraLote->setFecha($fecha);
	      	}else{
	      	 $factura = $_POST['idFactura'];
	      	}

	      	$dtregistro = new dtRegistroIndividual;

	        if($valor == 1){
	        	if($dtregistro->insertarRegistroIndividual($registro,$compraLote,$valor) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha ingresado el registro individual de un animal de la factura correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al ingresar el registro individual de un animal de la factura.
					</div>
	      		';
	      	}
	        }else{
	        	if($dtregistro->insertarRegistroIndividual($registro,$factura,$valor) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha ingresado el registro individual de un animal de la factura correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al ingresar el registro individual de un animal de la factura.
					</div>
	      		';
	      	}
	        }
	      	
		}

	}

	$op = $_POST['opcion'];
	$control = new ctrInsertarRegistroIndivicual;
	if($op == 1){
	 	$control->insertarRegistro();
	}

 ?>