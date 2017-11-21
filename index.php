<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>SIGE</title>
	<link rel="stylesheet" href="css/bootstrap.css?v=5">
	<link rel="stylesheet" href="css/estilos.css?v=1">
</head>
<body>

	<div class="navbar-wrapper">
	    <div class="container-fluid">
	        <nav class="navbar navbar-fixed-top">
	            <div class="container">
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    </button>
	                    <a class="navbar-brand" href="#">SIGE</a>
	                </div>
	                <div id="navbar" class="navbar-collapse collapse">
	                    <ul class="nav navbar-nav pull-right">

							<li class=" dropdown">
								<a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Finca <span class="caret"></span></a>
	                            <ul class="dropdown-menu">
	                                <li><a href="javascript:cargarPagina('interfaz/fregistroFinca/Fr_RegistroFinca.php')">Registrar Finca</a></li>
	                                <li><a href="javascript:cargarPagina('interfaz/fregistroFinca/Fr_MostrarFinca.php')">Mostrar Finca</a></li>
	                            </ul>
	                        </li>

	                        <li class=" down">
	                        	<a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bovino <span class="caret"></span></a>
	                            <ul class="dropdown-menu">
	                                <li><a href="javascript:cargarPagina('interfaz/fBovinos/Fr_InsertarBovino.php')">Registrar Bovino</a></li>
	                                <li><a href="javascript:cargarPagina('interfaz/fpadrote/Fr_InsertarPadrote.php')">Registrar Padrote</a></li>
	                                <li><a href="javascript:cargarPagina('interfaz/fBovinos/Fr_MostrarBovinosPropietario.php')">Mostrar Bovino</a></li>
	                                <li><a href="javascript:cargarPagina('interfaz/fpadrote/Fr_MostrarPadrote.php')">Mostrar Padrote</a></li>
	                            </ul>
	                        </li>

	                        <li class=" down">
	                        	<a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Partos <span class="caret"></span></a>
	                            <ul class="dropdown-menu">
	                                <li><a href="javascript:cargarPagina('interfaz/fpartos/Fr_insertarParto.php')">Registrar Parto</a></li>
	                                <li><a href="javascript:cargarPagina('interfaz/fpartos/Fr_MostrarPartosAuxiliar.php')">Mostrar Parto</a></li>
	                            </ul>
	                        </li>

	                        <li class=" down">
	                        	<a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicio <span class="caret"></span></a>
	                            <ul class="dropdown-menu">
	                                <li><a href="javascript:cargarPagina('interfaz/fServicio/Fr_RegistrarServicio.php')">Registrar Servicio</a></li>
	                                <li><a href="javascript:cargarPagina('interfaz/fServicio/Fr_MostrarServicios.php')">Mostrar Servicio</a></li>
	                            </ul>
	                        </li>

	                        <li class=" dropdown">
	                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compra <span class="caret"></span></a>
	                            <ul class="dropdown-menu">
	                                <li class=" dropdown">
	                                    <a href="javascript:cargarPagina('interfaz/fcomprarLotes/Fr_CompraLotesAnimales.php')" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrar Factura</a>
	                                </li>
	                                <li><a href="javascript:cargarPagina('interfaz/fregistroIndividual/fr_InsertarRegistroIndividual.php')">Registrar Compra Individual</a></li>
	                                <li><a href="javascript:cargarPagina('interfaz/fCompraProductos/Fr_InsertarCompraProducto.php')">Registrar Compra Producto</a></li>
	                                <li><a href="javascript:cargarPagina('interfaz/fcomprarLotes/Fr_MostrarCompraLotes.php')">Mostrar Compras Bovino</a></li>
	                                <li><a href="javascript:cargarPagina('interfaz/fCompraProductos/Fr_MostrarCompraProductos.php')">Mostrar Compras Producto</a></li>
	                            </ul>
	                        </li>

	                        <li class=" down">
	                        	<a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Venta <span class="caret"></span></a>
	                            <ul class="dropdown-menu">
	                                <li class=" dropdown">
	                                    <a href="javascript:cargarPagina('interfaz/fVenta/Fr_InsertarVenta.php')" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrar Venta Bovino</a>
	                                </li>
	                                <li><a href="javascript:cargarPagina('interfaz/fVentaProducto/Fr_InsertarVentaProducto.php')">Registrar Venta Producto</a></li>
	                                <li><a href="javascript:cargarPagina('interfaz/fVenta/Fr_MostrarVentas.php')">Mostrar Venta Bovino</a></li>
	                                <li><a href="javascript:cargarPagina('interfaz/fVentaProducto/Fr_MostrarVentaProducto.php')">Mostrar Venta Producto</a></li>
	                            </ul>
	                        </li>

	                        <li class=" dropdown">
	                        	<a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registros de Pesos <span class="caret"></span></a>
	                            <ul class="dropdown-menu">
	                                <li class=" dropdown">
	                                    <a href="javascript:cargarPagina('interfaz/fPesaLeche/Fr_InsertarPesa.php')" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrar Peso Leche</a>
	                                </li>
	                                <li><a href="javascript:cargarPagina('interfaz/fPesoAnimal/Fr_InsertarPeso.php')">Registrar Peso Carne</a></li>
	                                <li><a href="javascript:cargarPagina('interfaz/fPesaLeche/Fr_MostrarPesas.php')">Mostrar Peso Leche</a></li>
	                                <li><a href="javascript:cargarPagina('interfaz/fPesoAnimal/Fr_MostrarPeso.php')">Mostrar Peso Carne</a></li>
	                            </ul>
	                        </li>

	                    </ul>
	                </div>
	            </div>
	        </nav>
	    </div>
	</div>
<br><br><br><br>
	<div class="container-fluid">
		<h1><span>Menú Principal</span></h1>

		<hr>

		<ul>
			<li><a href="interfaz/fcomprarLotes/Fr_ControladoraCompraLotes.php">Compra por Lote</a></li>
			<li><a href="interfaz/fregistroIndividual/menuRegistroIndividual.php">Compra Individual</a></li>
			<li><a href="interfaz/fpadrote/Fr_ControladoraPadrote.php">Padrote</a></li>
			<li><a href="#" onclick="cargarPagina('interfaz/fregistroFinca/menuFinca.php')"> Fincas</a></li>
			<li><a href="#" onclick="cargarPagina('interfaz/frVendedor/menuVendedor.php')"> Vendedores</a></li>
			<li><a href="#" onclick="cargarPagina('interfaz/fpartos/menuPartos.php')">Partos</a></li>
			<li><a href="#" onclick="cargarPagina('interfaz/fBovinos/menuBovino.php')">Bovinos</a></li>
			<li><a href="#" onclick="cargarPagina('interfaz/fCompraProductos/menuCompraProductos.php')">Compra de Productos</a></li>
			<li><a href="#" onclick="cargarPagina('interfaz/fServicio/Fr_MenuServicio.php')">Servicio</a></li>
			<li><a href="#" onclick="cargarPagina('interfaz/fPesaLeche/menuPesaLeche.php')">Registro de Pesa de leche</a></li>
			<li><a href="#" onclick="cargarPagina('interfaz/fPesoAnimal/menuPesoAnimal.php')">Registro de Peso Animal</a></li>
			<li><a href="#" onclick="cargarPagina('interfaz/fPromedioPesa/Fr_MostrarPromedios.php')">Promedios de pesa de leche</a></li>
			<li><a href="#" onclick="cargarPagina('interfaz/fVenta/menuVenta.php')">Venta Bovino</a></li>
			<li><a href="#" onclick="cargarPagina('interfaz/fVentaProducto/menuVentaProducto.php')">Venta Producto</a></li>
		</ul>

		<hr>
		
		<div id="contenedor">

		</div>

	</div>
</body>

</html>

<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js?v=5"></script>
<script type="text/javascript" src="js/jsAcciones.js"></script>