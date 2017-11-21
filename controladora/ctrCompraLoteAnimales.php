<?php 

	
	include("../dominio/dCompraLoteAnimales.php");
	include("../data/dtCompraLoteAnimales.php");
	class ctrCompraLoteAnimales {
		
		function ctrCompraLoteAnimales(){}

		function insertarCompraLotes(){
	      	$compraLote = new dCompraLoteAnimales;

    		$compraLote->setNumeroFactura($_POST['factura']);
    		$compraLote->setGastoReal($_POST['gastoReal']);
	      	$compraLote->setVendedor($_POST['vendedor']);
	      	$compraLote->setNumeroAnimales($_POST['cantidad']);
	      	$compraLote->setMonto($_POST['monto']);
	      	$compraLote->setNumeroGuia($_POST['guia']);
	      	$compraLote->setFecha($_POST['fecha']);
	      	$valor = $_POST['valor'];

	      	$dtCompraLote = new dtCompraLoteAnimales;
               
	      	if($dtCompraLote->insertarCompraLote($compraLote,$valor) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha ingresado la compra correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al ingresar la compra.
					</div>
	      		';
	      	}
		}
		function ActualizarCompraLoteAnimales(){

		    $compraLote = new dCompraLoteAnimales;
			$compraLote->setIdFactura($_POST['idFactura']);
			$compraLote->setNumeroFactura($_POST['nFactura']);
			$compraLote->setGastoReal($_POST['gastoReal']);
			$compraLote->setVendedor($_POST['vendedor']);
	      	$compraLote->setNumeroAnimales($_POST['cantidad']);
	      	$compraLote->setMonto($_POST['monto']);
	      	$compraLote->setNumeroGuia($_POST['guia']);
	      	$compraLote->setFecha($_POST['fecha']);
	      	$valor = $_POST['valor'];

			$dtCompraLote = new dtCompraLoteAnimales;
			
			if($dtCompraLote->modificarCompraLote($compraLote,$valor) == true){		
				echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha modificado la compra correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al modificar la compra.
					</div>
	      		';
	      	}
		}

		function eliminarCompraLote(){
            $idFactura = $_POST['idFactura'];
            $dtCompraLote = new dtCompraLoteAnimales;
           
            if($dtCompraLote->eliminarCompra($idFactura) == true){
                  echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha eliminado la compra correctamente.
                        </div>
                  ';
            } else {
                  echo 
                  '     
                        <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> Se ha producido un error al eliminar la compra.
                        </div>
                  ';
            }
      }
	}

	


	$op = $_POST['opcion'];
	$control = new ctrCompraLoteAnimales;
	if($op == 1){
	 	$control->insertarCompraLotes();
	}else if ($op == 2){
		$control->ActualizarCompraLoteAnimales();
	}
	else if ($op == 3){
         $control->eliminarCompraLote();
    }

?>