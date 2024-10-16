jQuery(function($){
//----------------------Metodo para agregar el numero de telefono a la base de datos y en la lista------------------//	
   $("#CampoTelefono").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoTelefono").val()!='________'){
	 			$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-telefono/agregartelefono.php",
					success: function(mensaje){
						if(mensaje==null){
							$('#ListaTelefono').append("<option>"+$("#CampoTelefono").val()+"</option>");
							$("#CampoTelefono").val(''); 
							$("#CampoTelefono").mask("99999999",{placeholder:" "});
						   }else{
						Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
					}}
      		  });
	}else{
Sexy.error('<h1>Campo de telefono esta vacio <br>Ingrese un numero de telefono con 8 digitos</h1><p>Click en OK, para continuar.</p>');return false;}
		}
	}		
});
//-------------------------------------------------------------------------------------------------------------------//	
//----------------------Metodo para eliminar el numero de telefono a la base de datos y en la lista------------------//	
$("#BorrarTelefono").click(function(){
	if($('#ListaTelefono').val()!=null){
		Sexy.confirm('<h1>Cuadro de eliminacion</h1><p>¿Desea eliminar el numero de telefono seleccionado?</p><p>Pulse "Ok" para eliminar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
				$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-telefono/eliminartelefono.php",
					success: function(mensaje){
						if(mensaje==null){
							$("#ListaTelefono option:selected").each(function(){   
      			 			$(this).remove();  
    			 		}); 
					}else{
					Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;}
					}
      		   });
	        }
         }
      });
	}else{
 Sexy.info('<h1>Cuadro de Verificacion</h1><br/><p>Seleccione el numero de telefono a eliminar</p>');
	}		
   });
//-------------------------------------------------------------------------------------------------------------------/   
});
