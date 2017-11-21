<?php

include_once("dtConnection.php");
include("../../dominio/dFinca.php");

class  dtRegistroFinca{

	function dtRegistroFinca(){}

	public function insertarFinca($finca){
		$con = new dtConnection;
			if($con->conect() == true){
			$propietario = 1;
			$query = "INSERT INTO tbfinca(codigofinca,cedulapropietario,nombrefinca,extensionfinca,direccion,apartos,animalesAparto,diasPastoreo,tipoPasto) VALUES (
			'".$finca->getCodigo()."',
			'".$propietario."',
			'".$finca->getNombre()."',
			'".$finca->getExtension()."',
			'".$finca->getDireccion()."',
			'".$finca->getCantidadApartos()."',
			'".$finca->getAnimalesAparto()."',
			'".$finca->getDiasPastoreo()."',
			'".$finca->getTipoPasto()."');";

			$result = mysql_query($query);

			mysql_close();
			if(!$result){
				return false;
			}
			else{
				return true;
			}
		}
	}

	public function eliminarFinca($finca){
		$con = new dtConnection;
			if($con->conect() == true){
			$query = "DELETE FROM tbfinca WHERE codigofinca = $finca";

			$result = mysql_query($query);

			mysql_close();
			if(!$result){
				return false;
			}
			else{
				return true;
			}
		}
	}

	function ObtenerFincas($cedula){
   			$conec = new dtConnection;
   			
   			$listaFinca = array();

   			if($conec->conect() == true){
   				$query = "SELECT * FROM tbfinca WHERE cedulapropietario = $cedula";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$finca = new dFinca;
					
					$finca->setCodigo($row['codigofinca']);					
					$finca->setNombre($row['nombrefinca']);	
					$finca->setExtension($row['extensionfinca']);
					$finca->setCantidadApartos($row['apartos']);
					$finca->setAnimalesAparto($row['animalesAparto']);
					$finca->setDiasPastoreo($row['diasPastoreo']);
					$finca->setTipoPasto($row['tipoPasto']);
					$finca->setDireccion($row['direccion']);

					array_push($listaFinca, $finca);
				}
					mysql_close();
					if (!$listaFinca){
						return false;
					} else {
						return $listaFinca;
					}
   			}
   		}

   		function ObtenerFinca($codigo){
   			$conec = new dtConnection;
   			
   			$listaFinca = array();

   			if($conec->conect() == true){
   				$query = "SELECT * FROM tbfinca WHERE codigofinca = $codigo";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$finca = new dFinca;
					
					$finca->setCodigo($row['codigofinca']);					
					$finca->setNombre($row['nombrefinca']);	
					$finca->setExtension($row['extensionfinca']);
					$finca->setCantidadApartos($row['apartos']);
					$finca->setAnimalesAparto($row['animalesAparto']);
					$finca->setDiasPastoreo($row['diasPastoreo']);
					$finca->setTipoPasto($row['tipoPasto']);
					$finca->setDireccion($row['direccion']);

					array_push($listaFinca, $finca);
				}
					mysql_close();
					if (!$listaFinca){
						return false;
					} else {
						return $listaFinca;
					}
   			}
   		}

	public function actualizarFinca($finca){
		$con = new dtConnection;
		if($con->conect() == true){
		$propietario = 1;
		$query = "UPDATE tbfinca set 
		nombrefinca = '".$finca->getNombre()."',
		extensionfinca = '".$finca->getExtension()."',
		apartos =  '".$finca->getCantidadApartos()."',
		animalesAparto = '".$finca->getAnimalesAparto()."',
		diasPastoreo = '".$finca->getDiasPastoreo()."',
		tipoPasto = '".$finca->getTipoPasto()."',
		direccion = '".$finca->getDireccion()."' WHERE codigofinca = ".$finca->getCodigo()."";

		$result = mysql_query($query);

		mysql_close();
		if(!$result){
			return false;
		}
		else{
			return true;
		}
		}
	}
}

?>