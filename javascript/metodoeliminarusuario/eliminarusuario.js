jQuery(function($){
	$.ajax({
			data: $("#Calificar").serialize(),
        		type: "POST",
        		dataType: "json",
        		url: "../php/clase-cargarusuario/cargarusuario.php",
				success: function(mensaje){
					document.getElementById('listausuarios').options.length = 0;
					if(mensaje.length > 0){
				
					$.each(mensaje,function(i,item){
					document.getElementById('listausuarios').options.add(new Option
					(item.nombre+" "+item.apellido+" ------ "+item.tipo,item.dui));
						});
					}
					else{
							document.getElementById('listausuarios').options.add(
							new Option("----------------------------- No se encontraron registros.. -----------------------------"));
						
						}
				}
					
			});
   $("#Aceptar").click(function(e){
	    if($("#listausuarios").val()!=''){
	   Sexy.confirm('<h1>¿Desea eliminar su informacion?</h1><p>Pulse "Ok" para eliminar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
	 			$.ajax({
        			data: $("#Formulario" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-eliminarusuario/eliminarusuario.php",
					success: function(mensaje){
						if(mensaje==null){
							$("#listausuarios option:selected").each(function(){  
      				    $(this).remove();  
    						}); 
							Sexy.info('<h1>Sus datos se eliminaron correctamente</h1><p>Click en OK, para continuar.</p>')
							 
						 }
						 else{
							Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;	 
							 }
						 }
      		  });
		}}});
	   }else{
		   Sexy.error('<h1>Seleccione al usuario/a o Secretaria para eliminar</h1><p>Click en OK, para continuar.</p>');return false;	 
		   }
	});
});