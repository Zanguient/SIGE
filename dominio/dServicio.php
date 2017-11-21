<?php 

	class dServicio{
		private $id;
		private $vaca;
		private $padrote;
		private $fecha;
		private $cantidadRepeticiones;
		private $inseminador;
		private $idPadrote;

		public function dServicio(){}

		public function setIdPadrote($id){
			$this->idPadrote = $id;
		}

		public function getIdPadrote(){
			return $this->idPadrote;
		}

		public function setId($id){
			$this->id = $id;
		}
		public function getId(){
			return $this->id;
		}

		public function setVaca($vaca){
			$this->vaca = $vaca;
		}
		public function getVaca(){
			return $this->vaca;
		}

		public function setPadrote($padrote){
			$this->padrote = $padrote;
		}
		public function getPadrote(){
			return $this->padrote;
		}

		public function setFecha($fecha){
			$this->fecha = $fecha;
		}
		public function getFecha(){
			return $this->fecha;
		}

		public function setCantidadRepeticiones($cantidadRepeticiones){
			$this->cantidadRepeticiones = $cantidadRepeticiones;
		}
		public function getCantidadRepeticiones(){
			return $this->cantidadRepeticiones;
		}

		public function setInseminador($inseminador){
			$this->inseminador = $inseminador;
		}
		public function getInseminador(){
			return $this->inseminador;
		}
	}

 ?>