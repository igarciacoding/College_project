jQuery(function($){
//-------------------------------------------------------------------------------------------------------------------//	
$("#CampoCentroEscolar").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoCentroEscolar").val()!=''){
	 			$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-educacionbasica/agregareducacionbasica.php",
					error: function(){alert("asdasdasdas")},
					success: function(mensaje){
					if(mensaje==null){
						$('#ListaCentroEscolar').append("<option>"+$("#CampoCentroEscolar").val()+"</option>");
						$("#CampoCentroEscolar").val('');
				    }else{
						Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
					}}
      		   });
		}else{
Sexy.error('<h1>El campo centro escolar esta vacio <br>Ingrese su centro escolar o colegio indicado</h1><p>Click en OK, para continuar.</p>');return false;}
		}
	}		
}); 
//-------------------------------------------------------------------------------------------------------------------//	
$("#CampoICE").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoCentroEscolar").val()!=''&&$("#CampoICE").val()!='____'){
	 			$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-educacionbasica/agregareducacionbasica.php",
					success: function(mensaje){
					if(mensaje==null){
						var valor=$("#CampoCentroEscolar").val()+" "+$("#CampoICE").val();
						var centroescolar=$("#CampoCentroEscolar").val()+" ------ "+$("#CampoICE").val();
						document.getElementById('ListaCentroEscolar').options.add(new Option(centroescolar,valor));
						$("#CampoCentroEscolar").val('');
						$("#CampoICE").val('');
						$("#CampoICE").mask("9999",{placeholder:" "});
						$("#CampoCentroEscolar").focus();
					   }else{
					Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
						}}
      			   });
			}else{
Sexy.error('<h1>El campo centro escolar y fecha inicial esta vacio <br>Ingrese su centro escolar y fecha inicial</h1><p>Click en OK, para continuar.</p>');return false;}
		}
	}		
}); 
//-------------------------------------------------------------------------------------------------------------------//		
$("#CampoFCE").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoCentroEscolar").val()!=''&&$("#CampoICE").val()!='____'&&$("#CampoFCE").val()!='____'){
	 			$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-educacionbasica/agregareducacionbasica.php",
					success: function(mensaje){
					if(mensaje==null){
			var valor=$("#CampoCentroEscolar").val()+" "+$("#CampoICE").val()+" "+$("#CampoFCE").val();
			var centroescolar=$("#CampoCentroEscolar").val()+" ------ "+$("#CampoICE").val()+" - "+$("#CampoFCE").val();
					document.getElementById('ListaCentroEscolar').options.add(new Option(centroescolar,valor));
						$("#CampoCentroEscolar").val('');
						$("#CampoICE").val('');
						$("#CampoICE").mask("9999",{placeholder:" "});
						$("#CampoFCE").val('');
						$("#CampoFCE").mask("9999",{placeholder:" "});
						$("#CampoCentroEscolar").focus();
						   }else{
						Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
					}}
      		   });
		}else{
Sexy.error('<h1>El campo centro escolar, fecha inicial y fecha final estan vacios <br>Ingrese su centro escolar y fecha inicial</h1><p>Click en OK, para continuar.</p>');return false;}
		}
	}		
});  
//-------------------------------------------------------------------------------------------------------------------//	
$("#BotonCentroEscolar").click(function(){ 
	if($('#ListaCentroEscolar').val()!=null){
Sexy.confirm('<h1>Cuadro de eliminacion</h1><p>¿Desea eliminar el centro escolar seleccionado?</p><p>Pulse "Ok" para eliminar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
				$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-educacionbasica/eliminareducacionbasica.php",
					success: function(mensaje){
					if(mensaje==null){
						$("#ListaCentroEscolar option:selected").each(function(){  
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
 	Sexy.info('<h1>Cuadro de Verificacion</h1><br/><p>Seleccione el centro escolar a eliminar</p>');
	}		
  });	    
//-------------------------------------------------------------------------------------------------------------------//		
});