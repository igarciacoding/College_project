jQuery(function($){
//-------------------------------------------------------------------------------------------------------------------//		
$("#CampoApellidoRL").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoNombreRL").val()!=''&&$("#CampoApellidoRL").val()!=''){
	 			$.ajax({
       				data: $("#NuevoAspirante" ).serialize(),
       				type: "POST",
       				dataType: "json",
       				url: "../php/clase-referencias/agregarreferenciaslaborales.php",
					success: function(mensaje){
					if(mensaje==null){								
						var valor=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()+"    Laborales";
						var centroescolar=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val();
					document.getElementById('ListaReferenciasLaborales').options.add(new Option(centroescolar,valor));
						$("#CampoNombreRL").val('');
						$("#CampoApellidoRL").val('');
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
$("#CampoDuiRL").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoNombreRL").val()!=''&&$("#CampoApellidoRL").val()!=''){
		//-------------------------------------//		
				if($("#CampoDuiRL").val()!=''&&$("#CampoTelefonoRL").val()==''&&$("#CampoOcupacionRL").val()==''){
	 			$.ajax({
       				data: $("#NuevoAspirante" ).serialize(),
       				type: "POST",
       				dataType: "json",
       				url: "../php/clase-referencias/agregarreferenciaslaborales.php",
					success: function(mensaje){
					if(mensaje==null){								
		var valor=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()+" "+$("#CampoDuiRL").val()+"   Laborales";
		var centroescolar=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()+" ------ "+$("#CampoDuiRL").val();
		document.getElementById('ListaReferenciasLaborales').options.add(new Option(centroescolar,valor));
					$("#CampoNombreRL").val('');
					$("#CampoApellidoRL").val('');
					$("#CampoDuiRL").val('');
					$("#CampoDuiRL").mask("99999999-9",{placeholder:" "});
					   }else{
					Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
				}}
    	   });
		}
		 //-------------------------------------//
		 //-------------------------------------//		
				if($("#CampoDuiRL").val()!=''&&$("#CampoTelefonoRL").val()!=''&&$("#CampoOcupacionRL").val()==''){
	 			$.ajax({
					data: $("#NuevoAspirante").serialize(),
					type: "POST",
					dataType: "json",
					url: "../php/clase-referencias/agregarreferenciaslaborales.php",
					success: function(mensaje){
					if(mensaje==null){								
						var valor=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
							+" "+$("#CampoDuiRL").val()+" "+$("#CampoTelefonoRL").val()+"  Laborales";
						var centroescolar=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
							+" ------ "+$("#CampoDuiRL").val()+" ------ "+$("#CampoTelefonoRL").val();
						document.getElementById('ListaReferenciasLaborales').options.add(new Option(centroescolar,valor));
							$("#CampoNombreRL").val('');
							$("#CampoApellidoRL").val('');
							$("#CampoDuiRL").val('');
							$("#CampoDuiRL").mask("99999999-9",{placeholder:" "});
							$("#CampoTelefonoRL").val('');
							$("#CampoTelefonoRL").mask("99999999",{placeholder:" "});
				}else{
				Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
				}}
      	   });
		}
		 //-------------------------------------//  
		 //-------------------------------------//		
				if($("#CampoDuiRL").val()!=''&&$("#CampoTelefonoRL").val()!=''&&$("#CampoOcupacionRL").val()!=''){
	 			$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-referencias/agregarreferenciaslaborales.php",
					success: function(mensaje){
					if(mensaje==null){								
						var valor=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
						+" "+$("#CampoDuiRL").val()+" "+$("#CampoTelefonoRL").val()+" "+$("#CampoOcupacionRL").val()+" Laborales";
						var centroescolar=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()+" ------ "+
						$("#CampoDuiRL").val()+" ------ "+$("#CampoTelefonoRL").val()+" ------ "+$("#CampoOcupacionRL").val();
					document.getElementById('ListaReferenciasLaborales').options.add(new Option(centroescolar,valor));
							$("#CampoNombreRL").val('');
							$("#CampoApellidoRL").val('');
							$("#CampoDuiRL").val('');
							$("#CampoDuiRL").mask("99999999-9",{placeholder:" "});
							$("#CampoTelefonoRL").val('');
							$("#CampoTelefonoRL").mask("99999999",{placeholder:" "});
							$("#CampoOcupacionRL").val('');		
			   }else{
				Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
				}}
      	   });
		}
		 //-------------------------------------//
		  //-------------------------------------//		
				if($("#CampoDuiRL").val()!=''&&$("#CampoTelefonoRL").val()==''&&$("#CampoOcupacionRL").val()!=''){
	 				$.ajax({
    					data: $("#NuevoAspirante" ).serialize(),
    					type: "POST",
    					dataType: "json",
    					url: "../php/clase-referencias/agregarreferenciaslaborales.php",
						success: function(mensaje){
	 						if(mensaje==null){								
			      				  var valor=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
									+" "+$("#CampoDuiRL").val()+"  "+$("#CampoOcupacionRL").val()+" Laborales";
				    			  var centroescolar=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
									+" ------ "+$("#CampoDuiRL").val()+" ------ "+$("#CampoOcupacionRL").val();
								document.getElementById('ListaReferenciasLaborales').options.add(new Option(centroescolar,valor));
									$("#CampoNombreRL").val('');
									$("#CampoApellidoRL").val('');
									$("#CampoDuiRL").val('');
									$("#CampoDuiRL").mask("99999999-9",{placeholder:" "});
									$("#CampoOcupacionRL").val('');
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
$("#CampoTelefonoRL").keyup(function(e){
	var key=e.keyCode || e.which;
	if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoNombreRL").val()!=''&&$("#CampoApellidoRL").val()!=''){
			//-------------------------------------//		
				if($("#CampoDuiRL").val()==''&&$("#CampoTelefonoRL").val()!=''&&$("#CampoOcupacionRL").val()==''){
					$.ajax({
    					data: $("#NuevoAspirante" ).serialize(),
    					type: "POST",
    					dataType: "json",
    					url: "../php/clase-referencias/agregarreferenciaslaborales.php",
						success: function(mensaje){
							if(mensaje==null){								
			var valor=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()+"  "+$("#CampoTelefonoRL").val()+"  Laborales";
			var centroescolar=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()+" ------ "+$("#CampoTelefonoRL").val();
					document.getElementById('ListaReferenciasLaborales').options.add(new Option(centroescolar,valor));
						$("#CampoNombreRL").val('');
						$("#CampoApellidoRL").val('');
						$("#CampoTelefonoRL").val('');
						$("#CampoTelefonoRL").mask("99999999",{placeholder:" "});
			  }else{
				Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
				}}
       });
	}		
	//-------------------------------------//		
	if($("#CampoDuiRL").val()!=''&&$("#CampoTelefonoRL").val()!=''&&$("#CampoOcupacionRL").val()==''){
		$.ajax({
			data: $("#NuevoAspirante").serialize(),
			type: "POST",
			dataType: "json",
			url: "../php/clase-referencias/agregarreferenciaslaborales.php",
			success: function(mensaje){
			if(mensaje==null){								
				var valor=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
				+" "+$("#CampoDuiRL").val()+" "+$("#CampoTelefonoRL").val()+"  Laborales";
				var centroescolar=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
				+" ------ "+$("#CampoDuiRL").val()+" ------ "+$("#CampoTelefonoRL").val();
				document.getElementById('ListaReferenciasLaborales').options.add(new Option(centroescolar,valor));
					$("#CampoNombreRL").val('');
					$("#CampoApellidoRL").val('');
					$("#CampoDuiRL").val('');
					$("#CampoDuiRL").mask("99999999-9",{placeholder:" "});
					$("#CampoTelefonoRL").val('');
					$("#CampoTelefonoRL").mask("99999999",{placeholder:" "});
				}else{
				Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
				}}
      	   });	
		}
	//-------------------------------------//	
	//-------------------------------------//		
				if($("#CampoDuiRL").val()!=''&&$("#CampoTelefonoRL").val()!=''&&$("#CampoOcupacionRL").val()!=''){
	 			$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-referencias/agregarreferenciaslaborales.php",
					success: function(mensaje){
					if(mensaje==null){								
						var valor=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
						+" "+$("#CampoDuiRL").val()+" "+$("#CampoTelefonoRL").val()+" "+$("#CampoOcupacionRL").val()+" Laborales";
						var centroescolar=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()+" ------ "+
						$("#CampoDuiRL").val()+" ------ "+$("#CampoTelefonoRL").val()+" ------ "+$("#CampoOcupacionRL").val();
					document.getElementById('ListaReferenciasLaborales').options.add(new Option(centroescolar,valor));
							$("#CampoNombreRL").val('');
							$("#CampoApellidoRL").val('');
							$("#CampoDuiRL").val('');
							$("#CampoDuiRL").mask("99999999-9",{placeholder:" "});
							$("#CampoTelefonoRL").val('');
							$("#CampoTelefonoRL").mask("99999999",{placeholder:" "});
							$("#CampoOcupacionRL").val('');		
			   }else{
				Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
				}}
      	   });
		}
	 //-------------------------------------//	
	 //-------------------------------------//		
				if($("#CampoDuiRL").val()==''&&$("#CampoTelefonoRL").val()!=''&&$("#CampoOcupacionRL").val()!=''){
					$.ajax({
    			data: $("#NuevoAspirante" ).serialize(),
    			type: "POST",
    			dataType: "json",
    			url: "../php/clase-referencias/agregarreferenciaslaborales.php",
				success: function(mensaje){
				if(mensaje==null){								
					var valor=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
					+"  "+$("#CampoTelefonoRL").val()+" "+$("#CampoOcupacionRL").val()+" Laborales";
					var centroescolar=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
					+" ------ "+$("#CampoTelefonoRL").val()+" ------ "+$("#CampoOcupacionRL").val();
				document.getElementById('ListaReferenciasLaborales').options.add(new Option(centroescolar,valor));
					$("#CampoNombreRL").val('');
					$("#CampoApellidoRL").val('');
					$("#CampoTelefonoRL").val('');
					$("#CampoTelefonoRL").mask("99999999",{placeholder:" "});
					$("#CampoOcupacionRL").val('');
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
$("#CampoOcupacionRL").keyup(function(e){
		var key=e.keyCode || e.which;
		if (key==13){
		if($("#CampoDui").val()!=''||$("#CampoPasaporte").val()!=''){
			if($("#CampoNombreRL").val()!=''&&$("#CampoApellidoRL").val()!=''&&$("#CampoOcupacionRL").val()!=''){
//----------------------------------------------------------------------------------------------------------------//
		if($("#CampoDuiRL").val()==''&&$("#CampoTelefonoRL").val()==''){
	 			$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-referencias/agregarreferenciaslaborales.php",
					success: function(mensaje){
					if(mensaje==null){								
						var valor=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
						+"   "+$("#CampoOcupacionRL").val()+" Laborales";
						var centroescolar=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
						+" ------ "+$("#CampoOcupacionRL").val();
					document.getElementById('ListaReferenciasLaborales').options.add(new Option(centroescolar,valor));
						$("#CampoNombreRL").val('');
						$("#CampoApellidoRL").val('');
						$("#CampoOcupacionRL").val('');
					  }else{
						Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
						}}
     		   }); 
	}
	if($("#CampoDuiRL").val()!=''&&$("#CampoTelefonoRL").val()==''){
		$.ajax({
    		data: $("#NuevoAspirante" ).serialize(),
    		type: "POST",
    		dataType: "json",
    		url: "../php/clase-referencias/agregarreferenciaslaborales.php",
			success: function(mensaje){
	 		if(mensaje==null){								
			        var valor=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
					+" "+$("#CampoDuiRL").val()+"  "+$("#CampoOcupacionRL").val()+" Laborales";
				    var centroescolar=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
					+" ------ "+$("#CampoDuiRL").val()+" ------ "+$("#CampoOcupacionRL").val();
					document.getElementById('ListaReferenciasLaborales').options.add(new Option(centroescolar,valor));
						$("#CampoNombreRL").val('');
						$("#CampoApellidoRL").val('');
						$("#CampoDuiRL").val('');
						$("#CampoDuiRL").mask("99999999-9",{placeholder:" "});
						$("#CampoOcupacionRL").val('');
						   }else{
							Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
						}}
      		   });
		}
		if($("#CampoDuiRL").val()==''&&$("#CampoTelefonoRL").val()!=''){
			$.ajax({
    			data: $("#NuevoAspirante" ).serialize(),
    			type: "POST",
    			dataType: "json",
    			url: "../php/clase-referencias/agregarreferenciaslaborales.php",
				success: function(mensaje){
				if(mensaje==null){								
					var valor=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
					+"  "+$("#CampoTelefonoRL").val()+" "+$("#CampoOcupacionRL").val()+" Laborales";
					var centroescolar=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
					+" ------ "+$("#CampoTelefonoRL").val()+" ------ "+$("#CampoOcupacionRL").val();
				document.getElementById('ListaReferenciasLaborales').options.add(new Option(centroescolar,valor));
					$("#CampoNombreRL").val('');
					$("#CampoApellidoRL").val('');
					$("#CampoTelefonoRL").val('');
					$("#CampoTelefonoRL").mask("99999999",{placeholder:" "});
					$("#CampoOcupacionRL").val('');
				 }else{
					Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
			   	 }}
      	   });
		}
	if($("#CampoDuiRL").val()!=''&&$("#CampoTelefonoRL").val()!=''){
		$.ajax({
        	data: $("#NuevoAspirante" ).serialize(),
        	type: "POST",
        	dataType: "json",
        	url: "../php/clase-referencias/agregarreferenciaslaborales.php",
			success: function(mensaje){
			if(mensaje==null){								
				var valor=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()
				+" "+$("#CampoDuiRL").val()+" "+$("#CampoTelefonoRL").val()+" "+$("#CampoOcupacionRL").val()+" Laborales";
				var centroescolar=$("#CampoNombreRL").val()+" "+$("#CampoApellidoRL").val()+" ------ "+
				$("#CampoDuiRL").val()+" ------ "+$("#CampoTelefonoRL").val()+" ------ "+$("#CampoOcupacionRL").val();
				document.getElementById('ListaReferenciasLaborales').options.add(new Option(centroescolar,valor));
					$("#CampoNombreRL").val('');
					$("#CampoApellidoRL").val('');
					$("#CampoDuiRL").val('');
					$("#CampoDuiRL").mask("99999999-9",{placeholder:" "});
					$("#CampoTelefonoRL").val('');
					$("#CampoTelefonoRL").mask("99999999",{placeholder:" "});
					$("#CampoOcupacionRL").val('');		
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
$("#BotonReferenciaLaboral").click(function(){ 
	if($('#ListaReferenciasLaborales').val()!=null){
Sexy.confirm('<h1>Cuadro de eliminacion</h1><p>¿Desea eliminar la referencia seleccionada?</p><p>Pulse "Ok" para eliminar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
				$.ajax({
        			data: $("#NuevoAspirante" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-referencias/eliminarreferenciaslaborales.php",
					success: function(mensaje){
					if(mensaje==null){
						$("#ListaReferenciasLaborales option:selected").each(function(){  
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