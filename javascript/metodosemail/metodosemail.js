jQuery(function($){
//----------------------Metodo para agregar el email a la base de datos y en la lista-------------------------------//		
$("#CampoEmail").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoEmail").val()!=''){
	 			$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-correo/agregarcorreo.php",
					success: function(mensaje){
					if(mensaje==null){
						$('#CampoListaEmail').append("<option>"+$("#CampoEmail").val()+"</option>");
						$("#CampoEmail").val('');
					}else{
						Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
					}}
      		   });
	}else{
Sexy.error('<h1>El campo email esta vacio <br>Ingrese su email indicado</h1><p>Click en OK, para continuar.</p>');return false;}
	}
 }		
});
//-------------------------------------------------------------------------------------------------------------------//	
//-----------------------------Metodo para eliminar el email a la base de datos y en la lista------------------------//		
$("#BorrarEmail").click(function(){
	if($('#CampoListaEmail').val()!=null){
Sexy.confirm('<h1>Cuadro de eliminacion</h1><p>¿Desea eliminar el email seleccionado?</p><p>Pulse "Ok" para eliminar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
				$.ajax({
      				data: $("#NuevoAspirante" ).serialize(),
       				type: "POST",
       				dataType: "json",
       				url: "../php/clase-correo/eliminarcorreo.php",
					success: function(mensaje){
				if(mensaje==null){
				 $("#CampoListaEmail option:selected").each(function(){   
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
 Sexy.info('<h1>Cuadro de Verificacion</h1><br/><p>Seleccione el email a eliminar</p>');
         }		
    });
//-------------------------------------------------------------------------------------------------------------------//		    
});