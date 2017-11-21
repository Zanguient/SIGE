<?php 

  class dCompraLoteAnimales{

  	private $idFactura;
    private $numeroFactura;
    private $gastoReal;
  	private $vendedor;
  	private $numeroAnimales;
  	private $monto;
  	private $numeroGuia;
  	private $fecha;

  	function dCompraLoteAnimales(){}

  	function setNumeroFactura($numeroFactura){
  		$this->numeroFactura = $numeroFactura;
  	}
  	function getNumeroFactura(){
  		return $this->numeroFactura;
  	}
    function setIdFactura($idFactura){
      $this->idFactura = $idFactura;
    }
    function getIdFactura(){
      return $this->idFactura;
    }
  	function setVendedor($vendedor){
  		$this->vendedor = $vendedor;
  	}
  	function getVendedor(){
  		return $this->vendedor;
  	}
  	function setNumeroAnimales($numeroAnimales){
  		$this->numeroAnimales = $numeroAnimales;
  	}
  	function getNumeroAnimales(){
  		return $this->numeroAnimales;
  	}
  	function setMonto($monto){
  		$this->monto = $monto;
  	}
  	function getMonto(){
  		return $this->monto;
  	}
  	function setNumeroGuia($numeroGuia){
  		$this->numeroGuia = $numeroGuia; 
  	}
  	function getNumeroGuia(){
  		return $this->numeroGuia;
  	}
  	function setFecha($fecha){
  		$this->fecha = $fecha;
  	}
  	function getFecha(){
  		return $this->fecha;
  	}
    function setGastoReal($gastoReal){
      $this->gastoReal = $gastoReal;
    }
    function getGastoReal(){
      return $this->gastoReal;
    }
  }

?>