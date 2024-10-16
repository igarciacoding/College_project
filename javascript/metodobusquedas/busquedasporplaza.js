jQuery(function($){
	$("#button").click(function(){
		if($("#CampoDepartamento").val()==''&&$("#especialidadoprofesion").val()==''&&$("#universidadoinstitucion").val()==''){
			Sexy.info('<h1>Para realizar la busqueda escriba o seleccione unos de los campos</h1><p>Click en OK, para continuar.</p>');
			}
		else{
		$.ajax({
			data: $("#Calificar").serialize(),
        		type: "POST",
        		dataType: "json",
        		url: "../php/clase-busquedas/busquedaporplaza.php",
				success: function(mensaje){
					document.getElementById('listausuarios').options.length = 0;
					if(mensaje.length > 0){
					$.each(mensaje,function(i,item){
					document.getElementById('listausuarios').options.add(new Option
					(item.nombre+" "+item.apellido+" ------ "+item.id+" ------ "+item.nota,item.id));
							document.getElementById('CampoNumero').options.length = 0;
								
								for(var x=document.getElementById('listausuarios').length;x>0;x--){
									document.getElementById('CampoNumero').options.add(new Option(x));
									}
							});
					}
					else{
						document.getElementById('listausuarios').options.add(
					new Option("----------------------------- No se encontraron registros.. -----------------------------"));
						
					}
				}	
			});
		}
		});
	
	$("#PDF").click(function(){
		if($("#listausuarios option:selected").val()!=null){
			$("#CampoDui").val($("#listausuarios option:selected").val())
			document.Calificar.target = "new";
				document.Calificar.action = "../pdf/vercurriculum.php";
				document.Calificar.method = "POST";
				$("#Calificar").submit();			
			}else{
				Sexy.info('<h1>Seleccione un aspirante</h1><p>Click en OK, para continuar.</p>');
			}
		});	
	});
	
	$("#ListaPDF").click(function(){
		
  			for (i=0; ele = document.getElementById("listausuarios").options[i]; i++){
  				  ele.selected = true;
  			 }
			if($("#listausuarios option:selected").val()!=null){ 
				document.Calificar.target = "new";
				document.Calificar.action = "../pdf/listapdfproceso.php";
				document.Calificar.method = "POST";
				document.Calificar.submit();
  			for (i=0; ele = document.getElementById("listausuarios").options[i]; i++){
  				  ele.selected = false;
  			 }
		}
		else{
			Sexy.info('<h1>No hay aspirantes para generar la lista</h1><p>Click en OK, para continuar.</p>');
		}
	})
		$("#Final").click(function(){
		
  			for (i=0; ele = document.getElementById("listausuarios").options[i]; i++){
  				  ele.selected = true;
  			 }
			if($("#listausuarios option:selected").val()!=null){ 
			if($("#fechafinal").val()!=""){
			$("#plazas").removeAttr("disabled");
				document.Calificar.target = "new";
				document.Calificar.action = "../pdf/actafinal.php";
				document.Calificar.method = "POST";
				document.Calificar.submit();
				$.ajax({
        			data: $("#Calificar" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-agregarproceso/agregarproceso.php",
					error: function(){
						alert("das");
						},
					success: function(mensaje){
						
					}
      		   });
				$("#plazas").attr('disabled', true);
  			for (i=0; ele = document.getElementById("listausuarios").options[i]; i++){
  				  ele.selected = false;
  			 }
			}
			else{
		Sexy.info('<h1>Ingrese la fecha final para generar el acta final</h1><p>Click en OK, para continuar.</p>');
		}
		}
		else{
		Sexy.info('<h1>No hay aspirantes para generar la lista</h1><p>Click en OK, para continuar.</p>');
		}
	})
	$("#Inicial").click(function(){
		if(document.getElementById('listausuarios').options.length!=0){
			if($("#plazas").val()!=''&&$("#fechainicial").val!=''&&$("#lugar").val()!=''&&$("#nombre1").val()!=''&&$("#nombre2").val()!=''&&$("#nombre3").val()!=''&&$("#cargo1").val()!=''&&$("#cargo2").val()!=''&&$("#cargo3").val()!=''&&$("#evaluacion").val()!=''&&$("#entrevista").val()!=''&&$("#prueba").val()!=''&&$("#analisis").val()!=''){ 
				$("#plazas").removeAttr("disabled");
				document.Calificar.target = "new";
				document.Calificar.action = "../pdf/actainicial.php";
				document.Calificar.method = "POST";
				document.Calificar.submit();
				$("#evaluacion").unbind();
				$("#entrevista").unbind();
				$("#prueba").unbind();
				$("#analisis").unbind();
				$("#plazas").attr('disabled', true);
				$("#fechainicial").attr('readonly', true);
				$("#lugar").attr('readonly', true);
				$("#nombre1").attr('readonly', true);
				$("#nombre2").attr('readonly', true);
				$("#nombre3").attr('readonly', true);
				$("#cargo1").attr('readonly', true);
				$("#cargo2").attr('readonly', true);
				$("#cargo3").attr('readonly', true);
				$("#evaluacion").attr('readonly', true);
				$("#entrevista").attr('readonly', true);
				$("#prueba").attr('readonly', true);
				$("#analisis").attr('readonly', true);
				$("#Final").removeAttr("disabled");
			}
			else{
		Sexy.info('<h1>LLene los campos requeridos para llenar el acta inicial</h1><p>Click en OK, para continuar.</p>');
		}
		}
		else{
			Sexy.info('<h1>No hay aspirantes para generar la lista</h1><p>Click en OK, para continuar.</p>');
		}
	})	
		
		 $("#evaluacion").mask("99/99/9999",{placeholder:" "});	 
		 $("#entrevista").mask("99/99/9999",{placeholder:" "});	 
		  $("#prueba").mask("99/99/9999",{placeholder:" "});	 
		   $("#analisis").mask("99/99/9999",{placeholder:" "});	 
	