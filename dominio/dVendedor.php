<?php

class dVendedor{

	private $nombre;
	private $codigo;
	private $telefono;
	private $direccion;
	private $cuentaBancaria;

	function dVendedor(){
		$this->cuentaBancaria = array();
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	public function getCodigo(){
		return $this->codigo;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setCuentaBancaria($cuentaBancaria){
		array_push($this->cuentaBancaria, $cuentaBancaria);
	}
	
	public function getCuentaBancaria(){
		return array_pop($this->cuentaBancaria);
	}

	public function getCuentasBancarias(){
		return $this->cuentaBancaria;
	}
}

?>