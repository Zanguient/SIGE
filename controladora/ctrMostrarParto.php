<?php 
	include("../../data/dtParto.php");
	class ctrMostrarParto{

      	function ctrMostrarParto(){}

      	function obtenerPartos($numeroAnimal){
                  $dtPartos = new dtParto;
                  $listaPartos = $dtPartos->obtenerPartos($numeroAnimal);
                  if(!$listaPartos){
                        return false;
                  }
                  else{
                        return $listaPartos;
                  }
            }

            function obtenerParto($id){
                  $dtPartos = new dtParto;
                  $listaPartos = $dtPartos->obtenerParto($id);
                  if(!$listaPartos){
                        return false;
                  }
                  else{
                        return $listaPartos;
                  }
            }
	}

 ?>