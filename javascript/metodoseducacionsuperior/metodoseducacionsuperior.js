jQuery(function($){
//-------------------------------------------------------------------------------------------------------------------//	
$("#CampoUniversidad").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoUniversidad").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionsuperior/agregareducacionsuperior.php",
						success: function(mensaje){
							if(mensaje==null){
								$('#ListaUniversidad').append("<option>"+$("#CampoUniversidad").val()+"</option>");
								$("#CampoUniversidad").val('');
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
			}else{
Sexy.error('<h1>El campo universidad esta vacio <br>Ingrese la universidad o Educacion superior</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});
$("#CampoCarrera").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoUniversidad").val()!=''&&$("#CampoCarrera").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionsuperior/agregareducacionsuperior.php",
						success: function(mensaje){
							if(mensaje==null){
				var valor=$("#CampoUniversidad").val()+" "+$("#CampoCarrera").val();
				var bachillerato=$("#CampoUniversidad").val()+" ------ "+$("#CampoCarrera").val();
				document.getElementById('ListaUniversidad').options.add(new Option(bachillerato,valor));
								$("#CampoUniversidad").val('');
								$("#CampoCarrera").val('');
								$("#CampoUniversidad").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
			}else{
Sexy.error('<h1>El campo universidad y la carrera esta vacio <br>Ingrese la universidad y la carrera</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});	
//-------------------------------------------------------------------------------------------------------------------//	
$("#CampoIU").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoUniversidad").val()!=''&&$("#CampoIU").val()!=''){
				if($("#CampoCarrera").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionsuperior/agregareducacionsuperior.php",
						success: function(mensaje){
							if(mensaje==null){
var valor=$("#CampoUniversidad").val()+" "+$("#CampoCarrera").val()+" "+$("#CampoIU").val();
var bachillerato=$("#CampoUniversidad").val()+" ------ "+$("#CampoCarrera").val()
+" ------ "+$("#CampoIU").val();
			document.getElementById('ListaUniversidad').options.add(new Option(bachillerato,valor));
								$("#CampoUniversidad").val('');
								$("#CampoCarrera").val('');
								$("#CampoIU").val('');
								$("#CampoIU").mask("9999",{placeholder:" "});
								$("#CampoUniversidad").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}
				if($("#CampoCarrera").val()==''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionsuperior/agregareducacionsuperior.php",
						success: function(mensaje){
							if(mensaje==null){
var valor=$("#CampoUniversidad").val()+"  "+$("#CampoIU").val();
var bachillerato=$("#CampoUniversidad").val()+" ------ "+$("#CampoIU").val();
			document.getElementById('ListaUniversidad').options.add(new Option(bachillerato,valor));
								$("#CampoUniversidad").val('');
								$("#CampoIU").val('');
								$("#CampoIU").mask("9999",{placeholder:" "});
								$("#CampoUniversidad").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}   
			}else{
Sexy.error('<h1>El campo universidad y la fecha inicial estan vacio <br>Ingrese la universidad y la fecha inicial</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});	
//-------------------------------------------------------------------------------------------------------------------//	
$("#CampoFU").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoUniversidad").val()!=''&&$("#CampoIU").val()!=''&&$("#CampoFU").val()!=''){
				if($("#CampoCarrera").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionsuperior/agregareducacionsuperior.php",
						success: function(mensaje){
							if(mensaje==null){
								var valor=$("#CampoUniversidad").val()+" "+$("#CampoCarrera").val()
								+" "+$("#CampoIU").val()+" "+$("#CampoFU").val();
								var bachillerato=$("#CampoUniversidad").val()+" ------ "+
								$("#CampoCarrera").val()+" ------ "+$("#CampoIU").val()
								+" - "+$("#CampoFU").val();
			document.getElementById('ListaUniversidad').options.add(new Option(bachillerato,valor));
								$("#CampoUniversidad").val('');
								$("#CampoCarrera").val('');
								$("#CampoIU").val('');
								$("#CampoIU").mask("9999",{placeholder:" "});
								$("#CampoFU").val('');
								$("#CampoFU").mask("9999",{placeholder:" "});
								$("#CampoUniversidad").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}
				if($("#CampoCarrera").val()==''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionsuperior/agregareducacionsuperior.php",
						success: function(mensaje){
							if(mensaje==null){
var valor=$("#CampoUniversidad").val()+"  "+$("#CampoIU").val()+" "+$("#CampoFU").val();
var bachillerato=$("#CampoUniversidad").val()+" ------ "+$("#CampoIU").val()+" - "+$("#CampoFU").val();
			document.getElementById('ListaUniversidad').options.add(new Option(bachillerato,valor));
								$("#CampoUniversidad").val('');
								$("#CampoIU").val('');
								$("#CampoIU").mask("9999",{placeholder:" "});
								$("#CampoFU").val('');
								$("#CampoFU").mask("9999",{placeholder:" "});
								$("#CampoUniversidad").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}   
			}else{
Sexy.error('<h1>El campo universidad, la fecha inicial y la fecha final esta vacio <br>Ingrese la universidad, la fecha inicial y la fecha final</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});	
//-------------------------------------------------------------------------------------------------------------------//	
$("#BotonUniversidad").click(function(){ 
	if($('#ListaUniversidad').val()!=null){
Sexy.confirm('<h1>Cuadro de eliminacion</h1><p>¿Desea eliminar la universidad seleccionada?</p><p>Pulse "Ok" para eliminar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
				$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionsuperior/eliminareducacionsuperior.php",
						success: function(mensaje){
							if(mensaje==null){
								$("#ListaUniversidad option:selected").each(function(){  
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
 	Sexy.info('<h1>Cuadro de Verificacion</h1><br/><p>Seleccione la universidad a eliminar</p>');
		}		
    });	    
	   
});