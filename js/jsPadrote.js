function insertarPadrote(valor){

    var formData = new FormData(document.getElementById("insertarPadrote")); 
    formData.append("opcion", 1);
    formData.append("valor", valor);
    $.ajax({
    url : "../../controladora/ctrPadrote.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    var div = document.getElementById("mensaje");
    div.innerHTML = data;
    cargarPaginaPadrote('../../interfaz/fpadrote/Fr_MostrarPadrote.php');
    });     
}
function actualizarPadrote(valor,id){
    var formData = new FormData(document.getElementById("actualizarPadrote")); 
    formData.append("opcion", 2);
    formData.append("valor", valor);
    formData.append("id", id);
    $.ajax({
    url : "../../controladora/ctrPadrote.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    var div = document.getElementById("mensaje");
    div.innerHTML = data;
    cargarPaginaPadrote('../../interfaz/fpadrote/Fr_MostrarPadrote.php');
    });     
}
function eliminarPadrote(){
    var formData = new FormData(); 
    var id = document.getElementById('t_dato').value;
    formData.append("opcion", 3);
    formData.append("id", id );
    $.ajax({
    url : "../../controladora/ctrPadrote.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    var div = document.getElementById("mensaje");
    div.innerHTML = data;
    cargarPaginaPadrote('../../interfaz/fpadrote/Fr_MostrarPadrote.php');
    });     
    
}
function cargarPaginaPadrote(url) {
    $('#contenedor').load(url);
}

function mostrarFormulario(valor){
    check1 = document.getElementById("check1");
    check2 = document.getElementById("check2");
    check3 = document.getElementById("check3");

    if(valor == 1){
        check2.checked = 0;
        check3.checked = 0;
        cargarFormularioPadrote("Fr_InsertarPadrotePropio.php");
    }else if(valor == 2){
        check1.checked = 0;
        check3.checked = 0;
        cargarFormularioPadrote("Fr_InsertarPadroteAlquilado.php");
    }else if(valor == 3){
        check2.checked = 0;
        check1.checked = 0;
        cargarFormularioPadrote("Fr_InsertarPadroteInseminacion.php");
    }

}
function InterfazActualizarPadrote(identificador,id){

    if(identificador == 1){
          alert("A PADROTE PROPIO");
        cargarFormularioPadrote("Fr_ActualizarPadrotePropio.php?id="+id);
    }else if(identificador == 2){
         alert("A PADROTE ALQUILADO");
        cargarFormularioPadrote("Fr_ActualizarPadroteAlquilado.php?id="+id);
    }else if(identificador == 3){
         alert("A PADROTE INSEMINADO");
        cargarFormularioPadrote("Fr_ActualizarPadroteInseminado.php?id="+id);
    }

}
function cargarFormularioPadrote(url) {
    alert("llamo al javascript :)");
    $('#formularios').load(url);
}