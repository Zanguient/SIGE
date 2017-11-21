<?php 

class dBovino{
	private $numero;
	private $codigofinca;
	private $nombre;
	private $fechaNacimieno;
	private $sexo;
	private $raza;
	private $edad;
	private $numeroPadre;
	private $numeroMadre;
	private $estado;
	private $idEstado;

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getNumero(){
		return $this->numero;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setFechaNacimiento($fechaNacimieno){
		$this->fechaNacimieno = $fechaNacimieno;
	}

	public function getFechaNacimiento(){
		return $this->fechaNacimieno;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setRaza($raza){
		$this->raza = $raza;
	}

	public function getRaza(){
		return $this->raza;
	}

	public function setEdad($edad){
		$this->edad = $edad;
	}

	public function getEdad(){
		return $this->edad;
	}

	public function setNumeroPadre($numeroPadre){
		$this->numeroPadre = $numeroPadre;
	}

	public function getNumeroPadre(){
		return $this->numeroPadre;
	}

	public function setNumeroMadre($numeroMadre){
		$this->numeroMadre = $numeroMadre;
	}

	public function getNumeroMadre(){
		return $this->numeroMadre;
	}
	public function setCodigo($codigo){
		$this->codigofinca = $codigo;
	}

	public function getCodigo(){
		return $this->codigofinca;
	}
	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getEstado(){
		return $this->estado;
	}
	public function setIdEstado($idEstado){
		$this->idEstado = $idEstado;
	}

	public function getIdEstado(){
		return $this->idEstado;
	}
}

 ?>