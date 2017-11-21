<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<header>
	<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../../interfaz/index/index.php">SIGE</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse nav1">
    <ul class="nav navbar-nav">
      <li><a href="#">Inicio</a></li> 
      <li><a href="#">Padrote</a>
        <ul class="estiloLi">
          <li><a href="#" onclick="cargarPagina('../../interfaz/fpadrote/Fr_InsertarPadrote.php')">Registrar Padrote</a></li>
          <li><a href="#" onclick="cargarPagina('../../interfaz/fpadrote/Fr_MostrarPadrote.php')">Mostrar Padrote</a></li>
        </ul>
      </li> 

      <li><a href="#">Compra por lote</a>
        <ul class="estiloLi">
          <li><a href="#">Registrar Compra</a></li>
          <li><a href="#">Mostrar Compras</a></li>
        </ul>
      </li>

      <li ><a href="#">Finca</a>
        <ul class="estiloLi">
          <li><a href="#">Registrar Finca</a></li>
          <li><a href="#">Mostrar Fincas </a></li>
        </ul>
      </li>

       <li><a href="#">Vendedor</a>
        <ul class="estiloLi">
          <li><a href="#">Registrar vendedor</a></li>
          <li><a href="#">Mostrar Vendedor </a></li>
        </ul>
      </li>
   </ul>    
  </div>
</nav>
	  
  </header>
</body>
</html>