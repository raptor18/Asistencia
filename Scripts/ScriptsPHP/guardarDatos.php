<?php

$cedula = $_POST['cedula'];
$asistencia = $_POST['asistencia'];
//$nombre = $_POST[''];
//$apellidoMaterno = $_POST['apellidoMaterno'];
//$fecha = $_POST['fecha'];

define('CHARSET', 'ISO-8859-1');
$servername = "localhost";
$username= "adminsys_root";
$password= "169604356";
$dbname="adminsys_Asistencia";

//Objeto para almacenar en el datos
$objResponse = new stdClass();

//crear la conexion
$conn = new mysqli($servername, $username, $password, $dbname);

//revisar la conexión
if($conn->connect_error){
	die("Conexión fallida".$conn->connect_error." Error");
}

//Query a ser ejecutada
$sql = "INSERT INTO Asistencia(Estudiante,Asistencia) VALUES ('$cedula','$asistencia')" ;

if($conn->query($sql) === TRUE){
	$objResponse->Registrado = 1;
}else {
	$objResponse->Registrado = 0;
}

$conn->close();

echo json_encode($objResponse);

?>