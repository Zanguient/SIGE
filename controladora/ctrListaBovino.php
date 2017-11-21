<?php

	include("../../data/dtBovino.php");
 class CtrListaBovinos{

 	function CtrListaBovinos(){}
 	function obtenerbovinos ($idUsuario){
 		$dtBovino = new dtBovino();
 		$Lista = $dtBovino->obtenerVacas($idUsuario);

 		if(!$Lista){
 			return false;
 		}else{
 			return $Lista;
 		}
 	}

 	function obtenerbovinosFinca($idFinca){
 		$dtBovino = new dtBovino();
 		$Lista = $dtBovino->obtenerVacasFinca($idFinca);

 		if(!$Lista){
 			return false;
 		}else{
 			return $Lista;
 		}
 	}

 	function obtenerbovinosPropietario($cedulaPropietario){
 		$dtBovino = new dtBovino();
 		$Lista = $dtBovino->obtenerBovinosPropietario($cedulaPropietario);

 		if(!$Lista){
 			return false;
 		}else{
 			return $Lista;
 		}
 	}

 	function obtenerbovinosPrenados($cedulaPropietario){
 		$dtBovino = new dtBovino();
 		$Lista = $dtBovino->obtenerBovinosPreniados($cedulaPropietario);

 		if(!$Lista){
 			return false;
 		}else{
 			return $Lista;
 		}
 	}
 	
 }

?>