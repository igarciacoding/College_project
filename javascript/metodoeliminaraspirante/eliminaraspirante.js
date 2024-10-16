jQuery(function($){
   $("#Eliminar").click(function(){
	    if($("#listausuarios option:selected").val()!=null){
	   Sexy.confirm('<h1>¿Desea eliminar el aspirante seleccionado?</h1><p>Pulse "Ok" para eliminar, o pulse "Cancelar" para salir.</p>', { onComplete:
            function(returnvalue) {
              if(returnvalue){
	 			$.ajax({
        			data: $("#Calificar" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-eliminaraspirante/eliminaraspirante.php",
					success: function(mensaje){
						if(mensaje==null){
							$("#listausuarios option:selected").each(function(){  
      				    $(this).remove();  
    						}); 
							Sexy.info('<h1>El aspirante se elimino correctamente</h1><p>Click en OK, para continuar.</p>') 
						 }
						 else{
							Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;	 
							 }
						 }
      		  });
		}}});
	   }else{
		   Sexy.error('<h1>Seleccione el aspirante para eliminar</h1><p>Click en OK, para continuar.</p>');return false;	 
		   }
	});
});