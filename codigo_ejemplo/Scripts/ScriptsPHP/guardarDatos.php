<?php

$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$fecha = $_POST['fecha'];

define('CHARSET', 'ISO-8859-1');
$servername = "127.0.0.1";
$username= "root";
$password= "";
$dbname="dbprueba";

//Objeto para almacenar en el datos
$objResponse = new stdClass();

//crear la conexion
$conn = new mysqli($servername, $username, $password, $dbname);

//revisar la conexión
if($conn->connect_error){
	die("Conexión fallida".$conn->connect_error." Error");
}

//Query a ser ejecutada
$sql = "INSERT INTO datos(nombre, apellido_paterno, apellido_materno, fecha) VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$fecha')" ;

if($conn->query($sql) === TRUE){
	$objResponse->Registrado = 1;
}else {
	$objResponse->Registrado = 0;
}

$conn->close();

echo json_encode($objResponse);

?>