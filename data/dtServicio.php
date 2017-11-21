<?php

include_once("dtConnection.php");
include("../../dominio/dServicio.php");

class  dtServicio{

	function dtServicio(){}

	public function insertarServicio($servicio){
		$con = new dtConnection;
			if($con->conect() == true){
				$query2="SELECT max(idServicio) AS id FROM tbservicio;";
                $result2 = mysql_query($query2);
                $row = mysql_fetch_array($result2);
                $id= $row['id'] + 1;
				$query = "INSERT INTO tbservicio(idServicio,idBovino,fechaServicio,padrote,inseminador,indiceRepitencia) VALUES (
				'".$id."',
				'".$servicio->getVaca()."',
				'".$servicio->getFecha()."',
				'".$servicio->getPadrote()."',
				'".$servicio->getInseminador()."',
				0);";

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

	public function eliminarServicio($servicio){
			$con = new dtConnection;
			if($con->conect() == true){
			$query = "DELETE FROM tbservicio WHERE idServicio = $servicio";

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

	function obtenerServicios($cedula){
   			$conec = new dtConnection;
   			
   			$listaServicio = array();

   			if($conec->conect() == true){
   				$query = "SELECT DISTINCT s.idServicio, s.fechaServicio, s.inseminador, s.indiceRepitencia, b.nombreBovino, pa.nombrePadrote, pa.id FROM tbservicio s INNER JOIN tbBovino b on s.idBovino = b.numeroBovino INNER JOIN tbpadrote pa on s.padrote = pa.id INNER JOIN tbfinca f on b.codigofinca = f.codigofinca INNER JOIN tbpropietario p on f.cedulapropietario = p.cedulapropietario WHERE p.cedulapropietario = $cedula";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$servicio = new dServicio;
					
					$servicio->setId($row['idServicio']);					
					$servicio->setVaca($row['nombreBovino']);	
					$servicio->setPadrote($row['nombrePadrote']);
					$servicio->setFecha($row['fechaServicio']);
					$servicio->setCantidadRepeticiones($row['indiceRepitencia']);
					$servicio->setInseminador($row['inseminador']);
					$servicio->setIdPadrote($row['id']);

					array_push($listaServicio, $servicio);
				}
					mysql_close();
					if (!$listaServicio){
						return false;
					} else {
						return $listaServicio;
					}
   			}
   		}


	public function actualizarServicio($servicio){
		$con = new dtConnection;
		if($con->conect() == true){
		$query = "UPDATE tbservicio set 
		fechaServicio = '".$servicio->getFecha()."',
		padrote = '".$servicio->getPadrote()."',
		inseminador =  '".$servicio->getInseminador()."',
		indiceRepitencia = '".$servicio->getCantidadRepeticiones()."' WHERE idServicio = ".$servicio->getId()."";

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