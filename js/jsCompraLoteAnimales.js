function insertarCompraLotes(){
    var numeroFactura = document.getElementById("factura").value;
    var gastoReal = 1;
    var valor = 1;
    if(numeroFactura == ""){
      gastoReal = 0;
      valor = 0;
      
    }
    var formData = new FormData(document.getElementById("FrComprarLotesAnimales")); 
    formData.append("opcion", 1);
    formData.append("gastoReal", gastoReal);
    formData.append("valor", valor);
    $.ajax({
    url : "../../controladora/ctrCompraLoteAnimales.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
     alert(data);
     cargarPaginaCompra('../../interfaz/fcomprarLotes/Fr_MostrarCompraLotes.php');
    });     
}
function ActualizarCompraLotes(){
    var numeroFactura = document.getElementById("nFactura").value;
    var gastoReal = 1;
    var valor = 1;
    if(numeroFactura == ""){
      gastoReal = 0;
      valor = 0;
    }
    var formData = new FormData(document.getElementById("FrActualizarLotesAnimales")); 
          
    formData.append("opcion", 2);
    formData.append("gastoReal", gastoReal);
    formData.append("valor",valor);
    $.ajax({
    url : "../../controladora/ctrCompraLoteAnimales.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    alert(data);
    cargarPaginaCompra('../../interfaz/fcomprarLotes/Fr_MostrarCompraLotes.php');
    });     
}     

function eliminarCompraLote(){
    var formData = new FormData(); 
    var idFactura = document.getElementById('t_dato').value;
    formData.append("opcion", 3);
    formData.append("idFactura", idFactura );
    $.ajax({
    url : "../../controladora/ctrCompraLoteAnimales.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
    cargarPaginaCompra('../../interfaz/fcomprarLotes/Fr_MostrarCompraLotes.php');
    });     
    
}
function cargarPaginaCompra (url) {
    $('#contenedor').load(url);
}