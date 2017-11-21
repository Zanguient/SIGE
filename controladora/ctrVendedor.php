<?php

include("../dominio/dVendedor.php");
include("../data/dtVendedor.php");

class ctrVendedor{

	function ctrVendedor(){}

	function insertarVendedor(){
		$vendedor = new dVendedor;

		$vendedor->setNombre($_POST['t_nombre']);
            $vendedor->setCodigo($_POST['t_codigo']);
      	$vendedor->setTelefono($_POST['t_telefono']);
      	$vendedor->setDireccion($_POST['t_direccion']);

      	$dtregisVendedor = new dtVendedor;
           
      	if($dtregisVendedor->insertarVendedor($vendedor) == true){
      		echo 
      		'	
      			<div class="alert alert-success">
      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  	<strong>Perfecto!</strong> Se ha ingresado el vendedor correctamente.
				</div>
      		';
      	} else {
      		echo 
      		'	
      			<div class="alert alert-danger">
      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  	<strong>Error!</strong> Se ha producido un error al ingresar el vendedor.
				</div>
      		';
      	}
	}

      function agregarCuenta(){
            $vendedor = new dVendedor;
            $vendedor->setCodigo($_POST['t_codigo']);
            $vendedor->setCuentaBancaria($_POST['t_cuenta']);

            $dataVendedor = new dtVendedor;
            if($dataVendedor->insertarCuenta($vendedor) == true){
                 echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha ingresado el vendedor correctamente.
                        </div>
                  '; 
            }
            else{
                  echo 
                  '     
                        <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> Se ha producido un error al ingresar el vendedor.
                        </div>
                  ';
            }
      }

      function eliminarVendedor(){
            $codigoVendedor = $_POST['codigoVendedor'];
            $dataVendedor = new dtVendedor;
           
            if($dataVendedor->eliminarVendedor($codigoVendedor) == true){
                  echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha eliminado la finca correctamente.
                        </div>
                  ';
            } else {
                  echo 
                  '     
                        <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> Se ha producido un error al eliminar la finca.
                        </div>
                  ';
            }
      }

      function eliminarCuenta(){
            $cuenta = $_POST['cuenta'];
            $dataVendedor = new dtVendedor;
           
            if($dataVendedor->eliminarCuenta($cuenta) == true){
                  echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha eliminado la finca correctamente.
                        </div>
                  ';
            } else {
                  echo 
                  '     
                        <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> Se ha producido un error al eliminar la finca.
                        </div>
                  ';
            }
      }

      function actualizarCuenta(){
            $vendedor = new dVendedor;
            $cuentaOriginal = $_POST['cuentaOriginal'];
            //$vendedor->setCodigo($_POST['cuentaOriginal']);
            $vendedor->setCuentaBancaria($_POST['t_cuenta']);

            $dataVendedor = new dtVendedor;
            if($dataVendedor->actualizarCuenta($vendedor, $cuentaOriginal) == true){
                 echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha actualizado la cuenta correctamente.
                        </div>
                  '; 
            }
            else{
                  echo 
                  '     
                        <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> Se ha producido un error al actualizar la cuenta.
                        </div>
                  ';
            }
      }

      function actualizarVendedor(){
            $vendedor = new dVendedor;

            $vendedor->setNombre($_POST['t_nombre']);
            $vendedor->setCodigo($_POST['t_codigo']);
            $vendedor->setTelefono($_POST['t_telefono']);
            $vendedor->setDireccion($_POST['t_direccion']);

            $dtregisVendedor = new dtVendedor;
           
            if($dtregisVendedor->actualizarVendedor($vendedor) == true){
                  echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha actualizado el vendedor correctamente.
                        </div>
                  ';
            } else {
                  echo 
                  '     
                        <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> Se ha producido un error al actualizar el vendedor.
                        </div>
                  ';
            }
      }

      
}

$op = $_POST['opcion'];
	$control = new ctrVendedor;
	if($op == 1){
	 	$control->insertarVendedor();
	}else if($op == 2){
            $control->actualizarVendedor();
      }
      else if($op == 3){
            $control->agregarCuenta();
      }
      else if($op == 4){
            $control->actualizarCuenta();
      }
      else if($op == 5){
            $control->eliminarVendedor();
      }
      else if($op == 6){
            $control->eliminarCuenta();
      }
?>