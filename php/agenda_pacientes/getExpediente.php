<?php
include('../funtions.php');
session_start(); 	
//CONEXION A DB
$mysqli = connect_mysqli(); 

date_default_timezone_set('America/Tegucigalpa');

$agenda_id = $_POST['agenda_id']; 

//CONSULTAR PACIENTE ID
$query = "SELECT expediente 
    FROM agenda 
	WHERE agenda_id = '$agenda_id'";
$result = $mysqli->query($query);
$consulta_paciente1 = $result->fetch_assoc();

$expediente = 0;

if($result->num_rows>0){
	$expediente = $consulta_paciente1['expediente'];
}

if ($expediente == 0){
	$expediente = 'TEMP';
}
echo $expediente;

$result->free();//LIMPIAR RESULTADO
$mysqli->close();//CERRAR CONEXIÓN 
?>