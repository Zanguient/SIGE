<?php 
	
	include_once ("dtConnection.php");
	class dtGasto{


		public function dtGasto(){


		}

		public function getGastos(){
			include('../../dominio/dTiposGastos.php');
			$conec = new dtConnection;
   			
   			$gastos = array();

   			if($conec->conect() == true){
   				$query = "SELECT * FROM tbtipogasto";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$tipogasto = new dTiposGastos();
					
					$tipogasto->setId($row['id']);					
					$tipogasto->setNombreGasto($row['nombreGasto']);	
					
					array_push($gastos, $tipogasto);
				}
					mysql_close();
					if (!$gastos){
						return false;
					} else {
						return $gastos;
					}
   			}
		}
	}


 ?>