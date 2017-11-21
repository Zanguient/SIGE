<?php

 include_once("../../data/dtPesa.php");

 class ctrListaPesas{

 	function ctrListaPesas(){}


 	function obtenerPesas(){

 		$dtpesas = new DtPesa();
 		$Lista = $dtpesas->ObtenerPesas();

 		if(!$Lista){
 			return false;
 		}else{
 			return $Lista;
 		}
 	}
 	
 }

 ?>