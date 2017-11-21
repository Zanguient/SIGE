function cargarPaginaPeso(url) {
    $('#contenedorPesoAnimal').load(url);
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
    url : "controladora/CtrPesoAnimal.php",
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
    url : "controladora/ctrPesoAnimal.php",
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
function mostrarFormActualizar(numeroBovino,fechaPeso,pesoAnimal,ganancia){
    var numeroB = document.getElementById("numero");
    var fechaP = document.getElementById("fecha1");
    var pesoA = document.getElementById("peso");
    var gananciaP = document.getElementById("ganancia");
    var div = document.getElementById("formPeso");
    numeroB.value= numeroBovino;
    fechaP.value = fechaPeso;
    //value y placeholder de Peso
    pesoA.placeholder =pesoAnimal;
    pesoA.value=pesoAnimal;

    gananciaP.value = ganancia;
    div.style.display ="";

}
function modificarPesoAnimal(){
    var formData = new FormData(document.getElementById("ActualizarPeso")); 
    formData.append("opcion", 3);
    $.ajax({
    url : "controladora/ctrPesoAnimal.php",
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
