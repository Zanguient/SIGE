<?php 

class dPesoAnimal{
	
	private $numeroBovino;
	private $fechaPeso;
	private $pesoAnimal;
	private $gananciaPeso;
	

	public function dPesoAnimal(){}

	public function setNumeroBovino($numeroBovino){
		$this->numeroBovino = $numeroBovino;
	}

	public function getNumeroBovino(){
		return $this->numeroBovino;
	}
	public function setFechaPeso($fechaPeso){
		$this->fechaPeso = $fechaPeso;
	}

	public function getFechaPeso(){
		return $this->fechaPeso;
	}
	public function setPesoAnimal($pesoAnimal){
		$this->pesoAnimal = $pesoAnimal;
	}

	public function getPesoAnimal(){
		return $this->pesoAnimal;
	}
	public function setGananciaPeso($gananciaPeso){
		$this->gananciaPeso = $gananciaPeso;
	}

	public function getGananciaPeso(){
		return $this->gananciaPeso;
	}		
}

 ?>