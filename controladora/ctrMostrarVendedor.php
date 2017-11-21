<?php 
	
	include("../../data/dtVendedor.php");

	class ctrMostrarVendedor{

      	function obtenerVendedor($codigo){
                  $dtRegVendedor = new dtVendedor;
                  $listaVendedores = $dtRegVendedor->obtenerVendedor($codigo);
                  if(!$listaVendedores){
                        return false;
                  }
                  else{
                        return $listaVendedores;
                  }
            }

            function obtenerVendedores(){
                  $dtRegVendedor = new dtVendedor;
                  $listaVendedores = $dtRegVendedor->obtenerVendedores();
                  if(!$listaVendedores){
                        return false;
                  }
                  else{
                        return $listaVendedores;
                  }
            }

            function obtenerCuentas($codigo){
                  $dtRegVendedor = new dtVendedor;
                  $listaVendedores = $dtRegVendedor->obtenerCuentas($codigo);
                  if(!$listaVendedores){
                        return false;
                  }
                  else{
                        return $listaVendedores;
                  }
            }

	}

 ?>