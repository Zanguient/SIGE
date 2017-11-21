<?php 

	class ctrCompraProductos {
		
		function ctrCompraProductos(){}

		function insertarCompraProductos(){
			include_once("../dominio/dCompraProducto.php");
			include_once("../data/dtCompraProductos.php");

	      	$compraProducto = new dCompraProducto();
	      	$numeroFactura = $_POST['numeroFactura'];
	      	$gastoReal = $_POST['gastoReal'];
	      	$gastoTributable = $_POST['gastoTributable'];

    		$compraProducto->setNumeroFactura($numeroFactura);
    		$compraProducto->setGastoReal($gastoReal);
	      	$compraProducto->setGastoTributable($gastoTributable);
	      	$compraProducto->setIdProvedor($_POST['provedor']);
	      	$compraProducto->setIdTipoGasto($_POST['tGasto']);
	      	$compraProducto->setFechaCompra($_POST['fCompra']);
	      	$compraProducto->setMonto($_POST['monto']);
	      	
	      	

	      	$dtCompraProducto = new dtCompraProductos();
               
	      	if($dtCompraProducto->insertarCompraProducto($compraProducto) == true){
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

		function eliminarCompraProductos(){
			include_once("../data/dtCompraProductos.php");
			 $id = $_POST['id'];
            $dtCompraProducto = new dtCompraProductos();
           
            if($dtCompraProducto->eliminarCompraProducto($id) == true){
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

		function actualizarCompraProductos(){
			include_once("../dominio/dCompraProducto.php");
			include_once("../data/dtCompraProductos.php");

	      	$compraProducto = new dCompraProducto();
	      	$numeroFactura = $_POST['numeroFactura'];
	      	$gastoReal = $_POST['gastoReal'];
	      	$gastoTributable = $_POST['gastoTributable'];
	      	$idGasto = $_POST['idGasto'];

	      	$compraProducto->setIdGasto($idGasto);
    		$compraProducto->setNumeroFactura($numeroFactura);
    		$compraProducto->setGastoReal($gastoReal);
	      	$compraProducto->setGastoTributable($gastoTributable);
	      	$compraProducto->setIdProvedor($_POST['provedor']);
	      	$compraProducto->setIdTipoGasto($_POST['tGasto']);
	      	$compraProducto->setFechaCompra($_POST['fCompra']);
	      	$compraProducto->setMonto($_POST['monto']);
	      	
	      	

	      	$dtCompraProducto = new dtCompraProductos();
               
	      	if($dtCompraProducto->ActualizarCompras($compraProducto) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha Actualizado la compra correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al actualizar la compra.
					</div>
	      		';
	      	}
		}
		
	}

	


	$op = $_POST['opcion'];
	$control = new ctrCompraProductos;
	if($op == 1){
	 	$control->insertarCompraProductos();
	}else if($op == 2){
		$control->eliminarCompraProductos();
	}
	else if($op == 3){
		$control->actualizarCompraProductos();
	}

?>