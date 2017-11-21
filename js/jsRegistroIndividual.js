function insertarRegistro(nombre){
    var formData = new FormData(document.getElementById(nombre)); 
    var id = document.getElementById('idFactura').value;
    formData.append("opcion", 1);
    formData.append("valor", 2);
    $.ajax({
    url : "../../controladora/ctrInsertarRegistroIndivicual.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
        cargarPagina('../../interfaz/fregistroIndividual/fr_MostrarRegistros.php?IdFactura='+id);
    });     
}

function cargarPagina(url) {
    $('#contenedor').load(url);
}

function cargarPaginaRegIndividual(url) {
    $('#contenedorRegIndividual').load(url);
}