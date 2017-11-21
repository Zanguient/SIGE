<?php 

	class dRegistroIndividual{

		private $idRegistro;
		private $numSubastaFinca;
		private $descripcion;
		private $peso;
		private $precioKilo;
		private $precioTotal;

		function dRegistroIndividual(){}

		public function getIdRegistro(){
			return $this->idRegistro;
		}
		public function setIdRegistro($idRegistro){
			$this->idRegistro = $idRegistro;
		}

		public function getNumSubastaFinca(){
			return $this->numSubastaFinca;
		}
		public function setNumSubastaFinca($numSubastaFinca){
			$this->numSubastaFinca = $numSubastaFinca;
		}

		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

		public function getPeso(){
			return $this->peso;
		}
		public function setPeso($peso){
			$this->peso = $peso;
		}

		public function getPrecioKilo(){
			return $this->precioKilo;
		}
		public function setPrecioKilo($precioKilo){
			$this->precioKilo = $precioKilo;
		}

		public function getPrecioTotal(){
			return $this->precioTotal;
		}
		public function setPrecioTotal($precioTotal){
			$this->precioTotal = $precioTotal;
		}
		
	}

 ?>