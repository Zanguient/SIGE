function insertarServicio(){

    var formData = new FormData(document.getElementById("frmInsertarServicio")); 
    formData.append("opcion", 1);
    $.ajax({
    url : "controladora/ctrServicio.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
    //var div = document.getElementById("mensaje");
    //div.innerHTML = data;
    cargarPaginaServicio('interfaz/fServicio/Fr_MostrarServicios.php');
    });     
}

function actualizarServicio(){

    var formData = new FormData(document.getElementById("frmActualizarServicio")); 
    formData.append("opcion", 3);
    $.ajax({
    url : "controladora/ctrServicio.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
    //var div = document.getElementById("mensaje");
    //div.innerHTML = data;
    cargarPaginaServicio('interfaz/fServicio/Fr_MostrarServicios.php');
    });     
}

function cargarPaginaServicio(url) {
    $('#contenedorServicio').load(url);
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
    document.getElementById('idServicio').value = id;
    document.getElementById('mensajeConfirmacion').innerHTML = "¿Está seguro que desea realizar esta operación?";
}

function eliminarServicio(){
    alert(document.getElementById('idServicio').value);
    var formData = new FormData(); 
    formData.append("opcion", 2);
    formData.append("id", document.getElementById('idServicio').value);
    $.ajax({
    url : "controladora/ctrServicio.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
    //var div = document.getElementById("mensaje");
    //div.innerHTML = data;
    cargarPaginaServicio('interfaz/fServicio/Fr_MostrarServicios.php');
    });     
}

function recorrerTabla(posicion){
    var tabla = document.getElementById('tablaServicios');
    var columnas = tabla.rows[posicion].getElementsByTagName('td');
    var idServicio = columnas[5].innerHTML;
    var fecha = columnas[1].innerHTML;
    var inseminador = columnas[3].innerHTML;
    var repitencia = columnas[4].innerHTML;
    var padrote = columnas[6].innerHTML;
    var vaca = columnas[0].innerHTML;
    document.getElementById('vaca').value = vaca;
    document.getElementById('fecha').value = fecha;
    document.getElementById('inseminador').value = inseminador;
    document.getElementById('idServicio').value = idServicio;
    document.getElementById('repeticiones').value = repitencia;
    recorrerSelect(padrote);
    mostrarContenedorActualizar();
}

function recorrerSelect(id){
    var select = document.getElementById('padre');
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
