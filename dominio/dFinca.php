<?php

class dFinca{

	private $codigo;
	private $nombre;
	private $extension;
	private $direccion;
	private $cantidadApartos;
	private $animalesAparto;
	private $diasPastoreo;
	private $tipoPasto;

	function dFinca(){}

	/*function dFinca($codigo, $nombre, $extension, $provincia, $canton, $distrito, $direccion){
		$this->codigo = $codigo;
		$this->nombre = $nombre;
		$this->extension = $extension;
		$this->provincia = $provincia;
		$this->canton = $canton;
		$this->distrito = $distrito;
		$this->direccion = $direccion; 
	}*/

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	public function getCodigo(){
		return $this->codigo;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setExtension($extension){
		$this->extension = $extension;
	}

	public function getExtension(){
		return $this->extension;
	}

	public function setCantidadApartos($cantidadApartos){
		$this->cantidadApartos = $cantidadApartos;
	}

	public function getCantidadApartos(){
		return $this->cantidadApartos;
	}

	public function setAnimalesAparto($animalesAparto){
		$this->animalesAparto = $animalesAparto;
	}

	public function getAnimalesAparto(){
		return $this->animalesAparto;
	}

	public function setDiasPastoreo($diasPastoreo){
		$this->diasPastoreo = $diasPastoreo;
	}

	public function getDiasPastoreo(){
		return $this->diasPastoreo;
	}

	public function setTipoPasto($tipoPasto){
		$this->tipoPasto = $tipoPasto;
	}

	public function getTipoPasto(){
		return $this->tipoPasto;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getDireccion(){
		return $this->direccion;
	}

}

?>