<?php

include("../dominio/dFinca.php");
include("../data/dtRegistroFinca.php");

class ctrInsertarFinca{

	function ctrInsertarFinca(){}

	function insertarFinca(){
		$finca = new dFinca;

		$finca->setCodigo($_POST['codFinca']);
      	$finca->setNombre($_POST['nomFinca']);
      	$finca->setExtension($_POST['tamFinca']);
      	$finca->setCantidadApartos($_POST['canApartos']);
      	$finca->setAnimalesAparto($_POST['canAnimales']);
      	$finca->setDiasPastoreo($_POST['canDias']);
            $finca->setTipoPasto($_POST['tipoPasto']);
      	$finca->setDireccion($_POST['dirFinca']);

      	$dtregisFinca = new dtRegistroFinca;
           
      	if($dtregisFinca->insertarFinca($finca) == true){
      		echo 
      		'	
      			<div class="alert alert-success">
      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  	<strong>Perfecto!</strong> Se ha ingresado la finca correctamente.
				</div>
      		';
      	} else {
      		echo 
      		'	
      			<div class="alert alert-danger">
      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  	<strong>Error!</strong> Se ha producido un error al ingresar la finca.
				</div>
      		';
      	}
	}

      function eliminarFinca(){
            $finca = $_POST['codigoFinca'];
            $dtregisFinca = new dtRegistroFinca;
           
            if($dtregisFinca->eliminarFinca($finca) == true){
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

      function actualizarFinca(){
            $finca = new dFinca;

            $finca->setCodigo($_POST['codFinca']);
            $finca->setNombre($_POST['nomFinca']);
            $finca->setExtension($_POST['tamFinca']);
            $finca->setCantidadApartos($_POST['canApartos']);
            $finca->setAnimalesAparto($_POST['canAnimales']);
            $finca->setDiasPastoreo($_POST['canDias']);
            $finca->setTipoPasto($_POST['tipoPasto']);
            $finca->setDireccion($_POST['dirFinca']);

            $dtregisFinca = new dtRegistroFinca;
           
            if($dtregisFinca->actualizarFinca($finca) == true){
                  echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha actualizado la finca correctamente.
                        </div>
                  ';
            } else {
                  echo 
                  '     
                        <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> Se ha producido un error al actualizado la finca.
                        </div>
                  ';
            }
      }
}

$op = $_POST['opcion'];
	$control = new ctrInsertarFinca;
	if($op == 1){
	 	$control->insertarFinca();
	}else if($op == 2){
            $control->actualizarFinca();
      }
      else if ($op == 3){
            $control->eliminarFinca();
      }
?>