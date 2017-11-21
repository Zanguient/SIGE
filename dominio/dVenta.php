<?php 

	class dVenta{

		private $idVenta;
		private $ventaReportada;
		private $fecha;
		private $valorVenta;

		public function dVenta(){}

		public function setIdVenta($idVenta){
			$this->idVenta = $idVenta;
		}

		public function getIdVenta(){
			return $this->idVenta;
		}

		public function setVentaReportada($ventaReportada){
			$this->ventaReportada = $ventaReportada;
		}

		public function getVentaReportada(){
			return $this->ventaReportada;
		}

		public function setFecha($fecha){
			$this->fecha = $fecha;
		}

		public function getFecha(){
			return $this->fecha;
		}

		public function setValorVenta($valorVenta){
			$this->valorVenta = $valorVenta;
		}

		public function getValorVenta(){
			return $this->valorVenta;
		}
	}

 ?>