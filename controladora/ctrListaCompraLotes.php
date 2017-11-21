<?php

 include("../../data/dtCompraLoteAnimales.php");

 class ctrListaCompraLotes{

 	function ctrListaCompraLotes(){}


 	function obtenerCompraslotes(){

 		$dtCompraLotes = new dtCompraLoteAnimales();
 		$ListaCompras = $dtCompraLotes->ObtenerListaCompras();

 		if(!$ListaCompras){
 			return false;
 		}else{
 			return $ListaCompras;
 		}
 	}
 	function obtenerCompraLote($IdFactura){
         $dtcompra = new dtCompraLoteAnimales;

         $compra = $dtcompra->getCompraLote($IdFactura);

         if(!$compra){
				return false;
			}else{
				return $compra;
			}
 	}

 }

 ?>