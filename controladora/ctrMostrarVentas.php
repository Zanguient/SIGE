<?php 

	class ctrMostrarVenta{

		public function ctrMostrarVenta(){}

		public function obtenerVentas(){
			include("../../data/dtVenta.php");
			$dataVenta = new dtVenta;
            $listaVentas = $dataVenta->obtenerVentas();
            if(!$listaVentas){
                  return false;
            }
            else{
                  return $listaVentas;
            }
		}

		public function obtenerVentasProducto(){
			include("../../data/dtVentaProducto.php");
			$dataVenta = new dtVentaProducto;
                  $listaVentas = $dataVenta->obtenerVentas();
                  if(!$listaVentas){
                        return false;
                  }
                  else{
                        return $listaVentas;
                  }
		}
	}

 ?>