<?php 

	include ("dtConnection.php");
	
	class DtParto {
		
		function DtParto(){}

		function insertarParto($parto){
			$con = new dtConnection;
			if($con->conect() == true){
				$query2="SELECT max(idParto) AS id FROM tbpartos;";
                $result2 = mysql_query($query2);
                $row = mysql_fetch_array($result2);
                $id= $row['id'] + 1;
			$query = "INSERT INTO tbpartos(idParto,numerobovino,fechaParto,generoBecerro,descripcionParto) VALUES (
									  '".$id."',
									  '".$parto->getNumeroBovino()."',
									  '".$parto->getFechaParto()."',
									  '".$parto->getGeneroBecerro()."',
									  '".$parto->getDescripcionParto()."');";
			} 
			$result = mysql_query($query);

			mysql_close();

			if (!$result){
				return false;
			} else {
				return true;
			}
		}

		function modificarParto($parto){
			$con = new dtConnection;
			if($con->conect() == true){
				$query = "UPDATE tbpartos set 
				fechaParto = '".$parto->getFechaParto()."',
				generoBecerro = '".$parto->getGeneroBecerro()."',
				descripcionParto =  '".$parto->getDescripcionParto()."' WHERE idParto = ".$parto->getIdParto()."";

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

		function obtenerPartos($numerobovino){
			include_once("../../dominio/dParto.php");
   			$conec = new dtConnection;
   			$listaParto = array();

   			if($conec->conect() == true){
   				$query = "SELECT * FROM tbpartos WHERE numerobovino = $numerobovino";
   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$parto = new dParto;
					
					$parto->setIdParto($row['idParto']);	
					$parto->setNumeroBovino($row['numerobovino']);				
					$parto->setFechaParto($row['fechaParto']);	
					$parto->setGeneroBecerro($row['generoBecerro']);
					$parto->setDescripcionParto($row['descripcionParto']);
					array_push($listaParto, $parto);
				}
					mysql_close();
					if (!$listaParto){
						return false;
					} else {
						return $listaParto;
					}
   			}
   		}

   		function obtenerParto($idParto){
   			include_once("../../dominio/dParto.php");
   			$conec = new dtConnection;
   			$listaParto = array();

   			if($conec->conect() == true){
   				$query = "SELECT * FROM tbpartos WHERE idParto = $idParto";
   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$parto = new dParto;
					
					$parto->setIdParto($row['idParto']);	
					$parto->setNumeroBovino($row['numerobovino']);				
					$parto->setFechaParto($row['fechaParto']);	
					$parto->setGeneroBecerro($row['generoBecerro']);
					$parto->setDescripcionParto($row['descripcionParto']);
					array_push($listaParto, $parto);
				}
					mysql_close();
					if (!$listaParto){
						return false;
					} else {
						return $listaParto;
					}
   			}
   		}

   		function eliminarParto($id){

			$con = new dtConnection;
				if($con->conect() == true){
				$query = "DELETE FROM tbpartos WHERE idParto = $id";

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