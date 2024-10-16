jQuery(function($){
//-------------------------------------------------------------------------------------------------------------------//		
$("#CampoApellidoRP").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoNombreRP").val()!=''&&$("#CampoApellidoRP").val()!=''){
	 			$.ajax({
       				data: $("#NuevoAspirante" ).serialize(),
       				type: "POST",
       				dataType: "json",
       				url: "../php/clase-referencias/agregarreferenciaspersonales.php",
					success: function(mensaje){
					if(mensaje==null){								
						var valor=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()+"    Personal";
						var centroescolar=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val();
					document.getElementById('ListaReferenciasPersonales').options.add(new Option(centroescolar,valor));
						$("#CampoNombreRP").val('');
						$("#CampoApellidoRP").val('');
				   }else{
					Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
					}}
			   });   
		}else{
	Sexy.error('<h1>El campo nombre o el campo apellido esta vacio <br>Ingrese su nombre y apellido</h1><p>Click en OK, para continuar.</p>');return false;}
		}
	}		
});
//-------------------------------------------------------------------------------------------------------------------//	
$("#CampoDuiRP").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoNombreRP").val()!=''&&$("#CampoApellidoRP").val()!=''){
		//-------------------------------------//		
				if($("#CampoDuiRP").val()!=''&&$("#CampoTelefonoRP").val()==''&&$("#CampoOcupacionRP").val()==''){
	 			$.ajax({
       				data: $("#NuevoAspirante" ).serialize(),
       				type: "POST",
       				dataType: "json",
       				url: "../php/clase-referencias/agregarreferenciaspersonales.php",
					success: function(mensaje){
					if(mensaje==null){								
		var valor=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()+" "+$("#CampoDuiRP").val()+"   Personal";
		var centroescolar=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()+" ------ "+$("#CampoDuiRP").val();
		document.getElementById('ListaReferenciasPersonales').options.add(new Option(centroescolar,valor));
					$("#CampoNombreRP").val('');
					$("#CampoApellidoRP").val('');
					$("#CampoDuiRP").val('');
					$("#CampoDuiRP").mask("99999999-9",{placeholder:" "});
					   }else{
					Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
				}}
    	   });
		}
		 //-------------------------------------//
		 //-------------------------------------//		
				if($("#CampoDuiRP").val()!=''&&$("#CampoTelefonoRP").val()!=''&&$("#CampoOcupacionRP").val()==''){
	 			$.ajax({
					data: $("#NuevoAspirante").serialize(),
					type: "POST",
					dataType: "json",
					url: "../php/clase-referencias/agregarreferenciaspersonales.php",
					success: function(mensaje){
					if(mensaje==null){								
						var valor=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
							+" "+$("#CampoDuiRP").val()+" "+$("#CampoTelefonoRP").val()+"  Personal";
						var centroescolar=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
							+" ------ "+$("#CampoDuiRP").val()+" ------ "+$("#CampoTelefonoRP").val();
						document.getElementById('ListaReferenciasPersonales').options.add(new Option(centroescolar,valor));
							$("#CampoNombreRP").val('');
							$("#CampoApellidoRP").val('');
							$("#CampoDuiRP").val('');
							$("#CampoDuiRP").mask("99999999-9",{placeholder:" "});
							$("#CampoTelefonoRP").val('');
							$("#CampoTelefonoRP").mask("99999999",{placeholder:" "});
				}else{
				Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
				}}
      	   });
		}
		 //-------------------------------------//  
		 //-------------------------------------//		
				if($("#CampoDuiRP").val()!=''&&$("#CampoTelefonoRP").val()!=''&&$("#CampoOcupacionRP").val()!=''){
	 			$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-referencias/agregarreferenciaspersonales.php",
					success: function(mensaje){
					if(mensaje==null){								
						var valor=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
						+" "+$("#CampoDuiRP").val()+" "+$("#CampoTelefonoRP").val()+" "+$("#CampoOcupacionRP").val()+" Personal";
						var centroescolar=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()+" ------ "+
						$("#CampoDuiRP").val()+" ------ "+$("#CampoTelefonoRP").val()+" ------ "+$("#CampoOcupacionRP").val();
					document.getElementById('ListaReferenciasPersonales').options.add(new Option(centroescolar,valor));
							$("#CampoNombreRP").val('');
							$("#CampoApellidoRP").val('');
							$("#CampoDuiRP").val('');
							$("#CampoDuiRP").mask("99999999-9",{placeholder:" "});
							$("#CampoTelefonoRP").val('');
							$("#CampoTelefonoRP").mask("99999999",{placeholder:" "});
							$("#CampoOcupacionRP").val('');		
			   }else{
				Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
				}}
      	   });
		}
		 //-------------------------------------//
		  //-------------------------------------//		
				if($("#CampoDuiRP").val()!=''&&$("#CampoTelefonoRP").val()==''&&$("#CampoOcupacionRP").val()!=''){
	 				$.ajax({
    					data: $("#NuevoAspirante" ).serialize(),
    					type: "POST",
    					dataType: "json",
    					url: "../php/clase-referencias/agregarreferenciaspersonales.php",
						success: function(mensaje){
	 						if(mensaje==null){								
			      				  var valor=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
									+" "+$("#CampoDuiRP").val()+"  "+$("#CampoOcupacionRP").val()+" Personal";
				    			  var centroescolar=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
									+" ------ "+$("#CampoDuiRP").val()+" ------ "+$("#CampoOcupacionRP").val();
								document.getElementById('ListaReferenciasPersonales').options.add(new Option(centroescolar,valor));
									$("#CampoNombreRP").val('');
									$("#CampoApellidoRP").val('');
									$("#CampoDuiRP").val('');
									$("#CampoDuiRP").mask("99999999-9",{placeholder:" "});
									$("#CampoOcupacionRP").val('');
						   }else{
							Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
						}}
      		   });
		}
		 //-------------------------------------// 
	}else{
	Sexy.error('<h1>El campo nombre o el campo apellido esta vacio <br>Ingrese su nombre y apellido</h1><p>Click en OK, para continuar.</p>');return false;}
		}
	}		
});
//-------------------------------------------------------------------------------------------------------------------//		
$("#CampoTelefonoRP").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoNombreRP").val()!=''&&$("#CampoApellidoRP").val()!=''){
			//-------------------------------------//		
				if($("#CampoDuiRP").val()==''&&$("#CampoTelefonoRP").val()!=''&&$("#CampoOcupacionRP").val()==''){
					$.ajax({
    					data: $("#NuevoAspirante" ).serialize(),
    					type: "POST",
    					dataType: "json",
    					url: "../php/clase-referencias/agregarreferenciaspersonales.php",
						success: function(mensaje){
							if(mensaje==null){								
			var valor=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()+"  "+$("#CampoTelefonoRP").val()+"  Personal";
			var centroescolar=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()+" ------ "+$("#CampoTelefonoRP").val();
					document.getElementById('ListaReferenciasPersonales').options.add(new Option(centroescolar,valor));
						$("#CampoNombreRP").val('');
						$("#CampoApellidoRP").val('');
						$("#CampoTelefonoRP").val('');
						$("#CampoTelefonoRP").mask("99999999",{placeholder:" "});
			  }else{
				Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
				}}
       });
	}		
	//-------------------------------------//		
	if($("#CampoDuiRP").val()!=''&&$("#CampoTelefonoRP").val()!=''&&$("#CampoOcupacionRP").val()==''){
		$.ajax({
			data: $("#NuevoAspirante").serialize(),
			type: "POST",
			dataType: "json",
			url: "../php/clase-referencias/agregarreferenciaspersonales.php",
			success: function(mensaje){
			if(mensaje==null){								
				var valor=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
				+" "+$("#CampoDuiRP").val()+" "+$("#CampoTelefonoRP").val()+"  Personal";
				var centroescolar=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
				+" ------ "+$("#CampoDuiRP").val()+" ------ "+$("#CampoTelefonoRP").val();
				document.getElementById('ListaReferenciasPersonales').options.add(new Option(centroescolar,valor));
					$("#CampoNombreRP").val('');
					$("#CampoApellidoRP").val('');
					$("#CampoDuiRP").val('');
					$("#CampoDuiRP").mask("99999999-9",{placeholder:" "});
					$("#CampoTelefonoRP").val('');
					$("#CampoTelefonoRP").mask("99999999",{placeholder:" "});
				}else{
				Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
				}}
      	   });	
		}
	//-------------------------------------//	
	//-------------------------------------//		
				if($("#CampoDuiRP").val()!=''&&$("#CampoTelefonoRP").val()!=''&&$("#CampoOcupacionRP").val()!=''){
	 			$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-referencias/agregarreferenciaspersonales.php",
					success: function(mensaje){
					if(mensaje==null){								
						var valor=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
						+" "+$("#CampoDuiRP").val()+" "+$("#CampoTelefonoRP").val()+" "+$("#CampoOcupacionRP").val()+" Personal";
						var centroescolar=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()+" ------ "+
						$("#CampoDuiRP").val()+" ------ "+$("#CampoTelefonoRP").val()+" ------ "+$("#CampoOcupacionRP").val();
					document.getElementById('ListaReferenciasPersonales').options.add(new Option(centroescolar,valor));
							$("#CampoNombreRP").val('');
							$("#CampoApellidoRP").val('');
							$("#CampoDuiRP").val('');
							$("#CampoDuiRP").mask("99999999-9",{placeholder:" "});
							$("#CampoTelefonoRP").val('');
							$("#CampoTelefonoRP").mask("99999999",{placeholder:" "});
							$("#CampoOcupacionRP").val('');		
			   }else{
				Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
				}}
      	   });
		}
	 //-------------------------------------//	
	 //-------------------------------------//		
				if($("#CampoDuiRP").val()==''&&$("#CampoTelefonoRP").val()!=''&&$("#CampoOcupacionRP").val()!=''){
					$.ajax({
    			data: $("#NuevoAspirante" ).serialize(),
    			type: "POST",
    			dataType: "json",
    			url: "../php/clase-referencias/agregarreferenciaspersonales.php",
				success: function(mensaje){
				if(mensaje==null){								
					var valor=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
					+"  "+$("#CampoTelefonoRP").val()+" "+$("#CampoOcupacionRP").val()+" Personal";
					var centroescolar=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
					+" ------ "+$("#CampoTelefonoRP").val()+" ------ "+$("#CampoOcupacionRP").val();
				document.getElementById('ListaReferenciasPersonales').options.add(new Option(centroescolar,valor));
					$("#CampoNombreRP").val('');
					$("#CampoApellidoRP").val('');
					$("#CampoTelefonoRP").val('');
					$("#CampoTelefonoRP").mask("99999999",{placeholder:" "});
					$("#CampoOcupacionRP").val('');
				 }else{
					Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
			   	 }}
      	   });			
		}
	 	 //-------------------------------------//			 
	}else{
	Sexy.error('<h1>El campo nombre o el campo apellido esta vacio <br>Ingrese su nombre y apellido</h1><p>Click en OK, para continuar.</p>');return false;}
	}
	}		
});	
//-------------------------------------------------------------------------------------------------------------------//	
$("#CampoOcupacionRP").keyup(function(e){
		var key=e.keyCode || e.which;
		if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoNombreRP").val()!=''&&$("#CampoApellidoRP").val()!=''&&$("#CampoOcupacionRP").val()!=''){
//----------------------------------------------------------------------------------------------------------------//
		if($("#CampoDuiRP").val()==''&&$("#CampoTelefonoRP").val()==''){
	 			$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-referencias/agregarreferenciaspersonales.php",
					success: function(mensaje){
					if(mensaje==null){								
						var valor=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
						+"   "+$("#CampoOcupacionRP").val()+" Personal";
						var centroescolar=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
						+" ------ "+$("#CampoOcupacionRP").val();
					document.getElementById('ListaReferenciasPersonales').options.add(new Option(centroescolar,valor));
						$("#CampoNombreRP").val('');
						$("#CampoApellidoRP").val('');
						$("#CampoOcupacionRP").val('');
					  }else{
						Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
						}}
     		   }); 
	}
	if($("#CampoDuiRP").val()!=''&&$("#CampoTelefonoRP").val()==''){
		$.ajax({
    		data: $("#NuevoAspirante" ).serialize(),
    		type: "POST",
    		dataType: "json",
    		url: "../php/clase-referencias/agregarreferenciaspersonales.php",
			success: function(mensaje){
	 		if(mensaje==null){								
			        var valor=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
					+" "+$("#CampoDuiRP").val()+"  "+$("#CampoOcupacionRP").val()+" Personal";
				    var centroescolar=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
					+" ------ "+$("#CampoDuiRP").val()+" ------ "+$("#CampoOcupacionRP").val();
					document.getElementById('ListaReferenciasPersonales').options.add(new Option(centroescolar,valor));
						$("#CampoNombreRP").val('');
						$("#CampoApellidoRP").val('');
						$("#CampoDuiRP").val('');
						$("#CampoDuiRP").mask("99999999-9",{placeholder:" "});
						$("#CampoOcupacionRP").val('');
						   }else{
							Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
						}}
      		   });
		}
		if($("#CampoDuiRP").val()==''&&$("#CampoTelefonoRP").val()!=''){
			$.ajax({
    			data: $("#NuevoAspirante" ).serialize(),
    			type: "POST",
    			dataType: "json",
    			url: "../php/clase-referencias/agregarreferenciaspersonales.php",
				success: function(mensaje){
				if(mensaje==null){								
					var valor=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
					+"  "+$("#CampoTelefonoRP").val()+" "+$("#CampoOcupacionRP").val()+" Personal";
					var centroescolar=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
					+" ------ "+$("#CampoTelefonoRP").val()+" ------ "+$("#CampoOcupacionRP").val();
				document.getElementById('ListaReferenciasPersonales').options.add(new Option(centroescolar,valor));
					$("#CampoNombreRP").val('');
					$("#CampoApellidoRP").val('');
					$("#CampoTelefonoRP").val('');
					$("#CampoTelefonoRP").mask("99999999",{placeholder:" "});
					$("#CampoOcupacionRP").val('');
				 }else{
					Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
			   	 }}
      	   });
		}
	if($("#CampoDuiRP").val()!=''&&$("#CampoTelefonoRP").val()!=''){
		$.ajax({
        	data: $("#NuevoAspirante" ).serialize(),
        	type: "POST",
        	dataType: "json",
        	url: "../php/clase-referencias/agregarreferenciaspersonales.php",
			success: function(mensaje){
			if(mensaje==null){								
				var valor=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()
				+" "+$("#CampoDuiRP").val()+" "+$("#CampoTelefonoRP").val()+" "+$("#CampoOcupacionRP").val()+" Personal";
				var centroescolar=$("#CampoNombreRP").val()+" "+$("#CampoApellidoRP").val()+" ------ "+
				$("#CampoDuiRP").val()+" ------ "+$("#CampoTelefonoRP").val()+" ------ "+$("#CampoOcupacionRP").val();
				document.getElementById('ListaReferenciasPersonales').options.add(new Option(centroescolar,valor));
					$("#CampoNombreRP").val('');
					$("#CampoApellidoRP").val('');
					$("#CampoDuiRP").val('');
					$("#CampoDuiRP").mask("99999999-9",{placeholder:" "});
					$("#CampoTelefonoRP").val('');
					$("#CampoTelefonoRP").mask("99999999",{placeholder:" "});
					$("#CampoOcupacionRP").val('');		
			   }else{
				Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
				}}
      	   });
		}					   		
//----------------------------------------------------------------------------------------------------------------//					   
			}else{
	Sexy.error('<h1>El campo nombre o el campo apellido esta vacio <br>Ingrese su nombre y apellido</h1><p>Click en OK, para continuar.</p>');return false;}
		}
	}		
});	
//----------------------------------------------------------------------------------------------------------------//	
$("#BotonReferenciaPersonal").click(function(){ 
	if($('#ListaReferenciasPersonales').val()!=null){
Sexy.confirm('<h1>Cuadro de eliminacion</h1><p>¿Desea eliminar la referencia seleccionada?</p><p>Pulse "Ok" para eliminar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
				$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-referencias/eliminarreferenciaspersonales.php",
					success: function(mensaje){
					if(mensaje==null){
						$("#ListaReferenciasPersonales option:selected").each(function(){  
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
//----------------------------------------------------------------------------------------------------------------//		
});