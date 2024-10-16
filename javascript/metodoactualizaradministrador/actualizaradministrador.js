jQuery(function($){
		$.ajax({
			data: $("#Calificar").serialize(),
        		type: "POST",
        		dataType: "json",
        		url: "../php/clase-mostraradmistrador/mostraradmistrador.php",
				success: function(mensaje){
					if(mensaje.length > 0){
					$.each(mensaje,function(i,item){
					$("#CampoNombreA").val(item.nombre);
					$("#CampoApellidoA").val(item.apellido);
					$("#CampoNicknameA").val(item.nick);
					$("#CampoPasswordA").val(item.password);
					$("#CampoSexoA").val(item.sexo);
					$("#CampoDuiA").val(item.dui);
						});
					}
				}
					
			});

	 $("#CampoDuiA").mask("99999999-9",{placeholder:" "});
   $("#Aceptar").click(function(e){
	    if($("#CampoNombreA").val()!=''&&$("#CampoApellidoA").val()!=''
		&&$("#CampoNicknameA").val()!=''&&$("#CampoPasswordA").val()!=''
		&&$("#CampoSexoA").val()!=''&&$("#CampoDuiA").val()!=''){
	 		Sexy.confirm('<h1>¿Desea actualizar su informacion?</h1><p>Pulse "Ok" para actualizar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
	 			$.ajax({
        			data: $("#Formulario" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-actualizaradministrador/actualizaradministrador.php",
					success: function(mensaje){
						if(mensaje==null){
							Sexy.info('<h1>Sus datos se actualizaron correctamente</h1><p>Click en OK, para continuar.</p>')
						 }
						 else{
							Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;	 
							 }
						 }
      		  });
		}}});
	   }else{
	Sexy.error('<h1>Llene todos los campos para actualizar su informacion</h1><p>Click en OK, para continuar.</p>');return false;	
		   }
	});
});