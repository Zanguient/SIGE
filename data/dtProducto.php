<?php 
include_once("dtConnection.php");
class dtProducto{

	public function dtProducto(){}

	public function obtenerProductos(){
		include_once("../../dominio/dProducto.php");
		$conec = new dtConnection;
		$listaProducto = array();

		if($conec->conect() == true){
			$query = "SELECT * FROM tbproducto";
			$resultado = mysql_query($query);

			while($row = mysql_fetch_array($resultado)){
		
				$producto = new dProducto;
				
				$producto->setIdProducto($row['idProducto']);	
				$producto->setNombreProducto($row['nombreProducto']);				
				$producto->setUnidadMedida($row['unidadMedida']);	
				array_push($listaProducto, $producto);
			}	
			mysql_close();
			if (!$listaProducto){
				return false;
			} else {
				return $listaProducto;
			}
		}
	}
}

 ?>