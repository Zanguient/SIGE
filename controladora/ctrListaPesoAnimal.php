<?php

 include_once("../../data/dtPesoAnimal.php");

 class ctrListaPesoAnimal{

 	function ctrListaPesoAnimal(){}


 	function obtenerPesos(){

 		$dtpesos = new DtPesoAnimal();
 		$Lista = $dtpesos->ObtenerPesos();

 		if(!$Lista){
 			return false;
 		}else{
 			return $Lista;
 		}
 	}
 	
 }

 ?>