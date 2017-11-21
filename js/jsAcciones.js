function cargarPagina (url) {
  	$('#contenedor').load(url);
}


function paginaModificarCompraLote(IdFactura){     
 $('#contenedor').load("../../interfaz/fcomprarLotes/Fr_ActualizarCompraLotes.php?IdFactura="+IdFactura);
}

function paginaModificarPadrote(IdPadrote,identificador){     
 $('#contenedor').load("../../interfaz/fpadrote/Fr_ActualizarPadrote.php?id="+IdPadrote+"&identificador="+identificador);
}

function confirmarOperacion(valor){
    var temporal = document.getElementById('t_dato').value=valor;
    var div = document.getElementById('confirmacion');
    var divMensaje = document.getElementById('mensaje');
    divMensaje.innerHTML = '¿Está seguro que desea realizar está operación?';
    div.style.display = '';
    divMensaje.style.display = '';
}
function confirmarOperacionPeso(numeroBovino,fechaPeso){
    var numero = document.getElementById('t_dato').value=numeroBovino;
    var fecha = document.getElementById('fecha').value = fechaPeso;
    var div = document.getElementById('confirmacion');
    var divMensaje = document.getElementById('mensaje');
    divMensaje.innerHTML = '¿Está seguro que desea realizar está operación?';
    div.style.display = '';
    divMensaje.style.display = '';
}

function cancelarAccion(){
    var div = document.getElementById('confirmacion');
    var divMensaje = document.getElementById('mensaje');
    divMensaje.style.display = 'none';
    div.style.display = 'none';
}
