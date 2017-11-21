<?php


class ctrBovino{

	function ctrBovino(){}

	function insertarBovino(){
            include_once("../dominio/dBovino.php");
            include_once("../data/dtBovino.php");
		$bovino = new dBovino;

		$finca = $_POST['fincas'];
            $bovino->setNumero($_POST['arete']);
      	$bovino->setNombre($_POST['nombre']);
      	$bovino->setFechaNacimiento($_POST['fecha']);
      	$bovino->setSexo($_POST['sexo']);
      	$bovino->setRaza($_POST['raza']);
      	$bovino->setEdad($_POST['edad']);
      	$bovino->setNumeroMadre($_POST['madre']);
            $bovino->setNumeroPadre($_POST['padre']);

      	$dtbovino = new dtBovino;
           
      	if($dtbovino->insertarBovino($bovino, $finca) == true){
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
      	}
	}

      function insertarPartoBovino(){
            include_once("../dominio/dParto.php");
            include_once("../dominio/dBovino.php");
            include_once("../data/dtBovino.php");
                  $parto = new dParto();
    
                  $parto->setNumeroBovino($_POST['vacas']);
                  $parto->setFechaParto($_POST['fecha']);
                  $parto->setGeneroBecerro($_POST['genero']);
                  $parto->setDescripcionParto($_POST['descripcion']);

                  $bovino = new dBovino;

                  $finca = $_POST['fincas'];
                  $bovino->setNumero($_POST['arete']);
                  $bovino->setNombre($_POST['nombre']);
                  $bovino->setFechaNacimiento($_POST['fecha']);
                  $bovino->setSexo($_POST['genero']);
                  $bovino->setRaza($_POST['raza']);
                  $bovino->setEdad(0);
                  $bovino->setNumeroMadre($_POST['vacas']);
                  $bovino->setNumeroPadre($_POST['padre']);

                  $dtbovino = new dtBovino;
               
                  if($dtbovino->insertarPartoBovino($parto, $bovino, $finca) == true){
                        echo 
                        '     
                              <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Perfecto!</strong> Se han ingresado los datos correctamente.
                              </div>
                        ';
                  } else {
                        echo 
                        '     
                              <div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Error!</strong> Se ha producido un error al ingresar los datos.
                              </div>
                        ';
                  }
            }

            function insertarRIndividualBovino(){
                  include_once("../dominio/dBovino.php");
                  include_once("../data/dtBovino.php");
                  include_once("../dominio/dRegistroIndividual.php");
                  include_once("../dominio/dCompraLoteAnimales.php");
                  $bovino = new dBovino;

                  $bovino->setCodigo($_POST['fincas']);
                  $bovino->setNumero($_POST['arete']);
                  $bovino->setNombre($_POST['nombre']);
                  $bovino->setFechaNacimiento($_POST['fecha']);
                  $bovino->setSexo($_POST['genero']);
                  $bovino->setRaza($_POST['raza']);
                  $bovino->setEdad(0);
                  $bovino->setNumeroPadre($_POST['padre']);
                  $bovino->setNumeroMadre($_POST['madre']);
                  $registro = new dRegistroIndividual;

                  $valor = $_POST['valor'];
                  $registro->setNumSubastaFinca($_POST['numSubastaFinca']);
                  $registro->setDescripcion($_POST['descripcion']);
                  $registro->setPeso($_POST['peso']);
                  $registro->setPrecioKilo($_POST['precioKilo']);
                  $registro->setPrecioTotal($_POST['precioTotal']);

                  $compraLote = new dCompraLoteAnimales();

                   $compraLote->setGastoReal(0);
                   $compraLote->setNumeroFactura(null);
                   $compraLote->setVendedor($_POST['vendedor']);
                   $compraLote->setNumeroAnimales(1);
                   $compraLote->setMonto($_POST['precioTotal']);
                   $fecha =  date("Y-m-d"); 
                   $compraLote->setFecha($fecha);

                   $dtbovino = new dtBovino;
               
                  if($dtbovino->insertarRIndividualBovino($bovino, $registro, $compraLote) == true){
                        echo 
                        '     
                              <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Perfecto!</strong> Se han ingresado los datos correctamente.
                              </div>
                        ';
                  } else {
                        echo 
                        '     
                              <div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Error!</strong> Se ha producido un error al ingresar los datos.
                              </div>
                        ';
                  }

            }

      
}

$op = $_POST['opcion'];
	$control = new ctrBovino;
	if($op == 1){
	 	$control->insertarBovino();
	}
      else if($op == 2){
            $control->insertarPartoBovino();
      }
       else if($op == 3){
            $control->insertarRIndividualBovino();
      }
?>