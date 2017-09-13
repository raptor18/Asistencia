<!DOCTYPE html>
<html>

<head>
  <title>Asistencia Estudiantil</title>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no; target-densityDpi=device-dpi" />
  <link rel="stylesheet" href="http://example.gajotres.net/themes/graphite-master/generated/slate/jquery.mobile-1.3.1.css" />
  <link rel="stylesheet" href="index.css" />
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
  <script src="Scripts/jquery/jquery-3.0.0.min.js"></script>
<script src="Scripts/funciones.js"></script>
<script src="Scripts/funcionesAjax.js"></script>
</head>

<body>






  <div data-role="page" id="pageone">

    <div data-role="header" data-position="fixed">
     <!-- <a href="#" data-role="button">Back</a> -->     
     <h1><a href="#overlayPanel" data-role="button"  data-position="fixed" data-icon="gear">Menú</a></h1>
     
      <div data-role="panel" id="overlayPanel" data-display="overlay"> 
    <h2>Menú</h2>
    <p>
    <ul>
    <li> <a href="#overlayPanel" data-role="button"  data-position="fixed" data-icon="search">Cursos</a></li>
      <li> <a href="#overlayPanel" data-role="button"  data-position="fixed" data-icon="back">Salir</a></li>
    
    </ul>
    
    
    
    
    
    </p>
    <a href="#pageone" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Cerrar</a>
  </div> 
    </div>
    
    
    
    
    
    <!-- /header -->

    <div data-role="content"> 
    <div role="main" class="ui-content">
    
  
    
    
      <?
mysql_connect('localhost','adminsys_root','169604356')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('adminsys_Asistencia')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
$consulta = "SELECT * from Estudiantes";
	
			//echo "".$consulta;
			$resultado = mysql_query($consulta);
			$numeroFilas= mysql_num_rows($resultado);
			$contador=0;
			$contador1=4;
			$ausente="A";
			$tarde="T";
if($numeroFilas>0){
	echo "<ul data-role='listview' class='ui-listview'>";
				
			while($fila = mysql_fetch_assoc($resultado)){			

				echo "<li class='ui-li-has-thumb ui-first-child' title='".$fila['Cedula']."'>";
				echo "<a href='#' class='ui-btn ui-btn-icon-right ui-icon-carat-r'>";
				//echo "<a href='#pagetwo?id=2' class='ui-btn ui-btn-icon-right ui-icon-carat-r'>";
				echo "<img src='fotos/".$fila['Cedula'].".jpg'>";
				echo "<h3>".$fila['Nombre']." (".$fila['Cedula'].") </h3>";		
				$cedulaE=$fila['Cedula'];
				
				
				 echo "<fieldset data-role='controlgroup' data-type='horizontal'>
				 
     <input type='radio' name='radio-choice.$contador' id='radio-choice-1' value='choice-1' onClick='guardarDatos($cedulaE,\"P\");' />
    <label for='radio-choice-1'>P</label>

 	<input type='radio' name='radio-choice.$contador' id='radio-choice-2' value='choice-2' onClick='guardarDatos($cedulaE,\"A\");' />
    <label for='radio-choice-2'>A</label>
	   
     <input type='radio' name='radio-choice.$contador' id='radio-choice-3' value='choice-3' onClick='guardarDatos($cedulaE,\"T\");' />
     <label for='radio-choice-3'>T</label>
     </fieldset>	 								
  		
		
		Uniforme Completo: <fieldset data-role='controlgroup' data-type='horizontal'>
     <input type='radio' name='radio-choice.$contador1' id='radio-choice-4' value='choice-4' />
    <label for='radio-choice-4'>SI</label>";

 echo"<input type='radio' name='radio-choice.$contador1' id='radio-choice-5' value='choice-5' />
       <label for='radio-choice-5'>NO</label>

       </fieldset>	 		
			
			
			
			
			</a></li>";
		$contador++;	
		$contador1++;
		
	}
	echo "</ul>";
	
	
	
}
mysql_close();
   
  
   ?>
   
      
   
 

<script language="javascript">


function checkMe(cedula) {	
    if (confirm("Are you sure")) {
        //alert(cedula);
        return true;
    } else {
        alert("Clicked Cancel");
        return false;
    }
}



function mostrarVentana(cedula)
{
 	var idCedula=cedula;
	document.getElementById("dato").value=cedula;
    var ventana = document.getElementById('miVentana');
    ventana.style.marginTop = "100px";
    ventana.style.left = ((document.body.clientWidth-350) / 2) +  'px';
    ventana.style.display='flex';
}
function ocultarVentana()
{
    var ventana = document.getElementById('miVentana');
    ventana.style.display = 'none';
}

 
guardarDatos(cedula,asis);
//guardarDatos($("#tbNombre").val(), $("#tbApellidoPaterno").val(), $("#tbApellidoMaterno").val(), $("#tbFecha").val());
	 
		

</script>
   
    </div>
  		
	</div>
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!--
    
      <p>This is a <a href="#">link</a>
      </p>
      <ul data-role="listview" data-inset="true">
        <li data-role="list-divider">Divider</li>
        <li><a href="#">Item 1</a>
        </li>
        <li><a href="#">Item 2</a>
        </li>
        <li><a href="#">Item 3</a>
        </li>
      </ul>
      <label for="flip-1">Flip switch:</label>
      <select name="flip-1" id="flip-1" data-role="slider">
        <option value="off">Off</option>
        <option value="on">On</option>
      </select>
      <a href="#" data-role="button">Click me</a>
      <fieldset data-role="controlgroup">
        <legend>Choose a pet:</legend>
        <input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" checked="checked" />
        <label for="radio-choice-1">Cat</label>

        <input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2" />
        <label for="radio-choice-2">Dog</label>

        <input type="radio" name="radio-choice" id="radio-choice-3" value="choice-3" />
        <label for="radio-choice-3">Hamster</label>

        <input type="radio" name="radio-choice" id="radio-choice-4" value="choice-4" />
        <label for="radio-choice-4">Lizard</label>
      </fieldset>
      <div data-role="fieldcontain">
        <fieldset data-role="controlgroup">
          <legend>Choose as many snacks as you'd like:</legend>
          <input type="checkbox" name="checkbox-1a" id="checkbox-1a" class="custom" />
          <label for="checkbox-1a">Cheetos</label>

          <input type="checkbox" name="checkbox-2a" id="checkbox-2a" class="custom" />
          <label for="checkbox-2a">Doritos</label>

          <input type="checkbox" name="checkbox-3a" id="checkbox-3a" class="custom" />
          <label for="checkbox-3a">Fritos</label>

          <input type="checkbox" name="checkbox-4a" id="checkbox-4a" class="custom" />
          <label for="checkbox-4a">Sun Chips</label>
        </fieldset>
      </div>
      <div class="ui-body">
        <h1>H1 Heading</h1>
        <p>This is a paragraph that contains <strong>strong</strong>, <em>emphasized</em> and <a href="index.html">linked</a> text. Here is more text so you can see how HTML markup works in content. Here is more text so you can see how HTML markup works in content.</p>
        <div data-role="collapsible" data-collapsed="true" data-theme="a">
          <h3>I'm a themed collapsible</h3>
          <p>I have <code> data-theme</code> attribute set manually on my container to set the color to match the content block I'm in.</p>
        </div>
        <!-- /collapsible -->
        
        <!--
        
        <div data-role="collapsible" data-theme="a" data-content-theme="a">
          <h3>I'm a themed collapsible with a themed content</h3>
          <p>I have <code> data-content-theme</code> attribute set manually on my container to set the color to match the content block I'm in.</p>
        </div>
      </div>
      <!-- /themed container -->


<!--

      <div data-role="fieldcontain">
        <label for="name-c">Text Input:</label>
        <input type="text" name="name" id="name-c" value="" />
      </div>

      <div data-role="fieldcontain">
        <label for="switch-c">Flip switch:</label>
        <select name="switch-c" id="switch-c" data-role="slider">
          <option value="off">Off</option>
          <option value="on">On</option>
        </select>
      </div>

      <div data-role="fieldcontain">
        <label for="slider-c">Slider:</label>
        <input type="range" name="slider" id="slider-c" value="0" min="0" max="100" />
      </div>


      <div data-role="fieldcontain">
        <fieldset data-role="controlgroup" data-type="horizontal">
          <legend>Font styling:</legend>
          <input type="checkbox" name="checkbox-6c" id="checkbox-6c" class="custom" />
          <label for="checkbox-6c">b</label>

          <input type="checkbox" name="checkbox-7c" id="checkbox-7c" class="custom" />
          <label for="checkbox-7c"><em>i</em>
          </label>

          <input type="checkbox" name="checkbox-8c" id="checkbox-8c" class="custom" />
          <label for="checkbox-8c">u</label>
        </fieldset>
      </div>

      <div data-role="fieldcontain">
        <fieldset data-role="controlgroup">
          <legend>Choose a pet:</legend>
          <input type="radio" name="radio-choice-1" id="radio-choice-1c" value="choice-1" />
          <label for="radio-choice-1c">Cat</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-2c" value="choice-2" />
          <label for="radio-choice-2c">Dog</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-3c" value="choice-3" />
          <label for="radio-choice-3c">Hamster</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-4c" value="choice-4" />
          <label for="radio-choice-4c">Lizard</label>
        </fieldset>
      </div>

      <div data-role="fieldcontain">
        <label for="select-choice-c" class="select">Choose shipping method:</label>
        <select name="select-choice-c" id="select-choice-c">
          <option value="standard">Standard: 7 day</option>
          <option value="rush">Rush: 3 days</option>
          <option value="express">Express: next day</option>
          <option value="overnight">Overnight</option>
        </select>
      </div>

    </div>
    <!-- /content -->



    <div data-role="footer" data-position="fixed">
      <div data-role="navbar">
        <ul>
          <li><a href="#" data-icon="gear" class="ui-btn-active ui-state-persist">Opciones</a></li>
                  
          <li><a href="javascript:location.reload()" data-icon="refresh">Refrescar</a>
          </li>
          <li><a href="#" data-icon="check">Guardar</a>
          </li>
        </ul>
      </div>
    </div>

  </div>
  <!-- /page -->
  
  </div>
  
  
  
  <div id="miVentana" style=" position: fixed; width: 350px; height: 190px; top: 0; left: 0; font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; border: #333333 3px solid; background-color: #FAFAFA; color: #000000; display:none;">
Nombre:
<input type="text" value="" name="estudiante" id="dato">


<input type="button" onClick="ocultarVentana()" value="Cerrar">
</div>

  
</body>

</html>