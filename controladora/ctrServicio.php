<?php 
	include("../dominio/dServicio.php");
	include("../data/dtServicio.php");

	class ctrServicio{
		function ctrServicio(){}

		function insertarServicio(){
	      	$servicio = new dServicio();
    
    		$servicio->setVaca($_POST['vaca']);
	      	$servicio->setPadrote($_POST['padre']);
	      	$servicio->setFecha($_POST['fecha']);
	      	$servicio->setInseminador($_POST['inseminador']);

	      	$dtservicio = new dtServicio();
               
	      	if($dtservicio->insertarServicio($servicio) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha ingresado el servicio correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al ingresar el servicio.
					</div>
	      		';
	      	}
		}
		
		function actualizarServicio(){
	      	$servicio = new dServicio();
    
    		$servicio->setId($_POST['idServicio']);
	      	$servicio->setPadrote($_POST['padre']);
	      	$servicio->setFecha($_POST['fecha']);
	      	$servicio->setInseminador($_POST['inseminador']);
	      	$servicio->setCantidadRepeticiones($_POST['repeticiones']);

	      	$dtservicio = new dtServicio();
               
	      	if($dtservicio->actualizarServicio($servicio) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha modificado el servicio correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al modificar el servicio.
					</div>
	      		';
	      	}
		}

		function eliminarServicio(){
            $id = $_POST['id'];
            $dataServicio = new dtServicio();
           
            if($dataServicio->eliminarServicio($id) == true){
                  echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha eliminado el servicio correctamente.
                        </div>
                  ';
            } else {
                  echo 
                  '     
                        <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> Se ha producido un error al eliminar el servicio.
                        </div>
                  ';
            }
      	}
	}

	$op = $_POST['opcion'];
	$control = new ctrServicio;
	if($op == 1){
	 	$control->insertarServicio();
	}
	else if($op == 2){
	 	$control->eliminarServicio();
	}
	else if($op == 3){
	 	$control->actualizarServicio();
	}
	
?>