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
        		url: "../php/clase-busquedas/busquedaporproceso.php",
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
		
			 
	