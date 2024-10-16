jQuery(function($){
//-------------------------------------------------------------------------------------------------------------------//	
$("#CampoBachillerato").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoBachillerato").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionmedia/agregareducacionmedia.php",
						success: function(mensaje){
							if(mensaje==null){
								$('#ListaBachillerato').append("<option>"+$("#CampoBachillerato").val()+"</option>");
								$("#CampoBachillerato").val('');
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
			}else{
Sexy.error('<h1>El campo bachillerato esta vacio <br>Ingrese su bachillerato o colegio</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});
//-------------------------------------------------------------------------------------------------------------------//	 
$("#CampoTipoBachillerato").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoBachillerato").val()!=''&&$("#CampoTipoBachillerato").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionmedia/agregareducacionmedia.php",
						success: function(mensaje){
							if(mensaje==null){
				var valor=$("#CampoBachillerato").val()+" "+$("#CampoTipoBachillerato").val();
				var bachillerato=$("#CampoBachillerato").val()+" ------ "+$("#CampoTipoBachillerato").val();
				document.getElementById('ListaBachillerato').options.add(new Option(bachillerato,valor));
								$("#CampoBachillerato").val('');
								$("#CampoTipoBachillerato").val('');
								$("#CampoBachillerato").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
			}else{
Sexy.error('<h1>El campo bachillerato y el tipo de bachillerato esta vacio <br>Ingrese su bachillerato y el tipo de bachillerato</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});
//-------------------------------------------------------------------------------------------------------------------//	
$("#CampoIIN").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoBachillerato").val()!=''&&$("#CampoIIN").val()!=''){
				if($("#CampoTipoBachillerato").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionmedia/agregareducacionmedia.php",
						success: function(mensaje){
							if(mensaje==null){
var valor=$("#CampoBachillerato").val()+" "+$("#CampoTipoBachillerato").val()+" "+$("#CampoIIN").val();
var bachillerato=$("#CampoBachillerato").val()+" ------ "+$("#CampoTipoBachillerato").val()
+" ------ "+$("#CampoIIN").val();
			document.getElementById('ListaBachillerato').options.add(new Option(bachillerato,valor));
								$("#CampoBachillerato").val('');
								$("#CampoTipoBachillerato").val('');
								$("#CampoIIN").val('');
								$("#CampoIIN").mask("9999",{placeholder:" "});
								$("#CampoBachillerato").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}
				if($("#CampoTipoBachillerato").val()==''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionmedia/agregareducacionmedia.php",
						success: function(mensaje){
							if(mensaje==null){
var valor=$("#CampoBachillerato").val()+"  "+$("#CampoIIN").val();
var bachillerato=$("#CampoBachillerato").val()+" ------ "+$("#CampoIIN").val();
			document.getElementById('ListaBachillerato').options.add(new Option(bachillerato,valor));
								$("#CampoBachillerato").val('');
								$("#CampoIIN").val('');
								$("#CampoIIN").mask("9999",{placeholder:" "});
								$("#CampoBachillerato").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}   
			}else{
Sexy.error('<h1>El campo bachillerato y la fecha inicial esta vacio <br>Ingrese su bachillerato y la fecha incial</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});
//-------------------------------------------------------------------------------------------------------------------//	
$("#CampoFIN").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoBachillerato").val()!=''&&$("#CampoIIN").val()!=''&&$("#CampoFIN").val()!=''){
				if($("#CampoTipoBachillerato").val()!=''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionmedia/agregareducacionmedia.php",
						success: function(mensaje){
							if(mensaje==null){
								var valor=$("#CampoBachillerato").val()+" "+$("#CampoTipoBachillerato").val()
								+" "+$("#CampoIIN").val()+" "+$("#CampoFIN").val();
								var bachillerato=$("#CampoBachillerato").val()+" ------ "+
								$("#CampoTipoBachillerato").val()+" ------ "+$("#CampoIIN").val()
								+" - "+$("#CampoFIN").val();
			document.getElementById('ListaBachillerato').options.add(new Option(bachillerato,valor));
								$("#CampoBachillerato").val('');
								$("#CampoTipoBachillerato").val('');
								$("#CampoIIN").val('');
								$("#CampoIIN").mask("9999",{placeholder:" "});
								$("#CampoFIN").val('');
								$("#CampoFIN").mask("9999",{placeholder:" "});
								$("#CampoBachillerato").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}
				if($("#CampoTipoBachillerato").val()==''){
	 			$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionmedia/agregareducacionmedia.php",
						success: function(mensaje){
							if(mensaje==null){
var valor=$("#CampoBachillerato").val()+"  "+$("#CampoIIN").val()+" "+$("#CampoFIN").val();
var bachillerato=$("#CampoBachillerato").val()+" ------ "+$("#CampoIIN").val()+" - "+$("#CampoFIN").val();
			document.getElementById('ListaBachillerato').options.add(new Option(bachillerato,valor));
								$("#CampoBachillerato").val('');
								$("#CampoIIN").val('');
								$("#CampoIIN").mask("9999",{placeholder:" "});
								$("#CampoFIN").val('');
								$("#CampoFIN").mask("9999",{placeholder:" "});
								$("#CampoBachillerato").focus();
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   });
				}   
			}else{
Sexy.error('<h1>El campo bachillerato, la fecha inicial y la fecha final esta vacio <br>Ingrese su bachillerato, la fecha incial y la fecha final</h1><p>Click en OK, para continuar.</p>');return false;}
		}
		}		
	});	
//-------------------------------------------------------------------------------------------------------------------//	
$("#BotonBachillerato").click(function(){ 
	if($('#ListaBachillerato').val()!=null){
Sexy.confirm('<h1>Cuadro de eliminacion</h1><p>¿Desea eliminar el bachillerato seleccionado?</p><p>Pulse "Ok" para eliminar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
				$.ajax({
        				data: $("#NuevoAspirante" ).serialize(),
        				type: "POST",
        				dataType: "json",
        				url: "../php/clase-educacionmedia/eliminareducacionmedia.php",
						success: function(mensaje){
							if(mensaje==null){
								$("#ListaBachillerato option:selected").each(function(){  
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
//-------------------------------------------------------------------------------------------------------------------//
});