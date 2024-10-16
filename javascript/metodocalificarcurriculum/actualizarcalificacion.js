jQuery(function($){
		$.ajax({
			data: $("#Calificar").serialize(),
        		type: "POST",
        		dataType: "json",
        		url: "../php/clase-cargaraspirante/cargarcalificado.php",
				success: function(mensaje){
					document.getElementById('listausuarios').options.length = 0;
					if(mensaje.length > 0){
				
					$.each(mensaje,function(i,item){
					document.getElementById('listausuarios').options.add(new Option
					(item.nombre+" "+item.apellido+" ------ "+item.id+" ------ "+item.nota,item.id));
						});
					}
					else{
							document.getElementById('listausuarios').options.add(
							new Option("----------------------------- No se encontraron registros.. -----------------------------"));
						
						}
				}
					
			});
	$("#botoncalificar").click(function(e) {
		if($("#estudios").val()!=''&&$("#experiencias").val()!=''&&$("#referencias").val()!=''&&$("#inteligencia").val()!=''&&$("#personalidad").val()!=''&&$("#CampoCondicion").val()!=''&&$("#nota").val()!=''&&$("#escrita").val()!=''){
		if($("#listausuarios option:selected").val()!=null){
		  Sexy.confirm('<h1>¿Desea calificar el curriculum seleccionado?</h1><p>Pulse "Ok" para calificar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
			$.ajax({
        		data: $("#Calificar").serialize(),
        		type: "POST",
        		dataType: "json",
        		url: "../php/clase-agregarcalificacion/actualizarcalificacion.php",
				success: function(mensaje){
					if(mensaje==null){
						$("#estudios").val('');
						$("#experiencias").val('');
						$("#referencias").val('');
						$("#inteligencia").val('');
						$("#personalidad").val('');
						$("#CampoCondicion").val('');
						$("#nota").val('');
						$("#escrita").val('');
				Sexy.info('<h1>Sus datos se guardaron correctamente</h1><p>Click en OK, para continuar.</p>');
				$.ajax({
			data: $("#Calificar").serialize(),
        		type: "POST",
        		dataType: "json",
        		url: "../php/clase-cargaraspirante/cargarcalificado.php",
				success: function(mensaje){
					document.getElementById('listausuarios').options.length = 0;
					if(mensaje.length > 0){
				
					$.each(mensaje,function(i,item){
					document.getElementById('listausuarios').options.add(new Option
					(item.nombre+" "+item.apellido+" ------ "+item.id+" ------ "+item.nota,item.id));
						});
					}
					else{
							document.getElementById('listausuarios').options.add(
							new Option("----------------------------- No se encontraron registros.. -----------------------------"));
						
						}
				}
					
			});
							   }else{
								Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
							}}
      				   }); 
					}
            	}
          }); 			   	
			}else{
		Sexy.info('<h1>Seleccione un aspirante</h1><p>Click en OK, para continuar.</p>');
				}
			}else{
				Sexy.info('<h1>Ingrese las notas y la condicion</h1><p>Click en OK, para continuar.</p>');
			}
		});
		
		
	$("#pdf").click(function(e) {
		if($("#listausuarios option:selected").val()!=null){
			$("#Calificar").submit();			
			}else{
				Sexy.info('<h1>Seleccione un aspirante</h1><p>Click en OK, para continuar.</p>');
			}
		});	
	});
		 $("#listausuarios").change(function(e){
		$.ajax({
			data: $("#Calificar").serialize(),
        		type: "POST",
        		dataType: "json",
        		url: "../php/clase-mostrarnotas/mostrarnotas.php",
				success: function(mensaje){
					$.each(mensaje,function(i,item){
						$("#estudios").val(item.estudios);
						$("#experiencias").val(item.experiencia);
						$("#referencias").val(item.referencia);
						$("#inteligencia").val(item.inteligencia);
						$("#personalidad").val(item.personalidad);
						$("#CampoCondicion").val(item.condicion);
						$("#nota").val(item.nota);
						$("#escrita").val(item.escrita);
						});
					}
			});
			 
		})