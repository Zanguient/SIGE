<?php 

class dProducto{

	private $idProducto;
	private $nombreProducto;
	private $unidadMedida;

	public function dProducto(){}

	public function setIdProducto($idProducto){
		$this->idProducto = $idProducto;
	}

	public function getIdProducto(){
		return $this->idProducto;
	}

	public function setNombreProducto($nombreProducto){
		$this->nombreProducto = $nombreProducto;
	}

	public function getNombreProducto(){
		return $this->nombreProducto;
	}

	public function setUnidadMedida($unidadMedida){
		$this->unidadMedida = $unidadMedida;
	}

	public function getUnidadMedida(){
		return $this->unidadMedida;
	}
}

 ?>