function insertarVenta(){

    var formData = new FormData(document.getElementById("frmInsertarVenta")); 
    formData.append("opcion", 1);
    var bovinos = enviarTabla();
    var cantidad = bovinos.length;
    formData.append("cantidadRegistros", cantidad);
    for(var i = 0; i < bovinos.length; i++){
        formData.append("arete"+i, bovinos[i].arete);
        formData.append("peso"+i, bovinos[i].peso);
        formData.append("precio"+i, bovinos[i].precio); 
    }    
    if(document.getElementById('reportada').checked == true){
        formData.append("reportada", 1);
    }else{
        formData.append("reportada", 0);
    }
    $.ajax({
    url : "controladora/ctrVenta.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
    //var div = document.getElementById("mensaje");
    //div.innerHTML = data;
    //cargarPaginaVenta('interfaz/fVenta/Fr_MostrarVentas.php');
    });     
}

function insertarVentaBovino(){
    var bovinos = enviarTabla();
    for(var i = 0; i < bovinos.length; i++){
        alert("arete: " + bovinos[i].arete);

        var formData = new FormData(); 
        formData.append("opcion", 4);
        formData.append("arete", bovinos[i].arete);
        formData.append("peso", bovinos[i].peso);
        formData.append("precio", bovinos[i].precio);
        $.ajax({
        url : "controladora/ctrVenta.php",
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
}

function cargarPaginaVenta(url) {
    $('#contenedorVentas').load(url);
}

function ocultarTodos(){
    document.getElementById('confirmacionEliminar').style.display = "none";
    document.getElementById('confirmacionActualizar').style.display = "none";
    document.getElementById('mensajeConfirmacion').innerHTML = "";
    document.getElementById('contenedorActualizar').style.display="none";
}

function confirmarEliminar(id){
    ocultarTodos();
    document.getElementById('confirmacionEliminar').style.display = "";
    document.getElementById('idVentaEliminar').value = id;
    document.getElementById('mensajeConfirmacion').innerHTML = "¿Está seguro que desea realizar esta operación?";
}

function recorrerTabla(posicion){
    var tabla = document.getElementById('tablaVentas');
    var columnas = tabla.rows[posicion].getElementsByTagName('td');
    var idVenta = columnas[3].innerHTML;
    var fecha = columnas[1].innerHTML;
    var reportada = columnas[4].innerHTML;
    var monto = columnas[2].innerHTML;
    document.getElementById('fecha').value = fecha;
    document.getElementById('ganancia').value = monto;
    document.getElementById('idVenta').value = idVenta;
    seleccionarCheck(reportada);
    mostrarContenedorActualizar();
}

function seleccionarCheck(reportada){
    if(reportada == 1){
        document.getElementById('reportada').checked = true;
    }
    else{
        document.getElementById('reportada').checked = false;
    }
}

function mostrarContenedorActualizar(){
    ocultarTodos();
    document.getElementById('contenedorActualizar').style.display="";
}

function confirmarActualizar(){
    document.getElementById('mensajeConfirmacion').innerHTML = "¿Está seguro que desea realizar esta operación?";
    document.getElementById('confirmacionActualizar').style.display = "";
}

function actualizarVenta(){
    var formData = new FormData(document.getElementById("frmActualizarVenta")); 
    formData.append("opcion", 2);
    if(document.getElementById('reportada').checked == true){
        formData.append("reportada1", 1);
    }else{
        formData.append("reportada1", 0);
    }
    $.ajax({
    url : "controladora/ctrVenta.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
    //var div = document.getElementById("mensaje");
    //div.innerHTML = data;
    cargarPaginaVenta('interfaz/fVenta/Fr_MostrarVentas.php');
    });     
}

function eliminarVenta(){
    var formData = new FormData(); 
    formData.append("opcion", 3);
    formData.append("id", document.getElementById('idVentaEliminar').value);
    $.ajax({
    url : "controladora/ctrVenta.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        alert(data);
    //var div = document.getElementById("mensaje");
    //div.innerHTML = data;
    cargarPaginaVenta('interfaz/fVenta/Fr_MostrarVentas.php');
    });     
}

function desactivarBoton(posicion){
    document.getElementById(posicion).disabled  = true;
}

function activarBoton(posicion){
    document.getElementById(posicion).disabled  = false;
}

function add(button, posicion) {
    desactivarBoton(posicion);
    var row = button.parentNode.parentNode;
    var cells = row.querySelectorAll('td:not(:last-of-type)');
    addToCartTable(cells, posicion);
}

function remove() {
    var row = this.parentNode.parentNode;
    document.querySelector('#tbBovinosAgregados tbody')
            .removeChild(row);
    var cells = row.querySelectorAll('td:not(:last-of-type)');
    var posicion = cells[4].innerText;
    alert (posicion);
    activarBoton(posicion);
}

function addToCartTable(cells, posicion) {
   var code = cells[0].innerText;
   var name = cells[1].innerText;
   
   var newRow = document.createElement('tr');
   
   newRow.appendChild(createCell(code));
   newRow.appendChild(createCell(name));
   var cellInputQty = createCell();
   cellInputQty.appendChild(createInputQty());
   newRow.appendChild(cellInputQty);
   var cellInputQty2 = createCell();
   cellInputQty2.appendChild(createInputQty());
   newRow.appendChild(cellInputQty2);
   var cellRemoveBtn = createCell();
   cellRemoveBtn.appendChild(createRemoveBtn())
   newRow.appendChild(createCell(posicion)).style.display = "none";
   newRow.appendChild(cellRemoveBtn);
   var cellInputQty3 = createCell();
   cellInputQty3.appendChild(crearInputOculto(code));
   newRow.appendChild(cellInputQty3).style.display = "none";
   document.querySelector('#tbBovinosAgregados tbody').appendChild(newRow);
}

function createInputQty() {
    var inputQty = document.createElement('input');
    inputQty.type = 'number';
    inputQty.className = 'input';
    return inputQty;
}

function crearInputOculto(numero) {
    var inputQty = document.createElement('input');
    inputQty.type = 'hidden';
    inputQty.value = numero;
    inputQty.className = 'input';
    return inputQty;
}

function createRemoveBtn() {
    var btnRemove = document.createElement('button');
    btnRemove.onclick = remove;
    btnRemove.innerText = 'Descartar';
    return btnRemove;
}

function createCell(text) {
    var td = document.createElement('td');
    if(text) {
        td.innerText = text;
    }
    return td;
}

function enviarTabla(){
    var pesoBovino = "";
    var precioBovino = "";
    var areteBovino = "";
    var opcion = 1;
    var bovinos = new Array();
    var contador = 0;
    $("#tbBovinosAgregados").find(".input").each(function () {
        if(opcion == 1){
            pesoBovino = $(this).val();
            opcion = 2;
        }else if(opcion == 2){
            precioBovino = $(this).val();
            opcion = 3;
        }else if(opcion == 3){
            areteBovino = $(this).val();
            var bovino = new Object();
            bovino.arete = areteBovino;
            bovino.peso = pesoBovino;
            bovino.precio = precioBovino;
            bovinos[contador] = bovino;
            contador ++;
            opcion = 1;
        }         
    });
    
    return bovinos;
}