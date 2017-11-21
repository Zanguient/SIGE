function operacionesFinca(nombre,numero){
    var formData = new FormData(document.getElementById(nombre)); 
    formData.append("opcion", numero);
    $.ajax({
    url : "controladora/ctrInsertarFinca.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    alert(data);
    cargarPaginaFinca('interfaz/fregistroFinca/menuFinca.php');
    });     
    
}

function eliminarFinca(){
    var formData = new FormData(); 
    var codigo = document.getElementById('t_dato').value;
    formData.append("opcion", 3);
    formData.append("codigoFinca", codigo);
    $.ajax({
    url : "controladora/ctrInsertarFinca.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    cargarPaginaFinca('interfaz/fregistroFinca/menuFinca.php');
    });     
    
}


function cargarPaginaFinca (url) {
    $('#contenedorFinca').load(url);
}




