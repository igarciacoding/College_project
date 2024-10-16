jQuery(function($){
$("#CampoExperiencias").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoExperiencias").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-experiencias/agregarexperiencias.php",
						success: function(mensaje){
							if(mensaje==null){
								$('#ListaEsperiencias').append("<option>"+$("#CampoExperiencias").val()+"</option>");
								$("#CampoExperiencias").val('');
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
			}else{
Sexy.error('<h1>El campo Empresa/ Institucion / Lugar esta vacio <br>Ingrese la Empresa/ Institucion / Lugar</h1><p>Click en OK, para continuar.</p>');return false;}
		}
	}		
});
$("#CampoTipoExperiencias").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoExperiencias").val()!=''&&$("#CampoTipoExperiencias").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-experiencias/agregarexperiencias.php",
						success: function(mensaje){
							if(mensaje==null){
				var valor=$("#CampoExperiencias").val()+" "+$("#CampoTipoExperiencias").val();
				var bachillerato=$("#CampoExperiencias").val()+" ------ "+$("#CampoTipoExperiencias").val();
				document.getElementById('ListaEsperiencias').options.add(new Option(bachillerato,valor));
								$("#CampoExperiencias").val('');
								$("#CampoTipoExperiencias").val('');
								$("#CampoExperiencias").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
			}else{
Sexy.error('<h1>El campo Empresa/ Institucion / Lugar y el puesto esta vacio <br>Ingrese la Institucion / Lugar y el Puesto</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});	
//---------------------------------------------------------------------------------------------------------------------//	
$("#CampoIE").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoExperiencias").val()!=''&&$("#CampoIE").val()!=''){
				if($("#CampoTipoExperiencias").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-experiencias/agregarexperiencias.php",
						success: function(mensaje){
							if(mensaje==null){
var valor=$("#CampoExperiencias").val()+" "+$("#CampoTipoExperiencias").val()+" "+$("#CampoIE").val();
var bachillerato=$("#CampoExperiencias").val()+" ------ "+$("#CampoTipoExperiencias").val()
+" ------ "+$("#CampoIE").val();
			document.getElementById('ListaEsperiencias').options.add(new Option(bachillerato,valor));
								$("#CampoExperiencias").val('');
								$("#CampoTipoExperiencias").val('');
								$("#CampoIE").val('');
								$("#CampoIE").mask("9999",{placeholder:" "});
								$("#CampoExperiencias").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}
				if($("#CampoTipoExperiencias").val()==''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-experiencias/agregarexperiencias.php",
						success: function(mensaje){
							if(mensaje==null){
var valor=$("#CampoExperiencias").val()+"  "+$("#CampoIE").val();
var bachillerato=$("#CampoExperiencias").val()+" ------ "+$("#CampoIE").val();
			document.getElementById('ListaEsperiencias').options.add(new Option(bachillerato,valor));
								$("#CampoExperiencias").val('');
								$("#CampoIE").val('');
								$("#CampoIE").mask("9999",{placeholder:" "});
								$("#CampoExperiencias").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}   
			}else{
Sexy.error('<h1>El campo Empresa/ Institucion / Lugar y la fecha inicial estan vacio <br>Ingrese la Empresa/ Institucion / Lugar y la fecha inicial</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});	
//-------------------------------------------------------------------------------------------------------------------//	
$("#CampoFE").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoExperiencias").val()!=''&&$("#CampoIE").val()!=''&&$("#CampoFE").val()!=''){
				if($("#CampoTipoExperiencias").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-experiencias/agregarexperiencias.php",
						success: function(mensaje){
							if(mensaje==null){
								var valor=$("#CampoExperiencias").val()+" "+$("#CampoTipoExperiencias").val()
								+" "+$("#CampoIE").val()+" "+$("#CampoFE").val();
								var bachillerato=$("#CampoExperiencias").val()+" ------ "+
								$("#CampoTipoExperiencias").val()+" ------ "+$("#CampoIE").val()
								+" - "+$("#CampoFE").val();
			document.getElementById('ListaEsperiencias').options.add(new Option(bachillerato,valor));
								$("#CampoExperiencias").val('');
								$("#CampoTipoExperiencias").val('');
								$("#CampoIE").val('');
								$("#CampoIE").mask("9999",{placeholder:" "});
								$("#CampoFE").val('');
								$("#CampoFE").mask("9999",{placeholder:" "});
								$("#CampoExperiencias").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}
				if($("#CampoTipoExperiencias").val()==''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-experiencias/agregarexperiencias.php",
						success: function(mensaje){
							if(mensaje==null){
var valor=$("#CampoExperiencias").val()+"  "+$("#CampoIE").val()+" "+$("#CampoFE").val();
var bachillerato=$("#CampoExperiencias").val()+" ------ "+$("#CampoIE").val()+" - "+$("#CampoFE").val();
			document.getElementById('ListaEsperiencias').options.add(new Option(bachillerato,valor));
								$("#CampoExperiencias").val('');
								$("#CampoIE").val('');
								$("#CampoIE").mask("9999",{placeholder:" "});
								$("#CampoFE").val('');
								$("#CampoFE").mask("9999",{placeholder:" "});
								$("#CampoExperiencias").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}   
			}else{
Sexy.error('<h1>El campo Empresa/ Institucion / Lugar, la fecha inicial y la fecha final esta vacio <br>Ingrese la Empresa/ Institucion / Lugar, la fecha inicial y la fecha final</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});	
	
$("#BotonExperiencias").click(function(){ 
	if($('#ListaEsperiencias').val()!=null){
Sexy.confirm('<h1>Cuadro de eliminacion</h1><p>¿Desea eliminar la empresa seleccionada?</p><p>Pulse "Ok" para eliminar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
				$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-experiencias/eliminarexperiencias.php",
						success: function(mensaje){
							if(mensaje==null){
								$("#ListaEsperiencias option:selected").each(function(){  
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
 	Sexy.info('<h1>Cuadro de Verificacion</h1><br/><p>Seleccione el bachillerato a eliminar</p>');
			}		
    });	    
	   
});