<?php 


 class Padrote{

 	private $numeroRegistro;
 	private $razaPadrote;
 	private $nombrePadrote;
 	private $precioAnimal;
 	private $fechaCompra;
 	private $precioPajillaSalto;
 	private $casaComercial;
 	private $numeroCanasta;
 	private $cantidadPajillas;
 	private $id;
 	private $identificador;

 	function Padrote(){}


 	function setNumeroRegistro($numero){
 		$this->numeroRegistro = $numero;
 	}
 	function getNumeroRegistro(){
 		return $this->numeroRegistro;
 	}
 	function setNombrePadrote($nombre){
 		$this->nombrePadrote = $nombre;
 	}
 	function getNombrePadrote(){
 		return $this->nombrePadrote;
 	}
 	function setCasaComercial($casaComercial){
 		$this->casaComercial = $casaComercial;
 	}
 	function getCasaComercial(){
 		return $this->casaComercial;
 	}
 	function setPrecioPajillaSalto($precio){
 		$this->precioPajillaSalto = $precio;
 	}
 	function getPrecioPajillaSalto(){
 		return $this->precioPajillaSalto;
 	}
 	function setNumeroCanasta($numeroCanasta){
 		$this->numeroCanasta = $numeroCanasta;
 	}
 	function getNumeroCanasta(){
 		return $this->numeroCanasta;
 	}
 	function setFechaCompra($fechaCompra){
 		$this->fechaCompra = $fechaCompra;
 	}
 	function getFechaCompra(){
 		return $this->fechaCompra;
 	}
 	function setCantidadPajillas($cantidadPajillas){
 		$this->cantidadPajillas=$cantidadPajillas;
 	}
 	function getCantidadPajillas(){
 		return $this->cantidadPajillas;
 	}
 	function setRazaPadrote($raza){
 		$this->razaPadrote=$raza;
 	}
 	function getRazaPadrote(){
 		return $this->razaPadrote;
 	}
 	function setPrecioAnimal($precioAnimal){
 		$this->precioAnimal=$precioAnimal;
 	}
 	function getPrecioAnimal(){
 		return $this->precioAnimal;
 	}
 	function setId($id){
 		$this->id=$id;
 	}
 	function getId(){
 		return $this->id;
 	}
 	function setIdentificador($identificador){
 		$this->identificador=$identificador;
 	}
 	function getIdentificador(){
 		return $this->identificador;
 	}
 }

?>