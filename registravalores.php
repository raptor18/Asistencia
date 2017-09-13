<?php 

mysql_connect('localhost','adminsys_root','169604356')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('adminsys_Asistencia')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

	
	$consulta="INSERT INTO Estudiantes(Cedula, Nombre) values ('00000','PRUEBA')";
 $row_Query = mysql_fetch_assoc($Query);
 


$coche = $_POST['coche'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
echo "El coche es de la marca $coche, el modelo es un $modelo y su color es $color";
 

//$comando = $_POST['comand'];
//switch ($comando) {
   // case "selectQuery":
      //  echo select();
       // break;
//case "updateQuery":
      //  echo update();
     //   break;
//case "deleteQuery":
      //  echo delete();
   //     break;
//}
function select(){
	mysql_connect('localhost','adminsys_root','169604356')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('adminsys_Asistencia')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

	
	$consulta="INSERT INTO Estudiantes(Cedula, Nombre) values ('00000','PRUEBA')";
 $row_Query = mysql_fetch_assoc($Query);
 
}
function update(){
}
function delete(){
}
 ?>