function cargarPaginaPartos (url) {
    $('#contenedorPartos').load(url);
}

function insertarParto(){
    var formData = new FormData(document.getElementById("FrInsertarParto")); 
    var temp = document.getElementById("genero").value;
    var genero = "";
    if(temp == 1){
    	genero ="Macho";
    }else{
    	genero ="Hembra";
    }
    formData.append("opcion", 1);
    formData.append("genero1", genero);
    $.ajax({
    url : "controladora/ctrPartos.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
    var div = document.getElementById("mensaje1");
    div.innerHTML = data;
    cargarPaginaPartos('interfaz/fpartos/Fr_MostrarPartosAuxiliar.php');
    });     
}

function modificarParto(){
    var formData = new FormData(document.getElementById("FrModificarParto")); 
    var temp = document.getElementById("genero").value;
    var genero = "";
    if(temp == 1){
        genero ="Macho";
    }else{
        genero ="Hembra";
    }
    formData.append("opcion", 2);
    formData.append("genero1", genero);
    $.ajax({
    url : "controladora/ctrPartos.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    var div = document.getElementById("mensaje1");
    div.innerHTML = data;
    cargarPaginaPartos('interfaz/fpartos/Fr_MostrarPartosAuxiliar.php');
    });     
}

function eliminarParto(){
    var formData = new FormData(); 
    var idParto = document.getElementById('t_dato').value;
    formData.append("opcion", 3);
    formData.append("id", idParto);
    $.ajax({
    url : "controladora/ctrPartos.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    var div = document.getElementById("mensaje1");
    div.innerHTML = data;
    cargarPaginaPartos('interfaz/fpartos/Fr_MostrarPartosAuxiliar.php');
    });     
    
}

