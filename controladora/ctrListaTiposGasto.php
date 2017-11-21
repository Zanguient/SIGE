<?php 

	class ctrListaTiposGasto{

		public function ctrListaTiposGasto(){

		}

		public function obtenerGastos(){
			include ("../../data/dtGasto.php");
			
			$dtGasto= new dtGasto();
			$gastos = $dtGasto->getGastos();

			if(!$gastos){
				return false;
			}else{
				return $gastos;
			}
		}

	}

 ?>