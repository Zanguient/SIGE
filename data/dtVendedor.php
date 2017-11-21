<?php

include ("dtConnection.php");
include("../../dominio/dVendedor.php");

class dtVendedor{
	public function dtVendedor(){}

	public function insertarVendedor($vendedor){
		$con = new dtConnection;
			if($con->conect() == true){
			$query = "INSERT INTO tbvendedor(nombrevendedor, codigovendedor, telefonovendedor,direccionvendedor) VALUES (
			'".$vendedor->getNombre()."',
			'".$vendedor->getCodigo()."',
			'".$vendedor->getTelefono()."',
			'".$vendedor->getDireccion()."');";

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

	public function insertarCuenta($vendedor){
		$con = new dtConnection;
		if($con->conect() == true){
			$query = "INSERT INTO tbcuentabancaria (codigoVendedor, numeroCuenta) VALUES (
			'".$vendedor->getCodigo()."',
			'".$vendedor->getCuentaBancaria()."');";

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

	public function eliminarVendedor($vendedor){
		$con = new dtConnection;
			if($con->conect() == true){
			$query = "DELETE FROM tbvendedor WHERE codigovendedor = $vendedor";

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

	public function eliminarCuenta($cuenta){
		$con = new dtConnection;
			if($con->conect() == true){
			$query = "DELETE FROM tbcuentabancaria WHERE numeroCuenta = $cuenta";

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

	function obtenerVendedores(){
   			$conec = new dtConnection;
   			
   			$listaVendedores = array();

   			if($conec->conect() == true){
   				$query = "SELECT * FROM tbvendedor";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$vendedor = new dVendedor;
					
					$vendedor->setNombre($row['nombrevendedor']);
            		$vendedor->setCodigo($row['codigovendedor']);
			      	$vendedor->setTelefono($row['telefonovendedor']);
			      	$vendedor->setDireccion($row['direccionvendedor']);

					array_push($listaVendedores, $vendedor);
				}
					mysql_close();
					if (!$listaVendedores){
						return false;
					} else {
						return $listaVendedores;
					}
   			}
   		}

   		function obtenerCuentas($codigoVendedor){
   			$conec = new dtConnection;
   			
   			$vendedor = new dVendedor;
   			$vendedor->setCodigo($codigoVendedor);
   			if($conec->conect() == true){
   				$query = "SELECT v.nombrevendedor, c.numeroCuenta FROM tbvendedor v INNER JOIN tbcuentabancaria c ON v.codigovendedor = c.codigoVendedor WHERE v.codigovendedor = $codigoVendedor";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
					$vendedor->setNombre($row['nombrevendedor']);
					$vendedor->setCuentaBancaria($row['numeroCuenta']);				
				}
					mysql_close();
					if (!$vendedor){
						return false;
					} else {
						return $vendedor;
					}
   			}
   		}

   		function obtenerVendedor($codVendedor){
   			$conec = new dtConnection;
   			
   			$listaVendedores = array();

   			if($conec->conect() == true){
   				$query = "SELECT * FROM tbvendedor WHERE codigovendedor = $codVendedor";

   				$resultado = mysql_query($query);

   				while($row = mysql_fetch_array($resultado)){
				
					$vendedor = new dVendedor;
					
					$vendedor->setNombre($row['nombrevendedor']);
            		$vendedor->setCodigo($row['codigovendedor']);
			      	$vendedor->setTelefono($row['telefonovendedor']);
			      	$vendedor->setDireccion($row['direccionvendedor']);

					array_push($listaVendedores, $vendedor);
				}
					mysql_close();
					if (!$listaVendedores){
						return false;
					} else {
						return $listaVendedores;
					}
   			}
   		}

	public function actualizarVendedor($vendedor){
		$con = new dtConnection;
		if($con->conect() == true){
			$query = "UPDATE tbvendedor set 
			nombrevendedor = '".$vendedor->getNombre()."', 
			telefonovendedor = '".$vendedor->getTelefono()."',
			direccionvendedor = '".$vendedor->getDireccion()."' 
			WHERE codigovendedor = ".$vendedor->getCodigo()."";

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

	public function actualizarCuenta($vendedor, $cuentaAnterior){
		$con = new dtConnection;
		if($con->conect() == true){
			$query = "UPDATE tbcuentabancaria set 
			numeroCuenta = '".$vendedor->getCuentaBancaria()."'
			WHERE numeroCuenta = ".$cuentaAnterior."";

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