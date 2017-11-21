function operacionesVendedor(nombre, numero){
    var formData = new FormData(document.getElementById(nombre)); 
    formData.append("opcion", numero);
    $.ajax({
    url : "controladora/ctrVendedor.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        cargarPaginaVendedor('interfaz/frVendedor/menuVendedor.php');
    });     
    
}

function cargarPaginaVendedor (url) {
    $('#contenedorVendedor').load(url);
}

function eliminarVendedor(){
    var formData = new FormData(); 
    var codigoVendedor = document.getElementById('t_dato').value;
    formData.append("opcion", 5);
    formData.append("codigoVendedor",codigoVendedor);
    $.ajax({
    url : "controladora/ctrVendedor.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        cargarPaginaVendedor('interfaz/frVendedor/menuVendedor.php');
    });     
}

function eliminarCuenta(){
    var cuenta = document.getElementById('t_dato').value;
    var formData = new FormData(); 
    formData.append("opcion", 6);
    formData.append("cuenta",cuenta);
    $.ajax({
    url : "controladora/ctrVendedor.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        cargarPaginaVendedor('interfaz/frVendedor/menuVendedor.php');
    });
}
