<?php

	class dtConnection{
	  
	  	var $conect;
	  
	    function dtConnection(){}
		 
		function getCon(){
			return $this->conect;
		}

		function conect() {
		    if(!($con = mysql_connect("localhost", "root", ""))){
			    echo "Error to conect the Data Base";
				exit();
		    }
			if (!mysql_select_db("bdsige", $con)) {
			   echo "Error to select the Data Base";
			   exit();
			}
		    
			$this->conect = $con;
			return true;
		}

		function crearConexionPDO() {
		    try {
			  $this->conect = new PDO('mysql:host=localhost;dbname=bdsige', 'root', '');
			} catch (Exception $e) {
			  return false;
			}
			return $this->conect;
		}
	}

?>