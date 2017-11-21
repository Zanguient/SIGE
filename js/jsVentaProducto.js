function cargarPaginaVentaProducto(url) {
    $('#contenedorVentas').load(url);
}

function insertarVentaProducto (){
    var formData = new FormData(document.getElementById("frmVentaProducto"));
    var recibo = document.getElementById('txtNumRecibo').value; 
    if(recibo == null){
    	formData.append("recibo", 0);
    }
    else{
    	formData.append("recibo", recibo);
    }
    formData.append("opcion", 1);
    $.ajax({
    url : "controladora/ctrVentaProducto.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
        cargarPaginaVentaProducto('interfaz/fVentaProducto/Fr_MostrarVentaProducto.php');
    }); 
}

function ocultarTodos(){
    document.getElementById('confirmacionEliminar').style.display = "none";
    document.getElementById('confirmacionActualizar').style.display = "none";
    document.getElementById('mensajeConfirmacion').innerHTML = "";
    document.getElementById('contenedorActualizar').style.display="none";
}

function confirmarEliminar(id){
    ocultarTodos();
    document.getElementById('confirmacionEliminar').style.display = "";
    document.getElementById('idVentaEliminar').value = id;
    document.getElementById('mensajeConfirmacion').innerHTML = "¿Está seguro que desea realizar esta operación?";
}

function recorrerTabla(posicion){
    var tabla = document.getElementById('tablaVentas');
    var columnas = tabla.rows[posicion].getElementsByTagName('td');
    var producto = columnas[7].innerHTML;
    var recibo = columnas[5].innerHTML;
    var fecha = columnas[6].innerHTML;
    var cantidad = columnas[2].innerHTML;
    var precio = columnas[3].innerHTML;
    var total = columnas[4].innerHTML;
    var id = columnas[8].innerHTML;
    document.getElementById('txtNumRecibo').value = recibo;
    document.getElementById('fecha').value = fecha;
    document.getElementById('txtCantidad').value = cantidad;
    document.getElementById('txtPrecio').value = precio;
    document.getElementById('txtTotal').value = total;
    document.getElementById('idVenta').value = id;
    recorrerSelect(producto);
    mostrarContenedorActualizar();
}

function recorrerSelect(id){
    var select = document.getElementById('producto');
    for(var i = 0; i < select.length; i++){
        if(select[i].value == id){
            select[i].selected = true;
        }
    }
}

function mostrarContenedorActualizar(){
    ocultarTodos();
    document.getElementById('contenedorActualizar').style.display="";
}

function confirmarActualizar(){
    document.getElementById('mensajeConfirmacion').innerHTML = "¿Está seguro que desea realizar esta operación?";
    document.getElementById('confirmacionActualizar').style.display = "";
}

function actualizarVenta(){
    var formData = new FormData(document.getElementById("frmActualizarVenta")); 
    var recibo = document.getElementById('txtNumRecibo').value; 
    if(recibo == "No hay Recibo"){
        formData.append("recibo", 0);
        alert(0);
    }
    else{
        formData.append("recibo", recibo);
    }
    formData.append("opcion", 2);
    $.ajax({
    url : "controladora/ctrVentaProducto.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
        cargarPaginaVentaProducto('interfaz/fVentaProducto/Fr_MostrarVentaProducto.php');
    }); 
}

function eliminarVenta(){
    var formData = new FormData(); 
    formData.append("opcion", 3);
    formData.append("id", document.getElementById('idVentaEliminar').value);
    $.ajax({
    url : "controladora/ctrVentaProducto.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
        cargarPaginaVentaProducto('interfaz/fVentaProducto/Fr_MostrarVentaProducto.php');
    });     
}