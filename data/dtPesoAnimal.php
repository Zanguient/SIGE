<?php 

	include ("dtConnection.php");
	
	class DtPesoAnimal {
		
		function DtPesoAnimal(){}

		function insertarPesoAnimal($peso){
			$con = new dtConnection;
			if($con->conect() == true){
			$query2 = "SELECT pesoAnimal FROM tbpesoanimal WHERE fechaPeso IN ( SELECT MAX(fechaPeso) FROM tbpesoanimal GROUP BY fechaPeso ) and numeroBovino = '".$peso->getNumeroBovino()."'";
			$result2 = mysql_query($query2);
			$row = mysql_fetch_array($result2);
			$pesoAnterior = $row['pesoAnimal'];
			
			if($pesoAnterior== null){
				$porcentajeGanancia = 0;
			}else{
				$porcentajeGanancia = $peso->getPesoAnimal() - $pesoAnterior;
			}
			

			$query = "INSERT INTO tbpesoanimal(numeroBovino,fechaPeso,pesoAnimal,porcentajeGanancia) VALUES (
									  '".$peso->getNumeroBovino()."',
									  '".$peso->getFechaPeso()."',
									  '".$peso->getPesoAnimal()."',
									  '".$porcentajeGanancia."');";
			}
			
			
			$result = mysql_query($query);

			mysql_close();
		
			if (!$result){
				return false;
			} else {
				return true;
			}
		}
		function ObtenerPesos(){

			include('../../dominio/dPesoAnimal.php');
			$conec = new dtConnection;
   			
   			$pesos = array();

   			if($conec->conect() == true){
   				$query = "SELECT * FROM tbpesoanimal";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$peso = new dPesoAnimal();
					
					$peso->setNumeroBovino($row['numeroBovino']);					
					$peso->setFechaPeso($row['fechaPeso']);	
					$peso->setPesoAnimal($row['pesoAnimal']);
					$peso->setGananciaPeso($row['porcentajeGanancia']);
					

					array_push($pesos, $peso);
				}
					mysql_close();
					if (!$pesos){
						return false;
					} else {
						return $pesos;
					}
   			}
		}
		
			function eliminarPeso($numeroBovino,$fechaPeso){

				$con = new dtConnection;
				if($con->conect() == true){
				$query = "DELETE FROM tbpesoanimal WHERE numeroBovino = '".$numeroBovino."' and fechaPeso = '".$fechaPeso."'";

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
   		function modificarPesoAnimal($peso){
   			$con = new dtConnection;
				if($con->conect() == true){
				$query2 = "SELECT * from tbpesoanimal where numeroBovino = '".$peso->getNumeroBovino()."' and fechaPeso = '".$peso->getFechaPeso()."'";
				$result2 = mysql_query($query2);
				$row = mysql_fetch_array($result2);
				$pesoAnterior = $row['pesoAnimal'];
				$porcentajeGananciaAnterior = $row['porcentajeGanancia'];
				$porcentajeG = 0;

				if($porcentajeGananciaAnterior == 0){
					$porcentajeG = 0;
				}else{
					$pesoOriginal = $pesoAnterior-$porcentajeGananciaAnterior;
					echo "pesoOriginal: ".$pesoOriginal;
					$porcentajeG = $peso->getPesoAnimal() - $pesoOriginal;
					echo "pesoPorcentajeG: ".$porcentajeG;
				}

				$query = "UPDATE tbpesoanimal set 
				pesoAnimal = '".$peso->getPesoAnimal()."',
				porcentajeGanancia = '".$porcentajeG."' WHERE numeroBovino = '".$peso->getNumeroBovino()."' and fechaPeso= '".$peso->getFechaPeso()."'";
				}
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

?>