function mostrarformularioPromedios(numeroBovino,nombre){
	var numeroB = document.getElementById("numeroBovino");
	var nombreB = document.getElementById("nombre");
	var divForm = document.getElementById("formularioInsertar");

	divForm.style.display = "";
	numeroB.value=numeroBovino;
	nombreB.value=nombre;
}

function mostrarPromedio(){
	var formData = new FormData(document.getElementById("MostrarPromedio"));
    var fechaI = document.getElementById("fechaI").value; 
    var fechaF = document.getElementById("fechaF").value;
    var nBovino = document.getElementById("numeroBovino").value;
    
    formData.append("opcion", 1);
    $.ajax({
    url : "controladora/ctrPromedios.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
    	alert("regreso");
     var dataJson = eval(data);
         alert("regreso");
         alert(data);   
         

            for(var i in dataJson){
               	 var numeroRegistrosIndividuales = dataJson[i].nregistros;
		         var sumaPesasIndividuales = dataJson[i].pesaIndividual;
		         var numeroRegistrosGenerales = dataJson[i].ngeneral;
		         var sumaPesasGenerales = dataJson[i].totalgenerales;
            }

            var promedioI = sumaPesasIndividuales / numeroRegistrosIndividuales;
            var promedioG = sumaPesasGenerales / numeroRegistrosGenerales;

   		 imprimirPromedios(promedioI,promedioG,fechaI,fechaF,nBovino);
    });     
}

function imprimirPromedios(promedioIndividual,promedioGeneral,fechaI,fechaF,nBovino){
	var div =document.getElementById("mostrarPromedios");
	var pIndividual = document.getElementById("pIndividual");
	var pGeneral = document.getElementById("pGeneral");
    var img = document.getElementById("imagenG");

	pIndividual.value = promedioIndividual;
	pGeneral.value =promedioGeneral;

	div.style.display = "";
    alert("interfaz/fPromedioPesa/Grafica.php?fechaI="+fechaI+"&fechaF="+fechaF+"&numeroBovino="+nBovino+"&pGeneral="+promedioGeneral+"");
    img.src = "interfaz/fPromedioPesa/Grafica.php?fechaI="+fechaI+"&fechaF="+fechaF+"&numeroBovino="+nBovino+"&pGeneral="+promedioGeneral+"";
}

