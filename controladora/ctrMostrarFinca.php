<?php

include("../../data/dtRegistroFinca.php");

class ctrMostrarFinca{

	function ctrMostrarFinca(){}

      function obtenerFincas(){
            $dtRegFinca = new dtRegistroFinca;
            $listaFincas = $dtRegFinca->ObtenerFincas($cedula = 1);
            if(!$listaFincas){
                  return false;
            }
            else{
                  return $listaFincas;
            }
      }

      function obtenerFinca($codigo){
            $dtRegFinca = new dtRegistroFinca;
            $listaFincas = $dtRegFinca->ObtenerFinca($codigo);
            if(!$listaFincas){
                  return false;
            }
            else{
                  return $listaFincas;
            }
      }
}