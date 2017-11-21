<?php 

	Class dTiposGastos{

		private $id;
		private $nombreGasto;
		
		public function dTiposGastos(){

		}


		public function getId(){
			return $this->id;
		}
		public function setId($id){
		  $this->id = $id;
		}

		public function getNombreGasto(){
			return $this->nombreGasto;
		}
		public function setNombreGasto($nombre){
		  $this->nombreGasto = $nombre;
		}
		

	}
 ?>