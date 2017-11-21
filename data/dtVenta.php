<?php 

	include_once("dtConnection.php");
	include_once("../../dominio/dVenta.php");
	class dtVenta{

		public function dtVenta(){}

		function insertarVenta($venta, $bovinos){
			$con = new dtConnection;
			if($con->conect() == true){
				$query2="SELECT max(idVenta) AS id FROM tbventa;";
                $result2 = mysql_query($query2);
                $row = mysql_fetch_array($result2);
                $idFactura= $row['id'] + 1;

                $query3="SELECT max(idVentaBovino) AS id FROM tbventabovino;";
                $result3 = mysql_query($query3);
                $row2 = mysql_fetch_array($result3);
                $id= $row2['id'];

                $conexion = $con->crearConexionPDO();
                try {
            	 	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		 	 		$conexion->beginTransaction();
                	$conexion->exec("INSERT INTO tbventa(idVenta,ventaReportada,fechaVenta,valorVenta) VALUES (
									  '".$idFactura."',
									  '".$venta->getVentaReportada()."',
									  '".$venta->getFecha()."',
									  '".$venta->getValorVenta()."');");

					foreach ($bovinos as $bovino) {
						$id++;
		                echo "Estos son los datos que llegaron: ".$id ." pero esto no funciono";

		                $conexion->exec("INSERT INTO tbventabovino(idVentaBovino,codigoVenta,codigoBovino,pesoBovino, precioVentaBovino) VALUES (
										  '".$id."',
										  '".$idFactura."',
										  '".$bovino->getNumero()."',
										  '".$bovino->getNombre()."',
										  '".$bovino->getSexo()."');");

		                $conexion->exec("UPDATE tbbovino set idEstado = '9' WHERE numeroBovino = ".$bovino->getNumero()."");
					}				  

					$conexion->commit();
					return true;
                } catch (Exception $e) {
                	$conexion->rollback();
                	return false;
                }
			} 
		}

		function insertarVentaBovino($bovinos, $factura){
			$con = new dtConnection;
			if($con->conect() == true){
				foreach ($bovinos as $bovino) {
					$query3="SELECT max(idVentaBovino) AS id FROM tbventabovino;";
	                $result3 = mysql_query($query3);
	                $row2 = mysql_fetch_array($result3);
	                $id= $row2['id'] + 1;
	                echo "Estos son los datos que llegaron: ".$id ." pero esto no funciono";
					$query = "INSERT INTO tbventabovino(idVentaBovino,codigoVenta,codigoBovino,pesoBovino, precioVentaBovino) VALUES (
									  '".$id."',
									  '".$factura."',
									  '".$bovino->getNumero()."',
									  '".$bovino->getNombre()."',
									  '".$bovino->getSexo()."');";
				  	$result = mysql_query($query);
				}
			} 
			mysql_close();

			if (!$result){
				return "hola".$id. " Venta: ".$factura;
			} else {
				return "Adios".$id. "Venta".$factura;
			}
		}

		function obtenerVentas(){
			include_once("../../dominio/dVenta.php");
   			$conec = new dtConnection;
   			$listaVenta = array();

   			if($conec->conect() == true){
   				$query = "SELECT * FROM tbventa";
   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$venta = new dVenta;
					
					$venta->setIdVenta($row['idVenta']);	
					$venta->setVentaReportada($row['ventaReportada']);				
					$venta->setFecha($row['fechaVenta']);	
					$venta->setValorVenta($row['valorVenta']);
					array_push($listaVenta, $venta);
				}
					mysql_close();
					if (!$listaVenta){
						return false;
					} else {
						return $listaVenta;
					}
   			}
   		}

   		public function eliminarVenta($id){
			$con = new dtConnection;
			if($con->conect() == true){
				$query = "DELETE FROM tbventa WHERE idVenta = $id";

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

		public function actualizarVenta($venta){
			$con = new dtConnection;
			if($con->conect() == true){
				$query = "UPDATE tbventa set 
				ventaReportada = '".$venta->getVentaReportada()."',
				fechaVenta = '".$venta->getFecha()."',
				valorVenta = '".$venta->getValorVenta()."' WHERE idVenta = ".$venta->getIdVenta()."";

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