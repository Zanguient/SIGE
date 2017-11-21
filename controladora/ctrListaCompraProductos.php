<?php 

	class ctrListaCompraProductos{

		public function ctrListaCompraProductos(){

		}

		public function obtenerCompraProductos(){
			include ("../../data/dtCompraProductos.php");
			
			$dtCompra = new dtCompraProductos();
			$compras = $dtCompra->getCompras();

			if(!$compras){
				return false;
			}else{
				return $compras;
			}
		}

		public function obtenerCompraP($id){
		include ("../../data/dtCompraProductos.php");
			$dtCompra = new dtCompraProductos();
			$compra = $dtCompra->getCompra($id);

			if(!$compra){
				return false;
			}else{
				return $compra;
			}
		}

	}

 ?>