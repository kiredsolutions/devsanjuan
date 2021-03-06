<?php; 
session_start();   
include('../funtions.php');
	
//CONEXION A DB
$mysqli = connect_mysqli(); 

//ajuntar la libreria excel
include "../../PHPExcel/Classes/PHPExcel.php";
date_default_timezone_set('America/Tegucigalpa');

$desde = $_GET['desde'];
$hasta = $_GET['hasta'];
$servicio = $_GET['servicio'];
$unidad = $_GET['unidad'];

//OBTENER NOMBRE SERVICIO
$consulta_servicio = "SELECT nombre 
     FROM servicios 
	 WHERE servicio_id = '$servicio'";
$result = $mysqli->query($consulta_servicio);
$consulta_servicio1 = $result->fetch_assoc();
$servicio_name = $consulta_servicio1['nombre'];

$mes=nombremes(date("m", strtotime($desde)));
$mes1=nombremes(date("m", strtotime($hasta)));
$año=date("Y", strtotime($desde));
$año2=date("Y", strtotime($hasta));

$unidad_name = "";

if($unidad == ""){
	$where = "WHERE CAST(a.fecha_cita AS DATE) BETWEEN '$desde' AND '$hasta' AND a.servicio_id = '$servicio' AND a.status = 0";
}else{
    //OBTENER NOMBRE UNIDAD
    $consulta_unidad = "SELECT nombre 
	      FROM puesto_colaboradores 
		  WHERE puesto_id = '$unidad'";
	$result = $mysqli->query($consulta_unidad);
    $consulta_unidad1 = $result->fetch_assoc();
    $unidad_name = $consulta_unidad1['nombre'];	
	
	$where = "WHERE CAST(a.fecha_cita AS DATE) BETWEEN '$desde' AND '$hasta' AND a.servicio_id = '$servicio' AND c.puesto_id = '$unidad' AND a.status = 0";
}

//EJECUTAMOS LA CONSULTA DE BUSQUEDA
//REGISTROS
$registro = "SELECT CONCAT(c.nombre,' ',c.apellido) AS 'colaborador', (CASE WHEN a.paciente = 'N' THEN 'Nuevo' ELSE 'Subsiguiente' END) AS 'paciente',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 1 THEN a.paciente END) AS '1',  
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 2 THEN a.paciente END) AS '2',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 3 THEN a.paciente END) AS '3',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 4 THEN a.paciente END) AS '4',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 5 THEN a.paciente END) AS '5',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 6 THEN a.paciente END) AS '6',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 7 THEN a.paciente END) AS '7',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 8 THEN a.paciente END) AS '8',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 9 THEN a.paciente END) AS '9',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 10 THEN a.paciente END) AS '10',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 11 THEN a.paciente END) AS '11',  
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 12 THEN a.paciente END) AS '12',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 13 THEN a.paciente END) AS '13',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 14 THEN a.paciente END) AS '14',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 15 THEN a.paciente END) AS '15',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 16 THEN a.paciente END) AS '16',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 17 THEN a.paciente END) AS '17',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 18 THEN a.paciente END) AS '18',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 19 THEN a.paciente END) AS '19',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 20 THEN a.paciente END) AS '20',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 21 THEN a.paciente END) AS '21',  
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 22 THEN a.paciente END) AS '22',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 23 THEN a.paciente END) AS '23',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 24 THEN a.paciente END) AS '24',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 25 THEN a.paciente END) AS '25',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 26 THEN a.paciente END) AS '26',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 27 THEN a.paciente END) AS '27',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 28 THEN a.paciente END) AS '28',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 29 THEN a.paciente END) AS '29',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 30 THEN a.paciente END) AS '30',
COUNT(CASE WHEN DAY(CAST(a.fecha_cita AS DATE)) = 31 THEN a.paciente END) AS '31',
COUNT(a.paciente) AS 'Total'
FROM agenda AS a
INNER JOIN colaboradores AS c
ON a.colaborador_id = c.colaborador_id
".$where."
GROUP BY c.colaborador_id, a.paciente";
$result = $mysqli->query($registro);

$objPHPExcel = new PHPExcel(); //nueva instancia
 
$objPHPExcel->getProperties()->setCreator("ING. EDWIN VELASQUEZ"); //autor
$objPHPExcel->getProperties()->setTitle("REPORTE DIARIO DE USUARIOS"); //titulo
 
//inicio estilos
$titulo = new PHPExcel_Style(); //nuevo estilo
$titulo->applyFromArray(
  array('alignment' => array( //alineacion
      'wrap' => false,
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
    ),
    'font' => array( //fuente
      'bold' => true,
      'size' => 13
    )
));

$firma = new PHPExcel_Style(); //nuevo estilo
$firma->applyFromArray(
  array('alignment' => array( //alineacion
      'wrap' => false,
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
    ),
    'font' => array( //fuente
      'size' => 12,
	  'bold' => true
    ),
	'borders' => array(
      'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
    )
));

$subtitulo1 = new PHPExcel_Style(); //nuevo estilo
 
$subtitulo1->applyFromArray(
  array('font' => array( //fuente
      'arial' => true,
	  'bold' => true,
      'size' => 12
    ),	
	'alignment' => array( //alineacion
      'wrap' => true
    )
));

 
$subtitulo = new PHPExcel_Style(); //nuevo estilo
 
$subtitulo->applyFromArray(
  array('font' => array( //fuente
      'arial' => true,
	  'bold' => true,
      'size' => 12
    ),	
	'alignment' => array( //alineacion
      'wrap' => true,
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
    ),
	'borders' => array( //bordes
      'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
    )
));

$totales = new PHPExcel_Style(); //nuevo estilo
$totales->applyFromArray(
  array('font' => array( //fuente
      'bold' => true,
      'size' => 12
    ),
	'borders' => array(
      'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
    )
));

$texto = new PHPExcel_Style(); //nuevo estilo
$texto->applyFromArray(
  array('alignment' => array( //alineacion
      'wrap' => false,
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
    ),
    'font' => array( //fuente
      'bold' => true,
      'size' => 10
    ),
	'borders' => array( //bordes
      'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
    )
));

$style = new PHPExcel_Style(); //nuevo estilo
$style->applyFromArray(
  array('alignment' => array( //alineacion
      'wrap' => true,
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
    ),
    'font' => array( //fuente
      'bold' => false,
      'size' => 10
    )
));
 
$other = new PHPExcel_Style(); //nuevo estilo
$other->applyFromArray(
  array('alignment' => array( //alineacion
      'wrap' => false,
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
    ),
    'font' => array( //fuente
      'bold' => true,
      'size' => 10
    )
));
 
$bordes = new PHPExcel_Style(); //nuevo estilo
 
$bordes->applyFromArray(
  array('borders' => array(
      'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
    )
));
//fin estilos
 
$objPHPExcel->createSheet(0); //crear hoja
$objPHPExcel->setActiveSheetIndex(0); //seleccionar hora
$objPHPExcel->getActiveSheet()->setTitle("REPORTE DIARIO DE USUARIOS"); //establecer titulo de hoja
 
//orientacion hoja
$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
$objPHPExcel->getActiveSheet()->freezePane('C5'); //INMOVILIZA PANELES 
//tipo papel
$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_LETTER);
$objPHPExcel->getActiveSheet()->freezePane('C5'); //INMOVILIZA PANELES 
//establecer impresion a pagina completa
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(true);
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(0);
//fin: establecer impresion a pagina completa
 
//establecer margenes
$margin = 0.5 / 2.54; // 0.5 centimetros
$marginBottom = 1.2 / 2.54; //1.2 centimetros
$objPHPExcel->getActiveSheet()->getPageMargins()->setTop($margin);
$objPHPExcel->getActiveSheet()->getPageMargins()->setBottom($marginBottom);
$objPHPExcel->getActiveSheet()->getPageMargins()->setLeft($margin);
$objPHPExcel->getActiveSheet()->getPageMargins()->setRight($margin);
//fin: establecer margenes
 
//incluir imagen
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setPath('../../img/logo.png'); //ruta
$objDrawing->setHeight(60); //altura
$objDrawing->setCoordinates('A1');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet()); //incluir la imagen

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setPath('../../img/sesal_logo.png'); //ruta
$objDrawing->setHeight(60); //altura
$objDrawing->setCoordinates('AA1');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet()); //incluir la imagen
//fin: incluir una imagen
 
//establecer titulos de impresion en cada hoja
$objPHPExcel->getActiveSheet()->getPageSetup()->setRowsToRepeatAtTopByStartAndEnd(1, 5);
 
$fila=1;
$objPHPExcel->getActiveSheet()->SetCellValue("A$fila", "Hospital San Juan de Dios");
$objPHPExcel->getActiveSheet()->mergeCells("A$fila:AH$fila"); //unir celdas
$objPHPExcel->getActiveSheet()->setSharedStyle($titulo, "A$fila:AH$fila");

$fila=2;
$objPHPExcel->getActiveSheet()->SetCellValue("A$fila", "Reporte de Registros Pendientes. ".$servicio_name.' '.$unidad_name);
$objPHPExcel->getActiveSheet()->mergeCells("A$fila:AH$fila"); //unir celdas
$objPHPExcel->getActiveSheet()->setSharedStyle($titulo, "A$fila:AH$fila");

$fila=3;
$objPHPExcel->getActiveSheet()->SetCellValue("A$fila", "Desde: $mes $año Hasta: $mes1 $año2");
$objPHPExcel->getActiveSheet()->mergeCells("A$fila:AH$fila"); //unir celdas
$objPHPExcel->getActiveSheet()->setSharedStyle($titulo, "A$fila:AH$fila");

$fila=4;
$objPHPExcel->getActiveSheet()->SetCellValue("A$fila", 'Profesional');
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
$objPHPExcel->getActiveSheet()->SetCellValue("B$fila", 'paciente');
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(14); 
$objPHPExcel->getActiveSheet()->SetCellValue("C$fila", '1');
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(4);
$objPHPExcel->getActiveSheet()->SetCellValue("D$fila", '2');
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("E$fila", '3');
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("F$fila", '4');
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("G$fila", '5');
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("H$fila", '6');
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("I$fila", '7');
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("J$fila", '8');
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("K$fila", '9');
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("L$fila", '10');
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("M$fila", '11');
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("N$fila", '12');
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("O$fila", '13');
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("P$fila", '14');
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("Q$fila", '15');
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("R$fila", '16');
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("S$fila", '17');
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("T$fila", '18');
$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("U$fila", '19');
$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("V$fila", '20');
$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("W$fila", '21');
$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("X$fila", '22');
$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("Y$fila", '23');
$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("Z$fila", '24');
$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("AA$fila", '25');
$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("AB$fila", '26');
$objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("AC$fila", '27');
$objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("AD$fila", '28');
$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("AE$fila", '29');
$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("AF$fila", '30');
$objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("AG$fila", '31');
$objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(4); 
$objPHPExcel->getActiveSheet()->SetCellValue("AH$fila", 'Total');
$objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setWidth(6);  

$objPHPExcel->getActiveSheet()->setSharedStyle($subtitulo, "A$fila:AH$fila"); //establecer estilo
$objPHPExcel->getActiveSheet()->getStyle("A$fila:AH$fila")->getFont()->setBold(true); //negrita

$total = 0;
//rellenar con contenido
if($result->num_rows>0){
	while($registro1 = $result->fetch_assoc()){
	    $fila+=1;
       
        $objPHPExcel->getActiveSheet()->SetCellValue("A$fila", $registro1['colaborador']);
		$objPHPExcel->getActiveSheet()->SetCellValue("B$fila", $registro1['paciente']);
        $objPHPExcel->getActiveSheet()->SetCellValue("C$fila", $registro1['1']);
        $objPHPExcel->getActiveSheet()->SetCellValue("D$fila", $registro1['2']);
        $objPHPExcel->getActiveSheet()->SetCellValue("E$fila", $registro1['3']);
        $objPHPExcel->getActiveSheet()->SetCellValue("F$fila", $registro1['4']);
        $objPHPExcel->getActiveSheet()->SetCellValue("G$fila", $registro1['5']);
        $objPHPExcel->getActiveSheet()->SetCellValue("H$fila", $registro1['6']);
        $objPHPExcel->getActiveSheet()->SetCellValue("I$fila", $registro1['7']);
        $objPHPExcel->getActiveSheet()->SetCellValue("J$fila", $registro1['8']);
        $objPHPExcel->getActiveSheet()->SetCellValue("K$fila", $registro1['9']);
        $objPHPExcel->getActiveSheet()->SetCellValue("L$fila", $registro1['10']);
        $objPHPExcel->getActiveSheet()->SetCellValue("M$fila", $registro1['11']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("N$fila", $registro1['12']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("O$fila", $registro1['13']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("P$fila", $registro1['14']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("Q$fila", $registro1['15']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("R$fila", $registro1['16']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("S$fila", $registro1['17']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("T$fila", $registro1['18']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("U$fila", $registro1['19']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("V$fila", $registro1['20']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("W$fila", $registro1['21']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("X$fila", $registro1['22']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("Y$fila", $registro1['23']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("Z$fila", $registro1['24']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("AA$fila", $registro1['25']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("AB$fila", $registro1['26']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("AC$fila", $registro1['27']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("AD$fila", $registro1['28']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("AE$fila", $registro1['29']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("AF$fila", $registro1['30']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("AG$fila", $registro1['31']);  
        $objPHPExcel->getActiveSheet()->SetCellValue("AH$fila", $registro1['Total']);  	
        $total = $total + $registro1['Total'];	
        //Establecer estilo
        $objPHPExcel->getActiveSheet()->setSharedStyle($bordes, "A$fila:AH$fila");	     
   }   
}	

$fila+=1;
//$registro_total['Total'];
$objPHPExcel->getActiveSheet()->SetCellValue("A$fila", "TOTAL"); 
$objPHPExcel->getActiveSheet()->mergeCells("A$fila:AG$fila"); //unir celdas
$objPHPExcel->getActiveSheet()->SetCellValue("AH$fila", $total);  		   
//Establecer estilo
$objPHPExcel->getActiveSheet()->setSharedStyle($totales, "A$fila:AH$fila");

$fila+=10; 
$objPHPExcel->getActiveSheet()->SetCellValue("X$fila", "FIRMA ADMISIÓN");
$objPHPExcel->getActiveSheet()->mergeCells("X$fila:AH$fila"); //unir celdas
$objPHPExcel->getActiveSheet()->setSharedStyle($firma, "X$fila:AH$fila"); 


$fila+=7; 
$objPHPExcel->getActiveSheet()->SetCellValue("X$fila", "FIRMA GESTIÓN PACIENTES");
$objPHPExcel->getActiveSheet()->mergeCells("X$fila:AH$fila"); //unir celdas
$objPHPExcel->getActiveSheet()->setSharedStyle($firma, "X$fila:AH$fila");  
//*************Guardar como excel 2003*********************************
$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel); //Escribir archivo
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setDifferentOddEven(false);
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('Página &P / &N');

$objPHPExcel->removeSheetByIndex(
    $objPHPExcel->getIndex(
        $objPHPExcel->getSheetByName('Worksheet')
    )
);
// Establecer formado de Excel 2003
header("Content-Type: application/vnd.ms-excel; charset=utf-8");
 
// nombre del archivo
header('Content-Disposition: attachment; filename="REPORTE DIARIO DE ATENCIONES PENDIENTES'.strtoupper($servicio_name).' '.strtoupper($unidad_name).' '.strtoupper($mes).'_'.$año.'.xls"');
header("Pragma: no-cache"); 
header("Expires: 0"); 
//**********************************************************************
 
//forzar a descarga por el navegador
$objWriter->save('php://output');

$result->free();//LIMPIAR RESULTADO
$mysqli->close();//CERRAR CONEXIÓN
?>