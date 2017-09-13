<?
function conectar($servidor, $user, $pass, $name)
{
    $con = mysql_connect($servidor, $user, $pass);
    mysql_select_db($name, $con); 
}


$nombre_usuario=$_POST['usuario'];

function comprobar_nombre_usuario($nombre_usuario){ 
   if (ereg("^[a-zA-Z0-9\-_]{3,20}$", $nombre_usuario)) { 
      echo "El nombre de usuario $nombre_usuario es correcto<br>"; 
      return true; 
   } else { 
       echo "El nombre de usuario $nombre_usuario no es válido<br>"; 
      return false; 
   } 
}
?>