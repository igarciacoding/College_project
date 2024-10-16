jQuery(function($){
  $("#GuardarDatos").click(function(){
	  if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
		  Sexy.confirm('<h1>¿Desea guardar su informacion?</h1><p>Si guarda sus datos personales no podra modificarla<br>en esta pagina,   Podra modificarla en editar aspirante </p><p>Pulse "Ok" para guardar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
			$.ajax({
        		data: $("#NuevoAspirante" ).serialize(),
        		type: "POST",
        		dataType: "json",
        		url: "../php/clase-datospersonales/agregardatospersonales.php",
				success: function(mensaje){
					if(mensaje==null){
						$("#CampoDui").unbind();
						$("#CampoNit").unbind();
						$("#CampoAfp").unbind();
						$("#CampoPasaporte").unbind();
						$("#CampoIsss").unbind();
						$("#CampoFecha").unbind();
						$("#CampoDui").attr('readonly', true);
						$("#CampoNit").attr('readonly', true);
						$("#CampoAfp").attr('readonly', true);
						$("#CampoPasaporte").attr('readonly', true);
						$("#CampoIsss").attr('readonly', true);
						$("#CampoFecha").attr('readonly', true);
						$("#CampoNombre").attr('readonly', true);
						$("#CampoApellido").attr('readonly', true);
						$("#CampoDireccion").attr('readonly', true);
						$("#CampoSexo").attr('disabled', true);
						$("#CampoDepartamento").attr('disabled', true);
						$("#CampoEstadoFamiliar").attr('disabled', true);
						$("#CampoTelefono").removeAttr("disabled");
						$("#CampoEmail").removeAttr("disabled");
						$("#CampoCentroEscolar").removeAttr("disabled");
						$("#CampoICE").removeAttr("disabled");
						$("#CampoFCE").removeAttr("disabled");
						$("#CampoBachillerato").removeAttr("disabled");
						$("#CampoTipoBachillerato").removeAttr("disabled");
						$("#CampoIIN").removeAttr("disabled");
						$("#CampoFIN").removeAttr("disabled");
						$("#CampoUniversidad").removeAttr("disabled");
						$("#CampoCarrera").removeAttr("disabled");
						$("#CampoIU").removeAttr("disabled");
						$("#CampoFU").removeAttr("disabled");
						$("#CampoOtros").removeAttr("disabled");
						$("#CampoOtrosTipo").removeAttr("disabled");
						$("#CampoIO").removeAttr("disabled");
						$("#CampoFO").removeAttr("disabled");
						$("#CampoNombreRP").removeAttr("disabled");
						$("#CampoApellidoRP").removeAttr("disabled");
						$("#CampoDuiRP").removeAttr("disabled");
						$("#CampoTelefonoRP").removeAttr("disabled");
						$("#CampoOcupacionRP").removeAttr("disabled");
						$("#CampoNombreRL").removeAttr("disabled");
						$("#CampoApellidoRL").removeAttr("disabled");
						$("#CampoDuiRL").removeAttr("disabled");
						$("#CampoTelefonoRL").removeAttr("disabled");
						$("#CampoOcupacionRL").removeAttr("disabled");
						$("#CampoExperiencias").removeAttr("disabled");
						$("#CampoTipoExperiencias").removeAttr("disabled");
						$("#CampoIE").removeAttr("disabled");
						$("#CampoFE").removeAttr("disabled");
				Sexy.info('<h1>Sus datos se guardaron correctamente</h1><p>Click en OK, para continuar.</p>')
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   }); 
					}
            	}
          }); 			   
	  }else{
Sexy.error('<h1>Ingrese su Dui o el Pasaporte para guardar sus datos</h1><p>Click en OK, para continuar.</p>');return false;	
		}
  });
    $("#PDF").click(function(){
	     if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
	   	document.NuevoAspirante.target = "_new";
		document.NuevoAspirante.action = "../pdf/vercurriculum.php";
		document.NuevoAspirante.method = "POST";
		document.NuevoAspirante.submit();
		 }else{
Sexy.error('<h1>Ingrese su Dui o el Pasaporte para ver el curriculum</h1><p>Click en OK, para continuar.</p>');return false;	 
 	 }
	   });
});