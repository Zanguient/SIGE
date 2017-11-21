<?php 
class dVentaProducto{

	private $idVenta;
	private $producto;
	private $numeroRecibo;
	private $fechaVenta;
	private $cantidad;
	private $precioUnitario;
	private $total;

	public  function dVentaProducto(){}

	public function setIdVenta($idVenta){
		$this->idVenta = $idVenta;
	}

	public function getIdVenta(){
		return $this->idVenta;
	}

	public function setProducto($producto){
		$this->producto = $producto;
	}

	public function getProducto(){
		return $this->producto;
	}

	public function setNumeroRecibo($numeroRecibo){
		$this->numeroRecibo = $numeroRecibo;
	}

	public function getNumeroRecibo(){
		return $this->numeroRecibo;
	}

	public function setFechaVenta($fechaVenta){
		$this->fechaVenta = $fechaVenta;
	}

	public function getFechaVenta(){
		return $this->fechaVenta;
	}

	public function setCantidad($cantidad){
		$this->cantidad = $cantidad;
	}

	public function getCantidad(){
		return $this->cantidad;
	}

	public function setPrecioUnitario($precioUnitario){
		$this->precioUnitario = $precioUnitario;
	}

	public function getPrecioUnitario(){
		return $this->precioUnitario;
	}

	public function setTotal($total){
		$this->total = $total;
	}

	public function getTotal(){
		return $this->total;
	}
}

 ?>