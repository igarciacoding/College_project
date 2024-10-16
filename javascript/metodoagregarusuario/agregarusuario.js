jQuery(function($){
	 $("#CampoDuiA").mask("99999999-9",{placeholder:" "});
   $("#Aceptar").click(function(e){
	    if($("#CampoNombreA").val()!=''&&$("#CampoApellidoA").val()!=''&&$("#CampoNicknameA").val()!=''&&$("#CampoPasswordA").val()!=''&&$("#CampoSexoA").val()!=''&&$("#CampoDuiA").val()!=''){
	   Sexy.confirm('<h1>¿Desea actualizar su informacion?</h1><p>Pulse "Ok" para actualizar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
	 			$.ajax({
        			data: $("#Formulario" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-agregarusuario/agregarusuario.php",
					success: function(mensaje){
						if(mensaje==null){
							Sexy.info('<h1>Sus datos se guardaron correctamente</h1><p>Click en OK, para continuar.</p>')
							 $("#CampoDuiA").val('').mask("99999999-9",{placeholder:" "});
							 $("#CampoNombreA").val('');
							 $("#CampoApellidoA").val('');
							 $("#CampoNicknameA").val('');
							 $("#CampoPasswordA").val('');
							 $("#CampoSexoA").val('');
							 $("#CampoTipo").val('');
						 }
						 else{
							Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;	 
							 }
						 }
      		  });
		}}});
	   }else{
		   Sexy.error('<h1>Llene todos los campos para guardar su informacion</h1><p>Click en OK, para continuar.</p>');return false;	 
		   }
	});
});