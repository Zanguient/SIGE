<?php 
	include("../dominio/dParto.php");
	include("../data/dtParto.php");
	class CtrPartos{
		function CtrPartos(){}

		function insertarParto(){
	      	$parto = new dParto();
    
    		$parto->setNumeroBovino($_POST['vacas']);
	      	$parto->setFechaParto($_POST['fecha']);
	      	$genero = $_POST['genero'];
	      	$parto->setGeneroBecerro($genero);
	      	$parto->setDescripcionParto($_POST['descripcion']);

	      	$dtparto = new DtParto();
               
	      	if($dtparto->insertarParto($parto) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha ingresado el parto correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al ingresar el parto.
					</div>
	      		';
	      	}
		}
		
		function actualizarParto(){
	      	$parto = new dParto();
    
    		$parto->setIdParto($_POST['id']);
	      	$parto->setFechaParto($_POST['fecha']);
	      	$genero = $_POST['genero1'];
	      	$parto->setGeneroBecerro($genero);
	      	$parto->setDescripcionParto($_POST['descripcion']);

	      	$dtparto = new DtParto();
               
	      	if($dtparto->modificarParto($parto) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha modificado el parto correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al modificar el parto.
					</div>
	      		';
	      	}
		}

		function eliminarPartos(){
            $id = $_POST['id'];
            $dtparto = new DtParto();
           
            if($dtparto->eliminarParto($id) == true){
                  echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha eliminado el parto correctamente.
                        </div>
                  ';
            } else {
                  echo 
                  '     
                        <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> Se ha producido un error al eliminar el parto.
                        </div>
                  ';
            }
      	}
	}

	$op = $_POST['opcion'];
	$control = new CtrPartos;
	if($op == 1){
	 	$control->insertarParto();
	}
	else if($op == 2){
	 	$control->actualizarParto();
	}
	else if($op == 3){
	 	$control->eliminarPartos();
	}
	
?>