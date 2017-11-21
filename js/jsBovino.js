function cargarGuiMostrarPartos(valor){
	if(valor != 0){
		$('#contenedorPartos').load("interfaz/fBovinos/Fr_MostrarBovinos.php?idFinca="+valor);
	}
}

function cargarPaginaBovino (url) {
    $('#contenedorBovinos').load(url);
}

function agregarBovino (){
    var formData = new FormData(document.getElementById("frmInsertarBovino")); 
    formData.append("opcion", 1);
    $.ajax({
    url : "controladora/ctrBovino.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
    }); 
}

function agregarBovinoParto (){
    var formData = new FormData(document.getElementById("FrInsertarParto")); 
    formData.append("opcion", 2);
    $.ajax({
    url : "controladora/ctrBovino.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
    }); 
}

function insertarParto(){
    var formData = new FormData(document.getElementById("FrInsertarParto")); 
    var temp = document.getElementById("genero").value;
    formData.append("opcion", 1);
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

function desplegarCampos(){
    if(document.getElementById('registroFinca').checked){
        document.getElementById('contenedorFrmBovino').style.display = '';
    }
    else{
        document.getElementById('contenedorFrmBovino').style.display = 'none';
    }
}

function invocarMetodo(){
    if(document.getElementById('registroFinca').checked){
        agregarBovinoParto();
    }
    else{
        insertarParto();
    }
}
function invocarCondicion(){
    if(document.getElementById('registroFinca').checked){
        insertarRIndividualBovino();
    }
    else{
       insertarRegistroIndividual();
    }
}
function insertarRegistroIndividual(){
    alert("llego");
    var formData = new FormData(document.getElementById("FrInsertarRegistro")); 
    formData.append("opcion", 1);
    formData.append("valor",1);
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
    
    div.innerHTML = data;
    
    });     
}
function insertarRIndividualBovino(){
    alert("llego :)");

    var formData = new FormData(document.getElementById("FrInsertarRegistro")); 
    formData.append("opcion", 3);
    $.ajax({
    url : "../../controladora/ctrBovino.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    alert(data);
    
    div.innerHTML = data;
    
    });     
}
