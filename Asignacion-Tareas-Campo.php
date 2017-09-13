 <?php

session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: ../login.php'); 
  exit();
}else{
	ComprobarPermiso();
	
	}


function ComprobarPermiso(){
	
	if($_SESSION['perfil']=="2")
	{
	
		header('Location: /Asignacion-Tareas-Campo.php'); 
		}else{
			
			echo"<script language='javascript'>window.location='Asignacion-Tareas-Jefatura.php'</script>;";
			}
	
	
	}

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingenieria y Administración|Sistema de Documentos</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<style type="text/css">
body {
	background-color: #FFFFFF;
}
</style>
<script type="text/javascript" src="jquery/cufon-yui.js"></script>
    <script type="text/javascript" src="jquery/Monotype_Corsiva_italic_400.font.js"></script>
    <script type="text/javascript">
        Cufon.replace ('h1')('h2')('h4')('#logo')('.box_tit_text');
    </script>
</head>
<body>
    <div id="main">
    	<!-- header -->
    <div id="header">
		<div id="logo">
            <a href="#"><span class="logo_span">
              <?
    echo "<font color='#FFFFFF'>".($_SESSION['nombre'])."</font>";
  ?>
         
            
            </span><br />
			<font color="#FFFFFF">Perfil del Usuario: <? echo ($_SESSION['perfil']); ?></font></a>
        </div>
         <div id="logotipo">
        <img src="../images/logo.png" />
        </div>
    </div>
    <div id="border">
        <!-- buttons -->
      <div id="buttons">
            <a href="index.php" class="but"  title="">Inicio</a><div class="but_div"></div>
            <a href="documentos.php" class="but" title="">Documentos</a><div class="but_div"></div>
            <a href="validarPermisos.php"  class="but" title="">Asignación de Tareas</a><div class="but_div"></div>
              <a href="Capacitaciones.php"  class="but" title="">Capacitación</a><div class="but_div"></div>
        
            <a href="../logout.php" class="but" title="">Cerrar Sesión <img src="images/salir.png" width="15" height="15" /></a>
      </div>
        <!-- top -->
    
    </div>
    <br />
    <div align="center" >
   <font size="+1">Labores Asignadas por las Jefaturas</font>
   <br /> <br />
   <?
   mysql_connect('localhost','adminsys_root','169604356')or die ('Ha fallado la conexión: '.mysql_error());
 
mysql_select_db('adminsys_iaacr')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
   
   	$consulta = "SELECT * from Asignacion_Tareas,Usuarios where Asignacion_Tareas.De = Usuarios.Id and Asignacion_Tareas.Para=".$_SESSION['id']. " order by Fecha DESC LIMIT 10";
	
			//echo "".$consulta;
			$resultado = mysql_query($consulta);
			$numeroFilas= mysql_num_rows($resultado);

if($numeroFilas>0){
	echo "<table id='TablaDirectorio3' class='TablaDirectorio3'>";
				echo"<tr><td>Cod.Actividad</h2></td><td>Detalle de la Actividad</td><td>Jefatura</td><td>Fecha de Asignación</td><td>Estado Actual</td><td>Ver más</td></tr>";
			while($fila = mysql_fetch_assoc($resultado)){			
				echo "<tr>";
				echo "<td><center>".$fila['id']."</center></td>";
				echo "<td>".utf8_encode ($fila['Detalle_Actividad'])."</td>";
				echo "<td>".$fila['Nombre']."</td>";
				echo "<td>".$fila['Fecha']."</td>";
				
				if ($fila['Estado_Actual']=='A'){
						echo "<td>Abierta</td>";
									}
						if ($fila['Estado_Actual']=='C'){
					echo "<td>Cerrada</td>";				
					}
					
						if ($fila['Estado_Actual']=='E'){
					echo "<td>Extender Plazo</td>";				
					}
				if ($fila['Estado_Actual']=='S'){
					echo "<td>Suspendida</td>";				
					}
				
				if ($fila['Estado_Actual']=='R'){
					echo "<td>Reiniciada</td>";				
					}
					
						if ($fila['Estado_Actual']=='RA'){
					echo "<td>Reabierta</td>";				
					}
				
				//ESTAS OPCIONES SE COMENTAN DEBIDO A UNA SOLICITUD HECHA POR TATIANA EL DIA 04-04-2016 VIA CORREO ELECTRONICO
				
				//if ($fila['Inspeccion']=='I'){
						//echo "<td>Intervencion</td>";
										//}
						//if ($fila['Inspeccion']=='AS'){
						//echo "<td>Atencion Solicitud</td>";				
					//}
				

				echo "<td><a href='Visualizar_Tareas.php?id_Tarea=".base64_encode($fila['id'])."'> <img src='images/ver.png' width='30' height='30'</a></td>";
				echo "</tr>";
				
	}
	echo "</table>";
}
mysql_close();
   
  
   ?>
   
    
</div>
</body>
</html>
