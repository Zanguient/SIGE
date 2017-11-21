function cargarPaginaCompraP (url) {
    $('#contenedorCProductos').load(url);
}

function mostrarCFactura(){
	var div = document.getElementById('cFactura');
	var check = document.getElementById('opcion1');

	if(check.checked  == true){
		div.style.display = "";
	}else{
		div.style.display = "none";
	}
}
function insertarCompraProducto(){
	var check1 = document.getElementById("opcion1");
	var factura = document.getElementById("numeroFactura").value;
	var check2 = document.getElementById("opcion2");
	var gastoReal = 0;
	var gastoTributable=0;

	if(check1.checked == true && factura!=""){
	    numeroFactura = factura;
	    gastoReal =1;
	}else{
		gastoReal=0;
		numeroFactura=null;
	}

	if(check2.checked == true){
		gastoTributable=1;
	}

	var formData = new FormData(document.getElementById("insertarCompraP")); 
    formData.append("opcion", 1);
    formData.append("gastoReal",gastoReal);
    formData.append("gastoTributable",gastoTributable);
    formData.append("numeroFactura",numeroFactura);
    $.ajax({
    url : "controladora/ctrCompraProductos.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    var div = document.getElementById("mensaje2");
    div.innerHTML = data;
    cargarPaginaCompraP('interfaz/fCompraProductos/Fr_MostrarCompraProductos.php');
    });     
}

function eliminarCompraProducto(){
	var formData = new FormData(); 
    var idGasto = document.getElementById('t_dato').value;
    formData.append("opcion", 2);
    formData.append("id", idGasto);
    $.ajax({
    url : "controladora/ctrCompraProductos.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    var div = document.getElementById("mensaje2");
    div.innerHTML = data;
   cargarPaginaCompraP('interfaz/fCompraProductos/Fr_MostrarCompraProductos.php');
    });     
}

function seleccionarCheckBox(){

    var temp = document.getElementById('temp').value;
    var temp2 = document.getElementById('temp2').value;
    var check1 = document.getElementById('opcion1');
    var check2 = document.getElementById('opcion2');
    if(temp == 1){
        check1.checked =true;
        mostrarCFactura();
    }
    if(temp2 == 1){
        check2.checked = true;
    }
}

function actualizarCompraProductos(){
    var check1 = document.getElementById("opcion1");
    var factura = document.getElementById("numeroFactura").value;
    var check2 = document.getElementById("opcion2");
    var gastoReal = 0;
    var gastoTributable=0;

    if(check1.checked == true && factura!=""){
        numeroFactura = factura;
        gastoReal =1;
    }else{
        gastoReal=0;
        numeroFactura=null;
    }

    if(check2.checked == true){
        gastoTributable=1;
    }

    var formData = new FormData(document.getElementById("ActualizarCompraP")); 
          
    formData.append("opcion", 3);
    formData.append("gastoReal",gastoReal);
    formData.append("gastoTributable",gastoTributable);
    formData.append("numeroFactura",numeroFactura);
    $.ajax({
    url : "controladora/ctrCompraProductos.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    alert(data);
    cargarPaginaCompraP('interfaz/fCompraProductos/Fr_MostrarCompraProductos.php');
    });   
}
   