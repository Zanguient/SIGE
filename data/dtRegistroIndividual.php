<?php

	class dtRegistroIndividual{

		function dtRegistroIndividual(){}

		public function insertarRegistroIndividual($registroIndividual, $temp,$valor){
			include_once("dtConnection.php");
			include_once("../dominio/dRegistroIndividual.php");

			$con = new dtConnection;
				if($con->conect() == true){
				$query2="SELECT max(idRegistro) AS id FROM tbregistroindividual;";
                $result2 = mysql_query($query2);
                $row = mysql_fetch_array($result2);
                $id= $row['id'] + 1;

                if($valor == 2){
                 $query = "INSERT INTO tbregistroindividual(idRegistro,idCompraLote,numSubastaFinca, peso,descripcion,precioKilo,precioTotal) VALUES (
				'".$id."',
				'".$temp."',
				'".$registroIndividual->getNumSubastaFinca()."',
				'".$registroIndividual->getPeso()."',
				'".$registroIndividual->getDescripcion()."',
				'".$registroIndividual->getPrecioKilo()."',
				'".$registroIndividual->getPrecioTotal()."');";
                }else{
	                $query3="SELECT max(idfactura) AS id FROM tbcompralotes;";
	                $result3 = mysql_query($query3);
	                $row = mysql_fetch_array($result3);
	                $idfactura= $row['id'] + 1;

	                $query4 = "INSERT INTO tbcompralotes (idFactura,numeroFactura,gastoReal,vendedor,cantidad,monto,numeroGuia,fecha) VALUES (
									  '".$idfactura."',
									  '".$temp->getNumeroFactura()."',
									  '".$temp->getGastoReal()."',
									  '".$temp->getVendedor()."',
									  '".$temp->getNumeroAnimales()."',
									  '".$temp->getMonto()."',
									  '".$temp->getNumeroGuia()."',
									  '".$temp->getFecha()."');";
					$result4 = mysql_query($query4);

				 $query = "INSERT INTO tbregistroindividual(idRegistro,idCompraLote,numSubastaFinca, peso,descripcion,precioKilo,precioTotal) VALUES (
				'".$id."',
				'".$idfactura."',
				'".$registroIndividual->getNumSubastaFinca()."',
				'".$registroIndividual->getPeso()."',
				'".$registroIndividual->getDescripcion()."',
				'".$registroIndividual->getPrecioKilo()."',
				'".$registroIndividual->getPrecioTotal()."');";

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

		function ObtenerRegistros($idCompraLote){
			include_once("dtConnection.php");
			include_once("../../dominio/dRegistroIndividual.php");
   			$conec = new dtConnection;
   			
   			$listaRegistros = array();

   			if($conec->conect() == true){
   				$query = "SELECT idRegistro,numSubastaFinca,peso,descripcion,precioKilo,precioTotal  FROM tbregistroindividual WHERE idCompraLote = $idCompraLote";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$registroIndividual = new dRegistroIndividual;
					
					$registroIndividual->setIdRegistro($row['idRegistro']);					
					$registroIndividual->setNumSubastaFinca($row['numSubastaFinca']);	
					$registroIndividual->setPeso($row['peso']);
					$registroIndividual->setDescripcion($row['descripcion']);
					$registroIndividual->setPrecioKilo($row['precioKilo']);
					$registroIndividual->setPrecioTotal($row['precioTotal']);

					array_push($listaRegistros, $registroIndividual);
				}
					mysql_close();
					if (!$listaRegistros){
						return false;
					} else {
						return $listaRegistros;
					}
   			}
   		}

	}

 ?>