<?php 
	
	include_once("../data/dtPesoAnimal.php");
	class CtrPesoAnimal{
		function CtrPesoAnimal(){}

		function insertarPesoAnimal(){
			include_once("../dominio/dPesoAnimal.php");
	      	$peso = new dPesoAnimal();
    
    		$peso->setNumeroBovino($_POST['numeroBovino']);
	      	$peso->setFechaPeso($_POST['fecha']);
	      	$peso->setPesoAnimal($_POST['peso']);
	     	

	      	$dtpeso = new DtPesoAnimal();
               
	      	if($dtpeso->insertarPesoAnimal($peso) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha ingresado el peso correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al ingresar el peso.
					</div>
	      		';
	      	}
		}

		function eliminarPeso(){
            $numeroBovino = $_POST['numero'];
            $fechaPesa = $_POST['fecha'];
            $dtpeso = new DtPesoAnimal();
           
            if($dtpeso->eliminarPeso($numeroBovino,$fechaPesa) == true){
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
                              <strong>Error!</strong> Se ha producido un error al eliminar el peso.
                        </div>
                  ';
            }
      	}

      	function ActualizarPesoAnimal(){
      		include_once("../dominio/dPesoAnimal.php");
      		$peso = new dPesoAnimal();
    
    		$peso->setNumeroBovino($_POST['numero']);
	      	$peso->setFechaPeso($_POST['fecha1']);
	      	$peso->setPesoAnimal($_POST['peso']);
	      	$peso->setGananciaPeso($_POST['ganancia']);

	      	$dtpeso = new DtPesoAnimal();
               
	      	if($dtpeso->modificarPesoAnimal($peso) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha modificado el peso correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al modificar el peso.
					</div>
	      		';
	      	}
      	}
		
		
	}

	$op = $_POST['opcion'];
	$control = new CtrPesoAnimal();
	if($op == 1){
	 	$control->insertarPesoAnimal();
	}else if($op == 2){
	 	$control->eliminarPeso();
	}
	else if($op == 3){
	 	$control->ActualizarPesoAnimal();
	}
	
	
?>