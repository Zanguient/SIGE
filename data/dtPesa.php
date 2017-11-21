<?php 

	include ("dtConnection.php");
	
	class DtPesa {
		
		function DtPesa(){}

		function insertarPesa($peso){
			$con = new dtConnection;
			if($con->conect() == true){
				echo "entro al if la conexion esta hecha";
			$query = "INSERT INTO tbpesaleche (numeroBovino,fechaPesa,pesa) VALUES (
									  '".$peso->getNumeroBovino()."',
									  '".$peso->getFechaPesa()."',
									  '".$peso->getPesa()."');";
			}
			
			
			$result = mysql_query($query);

			mysql_close();
			if (!$result){
				return false;
			} else {
				return true;
			}
		}
		function ObtenerPesas(){

			include('../../dominio/dPesa.php');
			$conec = new dtConnection;
   			
   			$pesas = array();

   			if($conec->conect() == true){
   				$query = "SELECT * FROM tbpesaleche";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$pesa = new dPesa();
					
					$pesa->setNumeroBovino($row['numeroBovino']);					
					$pesa->setFechaPesa($row['fechaPesa']);	
					$pesa->setPesa($row['pesa']);
					
					

					array_push($pesas, $pesa);
				}
					mysql_close();
					if (!$pesas){
						return false;
					} else {
						return $pesas;
					}
   			}
		}
		
			function eliminarPesa($numeroBovino,$fechaPesa){

				$con = new dtConnection;
				if($con->conect() == true){
				$query = "DELETE FROM tbpesaleche WHERE numeroBovino = '".$numeroBovino."' and fechaPesa = '".$fechaPesa."'";

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
   		function modificarPesa($pesa){
   			$con = new dtConnection;
			if($con->conect() == true){
				$query = "UPDATE tbpesaleche set 
				pesa = '".$pesa->getPesa()."' WHERE numeroBovino = '".$pesa->getNumeroBovino()."' and fechaPesa= '".$pesa->getFechaPesa()."'";

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