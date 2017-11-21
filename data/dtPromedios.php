<?php 
	
	include_once ("dtConnection.php");
	class dtPromedios{


		public function dtPromedios(){


		}

		public function getPromedios($numeroBovino,$fechaI,$fechaF){

			$conec = new dtConnection;
   		
   			$promedios = array();

   			if($conec->conect() == true){

   				$query = "SELECT count(pesa) as nregistros,SUM(pesa) as total FROM tbpesaleche where numeroBovino = '".$numeroBovino."' and fechaPesa BETWEEN '".$fechaI."' AND '".$fechaF."'";
   				
   				$resultado1 = mysql_query($query);
   				$row = mysql_fetch_array($resultado1);
   				//echo "este es el query1".$row['nregistros']."-".$row['total'];

   				$query2 = "SELECT count(pesa) as Rgenerales,SUM(pesa) as totalgenerales FROM tbpesaleche where fechaPesa BETWEEN '".$fechaI."' AND '".$fechaF."'";
   				$resultado2 = mysql_query($query2);
   				$row2 = mysql_fetch_array($resultado2);
   				//echo "este es el query2".$row2->Rgenerales." - ".$row2->totalgenerales;

				$promedios[] = array('nregistros' => $row['nregistros'],
                   					 'pesaIndividual' => $row['total'],
                   					  'ngeneral'=> $row2['Rgenerales'],
                   					  'totalgenerales' => $row2['totalgenerales'] );	


	
				}
				//print_r($promedios);
				mysql_close();
					
				return $promedios;
			}

		function obtenerRegistros($numeroBovino,$fechaInicio,$fechaFinal){
			include_once("../../dominio/dPesa.php");
			$conec = new dtConnection;
			$registros = array();

			if($conec->conect() == true){
				$query = "SELECT fechaPesa,pesa from tbpesaleche where numeroBovino = '".$numeroBovino."' and fechaPesa BETWEEN '".$fechaInicio."' AND '".$fechaFinal."'";
				$resultado = mysql_query($query);

				while($row = mysql_fetch_array($resultado)){
			
					$pesa = new dPesa;
					
					$pesa->setFechaPesa($row['fechaPesa']);	
					$pesa->setPesa($row['pesa']);				
				
					array_push($registros, $pesa);
				}	
				mysql_close();
				if (!$registros){
					return false;
				} else {
					return $registros;
				}
			}
		}
   	}
		
	


 ?>