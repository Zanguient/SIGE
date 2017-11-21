<?php 
	include("../../data/dtRegistroIndividual.php");
	class crtMostrarRegistrosIndividuales{


		function obtenerRegistros($IdFactura){
         $dtregistro = new dtRegistroIndividual;

         $registro = $dtregistro->ObtenerRegistros($IdFactura);

         if(!$registro){
				return false;
			}else{
				return $registro;
			}
	 	}

	}

 ?>