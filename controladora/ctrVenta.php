<?php


class ctrVenta{

	function ctrVenta(){}

	function insertarVenta(){
            include_once("../dominio/dVenta.php");
            include_once("../dominio/dBovino.php");
            include_once("../data/dtVenta.php");
		$venta = new dVenta;
            $bovinos = array();

      	$venta->setVentaReportada($_POST['reportada']);
      	$venta->setFecha($_POST['fecha']);
            $cantidadRegistros = $_POST['cantidadRegistros'];
      	$venta->setValorVenta($_POST['ganancia']);

            for($i = 0; $i < $cantidadRegistros; $i++){
                 $bovino = new dBovino;
                 $bovino->setNumero($_POST['arete'.$i]);
                 $bovino->setNombre($_POST['peso'.$i]);
                 $bovino->setSexo($_POST['precio'.$i]);
                 array_push($bovinos, $bovino);
            }

      	$dataVenta = new dtVenta;
           
      	if($dataVenta->insertarVenta($venta, $bovinos) == true){
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

      function insertarVentaBovino(){
            include_once("../data/dtVenta.php");

            $areteBovino = $_POST['arete'];
            $peso = $_POST['peso'];
            $precio = $_POST['precio'];

            $dataVenta = new dtVenta;
           echo $dataVenta->insertarVentaBovino($areteBovino, $peso, $precio);
            /*if($dataVenta->insertarVentaBovino($areteBovino, $peso, $precio) == true){
                  echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha ingresado el bovino correctamente.
                        </div>
                  ';
            } else {
                  echo 
                  '     
                        <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> Se ha producido un error al ingresar el bovino.
                        </div>
                  ';
            }*/
      }

      function modificarVenta(){
            include_once("../dominio/dVenta.php");
            include_once("../data/dtVenta.php");
            $venta = new dVenta();

            $venta->setIdVenta($_POST['idVenta']);
            $venta->setVentaReportada($_POST['reportada1']);
            $venta->setFecha($_POST['fecha']);
            $venta->setValorVenta($_POST['ganancia']);

            $dataVenta = new dtVenta;
         
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
            include_once("../data/dtVenta.php");
            $id = $_POST['id'];
            $dataVenta = new dtVenta;

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
	$control = new ctrVenta;
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