function cargarPaginaPesos (url) {
    $('#contenedorPesos').load(url);
}
function mostrarformulario(numeroBovino){
	var numeroB = document.getElementById("numeroBovino");
	var divForm = document.getElementById("formularioInsertar");

	divForm.style.display = "";
	numeroB.value=numeroBovino;
}

function insertarPeso(){
	var formData = new FormData(document.getElementById("insertarPesos")); 
    formData.append("opcion", 1);
    $.ajax({
    url : "controladora/ctrPesa.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    alert(data);
   // var div = document.getElementById("mensaje3");
   // div.innerHTML = data;
   // cargarPaginaPartos('interfaz/fpartos/Fr_MostrarPartosAuxiliar.php');
    });     
}
function eliminarPeso(){
    var formData = new FormData(); 
    var numeroBovino = document.getElementById('t_dato').value;
    var fechaPeso = document.getElementById('fecha').value;
    formData.append("opcion", 2);
    formData.append("numero", numeroBovino);
    formData.append("fecha", fechaPeso);
    $.ajax({
    url : "controladora/ctrPesa.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
    //var div = document.getElementById("mensaje1");
    //div.innerHTML = data;
   // cargarPaginaPartos('interfaz/fpartos/Fr_MostrarPartosAuxiliar.php');
    });     
    
}
function mostrarFormActualizar(numeroBovino,fechaPesa,pesa){
    var numeroB = document.getElementById("numero");
    var fechaP = document.getElementById("fecha1");
    var pesoAnimal = document.getElementById("peso");
    var div = document.getElementById("formPeso");
    numeroB.value= numeroBovino;
    fechaP.value = fechaPesa;
    //value y placeholder de Peso
    pesoAnimal.placeholder =pesa;
    pesoAnimal.value=pesa;

    div.style.display ="";

}
function modificarPesa(){
    var formData = new FormData(document.getElementById("ActualizarPeso")); 
    formData.append("opcion", 3);
    $.ajax({
    url : "controladora/ctrPesa.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    alert(data);
   // var div = document.getElementById("mensaje1");
    //div.innerHTML = data;
   // cargarPaginaPartos('interfaz/fpartos/Fr_MostrarPartosAuxiliar.php');
    });     
}
