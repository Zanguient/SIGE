<?php 

	include_once ("dtConnection.php");
	
	class dtCompraProductos {
		
		function dtCompraProductos(){}

		function insertarCompraProducto($Compra){
			$con = new dtConnection;
			if($con->conect() == true){
				$query2="SELECT max(idGasto) AS id FROM tbgasto;";
                $result2 = mysql_query($query2);
                $row = mysql_fetch_array($result2);
                $id= $row['id'] + 1;
				$query = "INSERT INTO tbgasto(idGasto,numeroFactura,gastoReal,gastoTributable,provedor,tipoGasto,fechaCompra,monto) VALUES (
									  '".$id."',
									  '".$Compra->getNumeroFactura()."',
									  '".$Compra->getGastoReal()."',
									  '".$Compra->getGastoTributable()."',
									  '".$Compra->getIdProvedor()."',
									  '".$Compra->getIdTipoGasto()."',
									  '".$Compra->getFechaCompra()."',
									  '".$Compra->getMonto()."');";
			} 
			$result = mysql_query($query);

			mysql_close();

			if (!$result){
				return false;
			} else {
				return true;
			}
		}

		function getCompras(){
			include('../../dominio/dCompraProducto.php');
			$conec = new dtConnection;
   			
   			$compras = array();

   			if($conec->conect() == true){
   				$query = "SELECT a.idGasto,a.numeroFactura,a.gastoReal,a.gastoTributable,a.fechaCompra,a.monto,a.provedor,a.tipoGasto,b.nombre,c.nombreGasto from tbgasto a inner join tbprovedor b on a.provedor = b.idProvedor inner join tbtipogasto c on a.tipoGasto = c.id";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$compra = new dCompraProducto();
					
					$compra->setIdGasto($row['idGasto']);					
					$compra->setNumeroFactura($row['numeroFactura']);	
					$compra->setGastoReal($row['gastoReal']);					
					$compra->setGastoTributable($row['gastoTributable']);	
					$compra->setFechaCompra($row['fechaCompra']);					
					$compra->setMonto($row['monto']);	
					$compra->setProvedor($row['nombre']);					
					$compra->setTipoGasto($row['nombreGasto']);	
					$compra->setIdProvedor($row['provedor']);	
					$compra->setIdTipoGasto($row['tipoGasto']);	
						
					array_push($compras, $compra);
				}
					mysql_close();
					if (!$compras){
						return false;
					} else {
						return $compras;
					}
   			}
		}

		function eliminarCompraProducto($id){
				$con = new dtConnection;
				if($con->conect() == true){
				$query = "DELETE FROM tbgasto WHERE idGasto = $id";

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
		function getCompra($id){
			include('../../dominio/dCompraProducto.php');
			$conec = new dtConnection;
   			
   			

   			if($conec->conect() == true){
   				$query = "SELECT a.idGasto,a.numeroFactura,a.gastoReal,a.gastoTributable,a.fechaCompra,a.monto,a.provedor,a.tipoGasto,b.nombre,c.nombreGasto from tbgasto a inner join tbprovedor b on a.provedor = b.idProvedor inner join tbtipogasto c on a.tipoGasto = c.id WHERE idGasto = $id";
				$resultado = mysql_query($query);
				$row = mysql_fetch_array($resultado);
				
				$compra = new dCompraProducto;
					
					$compra->setIdGasto($row['idGasto']);					
					$compra->setNumeroFactura($row['numeroFactura']);	
					$compra->setGastoReal($row['gastoReal']);					
					$compra->setGastoTributable($row['gastoTributable']);	
					$compra->setFechaCompra($row['fechaCompra']);					
					$compra->setMonto($row['monto']);	
					$compra->setProvedor($row['nombre']);					
					$compra->setTipoGasto($row['nombreGasto']);
					$compra->setIdProvedor($row['provedor']);	
					$compra->setIdTipoGasto($row['tipoGasto']);		

				}
					mysql_close();
					if (!$compra){
						return false;
					} else {
						return $compra;
					}
   			}

   			function ActualizarCompras($compra){
   			$con = new dtConnection;
			if($con->conect() == true){
				$query = "UPDATE tbgasto set 
				numeroFactura = '".$compra->getNumeroFactura()."',
				gastoReal = '".$compra->getGastoReal()."',
				gastoTributable = '".$compra->getGastoTributable()."',
				provedor = '".$compra->getIdProvedor()."',
				tipoGasto = '".$compra->getIdTipoGasto()."',
				fechaCompra = '".$compra->getFechaCompra()."',
				monto =  '".$compra->getMonto()."' WHERE idGasto = ".$compra->getIdGasto()."";

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
