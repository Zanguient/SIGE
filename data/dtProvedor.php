<?php 
	
	include_once ("dtConnection.php");
	class dtProvedor{


		public function dtProvedor(){


		}

		public function getProvedores(){
			include('../../dominio/dProvedor.php');
			$conec = new dtConnection;
   			
   			$provedores = array();

   			if($conec->conect() == true){
   				$query = "SELECT * FROM tbprovedor";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$provedor = new dProvedor();
					
					$provedor->setIdProvedor($row['idProvedor']);					
					$provedor->setNombre($row['nombre']);	
					$provedor->setTelefono($row['telefono']);
					$provedor->setDireccion($row['Direccion']);
					

					array_push($provedores, $provedor);
				}
					mysql_close();
					if (!$provedores){
						return false;
					} else {
						return $provedores;
					}
   			}
		}
	}


 ?>