jQuery(function($){
//----------------------------------------------------------------------------------------------------------------------//	
$("#CampoOtros").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoOtros").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-otrosestudios/agregarotrosestudios.php",
						success: function(mensaje){
							if(mensaje==null){
								$('#ListaOtros').append("<option>"+$("#CampoOtros").val()+"</option>");
								$("#CampoOtros").val('');
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
			}else{
Sexy.error('<h1>El campo Institucion / Lugar esta vacio <br>Ingrese la Institucion o Lugar</h1><p>Click en OK, para continuar.</p>');return false;}
		}
	}		
});
$("#CampoOtrosTipo").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoOtros").val()!=''&&$("#CampoOtrosTipo").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-otrosestudios/agregarotrosestudios.php",
						success: function(mensaje){
							if(mensaje==null){
				var valor=$("#CampoOtros").val()+" "+$("#CampoOtrosTipo").val();
				var bachillerato=$("#CampoOtros").val()+" ------ "+$("#CampoOtrosTipo").val();
				document.getElementById('ListaOtros').options.add(new Option(bachillerato,valor));
								$("#CampoOtros").val('');
								$("#CampoOtrosTipo").val('');
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
			}else{
Sexy.error('<h1>El campo Institucion / Lugar y el curso educativo esta vacio <br>Ingrese la Institucion / Lugar y el curso educativo</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});	
//---------------------------------------------------------------------------------------------------------------------//	
$("#CampoIO").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoOtros").val()!=''&&$("#CampoIO").val()!=''){
				if($("#CampoOtrosTipo").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-otrosestudios/agregarotrosestudios.php",
						success: function(mensaje){
							if(mensaje==null){
var valor=$("#CampoOtros").val()+" "+$("#CampoOtrosTipo").val()+" "+$("#CampoIO").val();
var bachillerato=$("#CampoOtros").val()+" ------ "+$("#CampoOtrosTipo").val()
+" ------ "+$("#CampoIO").val();
			document.getElementById('ListaOtros').options.add(new Option(bachillerato,valor));
								$("#CampoOtros").val('');
								$("#CampoOtrosTipo").val('');
								$("#CampoIO").val('');
								$("#CampoIO").mask("9999",{placeholder:" "});
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}
				if($("#CampoOtrosTipo").val()==''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-otrosestudios/agregarotrosestudios.php",
						success: function(mensaje){
							if(mensaje==null){
var valor=$("#CampoOtros").val()+"  "+$("#CampoIO").val();
var bachillerato=$("#CampoOtros").val()+" ------ "+$("#CampoIO").val();
			document.getElementById('ListaOtros').options.add(new Option(bachillerato,valor));
								$("#CampoOtros").val('');
								$("#CampoIO").val('');
								$("#CampoIO").mask("9999",{placeholder:" "});
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}   
			}else{
Sexy.error('<h1>El campo Institucion / Lugar y la fecha inicial estan vacio <br>Ingrese la Institucion / Lugar y la fecha inicial</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});	
//-------------------------------------------------------------------------------------------------------------------//	
$("#CampoFO").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoOtros").val()!=''&&$("#CampoIO").val()!=''&&$("#CampoFO").val()!=''){
				if($("#CampoOtrosTipo").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-otrosestudios/agregarotrosestudios.php",
						success: function(mensaje){
							if(mensaje==null){
								var valor=$("#CampoOtros").val()+" "+$("#CampoOtrosTipo").val()
								+" "+$("#CampoIO").val()+" "+$("#CampoFO").val();
								var bachillerato=$("#CampoOtros").val()+" ------ "+
								$("#CampoOtrosTipo").val()+" ------ "+$("#CampoIO").val()
								+" - "+$("#CampoFO").val();
			document.getElementById('ListaOtros').options.add(new Option(bachillerato,valor));
								$("#CampoOtros").val('');
								$("#CampoOtrosTipo").val('');
								$("#CampoIO").val('');
								$("#CampoIO").mask("9999",{placeholder:" "});
								$("#CampoFO").val('');
								$("#CampoFO").mask("9999",{placeholder:" "});

							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}
				if($("#CampoOtrosTipo").val()==''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-otrosestudios/agregarotrosestudios.php",
						success: function(mensaje){
							if(mensaje==null){
var valor=$("#CampoOtros").val()+"  "+$("#CampoIO").val()+" "+$("#CampoFO").val();
var bachillerato=$("#CampoOtros").val()+" ------ "+$("#CampoIO").val()+" - "+$("#CampoFO").val();
			document.getElementById('ListaOtros').options.add(new Option(bachillerato,valor));
								$("#CampoOtros").val('');
								$("#CampoIO").val('');
								$("#CampoIO").mask("9999",{placeholder:" "});
								$("#CampoFO").val('');
								$("#CampoFO").mask("9999",{placeholder:" "});
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}   
			}else{
Sexy.error('<h1>El campo Institucion / Lugar, la fecha inicial y la fecha final esta vacio <br>Ingrese la universidad, la fecha inicial y la fecha final</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});	
//-------------------------------------------------------------------------------------------------------------------//	
$("#BotonOtros").click(function(){ 
	if($('#ListaOtros').val()!=null){
Sexy.confirm('<h1>Cuadro de eliminacion</h1><p>¿Desea eliminar la institucion seleccionada?</p><p>Pulse "Ok" para eliminar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
				$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-otrosestudios/eliminarotrosestudios.php",
						success: function(mensaje){
							if(mensaje==null){
								$("#ListaOtros option:selected").each(function(){  
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
 	Sexy.info('<h1>Cuadro de Verificacion</h1><br/><p>Seleccione la institucion a eliminar</p>');
			}		
    });	    
//-------------------------------------------------------------------------------------------------------------------//	
});