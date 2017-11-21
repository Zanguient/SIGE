<?php 

class dPesa{
	
	private $numeroBovino;
	private $fechaPesa;
	private $pesa;
	

	public function dPesa(){}

	public function setNumeroBovino($numeroBovino){
		$this->numeroBovino = $numeroBovino;
	}

	public function getNumeroBovino(){
		return $this->numeroBovino;
	}
	public function setFechaPesa($fechaPesa){
		$this->fechaPesa = $fechaPesa;
	}

	public function getFechaPesa(){
		return $this->fechaPesa;
	}
	public function setPesa($pesa){
		$this->pesa = $pesa;
	}

	public function getPesa(){
		return $this->pesa;
	}	
}

 ?>