<?php

include_once("dtConnection.php");
include_once("../../dominio/dBovino.php");
include_once("../../dominio/dParto.php");

class  dtBovino{

	function dtBovino(){}

	function insertarBovino($bovino, $finca){
			$con = new dtConnection;
			if($con->conect() == true){
				$query2="SELECT max(idParto) AS id FROM tbpartos;";
                $result2 = mysql_query($query2);
                $row = mysql_fetch_array($result2);
                $id= $row['id'] + 1;
			$query = "INSERT INTO tbbovino(numerobovino,codigofinca,nombrebovino,fechanacimientobovino,sexobovino,razabovino,edadbovino,numeropadrebovino,numeromadrebovino) VALUES (
									  '".$bovino->getNumero()."',
									  '".$finca."',
									  '".$bovino->getNombre()."',
									  '".$bovino->getFechaNacimiento()."',
									  '".$bovino->getSexo()."',
									  '".$bovino->getRaza()."',
									  '".$bovino->getEdad()."',
									  '".$bovino->getNumeroPadre()."',
									  '".$bovino->getNumeroMadre()."');";
			} 
			$result = mysql_query($query);

			mysql_close();

			if (!$result){
				return false;
			} else {
				return true;
			}
		}

		function insertarPartoBovino($parto, $bovino, $finca){
			$con = new dtConnection;
			if($con->conect() == true){
				$query2="SELECT max(idParto) AS id FROM tbpartos;";
                $result2 = mysql_query($query2);
                $row = mysql_fetch_array($result2);
                $id= $row['id'] + 1;
                $conexion = $con->crearConexionPDO();

                try {
            	 	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		 	 		$conexion->beginTransaction();
                	$conexion->exec("INSERT INTO tbpartos(idParto,numerobovino,fechaParto,generoBecerro,descripcionParto) VALUES (
									  '".$id."',
									  '".$parto->getNumeroBovino()."',
									  '".$parto->getFechaParto()."',
									  '".$parto->getGeneroBecerro()."',
									  '".$parto->getDescripcionParto()."');");

					$conexion->exec("INSERT INTO tbbovino(numerobovino,codigofinca,nombrebovino,fechanacimientobovino,sexobovino,razabovino,edadbovino,numeropadrebovino,numeromadrebovino) VALUES (
											  '".$bovino->getNumero()."',
											  '".$finca."',
											  '".$bovino->getNombre()."',
											  '".$bovino->getFechaNacimiento()."',
											  '".$bovino->getSexo()."',
											  '".$bovino->getRaza()."',
											  '".$bovino->getEdad()."',
											  '".$bovino->getNumeroPadre()."',
											  '".$bovino->getNumeroMadre()."');");
					$conexion->commit();
					return true;
                } catch (Exception $e) {
                	$conexion->rollback();
                	return false;
                }
                
			} 
		}

	function obtenerVacas($idUsuario){
		$con = new dtConnection;
		$lista = array();
		if($con->conect() ==TRUE){
			$query = "select distinct c.numerobovino, c.codigofinca,c.nombrebovino from tbpropietario a inner join tbfinca b on a.cedulapropietario='$idUsuario' inner join tbbovino c where c.edadbovino >= '2' and c.sexobovino='hembra';";

			$resultado = mysql_query($query);

			while($row = mysql_fetch_array($resultado)){
				$bovino = new dBovino();
				$bovino->setNumero($row["numerobovino"]);
				$bovino->setCodigo($row["codigofinca"]);
				$bovino->setNombre($row["nombrebovino"]);
            array_push($lista, $bovino);
			}
			mysql_close();
			if (!$lista){
				return false;
			} else {
				return $lista;
			}
		}	
	}

	function obtenerVacasFinca($idFinca){
		$con = new dtConnection;
		$lista = array();
		if($con->conect() ==TRUE){
			$query = "SELECT distinct b.* FROM tbbovino b inner join tbfinca f on b.codigofinca = f.codigofinca inner join tbpartos p on b.numerobovino = p.numerobovino where f.codigofinca = '$idFinca';";

			$resultado = mysql_query($query);

			while($row = mysql_fetch_array($resultado)){
				$bovino = new dBovino();
				$bovino->setNumero($row["numerobovino"]);
				$bovino->setNombre($row["nombrebovino"]);
				$bovino->setFechaNacimiento($row["fechanacimientobovino"]);
				$bovino->setSexo($row["sexobovino"]);
				$bovino->setRaza($row["razabovino"]);
				$bovino->setNumeroPadre($row["numeropadrebovino"]);
				$bovino->setNumeroMadre($row["numeromadrebovino"]);
            array_push($lista, $bovino);
			}
			mysql_close();
			if (!$lista){
				return false;
			} else {
				return $lista;
			}
		}	
	}

	function obtenerBovinosPropietario($idPropietario){
		$con = new dtConnection;
		$lista = array();
		if($con->conect() ==TRUE){
			$query = "SELECT b.* FROM tbbovino b inner join tbfinca f on b.codigofinca = f.codigofinca inner join tbpropietario p on f.cedulapropietario  = p.cedulapropietario  where p.cedulapropietario  = '$idPropietario';";

			$resultado = mysql_query($query);

			while($row = mysql_fetch_array($resultado)){
				$bovino = new dBovino();
				$bovino->setNumero($row["numerobovino"]);
				$bovino->setNombre($row["nombrebovino"]);
				$bovino->setFechaNacimiento($row["fechanacimientobovino"]);
				$bovino->setSexo($row["sexobovino"]);
				$bovino->setRaza($row["razabovino"]);
				$bovino->setNumeroPadre($row["numeropadrebovino"]);
				$bovino->setNumeroMadre($row["numeromadrebovino"]);
            array_push($lista, $bovino);
			}
			mysql_close();
			if (!$lista){
				return false;
			} else {
				return $lista;
			}
		}	
	}

	function insertarRIndividualBovino($bovino,$registro,$compralote){

			$con = new dtConnection;
			if($con->conect() == true){

				$query2="SELECT max(idfactura) AS id FROM tbcompralotes;";
                $result2 = mysql_query($query2);
                $row = mysql_fetch_array($result2);
                $idfactura= $row['id'] + 1;
             try {
                 $query3 = "INSERT INTO tbcompralotes (idFactura,numeroFactura,gastoReal,vendedor,cantidad,monto,numeroGuia,fecha) VALUES (
									  '".$idfactura."',
									  '".$compralote->getNumeroFactura()."',
									  '".$compralote->getGastoReal()."',
									  '".$compralote->getVendedor()."',
									  '".$compralote->getNumeroAnimales()."',
									  '".$compralote->getMonto()."',
									  '".$compralote->getNumeroGuia()."',
									  '".$compralote->getFecha()."');";
				$result3 = mysql_query($query3);

                $conexion = $con->crearConexionPDO();

                
            	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		 	 	$conexion->beginTransaction();

		 	 	$query4="SELECT max(idRegistro) AS id FROM tbregistroindividual;";
                $result4 = mysql_query($query4);
                $row = mysql_fetch_array($result4);
                $id= $row['id'] + 1;

                $conexion->exec("INSERT INTO tbregistroindividual(idRegistro,idCompraLote,numSubastaFinca, peso,descripcion,precioKilo,precioTotal) VALUES (
				'".$id."',
				'".$idfactura."',
				'".$registro->getNumSubastaFinca()."',
				'".$registro->getPeso()."',
				'".$registro->getDescripcion()."',
				'".$registro->getPrecioKilo()."',
				'".$registro->getPrecioTotal()."');");

				$conexion->exec("INSERT INTO tbbovino(numerobovino,codigofinca,nombrebovino,fechanacimientobovino,sexobovino,razabovino,edadbovino,numeropadrebovino,numeromadrebovino) VALUES (
											  '".$bovino->getNumero()."',
											  '".$bovino->getCodigo()."',
											  '".$bovino->getNombre()."',
											  '".$bovino->getFechaNacimiento()."',
											  '".$bovino->getSexo()."',
											  '".$bovino->getRaza()."',
											  '".$bovino->getEdad()."',
											  '".$bovino->getNumeroPadre()."',
											  '".$bovino->getNumeroMadre()."');");
					$conexion->commit();
					return true;
                } catch (Exception $e) {
                	$conexion->rollback();
                	return false;
                }
                
			} 
	}

	public function obtenerBovinosPreniados($idPropietario){
		$con = new dtConnection;
		$lista = array();
		if($con->conect() ==TRUE){
			$query = "SELECT a.numerobovino,a.idEstado,b.nombreEstado,a.nombrebovino,a.sexobovino,a.razabovino,a.edadbovino from tbpropietario c inner join tbfinca d on c.cedulapropietario = '$idPropietario' and c.cedulapropietario = d.cedulapropietario inner join tbbovino a on a.codigofinca= d.codigofinca inner join tbestadobovino b on a.idEstado=b.id where b.nombreEstado = 'Produccion' or b.nombreEstado = 'ProduccionPrenada'";

			$resultado = mysql_query($query);

			while($row = mysql_fetch_array($resultado)){
				$bovino = new dBovino();
				$bovino->setNumero($row["numerobovino"]);
				$bovino->setNombre($row["nombrebovino"]);
				$bovino->setSexo($row["sexobovino"]);
				$bovino->setRaza($row["razabovino"]);
				$bovino->setEdad($row["edadbovino"]);
				$bovino->setIdEstado($row["idEstado"]);
				$bovino->setEstado($row["nombreEstado"]);
            array_push($lista, $bovino);
			}
			mysql_close();
			if (!$lista){
				return false;
			} else {
				return $lista;
			}
		}	
	}

}

?>