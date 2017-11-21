<?php


class ctrPromedios{

	function ctrPromedios(){}

	function obtenerPromedios(){
       include('../data/dtPromedios.php');

       $data = new dtPromedios();
       $numeroBovino = $_POST['numeroBovino'];
       $fechaI= $_POST['fechaI'];
       $fechaF =  $_POST['fechaF'];
      
       $array = $data->getPromedios($numeroBovino,$fechaI,$fechaF);

        echo '' . json_encode($array) . '';
           
	}

      

      
}

$op = $_POST['opcion'];
	$control = new ctrPromedios;
	if($op == 1){
	 	$control->obtenerPromedios();
	}
     
      
?>