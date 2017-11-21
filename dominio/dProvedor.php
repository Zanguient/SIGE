<?php 

	Class dProvedor{

		private $idProvedor;
		private $nombre;
		private $telefono;
		private $direccion;

		public function dProvedor(){

		}


		public function getIdProvedor(){
			return $this->idProvedor;
		}
		public function setIdProvedor($id){
		  $this->idProvedor = $id;
		}

		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
		  $this->nombre = $nombre;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
		  $this->telefono = $telefono;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
		  $this->direccion = $direccion;
		}

	}
 ?>