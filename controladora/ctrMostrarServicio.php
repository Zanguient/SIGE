<?php 

	include("../../data/dtServicio.php");
	class ctrMostrarServicio{

		public function ctrMostrarServicio(){}

		public function obtenerServicios(){
			$dataServicio = new dtServicio;
            $listaServicios = $dataServicio->obtenerServicios($cedula = 1);
            if(!$listaServicios){
                  return false;
            }
            else{
                  return $listaServicios;
            }
		}
	}

 ?>