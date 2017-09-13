function guardarDatos(xNombre, xApellidoPaterno, xApellidoMaterno, xFecha){

	var variables = { nombre: xNombre, apellidoPaterno: xApellidoPaterno, apellidoMaterno: xApellidoMaterno, fecha: xFecha};

	var resultado = 0;

	//console.log(variables);

	$.ajax({
		type: 'post',
		url: 'Scripts/ScriptsPHP/guardarDatos.php',
		async: true,
		data: variables,
		success: function(xResultado){
			//console.log(xResultado)
			var resultado = $.parseJSON(xResultado);
			console.log(resultado)
			if (resultado.Registrado == 1){
				alert('Datos guardados satisfactoriamente');
				limpiar();
				$("#tbNombre").focus();
			}else{

				alert('Datos no guardados');
			}
			
		}
	})

}