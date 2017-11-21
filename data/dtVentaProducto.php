<?php 

include_once("dtConnection.php");
class dtVentaProducto{

	public function dtVentaProducto(){}

	public function insertarVentaProducto($venta){
		include_once("../dominio/dVentaProducto.php");
		$con = new dtConnection;
		if($con->conect() == true){
			$query2="SELECT max(idVentaProducto) AS id FROM tbventaproducto;";
            $result2 = mysql_query($query2);
            $row = mysql_fetch_array($result2);
            $id= $row['id'] + 1;
			$query = "INSERT INTO tbventaproducto VALUES (
									  '".$id."',
									  '".$venta->getProducto()."',
									  '".$venta->getNumeroRecibo()."',
									  '".$venta->getFechaVenta()."',
									  '".$venta->getCantidad()."',
									  '".$venta->getPrecioUnitario()."',
									  '".$venta->getTotal()."');";
		} 
		$result = mysql_query($query);

		mysql_close();

		if (!$result){
			return false;
		} else {
			return true;
		}
	}

	public function actualizarVenta($venta){
		$con = new dtConnection;
			if($con->conect() == true){
				$query = "UPDATE tbventaproducto set 
				numeroReciboComprador = '".$venta->getNumeroRecibo()."',
				fechaVenta = '".$venta->getFechaVenta()."',
				cantidad = '".$venta->getCantidad()."',
				precioUnitario = '".$venta->getPrecioUnitario()."',
				total = '".$venta->getTotal()."',
				codigoProducto = '".$venta->getProducto()."' WHERE idVentaProducto = ".$venta->getIdVenta()."";

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

	function obtenerVentas(){
		include_once("../../dominio/dVentaProducto.php");
		include_once("../../dominio/dProducto.php");
		$conec = new dtConnection;
		$listaVentas = array();
		if($conec->conect() == true){
			$query = "SELECT v.*, p.nombreProducto, p.unidadMedida from tbventaproducto v inner join tbproducto p on v.codigoProducto = p.idProducto;";

			$resultado = mysql_query($query);

			while($row = mysql_fetch_array($resultado)){
				$venta = new dVentaProducto;
				$producto = new dProducto;
				$venta->setIdVenta($row['idVentaProducto']);
				$venta->setNumeroRecibo($row['numeroReciboComprador']);				
				$venta->setFechaVenta($row['fechaVenta']);
				$venta->setCantidad($row['cantidad']);
				$venta->setPrecioUnitario($row['precioUnitario']);
				$venta->setTotal($row['total']);
				$producto->setIdProducto($row['codigoProducto']);
				$producto->setNombreProducto($row['nombreProducto']);
				$producto->setUnidadMedida($row['unidadMedida']);
				$venta->setProducto($producto);
				array_push($listaVentas, $venta);
			}
			mysql_close();
			if (!$listaVentas){
				return false;
			} else {
				return $listaVentas;
			}
		}
	}

	public function eliminarVenta($id){
			$con = new dtConnection;
			if($con->conect() == true){
				$query = "DELETE FROM tbventaproducto WHERE idVentaProducto = $id";

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