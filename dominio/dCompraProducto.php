<?php 

	Class dCompraProducto{

		private $idGasto;
		private $numeroFactura;
		private $gastoReal;
		private $gastoTributable;
		private $provedor;
		private $tipoGasto;
		private $fechaCompra;
		private $monto;
		private $idTipoGasto;
		private $idProvedor;
		public function dCompraProducto(){

		}

		public function getIdGasto(){
			return $this->idGasto;
		}
		public function setIdGasto($id){
		  $this->idGasto = $id;
		}

		public function getNumeroFactura(){
			return $this->numeroFactura;
		}
		public function setNumeroFactura($numeroFactura){
		  $this->numeroFactura = $numeroFactura;
		}
		public function getGastoReal(){
			return $this->gastoReal;
		}
		public function setGastoReal($gastoReal){
		  $this->gastoReal = $gastoReal;
		}
		public function getGastoTributable(){
			return $this->gastoTributable;
		}
		public function setGastoTributable($gastoTributable){
		  $this->gastoTributable = $gastoTributable;
		}
		public function getProvedor(){
			return $this->provedor;
		}
		public function setProvedor($provedor){
		  $this->provedor = $provedor;
		}
		public function getTipoGasto(){
			return $this->tipoGasto;
		}
		public function setTipoGasto($tipoGasto){
		  $this->tipoGasto = $tipoGasto;
		}
		public function getFechaCompra(){
			return $this->fechaCompra;
		}
		public function setFechaCompra($fechaCompra){
		  $this->fechaCompra = $fechaCompra;
		}
		public function getMonto(){
			return $this->monto;
		}
		public function setMonto($monto){
		  $this->monto = $monto;
		}
		public function getIdProvedor(){
			return $this->idProvedor;
		}
		public function setIdProvedor($idProvedor){
		  $this->idProvedor = $idProvedor;
		}
		public function getIdTipoGasto(){
			return $this->idTipoGasto;
		}
		public function setIdTipoGasto($idTipoGasto){
		  $this->idTipoGasto = $idTipoGasto;
		}

	}
 ?>