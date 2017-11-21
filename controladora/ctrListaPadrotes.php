<?php

	include("../../data/dtPadrote.php");
 class CtrListaPadrotes{

 	function CtrListaPadrotes(){}

 	function obtenerPadrotes(){
 		$dtPadrote = new DtPadrote;
 		$Lista = $dtPadrote->obtenerPadrotes();

 		if(!$Lista){
 			return false;
 		}else{
 			return $Lista;
 		}
 	}
 	function obtenerPadrote($idPadrote){
 		$dPadrote = new DtPadrote;
 		$padrote = $dPadrote->obtenerPadrote($idPadrote);

 		if(!$padrote){
 			return false;
 		}else{
 			return $padrote;
 		}
 	}
 }

?>