<?php

    include("src/jpgraph.php");
    include("src/jpgraph_line.php");
    include_once("../../data/dtPromedios.php");

    $fechaI = $_GET['fechaI'];
    $fechaF = $_GET['fechaF'];
    $numeroBovino = $_GET['numeroBovino'];
    $pGeneral = $_GET['pGeneral'];

    $dataPromedio = new dtPromedios;
   // echo "Hola pinche cochinada funciona";
    $registros = $dataPromedio->obtenerRegistros($numeroBovino,$fechaI,$fechaF);
    $datosX = array();
    $datosY = array();
    $datosZ=array();
    $opcion = 0;
    foreach ($registros as $registro) {
        if($opcion == 0){
            array_push($datosX, $registro->getFechaPesa());
            $opcion = 1;
        }
        if($opcion == 1){
            array_push($datosY, $registro->getPesa());
            $opcion = 2;
        }
        if($opcion == 2){
            array_push($datosZ, $pGeneral);
            $opcion = 0;
        }
    }
    
    $height=400;
    $width=700;
    $titulo="Grafica lineal";
    $tituloX="Datos X";
    $tituloY="Datos Y";
    $color="blue";
    $ydata = $datosY;
    $graph = new Graph($width, $height, "auto");    
    $graph->SetScale( "textlin");
    $graph->img->SetMargin(50, 50, 20, 50);
    $graph->title->Set($titulo);
 
    $xdata =$datosX;
    $graph->xaxis->SetTickLabels($xdata);
    $graph->xaxis->title->Set($tituloX);
 
    $graph->yaxis->title->Set($tituloY);
      
    $lineplot = new LinePlot($ydata);
    $lineplot->SetColor($color);

    $lineplot2 = new LinePlot($datosZ);
    $lineplot2->SetColor("red");
      
    $graph->Add($lineplot);
    $graph->Add($lineplot2);
    $graph->Stroke(); 

 
?>