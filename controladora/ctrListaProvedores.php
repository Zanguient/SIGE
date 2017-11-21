
<?php 

	class ctrListaProvedores{

		public function ctrListaProvedores(){

		}

		public function obtenerProvedores(){
			include ("../../data/dtProvedor.php");
			
			$dtProvedor = new dtProvedor();
			$provedores = $dtProvedor->getProvedores();

			if(!$provedores){
				return false;
			}else{
				return $provedores;
			}
		}

	}

 ?>