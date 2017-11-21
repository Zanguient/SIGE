<?php 

class ctrVentaProducto{

	public function ctrVentaProducto(){}

	function insertarVenta(){
		include("../dominio/dVentaProducto.php");
		include("../data/dtVentaProducto.php");
		$venta = new dVentaProducto;

		$venta->setProducto($_POST['producto']);
      	$venta->setNumeroRecibo($_POST['recibo']);
      	$venta->setFechaVenta($_POST['fecha']);
      	$venta->setCantidad($_POST['txtCantidad']);
      	$venta->setPrecioUnitario($_POST['txtPrecio']);
      	$venta->setTotal($_POST['txtTotal']);

      	$dataVenta = new dtVentaProducto;
           
      	if($dataVenta->insertarVentaProducto($venta) == true){
      		echo 
      		'	
      			<div class="alert alert-success">
      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  	<strong>Perfecto!</strong> Se ha ingresado la venta correctamente.
				</div>
      		';
      	} else {
      		echo 
      		'	
      			<div class="alert alert-danger">
      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  	<strong>Error!</strong> Se ha producido un error al ingresar la venta.
				</div>
      		';
      	}
	}

      function modificarVenta(){
            include("../dominio/dVentaProducto.php");
            include("../data/dtVentaProducto.php");
            $venta = new dVentaProducto;

            $venta->setProducto($_POST['producto']);
            $venta->setNumeroRecibo($_POST['recibo']);
            $venta->setFechaVenta($_POST['fecha']);
            $venta->setCantidad($_POST['txtCantidad']);
            $venta->setPrecioUnitario($_POST['txtPrecio']);
            $venta->setTotal($_POST['txtTotal']);
            $venta->setIdVenta($_POST['idVenta']);

            $dataVenta = new dtVentaProducto;
         
            if($dataVenta->actualizarVenta($venta) == true){
                  echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha modificado la venta correctamente.
                        </div>
                  ';
            } else {
                  echo 
                  '     
                        <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> Se ha producido un error al modificar la venta.
                        </div>
                  ';
            }
      }

      function eliminarVenta(){
            include_once("../data/dtVentaProducto.php");
            $id = $_POST['id'];
            $dataVenta = new dtVentaProducto;

            if($dataVenta->eliminarVenta($id) == true){
                  echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha eliminado la venta correctamente.
                        </div>
                  ';
            }else{
                  echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha producido un error al eliminar la venta.
                        </div>
                  ';
            }
      }
}

$op = $_POST['opcion'];
	$control = new ctrVentaProducto;
	if($op == 1){
	 	$control->insertarVenta();
	}
      else if($op == 2){
            $control->modificarVenta();
      }
      else if($op == 3){
            $control->eliminarVenta();
      }
      else if($op == 4){
            $control->insertarVentaBovino();
      }
 ?>