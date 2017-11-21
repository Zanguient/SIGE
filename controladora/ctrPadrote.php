
<?php 
	include("../dominio/dPadrote.php");
	include("../data/dtPadrote.php");
	class CtrPadrote{
		function CtrPadrote(){}

		function insertarPadrote(){
	      	$padrote = new Padrote;
    		$valor = $_POST['valor'];
	      	
    		if($valor == 1){

    		$padrote->setNumeroRegistro($_POST['nRegistro']);
	      	$padrote->setNombrePadrote($_POST['nPadrote']);
	      	$padrote->setRazaPadrote($_POST['raza']);
	      	$padrote->setFechaCompra($_POST['fCompra']);
	      	$padrote->setPrecioAnimal($_POST['pAnimal']);

    		}else if($valor == 2){

    		$padrote->setNumeroRegistro($_POST['nRegistro']);
	      	$padrote->setNombrePadrote($_POST['nPadrote']);
	      	$padrote->setRazaPadrote($_POST['raza']);
	      	$padrote->setPrecioPajillaSalto($_POST['pSalto']);

    		}else if($valor == 3){
    		$padrote->setNumeroRegistro($_POST['nRegistro']);
	      	$padrote->setNombrePadrote($_POST['nPadrote']);
	      	$padrote->setCasaComercial($_POST['cComercial']);
	      	$padrote->setRazaPadrote($_POST['raza']);
	      	$padrote->setNumeroCanasta($_POST['nCanasta']);
	      	$padrote->setFechaCompra($_POST['fCompra']);
	      	$padrote->setCantidadPajillas($_POST['cPajillas']);
	      	$padrote->setPrecioPajillaSalto($_POST['pPajillas']);
    		}
	      	
	      	$dtPadrote = new DtPadrote;
               
	      	if($dtPadrote->insertarP($padrote,$valor) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha ingresado el padrote correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al ingresar el padrote.
					</div>
	      		';
	      	}
		}
		function actualizarPadrote(){
			$padrote = new Padrote;
    		$valor = $_POST['valor'];
    		$id = $_POST['id'];
    		if($valor == 1){

    		$padrote->setNumeroRegistro($_POST['nRegistro']);
	      	$padrote->setNombrePadrote($_POST['nPadrote']);
	      	$padrote->setRazaPadrote($_POST['raza']);
	      	$padrote->setFechaCompra($_POST['fCompra']);
	      	$padrote->setPrecioAnimal($_POST['pAnimal']);

    		}else if($valor == 2){

    		$padrote->setNumeroRegistro($_POST['nRegistro']);
	      	$padrote->setNombrePadrote($_POST['nPadrote']);
	      	$padrote->setRazaPadrote($_POST['raza']);
	      	$padrote->setPrecioPajillaSalto($_POST['pSalto']);

    		}else if($valor == 3){
    		$padrote->setNumeroRegistro($_POST['nRegistro']);
	      	$padrote->setNombrePadrote($_POST['nPadrote']);
	      	$padrote->setCasaComercial($_POST['cComercial']);
	      	$padrote->setRazaPadrote($_POST['raza']);
	      	$padrote->setNumeroCanasta($_POST['nCanasta']);
	      	$padrote->setFechaCompra($_POST['fCompra']);
	      	$padrote->setCantidadPajillas($_POST['cPajillas']);
	      	$padrote->setPrecioPajillaSalto($_POST['pPajillas']);
    		}
			$dtPadrote = new DtPadrote;

			if($dtPadrote->actualizarPadrote($padrote,$id,$valor) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha actualizo el padrote correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al actualizar el padrote.
					</div>
	      		';
	      	}
		}

		function eliminarPadrote(){
            $id = $_POST['id'];
            $dtPadrote = new DtPadrote;
           
            if($dtPadrote->eliminarPadrote($id) == true){
                  echo 
                  '     
                        <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Perfecto!</strong> Se ha eliminado el padrote correctamente.
                        </div>
                  ';
            } else {
                  echo 
                  '     
                        <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Error!</strong> Se ha producido un error al eliminar el padrote.
                        </div>
                  ';
            }
      }
	}

	$op = $_POST['opcion'];
	$control = new CtrPadrote;
	if($op == 1){
	 	$control->insertarPadrote();
	}
	else if($op == 2){
		$control->actualizarPadrote();
	}
	else if($op == 3){
		$control->eliminarPadrote();
	}
?>