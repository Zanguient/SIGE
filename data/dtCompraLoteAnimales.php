<?php 

	include_once("dtConnection.php");
	
	class dtCompraLoteAnimales {
		
		function dtCompraLoteAnimales(){}

		function insertarCompraLote($compraLote,$valor){
			$con = new dtConnection;
			if($con->conect() == true){
                $query2="SELECT max(idfactura) AS id FROM tbcompralotes;";
                $result2 = mysql_query($query2);
                $row = mysql_fetch_array($result2);
                $idFactura = $row['id'] + 1;
				if($valor == 1){
				$query = "INSERT INTO tbcompralotes (idFactura,numeroFactura,gastoReal,vendedor,cantidad,monto,numeroGuia,fecha) VALUES (
									  '".$idFactura."',
									  '".$compraLote->getNumeroFactura()."',
									  '".$compraLote->getGastoReal()."',
									  '".$compraLote->getVendedor()."',
									  '".$compraLote->getNumeroAnimales()."',
									  '".$compraLote->getMonto()."',
									  '".$compraLote->getNumeroGuia()."',
									  '".$compraLote->getFecha()."');";
				}else{
				$query = "INSERT INTO tbcompralotes (idFactura,gastoReal,vendedor,cantidad,monto,numeroGuia,fecha) VALUES (
									  '".$idFactura."',
									  '".$compraLote->getGastoReal()."',
									  '".$compraLote->getVendedor()."',
									  '".$compraLote->getNumeroAnimales()."',
									  '".$compraLote->getMonto()."',
									  '".$compraLote->getNumeroGuia()."',
									  '".$compraLote->getFecha()."');";
				}

				$result = mysql_query($query);

				mysql_close();

				if (!$result){
					return false;
				} else {
					return true;
				}
			}
		}

		function ObtenerListaCompras(){
   			$conec = new dtConnection;
   			include ("../../dominio/dCompraLoteAnimales.php");
   			$lista = array();

   			if($conec->conect() == true){
   				$query = "SELECT * FROM tbcompralotes";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$compra = new dCompraLoteAnimales;
					
					$compra->setIdFactura($row['idfactura']);
					$compra->setNumeroFactura($row['numeroFactura']);	
					$compra->setGastoReal($row['gastoReal']);						
					$compra->setVendedor($row['vendedor']);	
					$compra->setNumeroAnimales($row['cantidad']);
					$compra->setMonto($row['monto']);
					$compra->setNumeroGuia($row['numeroGuia']);
					$compra->setFecha($row['fecha']);

					array_push($lista, $compra);
				}
					mysql_close();
					if (!$lista){
						return false;
					} else {
						return $lista;
					}
   			}
   		}

   		function getCompraLote($IdFactura){
   			$conexion = new dtConnection;
   			include ("../../dominio/dCompraLoteAnimales.php");
   			$lista = array();
   			if($conexion->conect() == true){
   				$query = "SELECT * FROM tbcompralotes WHERE idfactura = $IdFactura";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){

					$compra = new dCompraLoteAnimales;

					$compra->setIdFactura($row['idfactura']);
					$compra->setNumeroFactura($row['numeroFactura']);
					$compra->setGastoReal($row['gastoReal']);	
					$compra->setVendedor($row['vendedor']);					
					$compra->setNumeroAnimales($row['cantidad']);
					$compra->setMonto($row['monto']);
					$compra->setNumeroGuia($row['numeroGuia']);
					$compra->setFecha($row['fecha']);
					
					array_push($lista, $compra);
				}

				mysql_close();

				if (!$lista){					
					return false;
				} else {
					return $lista;
				}

   			}

   		}
   		function modificarCompraLote($compra,$valor){
   			$con = new dtConnection;
			
			if($con->conect()==true){
				if($valor == 1){
				$query = "UPDATE tbcompralotes SET numeroFactura='".$compra->getNumeroFactura()."',gastoReal='".$compra->getGastoReal()."',vendedor='".$compra->getVendedor()."',cantidad ='".$compra->getNumeroAnimales()."',
				         monto ='".$compra->getMonto()."',numeroGuia='".$compra->getNumeroGuia()."',fecha='".$compra->getFecha()."' WHERE idfactura=".$compra->getIdFactura()."";
				}else{
					$compra->setNumeroFactura(null);
					$query = "UPDATE tbcompralotes SET numeroFactura='".$compra->getNumeroFactura()."',gastoReal='".$compra->getGastoReal()."',vendedor='".$compra->getVendedor()."',cantidad ='".$compra->getNumeroAnimales()."',
				         monto ='".$compra->getMonto()."',numeroGuia='".$compra->getNumeroGuia()."',fecha='".$compra->getFecha()."' WHERE idfactura=".$compra->getIdFactura()."";
				}
				$result = mysql_query($query);

				mysql_close();
				
				if (!$result){
					return false;
				}else{
					return true;
				}
			}
   		}

   		public function eliminarCompra($idFactura){
		$con = new dtConnection;
			if($con->conect() == true){
			$query = "DELETE FROM tbcompralotes WHERE idfactura = $idFactura";

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