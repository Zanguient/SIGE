<?php 

	include("../../data/dtProducto.php");
	class ctrMostrarProducto{

		public function ctrMostrarProducto(){}

		public function obtenerProductos(){
			$dataproducto = new dtProducto;
            $listaProductos = $dataproducto->obtenerProductos();
            if(!$listaProductos){
                  return false;
            }
            else{
                  return $listaProductos;
            }
		}
	}

 ?>