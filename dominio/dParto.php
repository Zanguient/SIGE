<?php 

class dParto{
	
	private $numeroBovino;
	private $fechaParto;
	private $generoBecerro;
	private $descripcionParto;
	private $idParto;

	public function dParto(){}

	public function setFechaParto($fechaParto){
		$this->fechaParto = $fechaParto;
	}

	public function getFechaParto(){
		return $this->fechaParto;
	}

	public function setGeneroBecerro($generoBecerro){
		$this->generoBecerro = $generoBecerro;
	}

	public function getGeneroBecerro(){
		return $this->generoBecerro;
	}

	public function setDescripcionParto($descripcionParto){
		$this->descripcionParto = $descripcionParto;
	}

	public function getDescripcionParto(){
		return $this->descripcionParto;
	}
	
	public function setNumeroBovino($numero){
		$this->numeroBovino = $numero;
	}

	public function getNumeroBovino(){
		return $this->numeroBovino;
	}

	public function setIdParto($idParto){
		$this->idParto = $idParto;
	}

	public function getIdParto(){
		return $this->idParto;
	}
}

 ?>