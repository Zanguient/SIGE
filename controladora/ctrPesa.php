<?php 
	
	include_once("../data/dtPesa.php");
	class CtrPesa{
		function CtrPesa(){}

		function insertarPesa(){
			include_once("../dominio/dPesa.php");
	      	$pesa = new dPesa();
    
    		$pesa->setNumeroBovino($_POST['numeroBovino']);
	      	$pesa->setFechaPesa($_POST['fecha']);
	      	$pesa->setPesa($_POST['peso']);
	     

	      	$dtpesa = new DtPesa();
               
	      	if($dtpesa->insertarPesa($pesa) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha ingresado el pesa correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al ingresar el pesa.
					</div>
	      		';
	      	}
		}

		function eliminarPesa(){
            $numeroBovino = $_POST['numero'];
            $fechaPesa = $_POST['fecha'];
            $dtpesa = new DtPesa();
           
            if($dtpesa->eliminarPesa($numeroBovino,$fechaPesa) == true){
                  echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha eliminado el peso correctamente.
                        </div>
                  ';
            } else {
                  echo 
                  '     
                        <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> Se ha producido un error al eliminar el pesa.
                        </div>
                  ';
            }
      	}

      	function ActualizarPesa(){
      		include_once("../dominio/dPesa.php");
      		$peso = new dPesa();
    
    		$peso->setNumeroBovino($_POST['numero']);
	      	$peso->setFechaPesa($_POST['fecha1']);
	      	$peso->setPesa($_POST['peso']);
	      	

	      	$dtpesa = new DtPesa();
               
	      	if($dtpesa->modificarPesa($peso) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha modificado la pesa correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al modificar la pesa.
					</div>
	      		';
	      	}
      	}
      	
	}

	$op = $_POST['opcion'];
	$control = new CtrPesa;
	if($op == 1){
	 	$control->insertarPesa();
	}else if($op == 2){
	 	$control->eliminarPesa();
	}
	else if($op == 3){
	 	$control->ActualizarPesa();
	}
	
	
?>