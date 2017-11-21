<?php 

	include_once("dtConnection.php");
	class DtPadrote {
		
		function DtPadrote(){}

		function insertarP($padrote,$valor){
			$con = new dtConnection;
            $query ="";
			if($con->conect() == true){
				$query2="SELECT max(id) AS id FROM tbpadrote;";
                $result2 = mysql_query($query2);
                $row = mysql_fetch_array($result2);
                $id= $row['id'] + 1;

				if($valor == 1){
					$query = "INSERT INTO tbpadrote(id,numeroRegistro,nombrePadrote,raza,fechaCompra,precioAnimal,identificador) VALUES (
									  '".$id."',
									  '".$padrote->getNumeroRegistro()."',
									  '".$padrote->getNombrePadrote()."',
									  '".$padrote->getRazaPadrote()."',
									  '".$padrote->getFechaCompra()."',
									  '".$padrote->getPrecioAnimal()."',
									  '".$valor."');";
				} else if($valor == 2){
					$query = "INSERT INTO tbpadrote(id,numeroRegistro,nombrePadrote,raza,precioPajillaSalto,identificador) VALUES (
									  '".$id."',
									  '".$padrote->getNumeroRegistro()."',
									  '".$padrote->getNombrePadrote()."',
									  '".$padrote->getRazaPadrote()."',
									  '".$padrote->getPrecioPajillaSalto()."',
									  '".$valor."');";
				} else if($valor == 3){
					$query = "INSERT INTO tbpadrote(id,numeroRegistro,nombrePadrote,casaComercial,raza,numeroCanasta,cantidadPajilla,fechaCompra,precioPajillaSalto,identificador) VALUES (
									  '".$id."',
									  '".$padrote->getNumeroRegistro()."',
									  '".$padrote->getNombrePadrote()."',
									  '".$padrote->getCasaComercial()."',
									  '".$padrote->getRazaPadrote()."',
									  '".$padrote->getNumeroCanasta()."',
									  '".$padrote->getCantidadPajillas()."',
									  '".$padrote->getFechaCompra()."',
									  '".$padrote->getPrecioPajillaSalto()."',
									  '".$valor."');";
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
		function obtenerPadrotes(){
			include ("../../dominio/dPadrote.php");
			$con = new dtConnection;
			$lista = array();
			if($con->conect() ==TRUE){
 				$query = "SELECT * FROM tbpadrote";
 				$resultado = mysql_query($query);

 				while($row = mysql_fetch_array($resultado)){
 					$padrote = new Padrote;

 					$padrote->setId($row["id"]);
 					$padrote->setNumeroRegistro($row["numeroRegistro"]);
 					$padrote->setNombrePadrote($row["nombrePadrote"]);
 					$padrote->setCasaComercial($row["casaComercial"]);
 					$padrote->setPrecioPajillaSalto($row["precioPajillaSalto"]);
 					$padrote->setNumeroCanasta($row["numeroCanasta"]);
 					$padrote->setFechaCompra($row["fechaCompra"]);
 					$padrote->setCantidadPajillas($row["cantidadPajilla"]);
 					$padrote->setRazaPadrote($row["raza"]);
 					$padrote->setPrecioAnimal($row["precioAnimal"]);
 					$padrote->setIdentificador($row["identificador"]);
                    array_push($lista, $padrote);
 				}
 					mysql_close();
					if (!$lista){
						return false;
					} else {
						return $lista;
					}
			}
		}

		function obtenerPadrote($idPadrote){
			$con = new dtConnection;
			$lista = array();
			include ("../../dominio/dPadrote.php");
			if($con->conect() == TRUE){
				$query = "SELECT * FROM tbpadrote where id = $idPadrote";
				$resul = mysql_query($query);

				while ($row = mysql_fetch_array($resul)) {
					$padrote = new Padrote;
					$padrote->setId($row["id"]);
					$padrote->setNumeroRegistro($row["numeroRegistro"]);
 					$padrote->setNombrePadrote($row["nombrePadrote"]);
 					$padrote->setCasaComercial($row["casaComercial"]);
 					$padrote->setPrecioPajillaSalto($row["precioPajillaSalto"]);
 					$padrote->setNumeroCanasta($row["numeroCanasta"]);
 					$padrote->setFechaCompra($row["fechaCompra"]);
 					$padrote->setCantidadPajillas($row["cantidadPajilla"]);
 					$padrote->setRazaPadrote($row["raza"]);
 					$padrote->setPrecioAnimal($row["precioAnimal"]);
 					$padrote->setIdentificador($row["identificador"]);

 					array_push($lista ,$padrote);
				}
				mysql_close();

				if(!$lista){
					return false;
				}else{
					return $lista;
				}
			}
		}
		function actualizarPadrote($padrote,$id,$valor){
			$con = new dtConnection;

			if($con->conect() == TRUE){
				if($valor == 1){
					$query = "UPDATE tbpadrote SET numeroRegistro='".$padrote->getNumeroRegistro()."',nombrePadrote='".$padrote->getNombrePadrote()."',raza='".$padrote->getRazaPadrote()."',
				          fechaCompra='".$padrote->getFechaCompra()."',precioAnimal='".$padrote->getPrecioAnimal()."' WHERE id=".$id."";

				} else if($valor == 2){
					$query = "UPDATE tbpadrote SET numeroRegistro='".$padrote->getNumeroRegistro()."',nombrePadrote='".$padrote->getNombrePadrote()."',raza='".$padrote->getRazaPadrote()."',
				         precioPajillaSalto='".$padrote->getPrecioPajillaSalto()."' WHERE id=".$id."";
				} else if($valor == 3){
					$query = "UPDATE tbpadrote SET numeroRegistro='".$padrote->getNumeroRegistro()."',nombrePadrote='".$padrote->getNombrePadrote()."',casaComercial='".$padrote->getCasaComercial()."',raza='".$padrote->getRazaPadrote()."',
				          numeroCanasta='".$padrote->getNumeroCanasta()."',fechaCompra='".$padrote->getFechaCompra()."',cantidadPajilla='".$padrote->getCantidadPajillas()."',
				          precioPajillaSalto='".$padrote->getPrecioPajillaSalto()."' WHERE id=".$id."";
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
	  public function eliminarPadrote($id){
		$con = new dtConnection;
			if($con->conect() == true){
			$query = "DELETE FROM tbpadrote WHERE id = $id";

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